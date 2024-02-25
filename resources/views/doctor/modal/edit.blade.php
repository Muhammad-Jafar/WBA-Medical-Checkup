<div class="modal fade" id="editDoctorModal" data-bs-backdrop="static" data-bs-keyboard="false"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ubah data dokter</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				@include('utilities.loading-alert')
				<form action="#" method="post" id="edit-form-doctor">
					@csrf @method('PUT')
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="name" class="form-label">Nama dokter</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama lengkap..">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="sip" class="form-label">SIP dokter</label>
								<input type="number" class="form-control" name="sip" id="sip" placeholder="Masukkan nomor SIP">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="nip" class="form-label">NIP dokter</label>
								<input type="number" class="form-control" name="nip" id="nip" placeholder="Masukkan nomor NIP">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-success">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>