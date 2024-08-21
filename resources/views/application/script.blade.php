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

        datatable.on('click', '.applicant-print-first', function () {
            loadingAlert.show();

            let url = "{{ route('api.application.printOnline', 'id') }}";
            let id = $(this).data('id');

            url = url.replace('id', id);

            $('#printFirstApplicantModal input').each(function () {
                $(this).val('Sedang mengambil data..');
            });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    /*printApplicantModalEveryInput.prop('disabled', false);
                    $('#printApplicantModal #print-applicant-form').attr('action', formActionURL)*/

                    $('#printFirstApplicantModal #patient_name').val(response.data.patients.name);
                    $('#printFirstApplicantModal #purposes').val(response.data.purposes);
                    $('#printFirstApplicantModal #checkuptype_id').val(response.data.checkup_types.abbreviated_word);
                }
            });
        });

        datatable.on('click', '.applicant-print-second', function () {
            loadingAlert.show();

            let url = "{{ route('api.application.printOnline', 'id') }}";
            let id = $(this).data('id');

            url = url.replace('id', id);

            $('#printSecondApplicantModal input').each(function () {
                $(this).val('Sedang mengambil data..');
            });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    /*printApplicantModalEveryInput.prop('disabled', false);
                    $('#printApplicantModal #print-applicant-form').attr('action', formActionURL)*/

                    $('#printSecondApplicantModal #patient_name').val(response.data.patients.name);
                    $('#printSecondApplicantModal #purposes').val(response.data.purposes);
                    $('#printSecondApplicantModal #checkuptype_id').val(response.data.checkup_types.abbreviated_word);
                    $('#printSecondApplicantModal #height_body').val(response.data.height_body);
                    $('#printSecondApplicantModal #mass_body').val(response.data.mass_body);
                }
            });
        });

        datatable.on('click', '.applicant-print-third', function () {
            loadingAlert.show();

            let url = "{{ route('api.application.printOnline', 'id') }}";
            let id = $(this).data('id');

            url = url.replace('id', id);

            $('#printThirdApplicantModal input').each(function () {
                $(this).val('Sedang mengambil data..');
            });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    /*printApplicantModalEveryInput.prop('disabled', false);
                    $('#printApplicantModal #print-applicant-form').attr('action', formActionURL)*/

                    $('#printThirdApplicantModal #patient_name').val(response.data.patients.name);
                    $('#printThirdApplicantModal #purposes').val(response.data.purposes);
                    $('#printThirdApplicantModal #checkuptype_id').val(response.data.checkup_types.abbreviated_word);
                    $('#printThirdApplicantModal #height_body').val(response.data.height_body);
                    $('#printThirdApplicantModal #mass_body').val(response.data.mass_body);
                    $('#printThirdApplicantModal #blod_pressure').val(response.data.blod_pressure);
                    $('#printThirdApplicantModal #blod_sugar').val(response.data.blod_sugar);
                    $('#printThirdApplicantModal #colesterol').val(response.data.colesterol);

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
                    /*$('#editApplicantModal #height_body').val(response.data.height_body);
                    $('#editApplicantModal #mass_body').val(response.data.mass_body);
                    $('#editApplicantModal #blod_type').val(response.data.blod_type);
                    $('#editApplicantModal #blod_pressure').val(response.data.blod_pressure);
                    $('#editApplicantModal #colesterol').val(response.data.colesterol);
                    $('#editApplicantModal #blod_sugar').val(response.data.blod_sugar);*/
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
