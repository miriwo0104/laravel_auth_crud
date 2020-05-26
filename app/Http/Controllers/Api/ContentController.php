<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Content;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContentPost;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return $contents;
    }

    public function save(StoreContentPost $request)
    {
        $new_content = new Content();
        $new_content->title = $request['title'];
        $new_content->detail = $request['detail'];
        $new_content->save();

        return redirect(route('api_content.index'));
    }
}
