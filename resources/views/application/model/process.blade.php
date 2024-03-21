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
									<textarea rows="2" type="text" class="form-control" id="purposes" style="resize: none;" readonly>	</textarea>
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

					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-3 col-3">
									<label class="col-form-label" for="doctor">Pemeriksaan</label>
								</div>
								<div class="col-lg-9 col-9">
									<input class="form-control 
									{{-- @error('checkup-type') is-invalid @enderror"  --}}
									name="checkup-type" readonly>
										{{-- @foreach ($checkupType as $type)
											<option value="{{ $type->id }}" {{ collect(old('checkup-type'))->contains($type->id) ? 'selected' : '' }}>
												{{ $type->abbreviated_word }}
											</option>
										@endforeach --}}
									
		
									{{-- @error('checkup-type')
									<div class="d-block invalid-feedback">
										{{ $message }}
									</div>
									@enderror --}}
								</div>
							</div>
						</div>
					</div>

					<div class="divider">
						<div class="divider-text">Pengukuran fisik badan (Opsional)</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="height_body">Tinggi Badan</label>
							<div class="input-group">
								<input type="text" class="form-control" name="height_body" id="height_body" aria-describedby="basic-addon2" readonly>
								<span class="input-group-text" id="basic-addon2">cm</span>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="mass_body">Berat Badan</label>
							<div class="input-group">
								<input type="text" class="form-control" name="mass_body" id="mass_body" aria-describedby="basic-addon2" readonly>
								<span class="input-group-text" id="basic-addon2">Kg</span>
							</div>
						</div>
					</div>

					<div class="divider">
						<div class="divider-text">Pengukuran vital badan (Opsional)</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="blod_type">Golongan darah</label>
							<input type="text" class="form-control" name="blod_type" id="blod_type" readonly>	
						</div>
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="blod_pressure">Tekanan darah</label>
							<div class="input-group">
								<input type="text" class="form-control" name="blod_pressure" id="blod_pressure" aria-describedby="basic-addon2" readonly>
								<span class="input-group-text" id="basic-addon2">MmHg</span>
							</div>
						</div>
					</div>

					<div class="divider">
						<div class="divider-text">Hasil Lab (Opsional)</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="colesterol">Kolesterol</label>
							<div class="input-group">
								<input type="text" class="form-control" name="colesterol" id="colesterol" aria-describedby="basic-addon2" readonly>
								<span class="input-group-text" id="basic-addon2">mg/dL</span>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label class="col-form-label" for="blod_sugar">Gula darah</label>
							<div class="input-group">
								<input type="text" class="form-control" name="blod_sugar" id="blod_sugar" aria-describedby="basic-addon2" readonly>
								<span class="input-group-text" id="basic-addon2">mg/dL</span>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Lanjutkan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
