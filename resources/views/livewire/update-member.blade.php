<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h4 class="mb-4">Update Member</h4>
        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}

                            </div>
                        @endif
        <form action{{ route('reg-member.store') }}" method="POST">
            <div class="row mb-3">
                <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="nama" id="nama">
                    @error('nama')
                    <span class="text-danger" style="font-size: 0.9rem;">Kolom Nama tidak boleh kosong!</span>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="inputTanggal3" class="col-sm-2 col-form-label">Tgl. Join</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" wire:model="tanggaljoin" id="tanggal" >
                    
                    @error('tanggaljoin')
                    <span class="text-danger" style="font-size: 0.9rem;">Kolom Tgl. Join tidak boleh kosong!</span>
                @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNo1" class="col-sm-2 col-form-label">No. Handphone 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="hp1" id="hp1">
                    @error('hp1')
                    <span class="text-danger" style="font-size: 0.9rem;">Kolom No. Handphone 1 tidak boleh kosong!</span>
                    @enderror
                </div>

            </div>
            <div class="row mb-3">
                <label for="inputNo2" class="col-sm-2 col-form-label">No. Handphone 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="hp2" id="hp2">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputCatatan3" class="col-sm-2 col-form-label">Catatan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" wire:model="catatan" id="catatan" rows="4" style="resize: none;"></textarea>
                </div>
            </div>

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Member</legend>
                <div class="col-sm-10">
                    <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="GOLD" wire:model="jenis_member">
                            <label class="form-check-label" for="gridRadios1">
                                <h5>GOLD</h5>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                value="SILVER" wire:model="jenis_member">
                            <label class="form-check-label" for="gridRadios2">
                                <h5>SILVER</h5>
                            </label>
                        </div>
                    </div>
                    @error('jenis_member')
                    <span class="text-danger" style="font-size: 0.9rem;">Harap pilih salah satu!</span>
                @enderror
                </div>
            </fieldset>

            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Identitas</legend>
                <div class="col-sm-10">
                    <div class="row">
                        <!-- Kolom pertama -->
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" value="E-KTP"
                                    wire:model="identitas">
                                <label class="form-check-label" for="gridCheck1">
                                    <h5>E-KTP</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2" value="KTM"
                                    wire:model="identitas">
                                <label class="form-check-label" for="gridCheck2">
                                    <h5>KTM</h5>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck4" value="KK"
                                    wire:model="identitas">
                                <label class="form-check-label" for="gridCheck4">
                                    <h5>KK</h5>
                                </label>
                            </div>

                        </div>
                        <!-- Kolom kedua -->
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck5" value="AKTA"
                                    wire:model="identitas">
                                <label class="form-check-label" for="gridCheck5">
                                    <h5>Akta Kelahiran</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck6" value="IJAZAH"
                                    wire:model="identitas">
                                <label class="form-check-label" for="gridCheck6">
                                    <h5>IJAZAH</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck7" value="BPKB"
                                    wire:model="identitas">
                                <label class="form-check-label" for="gridCheck7">
                                    <h5>BPKB</h5>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck8" value="PASSPORT"
                                        wire:model="identitas">
                                    <label class="form-check-label" for="gridCheck8">
                                        <h5>PASSPORT</h5>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck3" value="KP"
                                        wire:model="identitas">
                                    <label class="form-check-label" for="gridCheck3">
                                        <h5>Kartu Pelajar</h5>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck9" value="SIM"
                                        wire:model="identitas">
                                    <label class="form-check-label" for="gridCheck9">
                                        <h5>SIM</h5>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck10" value="NPWP"
                                    wire:model="identitas">
                                <label class="form-check-label" for="gridCheck10">
                                    <h5>NPWP</h5>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck11" value="BPJS"
                                    wire:model="identitas">
                                <label class="form-check-label" for="gridCheck11">
                                    <h5>BPJS</h5>
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- Pesan error -->
                    @error('identitas')
                    <span class="text-danger" style="font-size: 0.9rem;">Silahkan pilih minimal 3 identitas!</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="ktpPhoto" class="col-sm-2 col-form-label">Foto E-KTP</label>
                <div class="col-sm-10">
                    <input type="file" id="ktpPhoto" wire:model="ktpPhoto" class="form-control">
                    @error('ktpPhoto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            
                    <!-- Preview Gambar -->
                    @if ($ktpPhoto)
                        <div class="mt-2">
                            <p>Preview:</p>
                            <img src="{{ $ktpPhoto->temporaryUrl() }}" alt="Preview Foto E-KTP" class="img-thumbnail" width="150">
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="instagramPhoto" class="col-sm-2 col-form-label">Screenshot Instagram</label>
                <div class="col-sm-10">
                    <input type="file" id="instagramPhoto" wire:model="instagramPhoto" class="form-control">
                    @error('instagramPhoto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            
                    <!-- Preview Gambar -->
                    @if ($instagramPhoto)
                        <div class="mt-2">
                            <p>Preview:</p>
                            <img src="{{ $instagramPhoto->temporaryUrl() }}" alt="Preview Screenshot Instagram" class="img-thumbnail" width="150">
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="facebookPhoto" class="col-sm-2 col-form-label">Screenshot Facebook</label>
                <div class="col-sm-10">
                    <input type="file" id="facebookPhoto" wire:model="facebookPhoto" class="form-control">
                    @error('facebookPhoto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            
                    <!-- Preview Gambar -->
                    @if ($facebookPhoto)
                        <div class="mt-2">
                            <p>Preview:</p>
                            <img src="{{ $facebookPhoto->temporaryUrl() }}" alt="Preview Screenshot Facebook" class="img-thumbnail" width="150">
                        </div>
                    @endif
                </div>
            </div>
            
            {{-- <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" wire:click.prevent="save" class="btn btn-primary">Save Photos</button>
                </div>
            </div> --}}
            

            <div class="text-end">
                <button type="button" wire:click="update" class="btn btn-primary">
                    <h5 style="color: white">Update</h5>
                </button>
            </div>
        </form>
    </div>
</div>

{{-- @assets
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets

@script
    <script>
        new Pikaday({
            field: $wire.$el.querySelector('[data-picker]'),
            format: 'DD-MM-YYYY'
        });
    </script>
@endscript --}}
