<script>
    $(function() {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('patient.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'born_place', name: 'born_place' },
                { data: 'occupation', name: 'occupation' },
                { data: 'action', name: 'action' },
            ]
        });

        $('#datatable').on('click', '.patient-detail', function() {
            loadingAlert.show();

            let url = "{{ route('api.patient.show', 'id') }}";
			let id = $(this).data('id');

            url = url.replace('id', id);

            $('#showPatientModal input').each(function () {
				$(this).val('Sedang mengambil data..');
			});

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    $('#showPatientModal #nik').val(response.data.nik);
                    $('#showPatientModal #name').val(response.data.name);
                    $('#showPatientModal #gender').val(response.data.gender);
                    $('#showPatientModal #born_place').val(response.data.born_place);
                    $('#showPatientModal #born_date').val(response.data.born_date);
                    $('#showPatientModal #address').val(response.data.address);
                    $('#showPatientModal #occupation').val(response.data.occupation);
                }
            });

        });

    });
</script>
