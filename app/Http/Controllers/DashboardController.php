<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $type = $user->membership_type;

        if ($type === 'A') {
            $limit = 3;
        } elseif ($type === 'B') {
            $limit = 10;
        } else {
            $limit = 100;
        }

        $articles = Content::where('type', 'article')->limit($limit)->get();
        $videos = Content::where('type', 'video')->limit($limit)->get();

        return view('dashboard', compact('articles', 'videos', 'type'));
    }
}
