<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class RegMemberComponent extends Component
{

    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $photo;
    public function render()
    {
        return view('livewire.reg-member-component');
    }
}
