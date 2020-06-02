<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <form wire:submit.prevent="store">
        <div class="form-inline">
            <div class="form-group">
                <input type="text" wire:model="nama" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class=" ml-2 form-group">
                <input type="text" wire:model="nim" class="form-control" placeholder="Masukan NIM">
            </div>
            <div class="form-group">
                <input type="text" wire:model="jurusan" class=" ml-2 form-control" placeholder="Masukan Jurusan">
            </div>
            <button class=" ml-2 btn btn-primary">Tambah Data</button>
        </div>
    </form>
</div>
