{{-- @include('dashboard.charts.chart') --}}
		<div class="row">
			<div class="col-12 col-xl-12">
				<div class="card">
					<div class="card-header">
						<h4>5 transaksi terakhir</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-lg">
								<thead>
									<tr>
										<th>Daftar</th>
										<th>Kode transaksi</th>
										<th>Nama Siswa</th>
										<th>Jumlah Bayar</th>
										<th>Tanggal</th>
										<th>Catatan</th>
									</tr>
								</thead>
								<tbody>
									@forelse($latestCashTransactions as $latestCashTransaction)
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
									@endforelse
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
