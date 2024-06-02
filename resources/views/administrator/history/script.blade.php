<script>
    $(function () {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('administrator.index.history') }}",
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

    });

</script>
