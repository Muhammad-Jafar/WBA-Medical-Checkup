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
                {data: 'checkup_type', name: 'checkup_type.abbreviated_word'},
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
                            {data: 'checkup_type', name: 'checkup_type.abbreviated_word'},
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
                            {data: 'checkup_type', name: 'checkup_type.abbreviated_word'},
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
                            {data: 'checkup_type', name: 'checkup_type.abbreviated_word'},
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

        datatable.on('click', '.applicant-print', function () {
            loadingAlert.show();

            let id = $(this).data('id');
            let url = "{{ route('api.application.print', 'id') }}";
            url = url.replace('id', id);

            let printApplicantModalEveryInput = $('#printApplicantModal :input')
                .not('button[type=button], input[name=_token], input[name=_method]')
                .each(function () {
                    $(this).not('select').val('Sedang mengambil data..');
                    $(this).prop('disabled', true);
                });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();
                    printApplicantModalEveryInput.prop('disabled', false);
                    const checkupType = response.data.checkuptype_id;
                    const packetVisibility = [
                        [false, false, false], // checkupType 1
                        [true, false, false],  // checkupType 2
                        [true, true, false],   // checkupType 3
                        [false, false, true]    // checkupType 4
                    ];

                    $('#printApplicantModal #paket-2, #printApplicantModal #paket-3, #printApplicantModal #paket-4')
                        .each(function (index, element) {
                            $(element).toggle(packetVisibility[checkupType - 1][index]);
                        });

                    /*$('#printApplicantModal #print-applicant-form').attr('action', formActionURL)*/
                    $('#printApplicantModal #patient_id').val(response.data.patient_id);
                    $('#printApplicantModal #patient_name').val(response.data.patients.name);
                    $('#printApplicantModal #doctor_id').val(response.data.doctor_id);
                    $('#printApplicantModal #doctor_name').val(response.data.doctors.name);
                    $('#printApplicantModal #checkuptype_id').val(response.data.checkuptype_id);
                    $('#printApplicantModal #checkuptype_name').val(response.data.checkup_types.abbreviated_word);
                    $('#printApplicantModal #purposes').val(response.data.purposes);
                    $('#printApplicantModal #height_body').val(response.data.height_body);
                    $('#printApplicantModal #mass_body').val(response.data.mass_body);
                    $('#printApplicantModal #blod_pressure').val(response.data.blod_pressure);
                    $('#printApplicantModal #blod_sugar').val(response.data.blod_sugar);
                    $('#printApplicantModal #colesterol').val(response.data.colesterol);
                    $('#printApplicantModal #amphe').val(response.data.amphe);
                    $('#printApplicantModal #metham').val(response.data.metham);
                    $('#printApplicantModal #benzo').val(response.data.benzo);
                    $('#printApplicantModal #thc').val(response.data.thc);
                    $('#printApplicantModal #cocain').val(response.data.cocain);
                    $('#printApplicantModal #opiate').val(response.data.opiate);
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

            let editApplicantModalEveryInput = $('#editApplicantModal :input')
                .not('button[type=button], input[name=_token], input[name=_method]')
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
                    $('#editApplicantModal #patient_name').val(response.data.patients.name);
                    $('#editApplicantModal #doctor_id').val(response.data.doctor_id).select();
                    $('#editApplicantModal #checkuptype_id').val(response.data.checkuptype_id).select();
                    $('#editApplicantModal #purposes').val(response.data.purposes);
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
