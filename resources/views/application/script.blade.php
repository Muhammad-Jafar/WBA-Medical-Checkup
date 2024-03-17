<script>
    $(function() {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('applicant.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'patient', name: 'patients.name' },
                { data: 'purposes', name: 'purposes' },
                { data: 'doctor', name: 'doctors.name' },
                { data: 'admin', name: 'users.name' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' },
            ]
        });

        $('#datatable').on('click', '.applicant-process', function () {
            loadingAlert.show();

            let id = $(this).data('id');
            let url = "{{ route('api.application.process', 'id') }}";
            url = url.replace('id', id);

            let formActionURL = "{{ route('applicant.update', 'id') }}"
			formActionURL = formActionURL.replace('id', id);

            let processApplicantModalEveryInput = $('#processApplicantModal :input').not('button[type=button], input[name=_token], input[name=_method]')
				.each(function () {
					$(this).not('select').val('Sedang mengambil data..');
					$(this).prop('disabled', true);
				});

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    processApplicantModalEveryInput.prop('disabled', false);
                    $('#processApplicantModal #process-applicant-form').attr('action', formActionURL)

                    $('#processApplicantModal #patient').val(response.data.patients.name);
                    $('#processApplicantModal #patient_id').val(response.data.patient_id);
					$('#processApplicantModal #purposes').val(response.data.purposes);
					$('#processApplicantModal #doctor').val(response.data.doctors.name);
					$('#processApplicantModal #doctor_id').val(response.data.doctor_id);
                }
            });
        });

    });
</script>


