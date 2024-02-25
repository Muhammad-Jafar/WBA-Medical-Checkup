<script>
    $(function() {
        // let loadingAlert = $('.modal-body #loading-alert');

        $('#list-doctor').DataTable({
            processing: true,
            serverside: true,
            ajax: "{{ route('doctor.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'nip', name: 'nip' },
                { data: 'sip', name: 'sip' },
                { data: 'verified', name: 'verified' },
                { data: 'action', name: 'action' },
            ]
        });


    });
</script>
