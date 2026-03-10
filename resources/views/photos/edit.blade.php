<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h3>Edit Produk</h3>
            <hr>
            
            <form action="{{ route('photos.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $photo->judul }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Saat Ini</label><br>
                    <img src="{{ asset('storage/' . $photo->image_path) }}" class="img-thumbnail mb-2" style="width: 150px; display: block;">
                    <input type="file" name="image_path" class="form-control">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3" required>{{ $photo->deskripsi }}</textarea>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('photos.index') }}" class="btn btn-link text-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>