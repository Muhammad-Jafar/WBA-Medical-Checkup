<div class="modal fade" id="editApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit data permintaan SKBS</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				@include('utilities.loading-alert')

				<form action="#" method="POST" id="edit-applicant-form">
					@csrf @method('PUT')
					<div class="row">
						<div class="col-md-12 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-3 col-3">
									<label class="col-form-label" for="patient">Nama pasien</label>
								</div>
								<div class="col-lg-9 col-9">
									<select class="form-control choices" name="patient_id" id="patient_id">
										@foreach ($patients as $patient)
											<option value="{{ $patient->id }}"> {{ $patient->name }} </option>
										@endforeach
									</select>
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
									<textarea rows="2" type="text" class="form-control" name="purposes" id="purposes" 
									style="resize: none;" placeholder="Keperluan pasien"></textarea>
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
									<select class="form-select choices" name="doctor_id" id="doctor_id">
										@foreach ($doctors as $doctor)
											<option value="{{ $doctor->id }}"> {{ $doctor->name }} </option>
										@endforeach
									</select>
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
									<select class="form-select choices" name="check-type" id="check-type">
										@foreach ($checkupType as $ct)
											<option value="{{ $ct->id }}"> {{ $ct->name }} </option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="divider">
						<div class="divider-text">Pengukuran lainnya</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-5 col-4">
									<label class="col-form-label" for="height_body">Tinggi Badan</label>
								</div>
								<div class="col-lg-7 col-8">
									<div class="input-group">
										<input type="text" class="form-control" name="height_body" id="height_body" aria-describedby="basic-addon2" placeholder="Tinggi badan">
										<span class="input-group-text" id="basic-addon2">cm</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-5 col-4">
									<label class="col-form-label" for="mass_body">Berat Badan</label>
								</div>
								<div class="col-lg-7 col-8">
									<div class="input-group">
										<input type="text" class="form-control" name="mass_body" id="mass_body" aria-describedby="basic-addon2" placeholder="Berat badan">
										<span class="input-group-text" id="basic-addon2">Kg</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-5 col-4">
									<label class="col-form-label" for="blod_type">Golongan darah</label>
								</div>
								<div class="col-lg-7 col-8">
									<input type="text" class="form-control" name="blod_type" id="blod_type" placeholder="Golongan darah">	
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-5 col-4">
									<label class="col-form-label" for="blod_pressure">Tekanan darah</label>
								</div>
								<div class="col-lg-7 col-8">
									<div class="input-group">
										<input type="text" class="form-control" name="blod_pressure" id="blod_pressure" aria-describedby="basic-addon2" placeholder="Tekanan darah">
										<span class="input-group-text" id="basic-addon2">MmHg</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-5 col-4">
									<label class="col-form-label" for="colesterol">Kolesterol</label>
								</div>
								<div class="col-lg-7 col-8">
									<div class="input-group">
										<input type="text" class="form-control" name="colesterol" id="colesterol" aria-describedby="basic-addon2" placeholder="Kolesterol">
										<span class="input-group-text" id="basic-addon2">mg/dL</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group row align-item-center">
								<div class="col-lg-5 col-4">
									<label class="col-form-label" for="blod_sugar">Gula darah</label>
								</div>
								<div class="col-lg-7 col-8">
									<div class="input-group">
										<input type="text" class="form-control" name="blod_sugar" id="blod_sugar" aria-describedby="basic-addon2" placeholder="Gula darah">
										<span class="input-group-text" id="basic-addon2">mg/dL</span>
									</div>
								</div>
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
