<script>
    $(function () {
        let loadingAlert = $('.modal-body #loading-alert');
        const datatable = $('#datatable');
        const dropdownStatusText = document.getElementById('dropdownStatusText');
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        dropdownItems.forEach(item => {
            item.addEventListener('click', function (event) {
                event.preventDefault();
                dropdownItems.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
            });
        });

        datatable.DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('application.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'patient', name: 'patients.name'},
                {data: 'purposes', name: 'purposes'},
                {data: 'doctor', name: 'doctors.name'},
                {data: 'admin', name: 'users.name'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action'},
            ]
        });

        $('#today-tab').click(function () {
            dropdownStatusText.textContent = 'Hari ini';

            $.ajax({
                url: "{{ route('application.tab', 'today') }}",
                data: {tab: "today"},
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
                            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {data: 'patient', name: 'patients.name'},
                            {data: 'purposes', name: 'purposes'},
                            {data: 'doctor', name: 'doctors.name'},
                            {data: 'admin', name: 'users.name'},
                            {data: 'status', name: 'status'},
                            {data: 'action', name: 'action'},
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
            dropdownStatusText.textContent = 'Status tertunda';

            $.ajax({
                url: "{{ route('application.tab', 'pending') }}",
                data: {tab: "pending"},
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
                            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {data: 'patient', name: 'patients.name'},
                            {data: 'purposes', name: 'purposes'},
                            {data: 'doctor', name: 'doctors.name'},
                            {data: 'admin', name: 'users.name'},
                            {data: 'status', name: 'status'},
                            {data: 'action', name: 'action'},
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
            dropdownStatusText.textContent = 'Semua data';

            $.ajax({
                url: "{{ route('application.tab', 'all') }}",
                data: {tab: "pending"},
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
                            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {data: 'patient', name: 'patients.name'},
                            {data: 'purposes', name: 'purposes'},
                            {data: 'doctor', name: 'doctors.name'},
                            {data: 'admin', name: 'users.name'},
                            {data: 'status', name: 'status'},
                            {data: 'action', name: 'action'},
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

        datatable.on('click', '.print-window', function (e) {
            loadingAlert.show();
            e.preventDefault();

            let id = $(this).data('id');
            let url = "{{ route('application.print', 'id') }}";
            url = url.replace('id', id);

            Swal.fire({
                title: "Cetak pengajuan!",
                text: "Anda yakin ingin mencetak pengajuan SKBS?.",
                icon: "warning",
                showCancelButton: true,
                cancelButtonColor: "#d33",
                cancelButtonText: "Jangan dulu",
                confirmButtonText: "Cetak",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                    window.open(url, '_blank');
                }
            });
        });

        datatable.on('click', '.applicant-edit', function () {
            loadingAlert.show();

            let id = $(this).data('id');
            let url = "{{ route('api.application.edit', 'id') }}";
            url = url.replace('id', id);

            let formActionURL = "{{ route('application.update', 'id') }}"
            formActionURL = formActionURL.replace('id', id);

            let editApplicantModalEveryInput = $('#editApplicantModal :input').not('button[type=button], input[name=_token], input[name=_method]')
                .each(function () {
                    $(this).not('select').val('Sedang mengambil data..');
                    $(this).prop('disabled', true);
                });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    editApplicantModalEveryInput.prop('disabled', false);
                    $('#editApplicantModal #edit-applicant-form').attr('action', formActionURL)

                    $('#editApplicantModal #patient_id').val(response.data.patient_id);
                    $('#editApplicantModal #purposes').val(response.data.purposes);
                    $('#editApplicantModal #doctor_id').val(response.data.doctor_id);
                    $('#editApplicantModal #height_body').val(response.data.height_body);
                    $('#editApplicantModal #mass_body').val(response.data.mass_body);
                    $('#editApplicantModal #blod_type').val(response.data.blod_type);
                    $('#editApplicantModal #blod_pressure').val(response.data.blod_pressure);
                    $('#editApplicantModal #colesterol').val(response.data.colesterol);
                    $('#editApplicantModal #blod_sugar').val(response.data.blod_sugar);
                }
            });
        });

        $('#showLimitApplicant').click(function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Perhatian!",
                text: "Permintaan SKBS telah melewati batas harian, silahkan hubungi administrator.",
                icon: "warning",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya!",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                }
            });

        });

    });

</script>
