<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <form wire:submit.prevent="store">
        <div class="row">
            <div class="col">
                <input type="text" wire:model="nama" 
                class="form-control
                @error('nama') is-invalid @enderror" 
                placeholder="Masukan Nama">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class=" col">
                <input type="text" wire:model="nim" class="form-control
                @error('nim') is-invalid @enderror" 
                placeholder="Masukan NIM">
                @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="text" wire:model="jurusan" class="form-control
                @error('jurusan') is-invalid @enderror" 
                placeholder="Masukan Jurusan">
                @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <button class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
</div>
