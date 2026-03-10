<!DOCTYPE html>
<html>
<head>
    <title>Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-light bg-light border-bottom mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">GALERI</a>
        <div class="d-flex align-items-center">
            <small class="text-muted me-3">{{ auth()->user()->name }} ({{ auth()->user()->role }})</small>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-link text-danger text-decoration-none">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Koleksi Foto</h4>
        @if(auth()->user()->role == 'admin')
            <a href="{{ route('photos.create') }}" class="btn btn-sm btn-dark">+ Tambah</a>
        @endif
    </div>

    @if(session('success'))
        <div class="alert alert-success py-2" style="font-size: 0.9rem;">{{ session('success') }}</div>
    @endif

    <div class="row g-3">
        @foreach($photos as $photo)
            <div class="col-6 col-md-3">
                <div class="border rounded p-2">
                    <img src="{{ asset('storage/' . $photo->image_path) }}" class="img-fluid rounded mb-2" style="height: 150px; width: 100%; object-fit: cover;">
                    
                    <h6 class="mb-1 text-truncate">{{ $photo->judul }}</h6>
                    
                    <div class="d-flex gap-2 mt-2">
                        <a href="{{ route('photos.show', $photo->id) }}" class="btn btn-sm btn-outline-secondary w-100" style="font-size: 0.75rem;">Detail</a>
                        
                        @if(auth()->user()->role == 'admin')
                            <a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-sm btn-outline-warning" style="font-size: 0.75rem;">Edit</a>
                            <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" style="font-size: 0.75rem;">X</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>