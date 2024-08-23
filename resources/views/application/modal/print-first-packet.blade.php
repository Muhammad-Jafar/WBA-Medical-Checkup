<div class="modal fade" id="printFirstApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Cetak permintaan SKBS - {{ "ddd" }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                @include('utilities.loading-alert')

                <form action="#" method="POST" id="first-print-applicant-form">
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

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success"> <i class="bi bi-printer"></i> Cetak</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
