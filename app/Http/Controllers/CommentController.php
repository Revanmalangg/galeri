<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|min:5',
            'photo_id' => 'required|exists:photos,id', 
        ]);

        Comment::create([
            'content'  => $request->input('content'),
            'photo_id' => $request->photo_id,
            'user_id' => auth()->id(),
        ]);

        return back()->with('success', 'Komentar berhasil dikirim!');
    }

    public function destroy(Comment $comment)
    {
        if (auth()->user()->role !== 'admin' && auth()->id() !== $comment->user_id) {
            return back()->with('error', 'Kamu tidak punya akses untuk menghapus komentar ini!');
        }

        $comment->delete();
        return back()->with('success', 'Komentar berhasil dihapus!');
    }
}