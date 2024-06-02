<script>
    $(function () {
        let loadingAlert = $('.modal-body #loading-alert');
        const datatable = $('#datatable');

        datatable.DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('checkup-type.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'abbreviated_word', name: 'abbreviated_word'},
                {data: 'description', name: 'description'},
                {data: 'action', name: 'action'},
            ]
        });

        datatable.on('click', '.checkup-type-edit', function () {
            loadingAlert.show();

            let id = $(this).data('id');
            let url = "{{ route('api.checkup-type.edit', 'id') }}";
            url = url.replace('id', id);

            let formActionURL = "{{ route('checkup-type.update', 'id') }}"
            formActionURL = formActionURL.replace('id', id);

            let editCheckupTypeModalEveryInput = $('#editCheckupTypeModal :input').not('button[type=button], input[name=_token], input[name=_method]')
                .each(function () {
                    $(this).not('select').val('Sedang mengambil data..');
                    $(this).prop('disabled', true);
                });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    editCheckupTypeModalEveryInput.prop('disabled', false);

                    $('#editCheckupTypeModal #edit-checkup-type-form').attr('action', formActionURL)

                    $('#editCheckupTypeModal #name').val(response.data.name);
                    $('#editCheckupTypeModal #abbreviated_word').val(response.data.abbreviated_word);
                    $('#editCheckupTypeModal #description').val(response.data.description);
                }
            });
        });

    });

</script>
