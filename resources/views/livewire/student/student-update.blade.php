<div>
    {{-- Be like water. --}}
    <form wire:submit.prevent="update">
        <input type="hidden" wire:model="studentId">
        <div class="row">
            <div class="col">
                <input type="text" wire:model="nama" class="form-control
                @error('nama') is-invalid @enderror">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="text" wire:model="nim" class="form-control
                @error('nim') is-invalid @enderror">
                @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <input type="text" wire:model="jurusan" class=" form-control
                @error('jurusan') is-invalid @enderror">
                @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <button class=" ml-2 btn btn-warning">Update Data</button>
            </div>
        </div>
    </form>
</div>
