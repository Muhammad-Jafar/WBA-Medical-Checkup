<script>
    $(function() {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('application.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'patient_id', name: 'patients.name' },
                { data: 'purposes', name: 'purposes' },
                { data: 'doctor_id', name: 'doctors.name' },
                { data: 'user_id', name: 'users.name' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' },
            ],
        });

    });
</script>
