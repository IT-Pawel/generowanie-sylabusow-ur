<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CurriculumShow extends Component
{
    public $formData;

    public function mount($formData)
    {
        $this->formData = $formData;
    }

    public function render()
    {
        return view('livewire.curriculum-show');
    }
}
