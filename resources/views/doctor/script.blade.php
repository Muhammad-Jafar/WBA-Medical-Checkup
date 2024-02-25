<script>
    $(function() {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('doctor.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'nip', name: 'nip' },
                { data: 'sip', name: 'sip' },
                { data: 'verified', name: 'verified' },
                { data: 'action', name: 'action' },
            ]
        });

        $('#datatable').on('click', '.doctor-edit', function () {
			loadingAlert.show();

			let id = $(this).data('id');
			let url = "";
            
			url = url.replace(':param', id);

			let formActionURL = "{{ route('doctor.update', ':param') }}"
			formActionURL = formActionURL.replace(':param', id);

			let editStudentModalEveryInput = $('#editStudentModal :input').not('button[type=button], input[name=_token], input[name=_method]')
				.each(function () {
					$(this).not('select').val('Sedang mengambil data..');
					$(this).prop('disabled', true);
				});

			$.ajax({
				url: url,
				headers: {
					'Authorization': 'Bearer ' + localStorage.getItem('token'),
					'Accept': 'application/json',
				},

				success: function (response) {
					loadingAlert.slideUp();

					editStudentModalEveryInput.prop('disabled', false);

					$('#editStudentModal #edit-student-form').attr('action', formActionURL)

					$('#editStudentModal #student_identification_number').val(response.data.student_identification_number);
					$('#editStudentModal #name').val(response.data.name);
					$('#editStudentModal #gender').val(response.data.gender);
				}
			});
		});

    });
</script>