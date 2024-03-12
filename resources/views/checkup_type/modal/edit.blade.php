<div class="modal fade" id="editCheckupTypeModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ubah data jenis pemeriksaan</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				@include('utilities.loading-alert')
				<form action="#" method="post" id="edit-checkup-type-form">
					@csrf @method('PUT')
					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="name" class="form-label">Nama Pemeriksaan</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama pemeriksaan">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="abbreviated_word" class="form-label">Singkatan</label>
							<input type="text" class="form-control" name="abbreviated_word" id="abbreviated_word" placeholder="Masukkan singkatan">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="description" class="form-label">Deskripsi</label>
							<input type="text" class="form-control" name="description" id="description" placeholder="Masukkan deskripsi">
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