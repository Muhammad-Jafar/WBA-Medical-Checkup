<?php

namespace App\Http\Controllers\Print;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ApplicationController extends Controller
{
    public function print(string $id)
    {
        $applicant = Application::with(
            'users:id,name',
            'patients:id,name,born_date,born_place,gender,occupation,address',
            'doctors:id,name,nip',
            'checkup_type:id,abbreviated_word'
        )->findOrFail($id);

        $documentType = match ($applicant->checkup_type->id) {
            2 => 'application.printing.doc-paket-2',
            3 => 'application.printing.doc-paket-3',
            4 => 'application.printing.doc-paket-4',
            default => 'application.printing.doc-paket-1',
        };

        return PDF::loadView($documentType, compact('applicant'))
            ->stream();
    }
}
