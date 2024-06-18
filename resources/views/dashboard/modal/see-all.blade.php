@php
    $status = [
        'PENDING' => 'bg-light-warning',
        'APPROVED' => 'bg-light-success',
    ]
@endphp

<div class="modal fade" id="seeAll" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Data permintaan SKBS hari ini</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="table-responsive">
                    <table id="datatable" class="table table-hover w-100">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pasien</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Dokter Pemeriksa</th>
                            <th scope="col">Oleh</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($applicationsToday as $application)
                            <tr>
                                <td class="col-auto">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="col-auto">
                                    {{ $application->patients->name }}
                                </td>
                                <td class="col-auto">
                                    {{ $application->purposes }}
                                </td>
                                <td class="col-auto">
                                    dr. {{ $application->doctors->name }}
                                </td>
                                <td class="col-auto">
                                    {{ date('d M Y - H:m T ', strtotime($application->created_at)) }}
                                </td>
                                <td class="col-auto">
                                    <span
                                        class=" badge rounded-pill {{ $status[$application->status] ?? 'bg-light-danger' }} ">
                                            {{ Str::title($application->status) }}
                                    </span>
                                </td>
                                <td class="col-auto">
                                    {{ $application->users->name }}
                                </td>
                                <td class="col-auto">
                                    <div class="btn-group" role="group">
                                        <div class="mx-1">
                                            <form action="{{ route('application.approve', $application->id) }}"
                                                  method="POST">
                                                @csrf @method('PUT')
                                                <button type="submit" data-id="{{ $application->id }}"
                                                        class="btn btn-sm btn-success rounded-3"
                                                        id="print-window">
                                                    <i class="bi bi-printer"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="mx-1">
                                            <form action="{{ route('application.destroy', $application->id) }}"
                                                  method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-sm btn-danger rounded-3 delete-dialog">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">
                                    <p class="fw-bold text-danger text-center text-uppercase">Data kosong!</p>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <div class="row col-12 d-flex">
                    <div class="col-6 col-lg-6 d-flex justify-content-start">
                        <a href="{{ route('application.index') }}" class="btn btn-primary">
                            Ke menu permintaan
                        </a>
                    </div>
                    <div class="col-6 col-lg-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary left" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
