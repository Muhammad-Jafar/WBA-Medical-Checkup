<script>
    $(function () {
        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('patient.index.history') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'born_place', name: 'born_place'},
                {data: 'occupation', name: 'occupation'},
                {data: 'action', name: 'action'},
            ]
        });
    });
</script>
