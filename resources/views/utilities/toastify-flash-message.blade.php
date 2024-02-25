@if(request()->session()->get('success'))
<script>
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000,
        close: true,
        gravity: "top",
        position: "center",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@endif

@if(request()->session()->get('warning'))
<script>
    Toastify({
        text: "{{ session('warning') }}",
        duration: 3000,
        close: true,
        gravity: "top",
        position: "center",
        backgroundColor: "#eaca4a",
    }).showToast();
</script>
@endif

@if(count($errors) !== 0)
    @foreach($errors->all() as $message)
    <script>
        Toastify({
            text: "{{ $message }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#f3616d",
        }).showToast();
    </script>
    @endforeach
@endif