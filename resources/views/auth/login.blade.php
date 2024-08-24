<x-guest-layout>

    <div id="auth-left">
        <div class="auth-logo">
            <img src="{{ asset('/images/logo/logo.png') }}" alt="Logo">
        </div>
        <h4 class="auth-title">Medical Checkup</h4>
        <div class="auth-subtitle mb-5">
            <span>Aplikasi internal rekam medik</span>
            <p>BLUD RSUD Kab. Buton</p>
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            @error('email')
            <div class="alert alert-danger alert-dismissible fade show text-sm" role="alert">
                <strong>Gagal!</strong> {{ $message }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror

            <div class="form-group position-relative has-icon-left mb-4">
                <input class="form-control form-control-xl" type="email" name="email"
                       placeholder="Email" id="email" value="user@gmail.com">
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input class="form-control form-control-xl" type="password" name="password"
                       placeholder="Password" id="password" value="sandi">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>

            <button class="btn btn-primary btn-block rounded-3 btn-lg mt-5">Masuk sini</button>
        </form>

        {{-- <div class="text-center mt-5 text-lg fs-4">
            @if (Route::has('register'))
            <p class="text-gray-600">Don't have an account? <a href="{{route('register')}}" class="font-bold">Sign
                    up</a>.</p>
            @endif


            @if (Route::has('password.request'))
            <p><a class="font-bold" href="{{route('password.request')}}">Forgot password?</a>.</p>
            @endif
        </div> --}}
    </div>

    @push('js')
        <script>
            $(function () {
                $('form').submit(function () {
                    let URL = "{{ route('api.login') }}";
                    let email = $('#email').val();
                    let password = $('#password').val();

                    $.ajax({
                        url: URL,
                        type: 'post',
                        data: {
                            'email': email,
                            'password': password
                        },
                        success: function (res) {
                            localStorage.setItem('token', res.token);
                        }
                    });
                });
            });
        </script>
    @endpush

</x-guest-layout>
