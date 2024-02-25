<script>
    $(function() {
        //let loadingAlert = $('.modal-body #loading-alert');

        $('#list-patient').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('patient.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'born_place', name: 'born_place' },
                { data: 'occupation', name: 'occupation' },
                { data: 'action', name: 'action', "className": "dt-body-left" },
            ],
            "fixedColumns": {
                "rightColumns": 1 // Specify the number of columns to fix to the right
            }
        });


    });
</script>
