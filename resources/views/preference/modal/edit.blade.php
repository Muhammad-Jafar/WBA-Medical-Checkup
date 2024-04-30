<div class="modal fade" id="editDailyLimitModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ubah data limit harian</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				{{-- @include('utilities.loading-alert') --}}
				
				<form action="#" method="post" id="edit-applicant-daily-limit">
					@csrf @method('PUT')
					<div class="row">
						<div class="col-md-12 mb-3">
							<label for="inputan" class="form-label">Limit (dihitung hari)</label>
							<input type="number" class="form-control" name="inputan" id="inputan" placeholder="Masukkan limit">
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
