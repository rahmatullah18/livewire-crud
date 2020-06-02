<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row">
        <div class="col-12 mb-4">
            @if ($updateStatus === true)
                <livewire:student.student-update>
                @else
                <livewire:student.student-create>
            @endif
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = ($students->currentpage()-1)* $students->perpage() + 1;
            @endphp
            @foreach ($students as $student)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>{{ $student->jurusan }}</td>
                    <td>
                        <button wire:click="getStudent({{ $student->id }})" class="btn btn-warning">Edit</button>
                        <button wire:click="destroy({{ $student->id }})" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                @php
                    $i += 1;
                @endphp   
            @endforeach
        </tbody>
    </table>
    {!! $students->links() !!}
</div>
