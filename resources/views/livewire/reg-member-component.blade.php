<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h4 class="mb-4">Form Pendaftaran Member</h4>
        <form>
            <div class="row mb-3">
                <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="nama" id="nama">
                </div>
                @error('nama')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputTanggal3" class="col-sm-2 col-form-label">Tgl. Join</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="tanggal" id="tanggal" data-picker>
                </div>
                @error('tanggal')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputNo1" class="col-sm-2 col-form-label">No. Handphone 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="hp1" id="hp1">
                </div>
                @error('hp1')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputNo2" class="col-sm-2 col-form-label">No. Handphone 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="hp2" id="hp2">
                </div>
                @error('hp2')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="inputCatatan3" class="col-sm-2 col-form-label">Catatan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" wire:model="catatan" id="catatan" rows="4" style="resize: none;"></textarea>
                </div>
                @error('catatan')
                <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Member</legend>
                <div class="col-sm-10">
                    <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="GOLD" wire:model="jenis_member">
                            <label class="form-check-label" for="gridRadios1">
                                <h5>GOLD</h5>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="SILVER" wire:model="jenis_member">
                            <label class="form-check-label" for="gridRadios2">
                                <h5>SILVER</h5>
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            
            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Identitas</legend>
                <div class="col-sm-10">
                    <div class="row">
                        <!-- Kolom pertama -->
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" value="E-KTP" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck1">
                                    <h5>E-KTP</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2" value="KTM" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck2">
                                    <h5>KTM</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck3" value="KP" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck3">
                                    <h5>Kartu Pelajar</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck4" value="KK" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck4">
                                    <h5>KK</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck5" value="AKTA" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck5">
                                    <h5>Akta Kelahiran</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck6" value="IJAZAH" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck6">
                                    <h5>IJAZAH</h5>
                                </label>
                            </div>
                        </div>
                        <!-- Kolom kedua -->
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck7" value="BPKB" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck7">
                                    <h5>BPKB</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck8" value="PASSPORT" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck8">
                                    <h5>PASSPORT</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck9" value="SIM" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck9">
                                    <h5>SIM</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck10" value="NPWP" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck10">
                                    <h5>NPWP</h5>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck11" value="BPJS" wire:model="identitas">
                                <label class="form-check-label" for="gridCheck11">
                                    <h5>BPJS</h5>
                                </label>
                            </div>
                        </div>
                    </div>
            
                    <!-- Pesan error -->
                    @error('identitas')
                    <span class="text-danger">Silakan pilih minimal 3 identitas.</span>
                    @enderror
                </div>
            </div>
            
            
            <div class="text-end">
                <button type="button" wire:click="store"  class="btn btn-primary"><h5 style="color: white">REGISTER</h5></button>
            </div>
        </form>
    </div>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js" defer></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
@endassets
 
@script
<script>
    new Pikaday({ field: $wire.$el.querySelector('[data-picker]'),
    format: 'DD-MM-YYYY'

     });
</script>
@endscript
