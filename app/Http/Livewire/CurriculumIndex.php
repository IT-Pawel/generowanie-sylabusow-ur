<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Curriculum;

class CurriculumIndex extends Component
{
    public $curriculumIds;
    
    public function mount()
    {
        $this->curriculumIds = Curriculum::pluck('id');
    }
    public function render()
    {
        return view('livewire.curriculum-index');
    }
}
