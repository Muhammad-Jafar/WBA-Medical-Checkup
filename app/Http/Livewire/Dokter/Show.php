<?php

namespace App\Http\Livewire\Dokter;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\DataTables;

class Show extends Component
{
    public $doctors;

    public function show()
    {
        $response = Http::get(route('doctors'));
        $this->doctors = $response->toJson();
    }

    public function render()
    {
        return view('livewire.dokter.show', ['dataTable' => $this->configureDataTable()]);
    }

    private function configureDataTable()
    {
        return DataTables::of($this->doctors)
            ->addColumn('action', function ($doctors) {
                return '<button>Edit</button>'; // Example action button
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
