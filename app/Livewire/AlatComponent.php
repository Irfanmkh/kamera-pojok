<?php

namespace App\Livewire;

use App\Models\Alat;
use Livewire\Component;
use Livewire\WithPagination;

class AlatComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $jenis_alat, $merk, $harga_sewa, $stok, $kondisi, $id;
    public function render()
    {
        $data['alat'] = Alat::paginate(5);
        return view('livewire.alat-component', $data);
    }

    public function register(){


        return redirect()->route('reg-alat');
    }

    public function destroy($id)
    {
        $cari=Alat::find($id);
        $cari->delete();
        session()->flash ('success', 'Sukses Menghapus Data!');
        $this->reset();
    }
}
