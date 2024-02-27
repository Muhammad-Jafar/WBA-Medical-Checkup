<script>
    $(function() {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('application.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'patient_id', name: 'patient_id' },
                { data: 'purposes', name: 'purposes' },
                { data: 'doctor_id', name: 'doctor_id' },
                { data: 'user_id', name: 'user_id' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' },
            ],
        });

    });
</script>
