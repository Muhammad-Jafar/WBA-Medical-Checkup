<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dokter</h3>
                {{-- <p class="text-subtitle text-muted">Daftar dokter.</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Master data</a></li>
                        <li class="breadcrumb-item active">Dokter</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6 col-lg-6">
                        <h4>Daftar nama dokter pemeriksa</h4>
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                                    <i class="bi bi-plus-circle"></i> Tambah Dokter
                                </button>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm w-100" id="datatable">
                        <thead>
                            <tr>
                                <th scope=" col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIP</th>
                                <th scope="col">SIP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

@include('doctor.script')
