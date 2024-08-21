<div class="modal fade" id="printApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Cetak permintaan SKBS</h5>
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

                    <div class="form-group" id="paket-2">
                        <div class="divider">
                            <div class="divider-text"><b>Pemeriksaan Paket 2</b></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="col-form-label" for="height_body">Tinggi Badan</label>
                                <div class="input-group">
                                    <input class="form-control @error('height_body') is-invalid @enderror"
                                           name="height_body" value="{{ old('height_body') }}"
                                           placeholder="Tinggi badan pasien" type="text"
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
                                    <input class="form-control @error('mass_body') is-invalid @enderror"
                                           name="mass_body" value="{{ old('mass_body') }}"
                                           placeholder="Berat badan pasien" type="text"
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
                    </div>

                    <div class="form-group" id="paket-3">
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
                                    <input class="form-control @error('colesterol') is-invalid @enderror"
                                           name="colesterol" value="{{ old('colesterol') }}"
                                           placeholder="kolesterol pasien" type="text"
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
                                    <input class="form-control @error('blod_sugar') is-invalid @enderror"
                                           name="blod_sugar" value="{{ old('blod_sugar') }}"
                                           placeholder="gula darah pasien" type="text"
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
                    </div>

                    <div class="form-group" id="paket-4">
                        <div class="divider">
                            <div class="divider-text"><b>Pemeriksaan Paket 4</b></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="col-form-label" for="amphetamine">Amphetamine</label>
                                <div class="input-group">
                                    <input class="form-control @error('amphetamine') is-invalid @enderror"
                                           type="text" name="amphetamine" value="{{ old('height_body') }}"
                                           placeholder="Amphetamine" aria-describedby="basic-addon2">

                                    @error('amphetamine')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="col-form-label" for="methamphetamine">
                                    Methamphetamine (Includes Ecstasy)
                                </label>
                                <div class="input-group">
                                    <input class="form-control @error('methamphetamine') is-invalid @enderror"
                                           name="methamphetamine" value="{{ old('methamphetamine') }}"
                                           placeholder="Methamphetamine" type="text" aria-describedby="basic-addon2">

                                    @error('methamphetamine')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="col-form-label" for="benzodiazepine">Benzodiazepine</label>
                                <div class="input-group">
                                    <input class="form-control @error('benzodiazepine') is-invalid @enderror"
                                           name="benzodiazepine" value="{{ old('benzodiazepine') }}"
                                           placeholder="Benzodiazepine" type="text" aria-describedby="basic-addon2">

                                    @error('benzodiazepine')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="col-form-label" for="thc">Tetrahidrokannabinol (THC)</label>
                                <div class="input-group">
                                    <input class="form-control @error('thc') is-invalid @enderror" name="thc"
                                           value="{{ old('thc') }}" placeholder="THC" type="text"
                                           aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2">(Includes Ecstasy)</span>

                                    @error('thc')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="col-form-label" for="cocain">Cocain</label>
                                <div class="input-group">
                                    <input class="form-control @error('cocain') is-invalid @enderror"
                                           name="cocain" value="{{ old('cocain') }}" placeholder="Cocain"
                                           type="text" aria-describedby="basic-addon2">

                                    @error('cocain')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="col-form-label" for="opiate">Opiate</label>
                                <div class="input-group">
                                    <input class="form-control @error('opiate') is-invalid @enderror" name="opiate"
                                           value="{{ old('opiate') }}" placeholder="Opiate" type="text"
                                           aria-describedby="basic-addon2">

                                    @error('opiate')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan & cetak</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
