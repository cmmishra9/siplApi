<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResource;
use Illuminate\Http\Request;
use App\Tag;
class TagController extends Controller
{
    public function index(){
        // $categories = Category::with(['user'])->paginate(setting('record_per_page', 15));
        return view('tags.index');
    }

    public function all(){
        return TagResource::collection(Tag::all());
    }
}
