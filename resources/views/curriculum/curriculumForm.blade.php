@extends('layouts.app')

@section('content')
    @if(isset($formData))
        @livewire('curriculum-form', ['formData' => $formData, 'modelId'=> $modelId ])
    @else
        @livewire('curriculum-form', ['formData' => [], 'modelId' => 0 ])
    @endif
@endsection