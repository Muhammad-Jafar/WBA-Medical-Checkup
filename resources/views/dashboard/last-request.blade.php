<div class="card">
    <div class="card-header">
        <h4 class="card-title">10 permintaan terakhir</h4>
    </div>
    <div class="card-body">
        Nanti dibuatkan isinya, menyusul..

        <div class="table-responsive">
            <table class="table table-hover table-lg">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama pasien</th>
                        <th>Keperluan</th>
                        <th>Atas permintaan</th>
                        <th>Dokter pemeriksa</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse($latestCashTransactions as $latestCashTransaction)
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
                                    {{ $latestCashTransaction->transaction_code }}
                                </p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <div class="d-flex align-items-center">
                                <p class="font-bold ms-3 mb-0">
                                    {{ $latestCashTransaction->students->name }}
                                </p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">
                                {{ indonesianCurrency($latestCashTransaction->amount) }}
                            </p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">
                                {{ date('d M Y', strtotime($latestCashTransaction->paid_on)) }}
                            </p>
                        </td>
                            <td class="col-auto">
                            <p class=" mb-0">
                                {{ $latestCashTransaction->note }}
                            </p>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
                            <p class="fw-bold text-danger text-center text-uppercase">Data kosong!</p>
                        </td>
                    </tr>
                    @endforelse --}}


                    <tr>
                        <td class="col-auto">
                            <div class="d-flex align-items-center">
                                <p class="font-bold ms-3 mb-0">
                                   1
                                </p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <div class="d-flex align-items-center">
                                <p class="font-bold ms-3 mb-0">
                                    Jafar
                                </p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <div class="d-flex align-items-center">
                                <p class="font-bold ms-3 mb-0">
                                    Pendaftaran beasiswa S2
                                </p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">
                                Sendiri
                            </p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">
                                dr Amaluddin Akmal
                            </p>
                        </td>
                            <td class="col-auto">
                            <p class=" mb-0">
                                22 Feb 2024
                            </p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
