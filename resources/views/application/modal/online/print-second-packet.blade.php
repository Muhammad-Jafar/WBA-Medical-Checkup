<div class="modal fade" id="printSecondApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Cetak permintaan SKBS daring - Paket 2</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                @include('utilities.loading-alert')

                <form action="#" method="POST" id="print-applicant-form">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row align-item-center">
                                <div class="col-lg-3 col-3">
                                    <label for="patient_name" class="form-label">Nama pasien</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <input type="text" class="form-control" id="patient_name" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row align-item-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="doctor">Jenis Pemeriksaan</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <input type="text" class="form-control" id="checkuptype_id" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row align-item-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="purposes">Keperluan</label>
                                </div>
                                <div class="col-lg-9 col-9">
									<textarea class="form-control @error('purposes') is-invalid @enderror"
                                              name="purposes" id="purposes"
                                              rows="2" placeholder="Untuk keperluan apa?"
                                              style="resize: none;">{{ old('purposes') }}</textarea>

                                    @error('purposes')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row align-item-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="doctor">Dokter pemeriksa</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <select class="form-select choices" name="doctor_id" id="doctor_id">
                                        @foreach ($doctors as $doctor)
                                            <option
                                                value="{{ $doctor->id }}" {{ collect(old('doctor_id'))->contains($doctor->id) ? 'selected' : '' }}>
                                                {{ $doctor->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('doctor_id')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider">
                        <div class="divider-text"> <b>Pemeriksaan Paket 2</b> </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="height_body">Tinggi Badan</label>
                            <div class="input-group">
                                <input class="form-control @error('height_body') is-invalid @enderror"
                                       name="height_body"
                                       value="{{ old('height_body') }}" placeholder="Tinggi badan pasien" type="text"
                                       aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">cm</span>

                                @error('height_body')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="mass_body">Berat Badan</label>
                            <div class="input-group">
                                <input class="form-control @error('mass_body') is-invalid @enderror" name="mass_body"
                                       value="{{ old('mass_body') }}" placeholder="Berat badan pasien" type="text"
                                       aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Kg</span>

                                @error('mass_body')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan & Ajukan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
