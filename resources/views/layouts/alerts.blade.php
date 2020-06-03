@if (session('tambah'))
    <div class="alert alert-success">{{ session('tambah') }}</div>
    @elseif(session('hapus'))
    <div class="alert alert-danger">{{ session('hapus') }}</div>
    @elseif(session('update'))
    <div class="alert alert-success">{{ session('update') }}</div>
@endif