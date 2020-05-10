<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

// use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;


class AxiosPostController extends Controller
{
  public function index(Request $request)
  {
    return redirect()->back();
  }

  public function store(Request $request)
  {
    // $post = new Post;

    // $post->title = $request->title;
    // $post->text = $request->text;
    // $post->user_id = 2;
    // // $post->user_id = $request->user()->id;

    // $post->save();

    // $response = redirect('/');

    return redirect()->route('axios-post2');
  }
}
