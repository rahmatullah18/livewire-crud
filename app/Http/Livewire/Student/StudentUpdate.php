<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Student;

class StudentUpdate extends Component
{
    public $nama,$nim,$jurusan,$studentId;

    public $listeners = [
        'getStudent'
    ];

    public function render()
    {
        return view('livewire.student.student-update');
    }

    public function getStudent($student)
    {
        $this->nama = $student['nama'];
        $this->nim = $student['nim'];
        $this->jurusan = $student['jurusan'];
        $this->studentId = $student['id'];
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'nim' => 'required|max:6',
            'jurusan' => 'required',
        ]);
        
        if ($this->id) {
            $student = Student::find($this->studentId);
            $student->update([
                'nama' => $this->nama,
                'nim' => $this->nim,
                'jurusan' => $this->jurusan,
            ]);

            $this->resetInput();
            $this->emit('studentUpdated', $student);
        }
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->nim = null;
        $this->jurusan = null;
        
    }
}
