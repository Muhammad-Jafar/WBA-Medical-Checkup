@vite(["resources/js/app.js"])
@vite(["resources/js/dark.js"])

@stack('modal')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr@4.6.13/dist/l10n/id.js"></script>

<script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/vendors/choices.js/choices.min.js') }}"></script>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

<script>
    $(function () {
        $(".select2").select2();

        $("input[type=date]").flatpickr({
            dateFormat: "d-m-Y",
            locale: "id",
        });

        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.13.3/i18n/id.json",
            },
            "pageLength": 10,
            "lengthMenu": [[10, 20, 25, 50, -1], [10, 20, 25, 50, 'All']]
        });

        $('#logout-form').click(function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Logout?",
                text: "Anda akan keluar dari aplikasi.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Tidak",
                confirmButtonText: "Ya!",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#logout-form').submit();
                }
            })
        });

        $("#datatable").on('click', '.delete-dialog', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Hapus?",
                text: "Data tersebut akan dihapus!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Tidak",
                confirmButtonText: "Ya!",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                }
            });
        });

        $("#datatable").on('click', '.restore-button', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Kembalikan?",
                text: "Data yang dipilih akan dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Tidak",
                confirmButtonText: "Ya!",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                }
            });
        });

        $("#datatable").on('click', '.cancel-dialog', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Batalkan?",
                text: "Permintaan tersebut akan dibatalkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Tidak",
                confirmButtonText: "Ya!",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                }
            });
        });

        $("#datatable").on('click', '.delete-permanent-button', function (e) {
            e.preventDefault();
            Swal.fire({
                title: "Hapus permanen?",
                text: "Data yang dipilih tidak akan bisa dikembalikan lagi!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Tidak",
                confirmButtonText: "Ya!",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Yakin?",
                        text: "Anda yakin ingin menghapus data tersebut?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        cancelButtonText: "Tidak",
                        confirmButtonText: "Ya!",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().submit();
                        }
                    });
                }
            });
        });

    });

</script>

@stack('js')

@include('utilities.toastify-flash-message')

@livewireScripts
<script src="{{ asset('/js/main.js') }}"></script>

{{ $script ?? ''}}
