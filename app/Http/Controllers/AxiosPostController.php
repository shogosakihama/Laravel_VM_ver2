<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

// use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;

use App\Post;


class AxiosPostController extends Controller
{
  public function index(Request $request)
  {
    return redirect()->back();
  }

  public function store(Request $request)
  {
    $post = new Post;

    $post->title = $request->title;
    $post->text = $request->text;
    $post->user_id = 2;
    // $post->user_id = $request->user()->id;

    $post->save();


    \Log::info('ログ出力テスト');

    // return redirect()->route('axios-post2');
  }
}
