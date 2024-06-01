<script>
    $(function () {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('administrator.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'email', name: 'email'},
                {data: 'name', name: 'name'},
                {data: 'position', name: 'position'},
                {data: 'created_at', name: 'created_at'},
                {data: 'last_login', name: 'last_login'},
                {data: 'is_active', name: 'is_active'},
                {data: 'action', name: 'action'},
            ]
        });

        $('#datatable').on('click', '.admin-edit', function () {
            loadingAlert.show();

            let id = $(this).data('id');
            let url = "{{ route('api.administrator.edit', 'id') }}"
            url = url.replace('id', id);

            let formActionURL = "{{ route('administrator.update', 'id') }}"
            formActionURL = formActionURL.replace('id', id);

            let editAdminModalEveryInput = $('#editDoctorModal :input').not('button[type=button], input[name=_token], input[name=_method]')
                .each(function () {
                    $(this).not('select').val('Sedang mengambil data..');
                    $(this).prop('disabled', true);
                });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    editAdminModalEveryInput.prop('disabled', false);

                    $('#editAdminModal #edit-admin-form').attr('action', formActionURL)

                    $('#editAdminModal #name').val(response.data.name);
                    $('#editAdminModal #email').val(response.data.email);
                    $('#editAdminModal #position').val(response.data.position);
                }
            });

        })


    });

</script>
