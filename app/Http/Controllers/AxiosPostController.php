<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

// use App\Http\Controllers\Controller;

use Illuminate\Http\RedirectResponse;

use App\Post;


class AxiosPostController extends Controller
{
  public function index()
  {
    $posts = Post::take(10)->get();
    // \Log::info('ログ出力テスト');

    return response()->json(['posts' => $posts]);
  }

  public function store(Request $request)
  {
    $post = new Post;

    $post->title = $request->title;
    $post->text = $request->text;
    $post->user_id = 2;
    // $post->user_id = $request->user()->id;

    $post->save();


    // \Log::info('ログ出力テスト');

    // return redirect()->route('axios-post2');
  }

  public function destroy($id)
  {

    \Log::info('test');

    $post = Post::find($id);

    $post->delete();
  }
}
