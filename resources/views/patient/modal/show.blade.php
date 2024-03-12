<div class="modal fade" id="showPatientModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail data pasien</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				@include('utilities.loading-alert')
				<div class="row">
					<div class="col-md-12 mb-3">
						<label for="nik" class="form-label">NIK pasien</label>
						<input type="number" class="form-control" id="nik" disabled>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mb-3">
						<label for="name" class="form-label">Nama Pasien</label>
						<input type="text" class="form-control" id="name" disabled>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 mb-3">
						<label for="gender" class="form-label">Jenis kelamin</label>
						<input type="text" class="form-control" id="gender" disabled>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 mb-3">
						<label for="ttl" class="form-label">TTL</label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="born_place" disabled>
							<span class="input-group-text">,</span>
							<input type="date" class="form-control" id="born_date" disabled>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 mb-3">
						<label for="address" class="form-label">Alamat</label>
						<input type="text" class="form-control" id="address" disabled>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 mb-3">
						<label for="occupation" class="form-label">Pekerjaan</label>
						<input type="text" class="form-control" id="occupation" disabled>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
				</div>

			</div>
		</div>
	</div>
</div>
