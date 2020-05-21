<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Content;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
//    public function index(Requsest $request)
    public function index()
    {
        $contents = Content::all();
        return $contents;
    }

    public function create()
    {
        return view('contents.create');
    }

    public function save(Request $request)
    {
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
