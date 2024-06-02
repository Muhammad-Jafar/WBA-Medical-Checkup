<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Jenis pemeriksaan</h3>
            </div>
        </div>
    </x-slot>

    <div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6 col-lg-6">
                        <h4>Daftar jenis pemeriksaan</h4>
                    </div>
                    <div class="col-6 col-lg-6">
                        <div class="d-flex justify-content-end pb-3">
                            <div class="btn-group d-gap gap-2">
                                {{-- <div class="btn-group mb-1">
                                    <div class="dropdown dropdown-color-icon">
                                        <button class="btn btn-light-info dropdown-toggle me-1" type="button" id="dropdownExport" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-upload"></i>
                                            Ekspor data
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownExport">
                                            <div class="dropdown-item">
                                                <i class="bi bi-file-earmark-excel"></i>
                                                ke Excel (.xls)
                                            </div>
                                            <div class="dropdown-item">
                                                <i class="bi bi-file-earmark-pdf"></i>
                                                ke PDF (.pdf)
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <a href="#" class="btn btn-light-success">
                                    <i class="bi bi-download"></i>
                                    Impor data
                                </a> --}}
                                <button type="button" class="btn btn-primary rounded-3" data-bs-toggle="modal"
                                        data-bs-target="#createCheckupTypeModal">
                                    <i class="bi bi-person-plus"></i> Tambah pemeriksaan
                                </button>
                                <a href="{{ route('checkup-type.index.history') }}"
                                   class="btn btn-light-secondary rounded-3">
                                    <span class="badge bg-danger">{{ $checkupTypeTrashedCount }}</span> Riwayat jenis
                                    pemeriksaan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-hover w-100">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Singkatan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('modal')
        @include('checkup_type.modal.create')
        @include('checkup_type.modal.edit')
    @endpush

    @push('js')
        @include('checkup_type.script')
    @endpush

</x-app-layout>
