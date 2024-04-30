<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Riwayat Dokter</h3>
                {{-- <p class="text-subtitle text-muted">Daftar dokter.</p> --}}
            </div>
            {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Master data</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('doctor.index') }}">Dokter</a></li>
                        <li class="breadcrumb-item active">Riwayat</li>
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
                        <h4>Daftar nama dokter pemeriksa yang dihapus</h4>
                    </div>
                    <div class="col-6 col-lg-6">
                        <div class="d-flex justify-content-end pb-3">
                            <div class="btn-group d-gap gap-2">
                                <a href="{{ route('doctor.index') }}" class="btn btn-primary float-end mx-2">
                                    <i class="bi bi-caret-left-square"></i> Kembali
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
                                <th scope="col">NIP</th>
                                <th scope="col">SIP</th>
                                <th scope="col">Verifikasi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('js')
    @include('doctor.history.script')
    @endpush

</x-app-layout>