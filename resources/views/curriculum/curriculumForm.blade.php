@extends('layouts.app')

@section('content')
    @livewire('curriculum-form', ['formData' => $formData, 'modelId'=> $modelId ])
@endsection