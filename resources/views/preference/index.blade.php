<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Setelan</h3>
                <p class="text-subtitle text-muted">Setelan dapat disesuaikan dengan kebutuhan</p>
            </div>
        </div>
    </x-slot>

    <div>
        <section>
            <div class="card">
                {{--                <div class="card-header">--}}
                {{--                    <h4 class="card-title">--}}
                {{--                        Setelan umum--}}
                {{--                    </h4>--}}
                {{--                    <p class="card-description">--}}
                {{--                        Preferensi yang tersedia untuk kebutuhan setelan umum--}}
                {{--                    </p>--}}
                {{--                </div>--}}
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover w-100">
                            <tbody>
                            @foreach ($preference as $pref)
                                <tr>
                                    <td class="col-10">
                                        <div class="row d-flex align-items-center">
                                                <span class="text-2xl font-bold">
                                                    {{ $pref->name }}
                                                </span>
                                            <span class="text-gray-600">
                                                    {{ $pref->desc }}
                                                </span>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                            <span class="font-semibold">
                                                @if ($pref->status == 0)
                                                    FALSE
                                                @else
                                                    TRUE
                                                @endif
                                            </span>
                                    </td>
                                    <td class="col-auto">
                                        <span>{{ $pref->input }}</span>
                                    </td>
                                    <td class="col-auto">
                                        <button type="button" data-id="{{ $pref->id }}" data-bs-toggle="modal"
                                                data-bs-target="#editDailyLimitModal"
                                                class="btn btn-sm btn-light-secondary applicant-daily-limit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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
