<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Student;
class StudentCreate extends Component
{
    public $nama,$nim,$jurusan;

    public function render()
    {
        return view('livewire.student.student-create');
    }

    public function store()
    {
        $student = Student::create([
            'nama' => $this->nama,
            'nim' => $this->nim,
            'jurusan' => $this->jurusan,
        ]);

        $this->resetInput();
        $this->emit('studentStored', $student);
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->nim = null;
        $this->jurusan = null;
    }
}
