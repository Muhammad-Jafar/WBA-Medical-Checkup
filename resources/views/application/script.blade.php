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

        $('#today-tab').click(function () {
            $.ajax({
                url: "{{ route('application.getTab', 'today') }}",
                data: { tab: "today" },
                success: function (data) {
                    $('#datatable-wrap').removeAttr('style');

                    Toastify({
                        text: "Berhasil mengambil data",
                        duration: 3000,
                        close: true,
                        backgroundColor: "#4fbe87",
                    }).showToast();

                    $('#datatable').DataTable({
                        data: data.data,
                        destroy: true,
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
                },
                error: function () {
                    $('#datatable-wrap').css('display', 'none');

                    Toastify({
                        text: "Kesalahan internal!",
                        duration: 3000,
                        close: true,
                        backgroundColor: "#f3616d",
                    }).showToast()
                }
            });

        });

        $('#pending-tab').click(function () {
            $.ajax({
                url: "{{ route('application.getTab', 'pending') }}",
                data: { tab: "pending" },
                success: function (data) {
                    $('#datatable-wrap').removeAttr('style');

                    Toastify({
                        text: "Berhasil mengambil data",
                        duration: 3000,
                        close: true,
                        backgroundColor: "#4fbe87",
                    }).showToast();

                    $('#datatable').DataTable({
                        data: data.data,
                        destroy: true,
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
                },
                error: function () {
                    $('#datatable-wrap').css('display', 'none');

                    Toastify({
                        text: "Kesalahan internal!",
                        duration: 3000,
                        close: true,
                        backgroundColor: "#f3616d",
                    }).showToast()
                }
            });

        });

        $('#all-tab').click(function () {
            $.ajax({
                url: "{{ route('application.getTab', 'all') }}",
                data: { tab: "pending" },
                success: function (data) {
                    $('#datatable-wrap').removeAttr('style');

                    Toastify({
                        text: "Berhasil mengambil data",
                        duration: 3000,
                        close: true,
                        backgroundColor: "#4fbe87",
                    }).showToast();

                    $('#datatable').DataTable({
                        data: data.data,
                        destroy: true,
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
                },
                error: function () {
                    $('#datatable-wrap').css('display', 'none');

                    Toastify({
                        text: "Kesalahan internal!",
                        duration: 3000,
                        close: true,
                        backgroundColor: "#f3616d",
                    }).showToast()
                }
            });

        });

    });
</script>
