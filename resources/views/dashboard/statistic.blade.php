	<div class="col-12 col-lg-12">
		<div class="row mt-4">
			<div class="col-6 col-lg-3 col-md-6">
                <a href="{{ route('patient.index') }}">
					<div class="card card-stat">
						<div class="card-body px-3 py-4-5">
							<div class="row">
								<div class="col-md-4">
									<div class="stats-icon purple">
										<i class="iconly-boldProfile"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h6 class="text-muted font-semibold">Pasien</h6>
									<h5 class="font-extrabold {{ $patientCount <= 0 ? 'text-danger' : '' }} mb-0">
										{{ $patientCount }}
									</h5>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-3 col-md-6">
				<a href="{{ route('doctor.index') }}">
					<div class="card card-stat">
						<div class="card-body px-3 py-4-5">
							<div class="row">
								<div class="col-md-4">
									<div class="stats-icon blue">
										<i class="iconly-boldBookmark"></i>
									</div>
								</div>
								<div class="col-md-8">
									<h6 class="text-muted font-semibold">Dokter Pemeriksa</h6>
									<h5 class="font-extrabold {{ $doctorCount <= 0 ? 'text-danger' : '' }} mb-0">
										{{ $doctorCount }}
									</h5>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-6 col-lg-3 col-md-6">
				<div class="card card-stat">
					<div class="card-body px-3 py-4-5">
						<div class="row">
							<div class="col-md-4">
								<div class="stats-icon green">
									<i class="iconly-boldWork"></i>
								</div>
							</div>
							<div class="col-md-8">
								<h6 class="text-muted font-semibold">Total SKBS</h6>
								<h5 class="font-extrabold mb-0"> {{ $totalApplicantCount }} </h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-6 col-lg-3 col-md-6">
				<div class="card card-stat">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon red">
                                    <i class="iconly-boldTicket"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">SKBS 3 bulan terakhir</h6>
                                {{-- <h6 class="font-extrabold mb-0">{{ $amountThisMonth }}</h6> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <a href="{{ route('cash-transactions.index') }}">

				</a> --}}
			</div>
		</div>

	</div>
