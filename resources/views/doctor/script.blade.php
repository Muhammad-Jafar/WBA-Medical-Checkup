<script>
    $(function () {
        let loadingAlert = $('.modal-body #loading-alert');
        const datatable = $('#datatable');

        datatable.DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('doctor.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'sip', name: 'sip'},
                {data: 'nip', name: 'nip'},
                {data: 'verified', name: 'verified'},
                {data: 'action', name: 'action'},
            ]
        });

        datatable.on('click', '.doctor-edit', function () {
            loadingAlert.show();

            let id = $(this).data('id');
            let url = "{{ route('api.doctor.edit', 'id') }}"
            url = url.replace('id', id);

            let formActionURL = "{{ route('doctor.update', 'id') }}"
            formActionURL = formActionURL.replace('id', id);

            let editDoctorModalEveryInput = $('#editDoctorModal :input').not('button[type=button], input[name=_token], input[name=_method]')
                .each(function () {
                    $(this).not('select').val('Sedang mengambil data..');
                    $(this).prop('disabled', true);
                });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    editDoctorModalEveryInput.prop('disabled', false);

                    $('#editDoctorModal #edit-doctor-form').attr('action', formActionURL)

                    $('#editDoctorModal #name').val(response.data.name);
                    $('#editDoctorModal #sip').val(response.data.sip);
                    $('#editDoctorModal #nip').val(response.data.nip);
                }
            });
        });
    });

</script>
