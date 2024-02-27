<script>
    $(function() {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('application.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'request_by', name: 'request_by' },
                { data: 'handle_by', name: 'handle_by' },
                { data: 'purposes', name: 'purposes' },
                { data: 'verified', name: 'verified' },
                { data: 'action', name: 'action' },
            ],
        });

    });
</script>
