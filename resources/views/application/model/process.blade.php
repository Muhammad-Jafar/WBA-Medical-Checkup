<div class="modal fade" id="processApplicantModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Proses permintaan SKBS</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="#" method="POST">
					@csrf
					<div class="row">
						@foreach ($patients as $patient)
							<div class="col-md-12">
								<div class="mb-3">
									<label for="name">Nama pasien</label>
									<input type="text" class="form-control" value="{{ $patient->name }}" disabled>	
								</div>
							</div>
						@endforeach
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Simpan & Cetak</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
