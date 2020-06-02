<div>
    {{-- Be like water. --}}
    <form wire:submit.prevent="update">
        <input type="hidden" wire:model="studentId">
        <div class="form-inline">
            <div class="form-group">
                <input type="text" wire:model="nama" class="form-control">
            </div>
            <div class=" ml-2 form-group">
                <input type="text" wire:model="nim" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" wire:model="jurusan" class=" ml-2 form-control">
            </div>
            <button class=" ml-2 btn btn-warning">Update Data</button>
        </div>
    </form>
</div>
