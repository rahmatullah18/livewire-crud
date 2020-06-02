@extends('layouts.app')

@section('title', 'Student')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <livewire:students.student-index>
            </div>
        </div>
    </div>

@endsection