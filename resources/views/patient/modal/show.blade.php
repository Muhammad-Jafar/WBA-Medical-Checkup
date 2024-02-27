<div class="modal fade" id="showPatientModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail data pasien</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label for="nik" class="form-label">NIK pasien</label>
							<input type="number" class="form-control" name="nik" id="nik" placeholder="Loading.." readonly>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label for="name" class="form-label">Nama Pasien</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Loading.." readonly>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label for="gender" class="form-label">Jenis kelamin</label>
							<input type="number" class="form-control" name="gender" id="gender" placeholder="Loading.." readonly>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<label for="nip" class="form-label">TTL</label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" name="born_place" id="born_place" placeholder="Loading..">
							<span class="input-group-text">,</span>
							<input type="date" class="form-control" name="born_date" id="born_date" placeholder="Loading..">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label for="address" class="form-label">Alamat</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="Loading.." readonly>
						</div>
						</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="mb-3">
							<label for="occupation" class="form-label">Pekerjaan</label>
							<input type="text" class="form-control" name="occupation" id="occupation" placeholder="Loading.." readonly>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
				</div>

			</div>
		</div>
	</div>
</div>
