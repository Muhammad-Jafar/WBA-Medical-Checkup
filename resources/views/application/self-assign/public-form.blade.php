<x-guest-vertical-layout>

    <div>
        <div class="card mt-5">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title d-flex justify-content-center">Buat SKBS Sendiri ;)</h4>
                    <h6>Catatan:</h6>
                    <p class="card-text">
                        Sebelum mengajukan pembuatan SKBS (Surat Keterangan Berbadan Sehat),
                        Anda perlu mencari data berupa NIK anda.
                        Bila tidak ditemukan, silahkan lakukan pendaftaran.
                    </p>
                    <input class="form-control mb-3" type="search" name="findUser" id="findUser"
                           placeholder="Cari NIK anda">

                    <button type="button" class="btn btn-primary rounded-3 btn-block mb-3">
                        Carikan
                    </button>
                    <span class="d-flex justify-content-center text-gray-600 font-bold"> == ATAU == </span>

                    <button type="button" class="btn btn-light-primary rounded-3 btn-block mt-3">
                        Daftar baru
                    </button>

                    <div class="table-responsive mt-3">
                        <table class="table table-hover table-lg w-100">
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
                            {{--@forelse($getLatest as $latestApplication)
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
                                    <td colspan="6">
                                        <p class="fw-bold text-danger text-center text-uppercase">Data kosong!</p>
                                    </td>
                                </tr>
                            @endforelse--}}

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

</x-guest-vertical-layout>
