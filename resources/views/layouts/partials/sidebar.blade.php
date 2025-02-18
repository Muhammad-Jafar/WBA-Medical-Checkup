<x-maz-sidebar :href="route('dashboard')" :logo="asset('images/logo/logo.png')">

    <x-maz-sidebar-menu titleMenu="Menu">
        <x-maz-sidebar-item name="Dashboard"
                            :link="route('dashboard')"
                            route="dashboard"
                            icon="bi bi-grid-fill">
        </x-maz-sidebar-item>
        <x-maz-sidebar-item name="Permintaan"
                            :link="route('application.index')"
                            route="application.index"
                            icon="bi bi-envelope-paper-fill">
        </x-maz-sidebar-item>
    </x-maz-sidebar-menu>

    <x-maz-sidebar-menu titleMenu="Master data">
        <x-maz-sidebar-item name="Pasien"
                            :link="route('patient.index')"
                            route="patient.index"
                            icon="bi bi-file-earmark-person-fill">
        </x-maz-sidebar-item>
        <x-maz-sidebar-item name="Dokter"
                            :link="route('doctor.index')"
                            route="doctor.index"
                            icon="bi bi-person-square">
        </x-maz-sidebar-item>
    </x-maz-sidebar-menu>

    <x-maz-sidebar-menu titleMenu="Laporan">
        <x-maz-sidebar-item name="Laporan"
                            :link="route('report')"
                            route="report"
                            icon="bi bi-file-earmark-bar-graph-fill">

        </x-maz-sidebar-item>
    </x-maz-sidebar-menu>

    @hasrole('admin')
    <x-maz-sidebar-menu titleMenu="Setelan">
        <x-maz-sidebar-item name="Jenis Pemeriksaan"
                            :link="route('checkup-type.index')"
                            route="checkup-type.index"
                            icon="bi bi-file-earmark-medical-fill">
        </x-maz-sidebar-item>
        <x-maz-sidebar-item name="Administrator"
                            :link="route('user.index')"
                            route="user.index"
                            icon="bi bi-person-lines-fill">
        </x-maz-sidebar-item>
        <x-maz-sidebar-item name="Setelan umum"
                            :link="route('preference.index')"
                            route="preference.index"
                            icon="bi bi-gear-fill">
        </x-maz-sidebar-item>
    </x-maz-sidebar-menu>
    @endrole

</x-maz-sidebar>
