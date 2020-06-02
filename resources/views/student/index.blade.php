@extends('layouts.app')

@section('title', 'Student')

@section('content')
    
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <livewire:student.student-index>
            </div>
        </div>
    </div>

@endsection