<div class="card">
    <div class="card-header">
        <h4 class="card-title">5 permintaan terakhir</h4>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover table-lg">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama pasien</th>
                        <th>Keperluan</th>
                        <th>Dokter pemeriksa</th>
                        <th>Tanggal</th>
                        <th>Oleh</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($getLatest as $latestApplication)
                        <tr>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-0">
                                        {{ $loop->iteration }}
                                    </p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-0">
                                        {{ $latestApplication->patients }}
                                    </p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-0">
                                        {{ $latestApplication->purposes }}
                                    </p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-0">
                                        {{ $latestApplication->doctors }}
                                    </p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-0">
                                        {{ $latestApplication->created_at }}
                                    </p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
                                    <p class="font-bold ms-3 mb-0">
                                        {{ $latestApplication->users }}
                                    </p>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <p class="fw-bold text-danger text-center text-uppercase">Data kosong!</p>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
