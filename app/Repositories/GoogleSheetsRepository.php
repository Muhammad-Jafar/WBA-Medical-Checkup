<?php

namespace App\Repositories;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Google\Client;
use Google_Service_Sheets as Sheets;

class GoogleSheetsRepository extends Controller
{
    private string $range;
    private string $documentId;
    private Sheets $service;
    private Client $client;

    public function __construct()
    {
        $this->client = $this->setupClient();
        $this->service = new Sheets($this->client);
        $this->documentId = "17x_pbwNk2H-EZxhfO84ReOxwJmM5KO0v8brUBIkQEps";
        $this->range = 'A:O';
    }

    public function setupClient()
    {
        $client = new Client();
        $client->setApplicationName("Google Sheets");
        $client->setScopes(Sheets::SPREADSHEETS);
        $client->setAuthConfig(storage_path("app/medcheckup-credential.json"));
        $client->setAccessType('offline');

        return $client;
    }

    public function read()
    {
        return $this->service->spreadsheets_values
            ->get($this->documentId, $this->range)
            ->getValues();
    }

    public function filterNik(): bool
    {
        $indexNik = 3;
        $result = false;

        foreach ($this->read() as $sheet => $row) {

            if ($sheet == 0) {
                continue;
            }

            if (!isset($row[$indexNik])) {
                continue;
            }

            $check = Patient::select('name')
                ->where('nik', $row[$indexNik])
                ->first();

            $result = (bool)$check;
        }
        return $result;
    }
}
