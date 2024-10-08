<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dokter</h3>
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
                                <a href="{{ route('doctor.export') }}" class="btn btn-success rounded-3">
                                    <i class="bi bi-upload"></i>
                                    Ekspor data
                                </a>
                                {{-- <a href="#" class="btn btn-light-success">
                                    <i class="bi bi-download"></i>
                                    Impor data
                                </a> --}}
                                <button type="button" class="btn btn-primary rounded-3" data-bs-toggle="modal"
                                        data-bs-target="#createDoctorModal">
                                    <i class="bi bi-person-plus"></i> Tambah dokter
                                </button>

                                @hasrole('admin')
                                <a href="{{ route('doctor.index.history') }}"
                                   class="btn btn-light-secondary rounded-3">
                                    <span class="badge bg-danger">{{ $doctorTrashedCount }}</span> Riwayat data dokter
                                </a>
                                @endrole
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
                            <th scope="col">NIP</th>
                            <th scope="col">SIP</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('modal')
        @include('doctor.modal.create')
        @include('doctor.modal.edit')
    @endpush

    @push('js')
        @include('doctor.script')
    @endpush

</x-app-layout>
