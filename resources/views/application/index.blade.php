<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Permintaan</h3>
                {{-- <p class="text-subtitle text-muted">Daftar dokter.</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Permintaan</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    @include('application.statistic')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 col-lg-6">
                    <h4>Daftar permintaan hari ini</h4>
                </div>
                <div class="col-6 col-lg-6">
                    <div class="d-flex justify-content-end pb-3">
                        <div class="btn-group d-gap gap-2">
                            <a href="#" class="btn btn-light-info">
                                <i class="bi bi-file-earmark-pdf-fill"></i>
                                Export ke PDF
                            </a>
                            <a href="#" class="btn btn-light-success">
                                <i class="bi bi-file-earmark-excel-fill"></i>
                                Export ke Excel
                            </a>
                            <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#createApplicantModal">
                                <i class="bi bi-file-earmark-plus-fill"></i> Ajukan permintaan
                            </button>
                            
                            <a href="{{ route('application.index.history') }}" class="btn btn-light-secondary">
                                <span class="badge bg-danger">{{ $applicationTrashedCount }}</span> Riwayat data permintaan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-hover table-sm w-100">
                    <thead>
                        <tr>
                            <th scope=" col">#</th>
                            <th scope="col">Pasien</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Dokter Pemeriksa</th>
                            <th scope="col">Oleh</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    @push('modal')
    @include('application.model.process')
    @endpush

    @push('js')
    @include('application.script')
    @endpush

</x-app-layout>
