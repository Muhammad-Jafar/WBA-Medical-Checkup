<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dokter</h3>
                {{-- <p class="text-subtitle text-muted">Daftar dokter.</p> --}}
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Master data</a></li>
                        <li class="breadcrumb-item active">Dokter</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <div>
        <section>
            <div class="card">
                <div class="card-header">
                    <h4>Daftar dokter</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </section>
    </div>

</x-app-layout>
