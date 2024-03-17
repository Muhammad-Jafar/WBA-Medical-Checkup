<div class="modal fade" id="createApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Buat permintaan SKBS</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('applicant.store') }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-3 col-3">
									<label for="patient_id" class="form-label">Nama pasien</label>
								</div>
								<div class="col-lg-9 col-9">
									<select class="form-select select2 @error('patient_id') is-invalid @enderror" name="patient_id">
										@foreach ($patients as $patient)
											<option value="{{ $patient->id }}" {{ old('patient_id') == $patient->id ? 'selected' : '' }}>
												{{ $patient->nik }} - {{ $patient->name }}
											</option>
										@endforeach
									</select>
		
									@error('patient_id')
									<div class="d-block invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-3 col-3">
									<label class="col-form-label" for="purposes">Keperluan</label>
								</div>
								<div class="col-lg-9 col-9">
									<input class="form-control @error('purposes') is-invalid @enderror" name="purposes" id="purposes"
										value="{{ old('purposes') }}" placeholder="Untuk keperluan apa?">
		
									@error('purposes')
									<div class="d-block invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-3 col-3">
									<label class="col-form-label" for="doctor">Dokter pemeriksa</label>
								</div>
								<div class="col-lg-9 col-9">
									<select class="form-select @error('doctor_id') is-invalid @enderror" name="doctor_id">
										@foreach ($doctors as $doctor)
											<option value="{{ $doctor->id }}" {{ collect(old('doctor_id'))->contains($doctor->id) ? 'selected' : '' }}>
												{{ $doctor->name }}
											</option>
										@endforeach
									</select>
		
									@error('doctor_id')
									<div class="d-block invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
						</div>
					</div>

					{{-- <div class="divider divider-left">
						<div class="divider-text">Jenis pemeriksaan</div>
					</div> --}}
					
					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-3 col-3">
									<label class="col-form-label" for="doctor">Pemeriksaan</label>
								</div>
								<div class="col-lg-9 col-9">
									<select class="form-select @error('checkup-type') is-invalid @enderror" name="checkup-type">
										@foreach ($checkupType as $type)
											<option value="{{ $type->id }}" {{ collect(old('checkup-type'))->contains($type->id) ? 'selected' : '' }}>
												{{ $type->abbreviated_word }}
											</option>
										@endforeach
									</select>
		
									@error('checkup-type')
									<div class="d-block invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
						</div>
					</div>

					<div class="divider">
						<div class="divider-text">Pengukuran fisik badan (Opsional)</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="height_body">Tinggi Badan (cm)</label>
							<input class="form-control @error('height_body') is-invalid @enderror" name="height_body"
								value="{{ old('height_body') }}" placeholder="Tinggi badan pasien" type="number">

							@error('height_body')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="mass_body">Berat Badan (Kg)</label>
							<input class="form-control @error('mass_body') is-invalid @enderror" name="mass_body"
								value="{{ old('mass_body') }}" placeholder="Berat badan pasien" type="number">

							@error('mass_body')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="divider">
						<div class="divider-text">Pengukuran vital badan (Opsional)</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="blod_type">Golongan darah</label>
							<select class="form-select @error('blod_type') is-invalid @enderror" name="blod_type"
								value="{{ old('blod_type') }}" placeholder="goldar pasien">
								<option selected>-- Pilih --</option>
								<option value="A" {{ old('gender')==='A' ? 'selected' : '' }}>Darah A</option>
								<option value="B" {{ old('gender')==='B' ? 'selected' : '' }}>Darah B</option>
								<option value="AB" {{ old('gender')==='AB' ? 'selected' : '' }}>Darah AB</option>
								<option value="O" {{ old('gender')==='O' ? 'selected' : '' }}>Darah O</option>
							</select>

							@error('blod_type')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="blod_pressure">Tekanan darah</label>
							<input class="form-control @error('blod_pressure') is-invalid @enderror" name="blod_pressure"
								value="{{ old('blod_pressure') }}" placeholder="tekanan darah pasien" type="text">

							@error('blod_pressure')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="divider">
						<div class="divider-text">Hasil Lab (Opsional)</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="colesterol">Kolesterol</label>
							<input class="form-control @error('colesterol') is-invalid @enderror" name="colesterol"
							value="{{ old('colesterol') }}" placeholder="tekanan darah pasien" type="text">

							@error('colesterol')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="blod_pressure">Tekanan darah</label>
							<input class="form-control @error('blod_pressure') is-invalid @enderror" name="blod_pressure"
								value="{{ old('blod_pressure') }}" placeholder="tekanan darah pasien" type="text">

							@error('blod_pressure')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="blod_type">Golongan darah</label>
							<select class="form-select @error('blod_type') is-invalid @enderror" name="blod_type"
								value="{{ old('blod_type') }}" placeholder="goldar pasien">
								<option selected>-- Pilih --</option>
								<option value="A" {{ old('blod_type')==='A' ? 'selected' : '' }}>Darah A</option>
								<option value="B" {{ old('blod_type')==='B' ? 'selected' : '' }}>Darah B</option>
								<option value="AB" {{ old('blod_type')==='AB' ? 'selected' : '' }}>Darah AB</option>
								<option value="O" {{ old('blod_type')==='O' ? 'selected' : '' }}>Darah O</option>
							</select>

							@error('blod_type')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="blod_pressure">Tekanan darah</label>
							<input class="form-control @error('blod_pressure') is-invalid @enderror" name="blod_pressure"
								value="{{ old('blod_pressure') }}" placeholder="tekanan darah pasien" type="text">

							@error('blod_pressure')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Ajukan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
