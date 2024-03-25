<script>
    $(function () {
        let loadingAlert = $('.modal-body #loading-alert');

        $('#datatable').DataTable({
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
            $.ajax({
                url: "{{ route('application.getTab', 'today') }}",
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
            $.ajax({
                url: "{{ route('application.getTab', 'pending') }}",
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
            $.ajax({
                url: "{{ route('application.getTab', 'all') }}",
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

        $('#datatable').on('click', '.applicant-process', function () {
            loadingAlert.show();

            let id = $(this).data('id');
            let url = "{{ route('api.application.process', 'id') }}";
            url = url.replace('id', id);

            let formActionURL = "{{ route('application.generate') }}"
            formActionURL = formActionURL.replace('id', id);

            let processApplicantModalEveryInput = $('#processApplicantModal :input').not('button[type=button], input[name=_token], input[name=_method]')
                .each(function () {
                    $(this).not('select').val('Sedang mengambil data..');
                    $(this).prop('disabled', true);
                });

            $.ajax({
                url: url,
                success: function (response) {
                    loadingAlert.slideUp();

                    processApplicantModalEveryInput.prop('disabled', false);
                    $('#processApplicantModal #process-applicant-form').attr('action', formActionURL)

                    $('#processApplicantModal #patient').val(response.data.patients.name);
                    $('#processApplicantModal #patient_id').val(response.data.patient_id);
                    $('#processApplicantModal #purposes').val(response.data.purposes);
                    $('#processApplicantModal #doctor').val(response.data.doctors.name);
                    $('#processApplicantModal #doctor_id').val(response.data.doctor_id);
                    $('#processApplicantModal #height_body').val(response.data.height_body);
                    $('#processApplicantModal #mass_body').val(response.data.mass_body);
                    $('#processApplicantModal #blod_type').val(response.data.blod_type);
                    $('#processApplicantModal #blod_pressure').val(response.data.blod_pressure);
                    $('#processApplicantModal #colesterol').val(response.data.colesterol);
                    $('#processApplicantModal #blod_sugar').val(response.data.blod_sugar);
                    
                }
            });
        });

        $('.print-window').click(function() {
            window.print();
        });

    });
</script>


