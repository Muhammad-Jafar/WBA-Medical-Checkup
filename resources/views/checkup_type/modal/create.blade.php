<div class="modal fade" id="createCheckupTypeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah data jenis pemeriksaan</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('checkup-type.store') }}" method="POST">
					@csrf
					<div class="row">	
						<div class="col-md-12">
							<div class="mb-3">
								<label for="name" class="form-label">Nama Pemeriksaan</label>
								<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
									value="{{ old('name') }}" placeholder="Masukkan nama pemeriksaan">

								@error('name')
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
								<label for="abbreviated_word" class="form-label">Singkatan</label>
								<input type="text" class="form-control @error('abbreviated_word') is-invalid @enderror" name="abbreviated_word" id="abbreviated_word"
									value="{{ old('abbreviated_word') }}" placeholder="Masukkan singkatan">

								@error('abbreviated_word')
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
								<label for="description" class="form-label">Deskripsi</label>
								<input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description"
									value="{{ old('description') }}" placeholder="Masukkan deskripsi">

								@error('description')
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