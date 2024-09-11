<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class RegMemberComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.reg-member-component');
    }

}
