<div class="modal fade" id="processApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Memproses permintaan SKBS</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				@include('utilities.loading-alert')
				<form action="#" method="POST" id="process-applicant-form">
					@csrf @method('PUT')
					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-3 col-3">
									<label class="col-form-label" for="patient">Nama pasien</label>
								</div>
								<div class="col-lg-9 col-9">
									<input type="hidden" name="patient_id" id="patient_id">
									<input type="text" class="form-control" id="patient" readonly>	
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
									<input type="text" class="form-control" id="purposes" readonly>	
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
									<input type="hidden" name="doctor_id" id="doctor_id">
									<input type="text" class="form-control" id="doctor" readonly>	
								</div>
							</div>
						</div>
					</div>

					<hr>
					
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

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Simpan & Cetak</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
