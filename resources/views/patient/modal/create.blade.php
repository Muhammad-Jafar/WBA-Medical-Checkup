<div class="modal fade" id="createPatientModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah data pasien</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('patient.store') }}" method="POST">
					@csrf
                    <div class="row">
						<div class="col-md-12 mb-3">
							<label for="nik" class="form-label">NIK pasien</label>
							<input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik"
								value="{{ old('nik') }}" placeholder="Masukkan NIK pasien">

							@error('nik')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="name" class="form-label">Nama pasien</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
								value="{{ old('name') }}" placeholder="Masukkan nama pasien">

							@error('name')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="gender" class="form-label">Jenis kelamin</label>
							<select class="form-select @error('gender') is-invalid @enderror" name="gender" id="gender">
								<option selected>Pilih Jenis Kelamin</option>
								<option value="1" {{ old('gender')==='1' ? 'selected' : '' }}>Laki-laki</option>
								<option value="2" {{ old('gender')==='2' ? 'selected' : '' }}>Perempuan</option>
							</select>

							@error('gender')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="born_place" class="form-label">TTL</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control @error('born_place') is-invalid @enderror" name="born_place" id="born_place"
									value="{{ old('born_place') }}" placeholder="Tempat lahir">
								<span class="input-group-text">,</span>
								<input type="date" class="form-control @error('born_date') is-invalid @enderror" name="born_date" id="born_date"
									value="{{ old('born_date') }}" placeholder="Tanggal lahir">
							</div>
						</div>
					</div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
							<label for="address" class="form-label">Alamat</label>
							<input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address"
							value="{{ old('address') }}" placeholder="Alamat">

							@error('address')
							<div class="d-block invalid-feedback">
								{{ $message }}
							</div>
							@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
							<label for="occupation" class="form-label">Pekerjaan</label>
							<input type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" id="occupation"
							value="{{ old('occupation') }}" placeholder="Pekerjaan">

							@error('occupation')
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
