<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
//    public function index(Requsest $request)
    public function index()
    {
        $contents = Content::all();
        return view('contents.index', ['contents' => $contents]);
    }

    public function create()
    {
        return view('contents.create');
    }

    public function save(Request $request)
    {
        //バリデーションルール定義
        $rules = [
            'title' => ['required'],
            'detail' => ['required'],
        ];

        //ルールを使用した確認
        $this->validate($request, $rules);


        $new_content = new Content();
        $new_content->title = $request['title'];
        $new_content->detail = $request['detail'];
        $new_content->save();

        return redirect(route('content.index'));
    }

    public function detail($content_id)
    {
        $content = Content::find($content_id);
        return view('contents.detail', ['content' => $content]);
    }
    
    public function edit($content_id)
    {
        
        $content = Content::find($content_id);
        return view('contents.edit', ['content' => $content]);
    }

    public function update($content_id, Request $request)
    {
        $content = Content::find($content_id);
        $content->title = $request['title'];
        $content->detail = $request['detail'];
        $content->save();
        return redirect(route('content.index'));
    }

    public function destroy($content_id)
    {
        $content = Content::find($content_id);
        $content->delete();
        return redirect(route('content.index'));
    }

}
