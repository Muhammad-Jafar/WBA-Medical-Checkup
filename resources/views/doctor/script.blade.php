<script>
    $(function() {
        //let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
            processing: true,
            serverside: true,
            ajax: " {{ route('master.doctor.index') }} ",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'nip', name: 'nip' },
                { data: 'sip', name: 'sip' },
                { data: 'action', name: 'action' },
            ]
        });
    });
</script>