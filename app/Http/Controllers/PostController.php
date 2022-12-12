<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        // $post = Post::all();
        // $post = DB::table('posts')->get();
        // dd($post);
        // return  'ok';

        // $post = new Post;
        // $post->title = 'new post';
        // $post->content='new content';
        // $post->status=1;
        // $post->save();

        $allPosts = Post::cursor();

        foreach($allPosts as $post){
            echo $post->title.'<br/>';
        }

    }

    public  function add(){
        $dataInsert = [
            'title'=> 'Cô gái 26 tuổi có thu nhập hơn 10 tỷ đồng/năm nhờ tháo dỡ điện thoại cũ',
            'content'=>'Cô gái 26 tuổi có thu nhập hơn 10 tỷ đồng/năm nhờ tháo dỡ điện thoại cũ',
            'status'=> 1
        ];

        // $post = Post::create($dataInsert);

        // $postStatus = Post::insert($dataInsert);

        // $post = Post::firstOrCreate([
        //     'id' => 14,
        // ],$dataInsert);

        $post = new Post;
        $post->title = 'title';
        $post->content = 'content';
        $post->status = 1;
        $post->save();

        echo 'id insert: '.$post->id;
    }

    public  function update($id){
        $post = Post::find($id);
        // $post->title = 'title update 1';
        // $post->content = 'content update 1';
        // $post->status = 1;
        // $post->save();

        // echo 'id insert: '.$post;

        $dataUpdate = [
            'title' => 'Bài viết 3',
            'content' => 'Bài viết 3',
            'status'=> 1,
        ];

        // $status = $post->update($dataUpdate);
        // $status = Post::where('id',$id)->update($dataUpdate);

        $status = Post::updateOrCreate([
            'id'=>$id
        ],$dataUpdate);

        dd($status);

    }
}
