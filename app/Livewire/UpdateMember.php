<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

use Livewire\WithFileUploads;



class UpdateMember extends Component
{

    use WithFileUploads;

    public $nama, $tanggaljoin, $hp1, $hp2, $catatan, $jenis_member, $ktpPhoto, $facebookPhoto, $instagramPhoto, $id;
    public $identitas;


    public function render()
    {
        return view('livewire.update-member');
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

    public function update(){

        $ktpPath = $this->ktpPhoto->store('ktp-uploads', 'public');
        $facebookPath = $this->facebookPhoto->store('facebook-uploads', 'public');
        $instagramPath = $this->instagramPhoto->store('instagram-uploads', 'public');

        $cari = Member::find($this->id);
        $cari->update([ 
            'nama' => $this->nama,
            'tgl_join' => $this->tanggaljoin,
            'no_hp1' => $this->hp1,
            'no_hp2' => $this->hp2,
            'catatan' => $this->catatan,
            'jenis_member' => $this->jenis_member,
            'identitas' => json_encode($this->identitas),
            'ktp_photo' => $ktpPath,
            'facebook_photo' => $facebookPath,
            'instagram_photo' => $instagramPath,
        ]);
        session()->flash('success', 'Data Berhasil Diupdate!');
        $this->reset();

        return redirect()->route('member');

    }
}
