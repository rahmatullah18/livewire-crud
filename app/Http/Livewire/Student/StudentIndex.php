<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Student;
use Livewire\WithPagination;

class StudentIndex extends Component
{

    use WithPagination;

    public function render()
    {
        $students = Student::latest()->paginate(5);
        return view('livewire.student.student-index', compact('students'));
    }
}
