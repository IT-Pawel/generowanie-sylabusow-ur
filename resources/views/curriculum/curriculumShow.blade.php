@extends('layouts.app')

@section('content')
    @livewire('curriculum-show', ['formData' => $formData])
@endsection