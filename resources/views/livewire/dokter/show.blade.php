<div>
    <div class="table-responsive">
        <table class="table table-sm w-100" id="datatable">
            <thead>
                <tr>
                    <th scope=" col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIP</th>
                    <th scope="col">SIP</th>
                    <th scope="col">Verifikasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            {!! $dataTable->table(['class' => 'table table-bordered']) !!}
        </table>
    </div>
</div>

@push('scripts')
    {!! $dataTable->scripts() !!}
@endpush