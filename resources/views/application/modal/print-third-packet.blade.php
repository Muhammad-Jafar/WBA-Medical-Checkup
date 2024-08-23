<div class="modal fade" id="printThirdApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Cetak permintaan SKBS daring - Paket 3</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                @include('utilities.loading-alert')

                <form action="#" method="POST" id="third-print-applicant-form">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row align-item-center">
                                <div class="col-lg-3 col-3">
                                    <label for="patient" class="form-label">Nama pasien</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <input type="hidden" class="form-control" name="patient_id" id="patient_id">
                                    <input type="text" class="form-control" name="patient_name" id="patient_name"
                                           readonly>
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
										<textarea rows="2" type="text" class="form-control" name="purposes"
                                                  id="purposes" style="resize: none;" readonly>
                                        </textarea>
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
                                    <input type="hidden" id="doctor_id">
                                    <input class="form-control" id="doctor_name" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group row align-item-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="checkuptype">Jenis Pemeriksaan</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <input type="hidden" id="checkuptype_id">
                                    <input class="form-control" id="checkuptype_name" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider">
                        <div class="divider-text"><b>Pemeriksaan Paket 2</b></div>
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

                    <div class="divider">
                        <div class="divider-text"><b>Pemeriksaan Paket 3</b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="blod_pressure">Tekanan darah</label>
                            <div class="input-group">
                                <input class="form-control @error('blod_pressure') is-invalid @enderror"
                                       type="text" name="blod_pressure" value="{{ old('blod_pressure') }}"
                                       placeholder="tekanan darah pasien" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">MmHg</span>

                                @error('blod_pressure')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="colesterol">Kolesterol</label>
                            <div class="input-group">
                                <input class="form-control @error('colesterol') is-invalid @enderror" name="colesterol"
                                       value="{{ old('colesterol') }}" placeholder="kolesterol pasien" type="text"
                                       aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">mg/dL</span>

                                @error('colesterol')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="blod_sugar">Gula darah</label>
                            <div class="input-group">
                                <input class="form-control @error('blod_sugar') is-invalid @enderror" name="blod_sugar"
                                       value="{{ old('blod_sugar') }}" placeholder="gula darah pasien" type="text"
                                       aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">mg/dL</span>

                                @error('blod_sugar')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success"> <i class="bi bi-printer"></i> Cetak</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
