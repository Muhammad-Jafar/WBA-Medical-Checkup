<div class="modal fade" id="editPatientModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ubah data pasien</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
                @include('utilities.loading-alert')
				<form action="#" method="POST" id="edit-patient-form">
					@csrf @method('PUT')
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="nik" class="form-label">NIK pasien</label>
								<input type="number" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK pasien">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="name" class="form-label">Nama pasien</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama pasien">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label for="gender" class="form-label">Jenis kelamin</label>
								<select class="form-select" name="gender" id="gender">
									<option selected>Pilih jenis kelamin</option>
									<option value="1">Laki-laki</option>
									<option value="2">Perempuan</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
                            <div class="mb-3">
                                <label for="nip" class="form-label">TTL</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="born_place" id="born_place" placeholder="Tempat lahir">
                                    <span class="input-group-text">, </span>
                                    <input type="date" class="form-control" name="born_date" id="born_date" placeholder="Tanggal lahir">
                                </div>
                            </div>
						</div>
					</div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Alamat">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="occupation" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Pekerjaan">
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
