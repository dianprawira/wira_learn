<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return $model = Album::all();
    }

    public function store(Request $req)
    {
        $model = new Album();
        $model->title = $req->title;
        $model->save();
        return $model;
    }
}
