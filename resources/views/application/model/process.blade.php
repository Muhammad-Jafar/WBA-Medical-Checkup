<div class="modal fade" id="processApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Proses permintaan SKBS</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="#" method="POST">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="patient_id" class="form-label">Nama pasien</label>
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

					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="purposes" class="form-label">Keperluan</label>
                                <input type="text" class="form-control @error('purposes') is-invalid @enderror" name="purposes" id="purposes"
									value="{{ old('purposes') }}" placeholder="Untuk keperluan apa?">

								@error('purposes')
								<div class="d-block invalid-feedback">
									{{ $message }}
								</div>
								@enderror
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
                                <label for="doctor_id" class="form-label">Dokter pemeriksa</label>
                                <select class="form-select select2 @error('doctor_id') is-invalid @enderror" name="doctor_id">
									@foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->id }}" {{ collect(old('doctor_id'))->contains($doctor->id) ? 'selected' : '' }}>
                                            {{ $doctor->nip }} - {{ $doctor->name }}
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

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
