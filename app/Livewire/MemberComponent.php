<?php

namespace App\Livewire;

use App\Models\Member;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class MemberComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nama, $tanggaljoin, $hp1, $hp2, $catatan, $jenis_member, $identitas, $ktpPhoto, $facebookPhoto, $instagramPhoto, $id;
    public function render()
    {
        $data['member'] = Member::paginate(5);
        return view('livewire.member-component', $data);
    }

    public function register(){


        return redirect()->route('reg-member');
    }

    public function destroy($id)
    {
        $cari=Member::find($id);
        $cari->delete();
        session()->flash ('success', 'Sukses Menghapus Data!');
        $this->reset();
    }

}
