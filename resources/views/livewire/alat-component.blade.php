<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="navbar-nav align-items-center ms-auto">
            <img src="{{ asset('assets/img/kamerapojoklogos.png') }}" alt="" style="width: 150px;">
            <h3 class="mb-4">Inventory Assets</h3>
        </div>
        <div class="text-end">
            <button type="button" wire:click="register" class="btn btn-primary m-2">
                <i class="fa fa-plus me-2"></i>Tambah Alat
            </button>


        </div>
        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}

                            </div>
                        @endif
        
        <div class="table-responsive">
            <table class="table" style="width: 100%; table-layout: auto; white-space: nowrap; text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" >Nama</th>
                        <th scope="col">KD Alat</th>
                        <th scope="col">Jenis Alat</th>
                        <th scope="col">Harga Sewa</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alat as $data)
                    <tr class="{{ $data->kondisi == 'baik' ? 'table-success' : ($data->kondisi == 'rusak' ? 'table-danger' : '') }}">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->merk }}</td>
                        <td >{{ $data->kd_alat }}</td>
                        <td>{{ $data->jenis_alat }}</td>
                        <td>{{ 'Rp ' . number_format($data->harga_sewa, 0, ',', '.') .' /day' }}</td>
                        <td>{{ $data->stok }}</td>
                        <td>{{ $data->kondisi }}</td>
                        <td class="d-flex justify-content-center align-items-center gap-2">
                            <button class="btn btn-primary" wire:click="edit({{ $data->id }})">Edit</button>
                            <button class="btn btn-danger" wire:click="destroy({{ $data->id }})">Delete</button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>