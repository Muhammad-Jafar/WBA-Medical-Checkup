<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pasien</h3>
                {{-- <p class="text-subtitle text-muted">Daftar pasien</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Master data</a></li>
                        <li class="breadcrumb-item active">Pasien</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <div>
        <section>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <h4>Daftar nama pasien buat permintaan SKBS</h4>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="d-flex justify-content-end pb-3">
                                <div class="btn-group d-gap gap-2">
                                    <a href="#" class="btn btn-secondary">
                                        <i class="bi bi-file-earmark-pdf-fill"></i>
                                        Export PDF
                                    </a>
                                    <a href="#" class="btn btn-success">
                                        <i class="bi bi-file-earmark-excel-fill"></i>
                                        Export Excel
                                    </a>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPatientModal">
                                        <i class="bi bi-plus-circle"></i> Tambah Pasien
                                    </button>
                                    <a href="{{ route('patient.index.history') }}" class="btn btn-light-secondary">
                                        <span class="badge bg-danger">{{ $patientTrashedCount }}</span> Histori data pasien
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table w-100">
                            <thead>
                                <tr>
                                    <th scope=" col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">TTL</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </section>
    </div>

    @push('modal')
    @include('patient.modal.create')
    @include('patient.modal.show')
    @include('patient.modal.edit')
    @endpush

    @push('js')
    @include('patient.script')
    @endpush

</x-app-layout>
