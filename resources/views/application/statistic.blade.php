<div class="col col-lg-12">
    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card card-stat">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldWork"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Hari ini</h6>
                            <h5 class="font-extrabold mb-0"> {{ $repo['todayApplicant'] }} </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card card-stat">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldTicket"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Sisa Permintaan</h6>
                            <h5 class="font-extrabold mb-0"> {{ $repo['recentApplicant'] }} </h5>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a href="{{ route('cash-transactions.index') }}">

            </a> --}}
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card card-stat">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="iconly-boldWork"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Bulan ini</h6>
                            <h5 class="font-extrabold mb-0"> {{ $repo['currentMonthApplicant'] }} </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card card-stat">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="iconly-boldTicket"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Tahun ini</h6>
                            <h5 class="font-extrabold mb-0"> {{ $repo['currentYearApplicant'] }} </h5>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a href="{{ route('cash-transactions.index') }}">

            </a> --}}
        </div>
    </div>
</div>
