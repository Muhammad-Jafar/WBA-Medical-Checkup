<script>
    $(function () {
        $('#datatable').DataTable({
            language: {
                url: "{{ asset('vendors/datatable/plugins/id.json') }}"
            },
            "pageLength": 5,
            "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, 'All']]
        });
    });
</script>
