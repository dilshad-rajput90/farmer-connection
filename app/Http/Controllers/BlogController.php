<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{


    public function index()
    {

       $data['data'] =  DB::table('posts')
                    ->join('attachments','posts.id','=','attachments.post_id')
                    ->join('mime_type','mime_type.id','=','attachments.mime_type_id')
                    ->get()
                    ->toArray();

    //   $data =   Post::with('Attachment','mime_type')
    //         //   ->select('')
    //     ->get();

    //            dd($data);


        return view('layouts/blog/blog_page',$data);

    }

    public function blog_list()
    {

               $data['data'] =  DB::table('posts')
                    ->join('attachments','posts.id','=','attachments.post_id')
                    ->join('mime_type','mime_type.id','=','attachments.mime_type_id')
                    ->get()
                    ->toArray();
        return view('layouts/admin/blog_list',$data);
    }



    public function blog_single($id)
    {

        // $data['users'] =  DB::table('posts')
        //     // ->join('attachments', 'posts.id', '=', 'attachments.post_id')
        //     ->where('post_id','=',$id)
        //     ->get()
        //     ->toArray();

       $data['record'] = Post::where('id','=',$id)
              ->with('attachment')
              ->get()
              ->toArray();

        $data['comments'] = Comment::where('post_id','=',$id)->get()->toArray();

        $data['users'] = User::with('profession')->get()->toArray();

        $data['categories'] = Category::get()->toArray();



        return view('layouts/blog/blog_single',$data);

    }




    public function comment(Request $request)
    {

           $post_id = $request->input('post_id');
           $author_id = $request->input('author_id');

            $data['comment'] =  $request->input('comment');
            $data['post_id'] =  $post_id;
            $data['user_id'] =  $author_id;

          Comment::create($data);

            return back();
        // return back()->with(['comments'=>'']);
        // return view('layouts.blog.blog_single',$comments);
        // $comments = Comment::find($post_id)->get()->toArray();
        // $comments['user_name'] = User::where( 'id','=',$author_id)->get()->toArray();


    }






}
