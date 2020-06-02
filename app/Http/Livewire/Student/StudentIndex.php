<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Student;
use Livewire\WithPagination;

class StudentIndex extends Component
{

    use WithPagination;
    public $updateStatus = false;


    public $listeners = [
        'studentStored'
    ];

    public function render()
    {
        $students = Student::latest()->paginate(5);
        return view('livewire.student.student-index', compact('students'));
    }

    public function studentStored($student)
    {
        session()->flash('tambah', 'Data ' . $student['nama'] . ' Ditambahkan');
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Student::find($id);
            $data->delete();

            session()->flash('hapus','Data ' . $data['nama'] . ' berhasil dihapus');
        }
    }

    public function getStudent($id)
    {
        $this->updateStatus = true;
        $student = Student::find($id);
        $this->emit('getStudent', $student);
    }
}
