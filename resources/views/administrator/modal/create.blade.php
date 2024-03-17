<div class="modal fade" id="createAdministratorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah admin</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('administrator.store') }}" method="POST">
					@csrf
					<div class="row">	
						<div class="col-md-12 mb-3">
							<label for="name" class="form-label">Nama</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
								value="{{ old('name') }}" placeholder="Masukkan nama calon admin">

							@error('name')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="email" class="form-label">email</label>
							<input type="text" class="form-control @error('abbreviated_word') is-invalid @enderror" name="email" id="email"
								value="{{ old('email') }}" placeholder="Masukkan email">

							@error('email')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
                            <label for="password" class="form-label">Kata sandi</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                id="password" placeholder="Masukkan password">

                            @error('password')
                            <div class="d-block invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
                            <label for="password_confirmation" class="form-label">Ulangi kata sandi</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="password_confirmation" placeholder="Masukkan ulangi password">

                            @error('password_confirmation')
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