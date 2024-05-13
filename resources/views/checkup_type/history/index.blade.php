<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Riwayat Jenis Pemeriksaan</h3>
                {{-- <p class="text-subtitle text-muted">Daftar dokter.</p> --}}
            </div>
            {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Setelan</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('checkup-type.index') }}">Jenis pemeriksaan</a></li>
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
                        <h4>Daftar jenis pemeriksa yang dihapus</h4>
                    </div>
                    <div class="col-6 col-lg-6">
                        <div class="d-flex justify-content-end pb-3">
                            <div class="btn-group d-gap gap-2">
                                <a href="{{ route('checkup-type.index') }}" class="btn btn-primary rounded-3 float-end mx-2">
                                    <i class="bi bi-caret-left-square"></i> Kembali
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

    @push('js')
    @include('checkup_type.history.script')
    @endpush

</x-app-layout>
