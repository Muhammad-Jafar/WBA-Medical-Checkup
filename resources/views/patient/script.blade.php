<script>
    $(function () {
        let loadingAlert = $('.modal-body #loading-alert');
        const datatable = $('#datatable');

        datatable.DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('patient.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'born_place', name: 'born_place'},
                {data: 'occupation', name: 'occupation'},
                {data: 'action', name: 'action'},
            ]
        });

        datatable.on('click', '.patient-detail', function () {
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

        datatable.on('click', '.patient-edit', function () {
            loadingAlert.show();

            let id = $(this).data('id');
            let url = "{{ route('api.patient.edit', 'id') }}";
            url = url.replace('id', id);

            let formActionURL = "{{ route('patient.update', 'id') }}"
            formActionURL = formActionURL.replace('id', id);

            let editPatientModalEveryInput = $('#editPatientModal :input').not('button[type=button], input[name=_token], input[name=_method]')
                .each(function () {
                    $(this).not('select').val('Sedang mengambil data..');
                    $(this).prop('disabled', true);
                });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    editPatientModalEveryInput.prop('disabled', false);
                    $('#editPatientModal #edit-patient-form').attr('action', formActionURL)

                    $('#editPatientModal #nik').val(response.data.nik);
                    $('#editPatientModal #name').val(response.data.name);
                    $('#editPatientModal #gender').val(response.data.gender).select();
                    $('#editPatientModal #born_place').val(response.data.born_place);
                    $('#editPatientModal #born_date').val(response.data.born_date);
                    $('#editPatientModal #address').val(response.data.address);
                    $('#editPatientModal #occupation').val(response.data.occupation);
                }
            });
        });

    });
</script>
