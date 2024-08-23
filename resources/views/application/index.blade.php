<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Permintaan</h3>
            </div>
        </div>
    </x-slot>

    @include('application.statistic')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 col-lg-6">
                    <h4>Daftar permintaan</h4>

                    <div class="btn-group dropdown me-1 mb-1">
                        <button class="btn btn-light-primary" id="selected-filter"><b>Tampilkan data</b></button>
                        <button type="button" class="btn btn-light-primary dropdown-toggle me-1"
                                data-bs-toggle="dropdown" aria-haspopup="true" data-reference="parent">
                            <span id="dropdownStatusText">Hari ini</span>
                        </button>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Berdasarkan:</h6>
                            <a class="dropdown-item active" id="today-tab">Hari ini</a>
                            <a class="dropdown-item" id="pending-tab">Status tertunda</a>
                            <a class="dropdown-item" id="rejected-tab">Status tertolak</a>
                            <a class="dropdown-item" id="all-tab">Semua data</a>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-lg-6">
                    <div class="d-flex justify-content-end pb-3">

                        <div class="btn-group d-gap gap-2">

                            {{-- <button type="button" class="btn btn-success rounded-3" data-bs-toggle="modal"
                                     data-bs-target="#exportApplication">
                                 <i class="bi bi-upload"></i>
                                 Ekspor data
                             </button>--}}

                            {{--<a href="#" class="btn btn-light-primary rounded-3" data-bs-toggle="modal"
                               data-bs-target="#seeAll">
                                <i class="bi bi-journals"></i>
                                Lihat semua permintaan
                            </a>--}}


                            @if ($repo['checkLimitApplicant'])
                                <button type="button" class="btn btn-primary rounded-3 warning-limit"
                                        id="showLimitApplicant">
                                    <i class="bi bi-file-earmark-plus"></i>
                                    Ajukan permintaan
                                </button>
                            @else
                                <button type="button" class="btn btn-primary rounded-3" data-bs-toggle="modal"
                                        data-bs-target="#createApplicantModal">
                                    <i class="bi bi-file-earmark-plus"></i>
                                    Ajukan permintaan
                                </button>
                            @endif

                            @hasrole('admin')
                            <a href="{{ route('application.index.history') }}"
                               class="btn btn-light-secondary rounded-3">
                                <span class="badge bg-danger">{{ $applicationTrashedCount }}</span>
                                Riwayat data permintaan
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
                        <th scope="col">Pasien</th>
                        <th scope="col">Keperluan</th>
                        <th scope="col">Jenis Pemeriksaan</th>
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
        @include('application.modal.create')
        @include('application.modal.edit')
        @include('application.modal.print-first-packet')
        @include('application.modal.print-second-packet')
        @include('application.modal.print-third-packet')
        @include('application.modal.print-four-packet')
    @endpush

    @push('js')
        @include('application.script')
    @endpush

</x-app-layout>
