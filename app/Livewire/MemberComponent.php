<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class MemberComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public$addPage = false;
    public function render()
    {
        $data['member'] = Member::paginate(5);
        return view('livewire.member-component', $data);
    }

    public function register(){

        $this->addPage=true;
        return redirect()->route('reg-member');
    }

}
