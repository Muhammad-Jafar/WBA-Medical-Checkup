<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan</h3>
            </div>
        </div>
    </x-slot>

    <div>
        <section>
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover w-100">

                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('js')
        @include('reports.script')
    @endpush

</x-app-layout>
