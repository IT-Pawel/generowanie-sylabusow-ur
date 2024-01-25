@extends('layouts.app')

@section('content')
    @isset($inlineCss)
    <style>
        {!! $inlineCss !!}
    </style>
    @endif
    @livewire('curriculum-show', ['formData' => $formData])
@endsection