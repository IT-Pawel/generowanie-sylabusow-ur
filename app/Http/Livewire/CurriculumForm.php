<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Redirect;
use App\Models\Curriculum as Model;


class CurriculumForm extends Component
{
    public $formData;
    public $modelId;

    public function mount($formData, $modelId)
    {
        $this->formData = $formData;
        if (!empty($modelId)) {
            $this->modelId = $modelId;
        }
    }

    public function createCurriculum()
    {
        if (empty($this->modelId)) {
            Model::create(['formData' => json_encode($this->only(['formData']))]);
        } else {
            Model::find($this->modelId)->update(['formData' => json_encode($this->only(['formData']))]);
        }

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.curriculum-form');
    }
}
