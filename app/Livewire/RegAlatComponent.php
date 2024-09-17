<?php

namespace App\Livewire;

use App\Models\Alat;
use Livewire\Component;

class RegAlatComponent extends Component
{

    public $kd_alat, $jenis_alat, $merk, $harga_sewa, $stok, $kondisi, $id;

    public function store()
    { 
        $this->validate([
            
            'kd_alat'=>'required',
            'jenis_alat'=>'required',
            'merk'=>'required',
            'harga_sewa'=>'required|numeric',
            'stok'=>'required|numeric',
            'kondisi'=>'required',
        ]);


        Alat::create([
            'kd_alat'=>$this->kd_alat,
            'jenis_alat'=>$this->jenis_alat,
            'merk'=>$this->merk,
            'harga_sewa'=>$this->harga_sewa,
            'stok'=>$this->stok,
            'kondisi'=>$this->kondisi,
        ]);
        session()->flash('success', 'Data Berhasil Disimpan!');
        $this->reset();

        return redirect()->route('alat');
    }

    public function render()
    {
        return view('livewire.reg-alat-component');
    }
}
