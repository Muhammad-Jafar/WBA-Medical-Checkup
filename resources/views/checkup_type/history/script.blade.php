<script>
    $(function () {
        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('checkup-type.index.history') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'abbreviated_word', name: 'abbreviated_word'},
                {data: 'description', name: 'description'},
                {data: 'action', name: 'action'},
            ]
        });
    });

</script>
