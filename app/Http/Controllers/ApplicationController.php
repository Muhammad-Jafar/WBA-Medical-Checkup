<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use App\Models\CheckupType;
use App\Models\Doctor;
use App\Models\Patient;
use App\Repositories\ApplicationRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ApplicationController extends Controller
{
    private ApplicationRepository $applicationRepository;

    public function __construct(ApplicationRepository $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View|JsonResponse
     */
    public function index()
    {
        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
            ->select('id', 'user_id', 'patient_id', 'doctor_id', 'purposes', 'status')
            ->whereDate('created_at', now()->toDateString())
            ->latest()
            ->get();

        $patient = Patient::select('id', 'nik', 'name')->get();
        $doctor = Doctor::select('id', 'nip', 'name')->get();
        $applicationTrashedCount = Application::onlyTrashed()->count();
        $checkupType = CheckupType::select('id', 'name', 'abbreviated_word')->get();

        if (request()->ajax()) {
            return datatables()->of($application)
                ->addIndexColumn()
                ->addColumn('patient', fn($model) => $model->patients->name)
                ->addColumn('doctor', fn($model) => $model->doctors->name)
                ->addColumn('admin', fn($model) => $model->users->name)
                ->addColumn('status', 'application.datatable.status')
                ->addColumn('action', 'application.datatable.action')
                ->rawColumns(['status', 'action'])
                ->toJson();
        }

        return view('application.index', [
            'patients' => $patient,
            'doctors' => $doctor,
            'applicationTrashedCount' => $applicationTrashedCount,
            'checkupType' => $checkupType,
            'repo' => $this->applicationRepository->results(),
        ]);
    }

    public function tab($tab): JsonResponse
    {
        $application = Application::with('users:id,name', 'patients:id,name', 'doctors:id,name')
            ->select('id', 'user_id', 'patient_id', 'doctor_id', 'purposes', 'status')
            ->latest();

        if ($tab == 'today') {
            $application->whereDate('created_at', now()->toDateString())
                ->orderBy('status', 'ASC')
                ->get();
        } elseif ($tab === 'pending') {
            $application->where('status', 'pending')->get();
        } else {
            $application->get();
        }

        if (request()->ajax()) {
            return datatables()->of($application)
                ->addIndexColumn()
                ->addColumn('patient', fn($model) => $model->patients->name)
                ->addColumn('doctor', fn($model) => $model->doctors->name)
                ->addColumn('admin', fn($model) => $model->users->name)
                ->addColumn('status', 'application.datatable.status')
                ->addColumn('action', 'application.datatable.action')
                ->rawColumns(['status', 'action'])
                ->toJson();
        }

        return response()->json($application);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ApplicationRequest $request
     * @return RedirectResponse
     */
    public function store(ApplicationRequest $request): RedirectResponse
    {
        Application::create([
            'user_id' => Auth::id(),
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'purposes' => $request->purposes,
            'requested_at' => now(),
            'height_body' => $request->height_body,
            'mass_body' => $request->mass_body,
            'blod_type' => $request->blod_type,
            'blod_pressure' => $request->blod_pressure,
            'colesterol' => $request->colesterol,
            'blod_sugar' => $request->blod_sugar
        ]);

        return redirect()->route('application.index')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ApplicationRequest $request
     * @param Application $application
     * @return RedirectResponse
     */
    public function update(ApplicationRequest $request, Application $application): RedirectResponse
    {
        $application->update($request->validated());
        return redirect()->route('application.index')
            ->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Application $application
     * @return RedirectResponse
     */
    public function destroy(Application $application): RedirectResponse
    {
        $application->delete();
        return redirect()->route('application.index')
            ->with('success', 'Data berhasil dihapus!');
    }

    /**
     * Update specified field from table.
     *
     * @param string $id
     * @return RedirectResponse
     */
    public function cancel(string $id): RedirectResponse
    {
        Application::findOrFail($id)
            ->update([
                'status' => 'REJECTED',
                'rejected_at' => now(),
            ]);
        return redirect()->route('application.index')
            ->with('success', 'Permintaan berhasil dibatalkan!');
    }

    /**
     * Update specified field from table.
     *
     * @param string $id
     * @return RedirectResponse
     */
    public function undo(string $id): RedirectResponse
    {
        Application::findOrFail($id)
            ->update([
                'status' => 'PENDING',
                'rejected_at' => null
            ]);
        return redirect()->route('application.index')
            ->with('success', 'Permintaan berhasil dikembalikan!');
    }

    /**
     * Update specified field from table.
     *
     * @param string $id
     * @return RedirectResponse
     */
    public function approve(string $id): RedirectResponse
    {
        Application::findOrFail($id)
            ->update([
                'status' => 'APPROVED',
                'approved_at' => now()
            ]);
        return redirect()->route('application.index')
            ->with('success', 'Permintaan berhasil disetujui dan dicetak!');
    }
}
