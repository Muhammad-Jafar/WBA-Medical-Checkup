<?php

namespace App\Http\Controllers\Print;

use App\Models\Application;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class ApplicationController extends Controller
{
    public function generate($id = null)
    {
        $applicant = Application::with(
            'users:id,name',
            'patients:id,name,born_date,born_place,gender,occupation,address',
            'doctors:id,name,nip'
        )->findOrFail($id);

        return PDF::loadView('application.printing.print-document', compact('applicant'))
            ->stream();
    }
}
