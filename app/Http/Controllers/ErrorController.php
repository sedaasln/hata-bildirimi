<?php

namespace App\Http\Controllers;
use App\Models\Error;
use App\Models\Kategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $errors=Error::all();
        return view('items.list',array('errors' => $errors));
    }
    public function detail($id)
    {
        $error=Error::find($id);
        $kategory=Kategory::where('id',$error->kategoryId)->get();
        return view('items.detail',array('error' => $error, 'kategory' => $kategory));
    }
}
