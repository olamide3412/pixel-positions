<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        //dd(request('q'));

        return view('results', ['jobs' => $tag->jobs]);
    }
}
