<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productImage;
use Image;

class PagesController extends Controller
{
    public function index(){
        return view('backend.pages.index');
    }


}
