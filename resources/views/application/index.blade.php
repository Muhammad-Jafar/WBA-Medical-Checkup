<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Permintaan</h3>
                {{-- <p class="text-subtitle text-muted">Daftar dokter.</p> --}}
            </div>
            {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Permintaan</a></li>
                    </ol>
                </nav>
            </div> --}}
        </div>
    </x-slot>

    @include('application.statistic')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 col-lg-6">
                    <ul class="nav nav-tabs" id="applicationTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#today" class="nav-link active" id="today-tab" data-bs-toggle="tab" role="tab"
                               aria-controls="today" aria-selected="true">
                                <h6> Hari ini</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#pending" class="nav-link" id="pending-tab" data-bs-toggle="tab" role="tab"
                               aria-controls="pending" aria-selected="false" tabindex="-1">
                                <h6>Tertunda</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#all" class="nav-link" id="all-tab" data-bs-toggle="tab" role="tab"
                               aria-controls="all" aria-selected="false" tabindex="-1">
                                <h6>Semua</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="today" role="tabpanel" aria-labelledby="today">
                            <h4 class="mt-4 my-2">Daftar permintaan hari ini</h4>
                        </div>
                        <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending">
                            <h4 class="mt-4 my-2">Daftar permintaan tertunda</h4>
                        </div>
                        <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all">
                            <h4 class="mt-4 my-2">Daftar semua permintaan</h4>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-lg-6">
                    <div class="d-flex justify-content-end pb-3">
                        {{-- {{ $applicant }}
                        {{ $preference }} --}}

                        <div class="btn-group d-gap gap-2">
                            <button type="button" class="btn btn-light-success" data-bs-toggle="modal"
                                    data-bs-target="#exportApplication">
                                <i class="bi bi-upload"></i>
                                Ekspor data
                            </button>
                            {{-- <a href="#" class="btn btn-light-success">
                                <i class="bi bi-download"></i>
                                Impor data
                            </a> --}}

                            @if ($repo['checkLimitApplicant'])
                                <button type="button" class="btn btn-light-primary warning-limit"
                                        id="showLimitApplicant">
                                    <i class="bi bi-file-earmark-plus"></i>
                                    Ajukan permintaan
                                </button>
                            @else
                                <button type="button" class="btn btn-light-primary" data-bs-toggle="modal"
                                        data-bs-target="#createApplicantModal">
                                    <i class="bi bi-file-earmark-plus"></i>
                                    Ajukan permintaan
                                </button>
                            @endif

                            @hasrole('admin')
                            <a href="{{ route('application.index.history') }}" class="btn btn-light-secondary">
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
                <table id="datatable" class="table table-hover table-sm w-100">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
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
        @include('application.model.create')
        @include('application.model.process')
        @include('application.model.edit')
        @include('application.model.export')
    @endpush

    @push('js')
        @include('application.script')
    @endpush

</x-app-layout>
