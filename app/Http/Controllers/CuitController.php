<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CuitController extends Controller
{
    public function post(Request $request): RedirectResponse {
        Post::create([
            'user_id' => Auth::id(),
            'content' => $request->content 
        ]);

        return redirect('/')->with('success', 'Your post has been saved!');
    }
}
