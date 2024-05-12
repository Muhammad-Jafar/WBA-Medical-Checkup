<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Setelan</h3>
                <p class="text-subtitle text-muted">Setelan dapat disesuaikan dengan kebutuhan</p>
            </div>
            {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('preference.index') }}">Setelan</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </nav>
            </div> --}}
        </div>
    </x-slot>

    <div>
        <section>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Setelan umum
                    </h4>
                    <p class="card-description">
                        Preferensi yang tersedia untuk kebutuhan setelan umum
                    </p>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover table-borderless w-100">
                            <tbody>
                                @foreach ($preference as $pref)
                                    <tr>
                                        <td class="col-10">
                                            <div class="row d-flex align-items-center">
                                                <h5 class="text-gray-600">
                                                    {{ $pref->name }}
                                                </h5>
                                                <p class="text-gray-600">
                                                    {{ $pref->desc }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class="font-bold">
                                                @if ($pref->status == 0) FALSE
                                                @else TRUE
                                                @endif
                                            </p>
                                        </td>
                                        <td class="col-auto">
                                            <h5>{{ $pref->input }}</h5>
                                        </td>
                                        <td class="col-auto">
                                            <button type="button" data-id="{{ $pref->id }}" data-bs-toggle="modal"
                                                data-bs-target="#editDailyLimitModal" class="btn btn-primary btn-sm applicant-daily-limit">
                                                <i class="bi bi-pencil"></i>
                                                Edit
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        {{-- <div class="d-flex align-items-center">
                            <div class="col-10 col-lg-10">
                                <div><i class="bi bi-trash"></i></div>
                                <div class="ms-3">
                                    <h6 class="text-gray-300">
                                        {{ $pref->name }}
                                    </h6>
                                    <p class="text-sm text-gray-500">
                                        {{ $pref->desc }}
                                    </p>
                                </div>
                            </div>
                            <p class="col-2 col-lg-2">
                                {{ $pref->input }}
                            </p>
                        </div> --}}
                </div>
            </div>
        </section>
    </div>

    @push('modal')
        @include('preference.modal.edit')
    @endpush

    @push('js')
        @include('preference.script')
    @endpush

</x-app-layout>

                    {{-- <ul class="nav nav-tabs" id="settingsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="umum-tab" href="#umum" role="tab" data-bs-toggle="tab" aria-controls="umum">
                                Umum
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="preferensi-tab" href="#preferensi" role="tab" data-bs-toggle="tab" aria-controls="preferensi">
                                Preferensi
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="lainnya-tab" href="#lainnya" role="tab" data-bs-toggle="tab" aria-controls="lainnya">
                            Lainnya
                        </a></li>
                    </ul>
                    <div class="tab-content" id="settingsTabContent">
                        <div class="tab-pane fade" id="umum" role="tabpanel" aria-labelledby="umum-tab">
                            <div class="mt-4">
                                <h5>Setelan umum</h5>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="preferensi" role="tabpanel" aria-labelledby="preferensi-tab">
                            <div class="my-2">
                                Setelan preferensi
                            </div>
                        </div>
                        <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
                            <div class="my-2">
                                Setelan lainnya
                            </div>
                        </div>
                    </div> --}}
