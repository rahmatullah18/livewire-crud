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

    public function destroy($id)
    {
        if ($id) {
            $data = Student::find($id);
            $data->delete();

            session()->flash('Data ' . $data['nama'] . ' berhasil dihapus');
        }
    }
}
