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
                        <th scope="col">KD Member</th>
                        <th scope="col">Nama</th>
                        <th scope="col" >Tgl. Join</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">No.HP 1</th>
                        <th scope="col">No.HP 2</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Identitas</th>
                        <th scope="col">Jumlah trx</th>
                        {{-- <th scope="col">E-KTP</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Instagram</th> --}}
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($member as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td >{{ $data->kd_member }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ date('d-m-y', strtotime($data->tgl_join)) }}</td>
                        <td>{{ $data->jenis_member }}</td>
                        <td>{{ $data->no_hp1 }}</td>
                        <td>{{ $data->no_hp2 }}</td>
                        <td>{{ $data->catatan }}</td>
                        <td>
                            <?php
                            $identitas = json_decode($data->identitas, true); 

                            if (is_array($identitas)) {
                                echo implode(", ", $identitas);
                            } else {
                                echo $data->identitas;
                            }
                            ?>
                        </td>
                        <td>{{ $data->jumlah_trx }}</td>
                        {{-- <td>{{ $data->ktp_photo }}</td>
                        <td>{{ $data->facebook_photo }}</td>
                        <td>{{ $data->instagram_photo }}</td> --}}
                        <td class="d-flex gap-2">
                            <button class="btn btn-primary" wire:click="edit({{ $data->id }})">Edit</button>
                            <button class="btn btn-danger" wire:click="destroy({{ $data->id }})">Delete</button>
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