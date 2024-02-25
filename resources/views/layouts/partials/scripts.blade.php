@vite(["resources/js/app.js"])
@vite(["resources/js/dark.js"])

@stack('modal')

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

<script src="{{ asset('/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('/vendors/simple-datatables/simple-datatables.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr@4.6.13/dist/l10n/id.js"></script>

<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

<script>
    $(function() {

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
        

    });

</script>

@stack('js')

@livewireScripts
<script src="{{ asset('/js/main.js') }}"></script>

{{ $script ?? ''}}
