<x-maz-sidebar :href="route('dashboard')" :logo="asset('images/logo/logo.png')">

    <!-- Add Sidebar Menu Items Here -->
    <x-maz-sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Permintaan" :link="route('application.index')"
                        icon="bi bi-collection-fill"></x-maz-sidebar-item>

    <x-maz-sidebar-item name="Master data" icon="bi bi-stack">
        <x-maz-sidebar-sub-item name="Pasien" :link="route('patient.index')"></x-maz-sidebar-sub-item>
        <x-maz-sidebar-sub-item name="Dokter" :link="route('doctor.index')"></x-maz-sidebar-sub-item>
    </x-maz-sidebar-item>

    <x-maz-sidebar-item name="Laporan" :link="route('dashboard')" icon="bi bi-menu-app-fill"></x-maz-sidebar-item>

    @hasrole('admin')
        <x-maz-sidebar-item name="Setelan" icon="bi bi-gear-fill">
            <x-maz-sidebar-sub-item name="Administrator" :link="route('user.index')"></x-maz-sidebar-sub-item>
            {{--<x-maz-sidebar-sub-item name="Jenis Pemeriksaan" :link="route('checkup-type.index')"></x-maz-sidebar-sub-item>--}}
            <x-maz-sidebar-sub-item name="Setelan umum" :link="route('preference.index')"></x-maz-sidebar-sub-item>
        </x-maz-sidebar-item>
    @endrole

</x-maz-sidebar>

