<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashboard</h3>
            </div>
        </div>
    </x-slot>

    @include('dashboard.statistic')
    @include('dashboard.barchart')
    @include('dashboard.last-request')

    @push('modal')
        @include('dashboard.modal.see-all')
    @endpush

    @push('js')
        @include('dashboard.script')
    @endpush

</x-app-layout>
