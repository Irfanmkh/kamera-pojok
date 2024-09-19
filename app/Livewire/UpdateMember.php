<?php

namespace App\Livewire;

use App\Models\Member;
use DateTime;
use Livewire\Component;

use Livewire\WithFileUploads;



class UpdateMember extends Component
{

    use WithFileUploads;

    public $nama, $tanggaljoin, $hp1, $hp2, $catatan, $jenis_member, $ktpPhoto, $facebookPhoto, $instagramPhoto, $id, $kd_member;
    public $identitas;


    public function mount($id)
    {
        $this->edit($id); // Ambil data member
    }

    public function render()
    {
        return view('livewire.update-member');
    }

    public function edit($id)
    {
        // Assign data member ke variabel Livewire
        $cari=Member::find($id);
        $this->id = $cari->id;
        $this->nama = $cari->nama;
        $this->tanggaljoin = \Carbon\Carbon::parse($cari->tgl_join)->format('Y-m-d');
        $this->hp1 = $cari->no_hp1;
        $this->hp2 = $cari->no_hp2;
        $this->catatan = $cari->catatan;
        $this->jenis_member = $cari->jenis_member;
        $this->identitas = json_decode($cari->identitas, true);
    }



    public function update(){
        $this->validate([
            'nama'=>'required',
            'tanggaljoin'=>'required|date',
            'hp1'=>'required',
            'hp2'=>'nullable',
            'catatan'=>'nullable',
            'jenis_member'=>'required',
            'identitas'=>'required|array|min:3',
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
    $this->kd_member = $prefix . '-' . $newNumber;

    $dateTime = new DateTime();
    $formattedDate = $dateTime->format('Y-m-d');
    $formatTime = $dateTime->format('H.i.s');
    $extension = $this->ktpPhoto->getClientOriginalExtension();


        $cari = Member::find($this->id);
        if ($this->ktpPhoto){
            unlink(public_path('storage/ktp/' .$cari->ktp_photo));
            // Filename to store
            $filenamektp= $this->kd_member.' ('. $formattedDate .' at '. $formatTime .')'. '.'.$extension;
            $this->ktpPhoto->storeAs('public/ktp', $filenamektp);

            $cari->update([
                'kd_member' => $this->kd_member, 
                'nama' => $this->nama,
                'tgl_join' => $this->tanggaljoin,
                'no_hp1' => $this->hp1,
                'no_hp2' => $this->hp2,
                'catatan' => $this->catatan,
                'jenis_member' => $this->jenis_member,
                'identitas' => json_encode($this->identitas),
                'ktp_photo' => $filenamektp,
            ]);

        }
        
        else if($this->facebookPhoto){
            unlink(public_path('storage/fb/' .$cari->facebook_photo));
            // Filename to store
            $extension = $this->facebookPhoto->getClientOriginalExtension();
            // Filename to store
            $filenamefb= $this->kd_member.' ('. $formattedDate .' at '. $formatTime .')'. '.'.$extension;
            $this->facebookPhoto->storeAs('public/fb', $filenamefb);
            
            $cari->update([
                'kd_member' => $this->kd_member, 
                'nama' => $this->nama,
                'tgl_join' => $this->tanggaljoin,
                'no_hp1' => $this->hp1,
                'no_hp2' => $this->hp2,
                'catatan' => $this->catatan,
                'jenis_member' => $this->jenis_member,
                'identitas' => json_encode($this->identitas),
                'facebook_photo' => $filenamefb,
                
            ]);

        } else if($this->instagramPhoto){
            unlink(public_path('storage/ig/' .$cari->instagram_photo));
            
            
            $extension = $this->instagramPhoto->getClientOriginalExtension();
            // Filename to store
            $filenameig= $this->kd_member.' ('. $formattedDate .' at '. $formatTime .')'. '.'.$extension;
            $this->instagramPhoto->storeAs('public/ig', $filenameig);


            $cari->update([
                'kd_member' => $this->kd_member, 
                'nama' => $this->nama,
                'tgl_join' => $this->tanggaljoin,
                'no_hp1' => $this->hp1,
                'no_hp2' => $this->hp2,
                'catatan' => $this->catatan,
                'jenis_member' => $this->jenis_member,
                'identitas' => json_encode($this->identitas),
                'instagram_photo' => $filenameig,
            ]);
        } else{
            $cari->update([
                'kd_member' => $this->kd_member, 
                'nama' => $this->nama,
                'tgl_join' => $this->tanggaljoin,
                'no_hp1' => $this->hp1,
                'no_hp2' => $this->hp2,
                'catatan' => $this->catatan,
                'jenis_member' => $this->jenis_member,
                'identitas' => json_encode($this->identitas),
            ]);

        }
           

        session()->flash('success', 'Data Berhasil Diupdate!');
        $this->reset();

        return redirect()->route('member');
    }
}
