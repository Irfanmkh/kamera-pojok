@extends('layout.template')

@section('title', 'KameraPojok - Update Member')
@section('content')
    
@livewire('update-member', ['id' => $id])

@endsection