<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Administrator</h3>
                {{-- <p class="text-subtitle text-muted">Daftar dokter.</p> --}}
            </div>
            {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Setelan</li>
                        <li class="breadcrumb-item active"><a href="{{ route('administrator.index') }}">Administrator</a></li>
                    </ol>
                </nav>
            </div> --}}
        </div>
    </x-slot>

    <div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6 col-lg-6">
                        <h4>Daftar administrator</h4>
                    </div>
                    <div class="col-6 col-lg-6">
                        <div class="d-flex justify-content-end pb-3">
                            <div class="btn-group d-gap gap-2">
                                <button type="button" class="btn btn-light-primary rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#createAdministratorModal">
                                    <i class="bi bi-person-plus"></i> Tambah admin
                                </button>

                                @hasrole('admin')
                                <a href="{{ route('administrator.index.history') }}" class="btn btn-light-secondary rounded-pill">
                                    <span class="badge bg-danger">{{ $adminTrashed }}</span>
                                    Riwayat data admin
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
                            <th scope="col">Email</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Bergabung pada</th>
                            <th scope="col">Terlihat</th>
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
        @include('administrator.modal.create')
        @include('administrator.modal.edit')
    @endpush

    @push('js')
        @include('administrator.script')
    @endpush

</x-app-layout>
