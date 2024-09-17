<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h4 class="mb-4">Tambah Alat</h4>
        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}

                            </div>
                        @endif
        <form action{{ route('reg-alat.store') }}" method="POST">
            <div class="row mb-3">
                <label for="inputNama3" class="col-sm-2 col-form-label">Kd. Alat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="kd_alat" id="kd_alat">
                    @error('nama')
                    <span class="text-danger" style="font-size: 0.9rem;">Kolom Kode Alat tidak boleh kosong!</span>
                    @enderror
                </div>
            </div>
            
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Alat</legend>
                <div class="col-sm-10">
                    <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="jenis_alat" id="jenis_alat"
                                value="baik" wire:model="jenis_alat">
                            <label class="form-check-label" for="gridRadios1">
                                <h6>Kamera</h6>
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="jenis_alat" id="jenis_alat"
                                value="baik" wire:model="jenis_alat">
                            <label class="form-check-label" for="gridRadios2">
                                <h6>Lensa</h6>
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="jenis_alat" id="jenis_alat"
                                value="baik" wire:model="jenis_alat">
                            <label class="form-check-label" for="gridRadios3">
                                <h6>Sound</h6>
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="jenis_alat" id="jenis_alat"
                                value="baik" wire:model="jenis_alat">
                            <label class="form-check-label" for="gridRadios4">
                                <h6>Lighting</h6>
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="jenis_alat" id="jenis_alat"
                                value="baik" wire:model="jenis_alat">
                            <label class="form-check-label" for="gridRadios5">
                                <h6>Equipment</h6>
                            </label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="jenis_alat" id="jenis_alat"
                                value="baik" wire:model="jenis_alat">
                            <label class="form-check-label" for="gridRadios6">
                                <h6>Battery & Storage</h6>
                            </label>
                        </div>
                    </div>
                    @error('jenis_member')
                    <span class="text-danger" style="font-size: 0.9rem;">Harap pilih salah satu!</span>
                @enderror
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="inputNo1" class="col-sm-2 col-form-label">Merk</label>
                <div class="col-sm-10">
                    <input type="" class="form-control" wire:model="merk" id="merk">
                    @error('hp1')
                    <span class="text-danger" style="font-size: 0.9rem;">Kolom Merk tidak boleh kosong!</span>
                    @enderror
                </div>

            </div>
            <div class="row mb-3">
                <label for="sewa" class="col-sm-2 col-form-label">Harga Sewa</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" wire:model.defer="harga_sewa" id="harga_sewa" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" wire:model="stok" id="stok">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Kondisi</legend>
                <div class="col-sm-10">
                    <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="kondisi" id="kondisi"
                                value="baik" wire:model="kondisi">
                            <label class="form-check-label" for="gridRadios1">
                                <h6>Baik</h6>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kondisi" id="kondisi"
                                value="rusak" wire:model="kondisi">
                            <label class="form-check-label" for="gridRadios2">
                                <h6>Rusak</h6>
                            </label>
                        </div>
                    </div>
                    @error('jenis_member')
                    <span class="text-danger" style="font-size: 0.9rem;">Harap pilih salah satu!</span>
                @enderror
                </div>
            </fieldset>
            
            {{-- <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" wire:click.prevent="save" class="btn btn-primary">Save Photos</button>
                </div>
            </div> --}}
            

            <div class="text-end">
                <button type="button" wire:click="store" class="btn btn-primary">
                    <h5 style="color: white">REGISTER</h5>
                </button>
            </div>
        </form>
    </div>
</div>


