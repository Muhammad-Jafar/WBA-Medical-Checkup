<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan</h3>
            </div>
        </div>
    </x-slot>

    <div>
        <section>
            <div class="card">
                <div class="card-header">
                    <form action="" method="GET">
                        <label for="start_date" class="pb-3 fw-bold">Filter berdasarkan tanggal:</label>
                        <div class="input-group">
                            <input type="date" name="start_date" class="form-control" placeholder="Tanggal awal">
                            <input type="date" name="end_date" class="form-control" placeholder="Tanggal akhir">
                            <select class="form-control" name="status">
                                <option value="ALL">Semua</option>
                                <option value="PENDING">Menunggu</option>
                                <option value="APPROVED">Diterima</option>
                                <option value="REJECTED">Ditolak</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Lihat</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    @empty(!$reports)
                        <div class="row">
                            <div class="col-lg-12 px-3 py-3">
                                <a href="{{ route('application.export', [$reports['startDate'], $reports['endDate'], $reports['status']]) }}"
                                   class="btn btn-success float-end">
                                    <i class="bi bi-file-earmark-excel-fill"></i>
                                    Export Excel
                                </a>
                            </div>
                            <div class="table-responsive mt-3">
                            </div>
                            <table class="table table-hover w-100">
                                <caption>Laporan data dari tanggal
                                    <span class="fw-bold">{{ $reports['startDate'] }}</span> -
                                    <span class="fw-bold">{{ $reports['endDate'] }}</span>
                                </caption>

                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pasien</th>
                                    <th scope="col">Keperluan</th>
                                    <th scope="col">Dokter Pemeriksa</th>
                                    <th scope="col">Oleh</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($reports['applicant'] as $report)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $report->patients->name }}</td>
                                        <td>{{ $report->purposes }}</td>
                                        <td>{{ $report->doctors->name }}</td>
                                        <td>{{ $report->users->name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($report->requested_at)) }}</td>
                                        <td>{{ $report->status }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">
                                            <p class="fw-bold text-secondary text-center m-3">Tidak ada data!</p>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7" align="right"><b>Total</b></td>
                                    <td>{{ $reports['countApplicant'] }}</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    @endempty
                </div>
            </div>
        </section>
    </div>

    @push('js')
        @include('reports.script')
    @endpush

</x-app-layout>
