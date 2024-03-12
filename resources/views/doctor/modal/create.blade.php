<div class="modal fade" id="createDoctorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah data dokter</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('doctor.store') }}" method="POST">
					@csrf
					<div class="row">	
						<div class="col-md-12  mb-3">
							<label for="name" class="form-label">Nama dokter</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
								value="{{ old('name') }}" placeholder="Masukkan nama dokter..">

							@error('name')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-12  mb-3">
							<label for="sip" class="form-label">SIP dokter</label>
							<input type="number" class="form-control @error('sip') is-invalid @enderror" name="sip" id="sip"
								value="{{ old('sip') }}" placeholder="Masukkan nomor SIP">

							@error('sip')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="nip" class="form-label">NIP dokter</label>
							<input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" id="nip"
								value="{{ old('nip') }}" placeholder="Masukkan nomor NIP">

							@error('nip')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
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