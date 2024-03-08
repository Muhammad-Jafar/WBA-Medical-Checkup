<script>
    $(function() {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('application.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'patient', name: 'patients.name' },
                { data: 'purposes', name: 'purposes' },
                { data: 'doctor', name: 'doctors.name' },
                { data: 'admin', name: 'users.name' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' },
            ]
        });

    });
</script>
