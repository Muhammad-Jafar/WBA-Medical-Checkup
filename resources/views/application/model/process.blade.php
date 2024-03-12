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
						<div class="col-md-12">
							<div class="mb-3">
								<label for="name">Nama pasien</label>
								<input type="hidden" name="patient_id" id="patient_id">
								<input type="text" class="form-control" name="patient" id="patient" readonly>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="purposes">Keperluan</label>
								<input type="text" class="form-control" name="purposes" id="purposes" readonly>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="doctor">Dokter pemeriksa</label>
								<input type="hidden" name="doctor_id" id="doctor_id">
								<input type="text" class="form-control" name="doctor" id="doctor" readonly>	
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
