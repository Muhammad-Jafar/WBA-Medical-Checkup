<x-maz-sidebar :href="route('dashboard')" :logo="asset('images/logo/logo.png')">

    <!-- Add Sidebar Menu Items Here -->

    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Permintaan" :link="route('permintaan')" icon="bi bi-collection-fill"></x-maz-sidebar-item>

    <x-maz-sidebar-item name="Master data" icon="bi bi-stack">
        <x-maz-sidebar-sub-item name="Pasien" :link="route('master.patient')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Dokter" :link="route('master.doctor.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>

    {{-- <x-maz-sidebar-item name="Admin" icon="bi bi-stack">
        <x-maz-sidebar-sub-item name="Accordion" :link="route('components.accordion')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Alert" :link="route('components.alert')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item> --}}

    <x-maz-sidebar-item name="Laporan" :link="route('dashboard')" icon="bi bi-menu-app-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Setelan" :link="route('settings')" icon="bi bi-gear-fill"></x-maz-sidebar-item>

    {{-- <x-maz-sidebar-item name="Component" icon="bi bi-stack">
        <x-maz-sidebar-sub-item name="Accordion" :link="route('components.accordion')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Alert" :link="route('components.alert')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item> --}}

</x-maz-sidebar>
