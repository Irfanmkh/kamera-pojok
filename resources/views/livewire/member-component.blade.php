<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <div class="navbar-nav align-items-center ms-auto">
            <img src="{{ asset('assets/img/kamerapojoklogos.png') }}" alt="" style="width: 150px;">
            <h3 class="mb-4">Data Member</h3>
        </div>
        <div class="text-end">
            <button type="button" wire:click="register" class="btn btn-primary m-2">
                <i class="fa fa-plus me-2"></i>Tambah Member
            </button>


        </div>
        
        
        
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">kd member</th>
                        <th scope="col">nama</th>
                        <th scope="col">tgl join</th>
                        <th scope="col">jenis</th>
                        <th scope="col">no.hp 1</th>
                        <th scope="col">no.hp 2</th>
                        <th scope="col">catatan</th>
                        <th scope="col">identitas</th>
                        <th scope="col">jumlah trx</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($member as $data)
                    <tr>
                        <th scope="row">{{ $loop-iteration }}</th>
                        <td>{{ $data->kd_member }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tgl_join }}</td>
                        <td>{{ $data->jenis_member }}</td>
                        <td>{{ $data->no_hp1 }}</td>
                        <td>{{ $data->no_hp2 }}</td>
                        <td>{{ $data->catatan }}</td>
                        <td>{{ $data->identitas }}</td>
                        <td>{{ $data->jumlah_trx }}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    {{-- @if ($addPage)
    @include ('member.register')
    @endif --}}
</div>