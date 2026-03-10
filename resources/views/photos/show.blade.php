<!DOCTYPE html>
<html>
<head>
    <title>Detail Foto - {{ $photo->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <img src="{{ asset('storage/' . $photo->image_path) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>{{ $photo->judul }}</h3>
                    <p class="text-muted">Diunggah oleh: {{ $photo->user->name }}</p>
                    <hr>
                    <p>{{ $photo->deskripsi }}</p>
                    <a href="{{ route('photos.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">Komentar</div>
                <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                    @foreach($photo->comments as $comment)
                        <div class="mb-3 border-bottom pb-2">
                            <strong>{{ $comment->user->name }}</strong>
                            <p class="mb-1">{{ $comment->content }}</p>
                            
                            @if(auth()->user()->role == 'admin' || auth()->id() == $comment->user_id)
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-danger p-0" style="font-size: 0.8rem;">Hapus</button>
                                </form>
                            @endif
                        </div>
                    @endforeach

                    <form action="{{ route('comments.store') }}" method="POST" class="mt-4">
                        @csrf
                        <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                        <div class="mb-3">
                            <textarea name="content" class="form-control" placeholder="Tulis komentar..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm w-100">Kirim Komentar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>