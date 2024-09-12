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

    public function edit($id)
    {

        $cari=Member::find($id);
        $this->id = $cari->id;
        $this->nama = $cari->nama;
        $this->tanggaljoin = $cari->tgl_join;
        $this->hp1 = $cari->no_hp1;
        $this->hp2 = $cari->no_hp2;
        $this->catatan = $cari->catatan;
        $this->jenis_member = $cari->jenis_member;
        $this->identitas= $cari->identitas;
        $this->ktpPhoto = $cari->ktp_photo;
        $this->facebookPhoto = $cari->facebook_photo;
        $this->instagramPhoto = $cari->instagram_photo;

        return redirect()->route('update-member');
    }
}
