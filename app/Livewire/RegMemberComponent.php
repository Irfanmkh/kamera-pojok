<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class RegMemberComponent extends Component
{

    use WithFileUploads;

    public $nama, $tanggaljoin, $hp1, $hp2, $catatan, $jenis_member, $ktpPhoto, $facebookPhoto, $instagramPhoto;
    public $identitas = [];

    public function store(){
        $this->validate([
            'nama'=>'required',
            'tanggaljoin'=>'required|date',
            'hp1'=>'required',
            'hp2'=>'nullable',
            'catatan'=>'nullable',
            'jenis_member'=>'required',
            'identitas'=>'required|array|min:3',
            'ktpPhoto'=>'required|image|max:500',
            'facebookPhoto'=>'required|image|max:500',
            'instagramPhoto'=>'required|image|max:500',
        ]);
        $prefix = $this->jenis_member== 'GOLD' ? 'MG' : 'MS';
        $lastMember = Member::where('jenis_member', $this->jenis_member)
        ->orderBy('id', 'desc')
        ->first();

         // 2. Tentukan nomor urut untuk member baru
         if ($lastMember) {
        // Ambil nomor terakhir dan tambahkan 1
        $lastNumber = (int) substr($lastMember->kd_member, -3); // Ambil 3 digit terakhir dari kode member
        $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT); // Tambahkan 1 lalu padding menjadi 3 digit
    } else {
        $newNumber = '001'; // Jika belum ada member, mulai dari 001
    }

    // 3. Buat kode member
    $kd_member = $prefix . '-' . $newNumber;

    // 4. Simpan file yang diunggah
    $ktpPath = $this->ktpPhoto->store('ktp-uploads', 'public');
    $facebookPath = $this->facebookPhoto->store('facebook-uploads', 'public');
    $instagramPath = $this->instagramPhoto->store('instagram-uploads', 'public');

        Member::create([
            'kd_member' => $kd_member, // Kode member otomatis
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
        session()->flash('success', 'Data Berhasil Disimpan!');
        $this->reset();

        return redirect()->route('member');
    }


    
    public function register()
    {
        return view('livewire.reg-member-component');
    }

    


}
