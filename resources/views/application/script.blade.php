<script>
    $(function() {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('application.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'patients', name: 'patients.name' },
                { data: 'purposes', name: 'purposes' },
                { data: 'doctors', name: 'doctors.name' },
                { data: 'users', name: 'users.name' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' },
            ]
        });

    });
</script>
