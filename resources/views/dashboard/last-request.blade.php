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
                                {{ $loop->iteration }}
                            </td>
                            <td class="col-auto">
                                {{ $latestApplication->patients->name }}
                            </td>
                            <td class="col-auto">
                                {{ $latestApplication->purposes }}
                            </td>
                            <td class="col-auto">
                                dr. {{ $latestApplication->doctors->name }}
                            </td>
                            <td class="col-auto">
                                {{ date('d M Y - H:m T ', strtotime($latestApplication->created_at)) }}
                            </td>
                            <td class="col-auto">
                                {{ $latestApplication->users->name }}
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
