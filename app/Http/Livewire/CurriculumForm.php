<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Redirect;
use App\Models\Curriculum as Model;


class CurriculumForm extends Component
{
    public $formData = [
        'outcomes' => [],
        'ectsCount' => [],
    ];
    public $modelId;

    public function mount($formData, $modelId)
    {
        $this->formData = [
            'outcomes' => [
                ['number' => '', 'description' => '','direction' => '', 'type' => '', 'verification' => '', 'evaluation' => '']
            ],
            'ectsCount' => [
                ['type' => '', 'igk' => 'X','zbn' => 'X', 'zd' => 'X'],
            ]
        ];

        if ($formData) {
            $this->formData = array_merge($this->formData, $formData);
        }

        if ($modelId) {
            $this->modelId = $modelId;
        }
    }

    public function createCurriculum()
    {
        $dataToSave = $this->formData;
        $dataToSave['outcomes'] = json_encode($this->formData['outcomes']); 
        $dataToSave['outcomes'] = json_encode($this->formData['ectsCount']); 
        if (empty($this->modelId)) {
            Model::create($dataToSave);
        } else {
            $model = Model::find($this->modelId);
            $model->update($dataToSave);
        }

        return redirect()->route('home');
    }

    public function addOutcome()
    {
        $this->formData['outcomes'][] = ['number' => '', 'description' => '','direction' => '', 'type' => '', 'verification' => '', 'evaluation' => ''];
    }

    public function removeOutcome($index)
    {
        unset($this->formData['outcomes'][$index]);
        $this->formData['outcomes'] = array_values($this->formData['outcomes']);
    }


    
    public function addEctsCount()
    {
        $this->formData['ectsCount'][] = ['description' => '', 'igk' => 'X','zbn' => 'X', 'zd' => 'X'];
    }

    public function removeEctsCount($index)
    {
        unset($this->formData['ectsCount'][$index]);
        $this->formData['ectsCount'] = array_values($this->formData['ectsCount']);
    }


    public function render()
    {
        return view('livewire.curriculum-form');
    }
}
