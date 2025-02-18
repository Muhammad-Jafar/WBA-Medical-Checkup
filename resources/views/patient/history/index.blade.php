<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Riwayat Pasien</h3>
            </div>
        </div>
    </x-slot>

    <div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6 col-lg-6">
                        <h4>Daftar nama pasien yang dihapus</h4>
                    </div>
                    <div class="col-6 col-lg-6">
                        <div class="d-flex justify-content-end pb-3">
                            <div class="btn-group d-gap gap-2">
                                <a href="{{ route('patient.index') }}" class="btn btn-primary rounded-3 float-end mx-2">
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
                            <th scope="col">TTL</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        @include('patient.history.script')
    @endpush

</x-app-layout>
