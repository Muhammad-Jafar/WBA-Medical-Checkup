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
                }
            });

        });

        $('#rejected-tab').click(function () {
            dropdownStatusText.textContent = 'Status tertolak';

            $.ajax({
                url: "{{ route('application.tab', 'rejected') }}",
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
                }
            });

        });

        datatable.on('click', '.applicant-print-first', function (e) {
            loadingAlert.show();
            e.preventDefault();

            let id = $(this).data('id');
            let url = "{{ route('api.application.generate', 'id') }}";
            url = url.replace('id', id);

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    $('#printFirstApplicantModal #patient_id').val(response.data.patient_id);
                    $('#printFirstApplicantModal #patient_name').val(response.data.patients.name);
                    $('#printFirstApplicantModal #doctor_id').val(response.data.doctor_id);
                    $('#printFirstApplicantModal #doctor_name').val(response.data.doctors.name);
                    $('#printFirstApplicantModal #checkuptype_id').val(response.data.checkuptype_id);
                    $('#printFirstApplicantModal #checkuptype_name').val(response.data.checkup_types.abbreviated_word);
                    $('#printFirstApplicantModal #purposes').val(response.data.purposes);
                }
            });
        });

        datatable.on('click', '.applicant-print-second', function (e) {
            loadingAlert.show();
            e.preventDefault();

            let id = $(this).data('id');
            let url = "{{ route('api.application.generate', 'id') }}";
            url = url.replace('id', id);

            let formActionUrl = "{{ route('application.update', 'id') }}";
            formActionUrl = formActionUrl.replace('id', id);

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    $('#printSecondApplicantModal #patient_id').val(response.data.patient_id);
                    $('#printSecondApplicantModal #patient_name').val(response.data.patients.name);
                    $('#printSecondApplicantModal #doctor_id').val(response.data.doctor_id);
                    $('#printSecondApplicantModal #doctor_name').val(response.data.doctors.name);
                    $('#printSecondApplicantModal #checkuptype_id').val(response.data.checkuptype_id);
                    $('#printSecondApplicantModal #checkuptype_name').val(response.data.checkup_types.abbreviated_word);
                    $('#printSecondApplicantModal #purposes').val(response.data.purposes);
                    $('#printSecondApplicantModal #height_body').val(response.data.height_body);
                    $('#printSecondApplicantModal #mass_body').val(response.data.mass_body);
                    $('#printSecondApplicantModal #second-print-applicant-form').attr('action', formActionUrl);
                }
            });
        });

        datatable.on('click', '.applicant-print-third', function (e) {
            loadingAlert.show();
            e.preventDefault();

            let id = $(this).data('id');
            let url = "{{ route('api.application.generate', 'id') }}";
            url = url.replace('id', id);

            let formActionUrl = "{{ route('application.update', 'id') }}";
            formActionUrl = formActionUrl.replace('id', id);

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    $('#printThirdApplicantModal #patient_id').val(response.data.patient_id);
                    $('#printThirdApplicantModal #patient_name').val(response.data.patients.name);
                    $('#printThirdApplicantModal #doctor_id').val(response.data.doctor_id);
                    $('#printThirdApplicantModal #doctor_name').val(response.data.doctors.name);
                    $('#printThirdApplicantModal #checkuptype_id').val(response.data.checkuptype_id);
                    $('#printThirdApplicantModal #checkuptype_name').val(response.data.checkup_types.abbreviated_word);
                    $('#printThirdApplicantModal #purposes').val(response.data.purposes);
                    $('#printThirdApplicantModal #height_body').val(response.data.height_body);
                    $('#printThirdApplicantModal #mass_body').val(response.data.mass_body);
                    $('#printThirdApplicantModal #blod_pressure').val(response.data.blod_pressure);
                    $('#printThirdApplicantModal #blod_sugar').val(response.data.blod_sugar);
                    $('#printThirdApplicantModal #colesterol').val(response.data.colesterol);
                    $('#printThirdApplicantModal #third-print-applicant-form').attr('action', formActionUrl);
                }
            });
        });

        datatable.on('click', '.applicant-print-four', function (e) {
            loadingAlert.show();
            e.preventDefault();

            let id = $(this).data('id');
            let url = "{{ route('api.application.generate', 'id') }}";
            url = url.replace('id', id);

            let formActionUrl = "{{ route('application.update', 'id') }}";
            formActionUrl = formActionUrl.replace('id', id);

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    $('#printFourApplicantModal #patient_id').val(response.data.patient_id);
                    $('#printFourApplicantModal #patient_name').val(response.data.patients.name);
                    $('#printFourApplicantModal #doctor_id').val(response.data.doctor_id);
                    $('#printFourApplicantModal #doctor_name').val(response.data.doctors.name);
                    $('#printFourApplicantModal #checkuptype_id').val(response.data.checkuptype_id);
                    $('#printFourApplicantModal #checkuptype_name').val(response.data.checkup_types.abbreviated_word);
                    $('#printFourApplicantModal #purposes').val(response.data.purposes);
                    $('#printFourApplicantModal #amphe').val(response.data.amphe);
                    $('#printFourApplicantModal #metham').val(response.data.metham);
                    $('#printFourApplicantModal #benzo').val(response.data.benzo);
                    $('#printFourApplicantModal #thc').val(response.data.thc);
                    $('#printFourApplicantModal #cocain').val(response.data.cocain);
                    $('#printFourApplicantModal #opiate').val(response.data.opiate);
                    $('#printFourApplicantModal #four-print-applicant-form').attr('action', formActionUrl);
                }
            });
        });

        datatable.on('click', '.applicant-print', function (e) {
            loadingAlert.show();
            e.preventDefault();

            let id = $(this).data('id');
            let url = "{{ route('application.print', 'id') }}";
            url = url.replace('id', id);

            Swal.fire({
                title: "Cetak pengajuan!",
                text: "Anda yakin ingin mencetak pengajuan SKBS?",
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

                    $('#editApplicantModal #edit-applicant-form').attr('action', formActionURL);
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
