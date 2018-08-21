<?php

namespace App\Http\Controllers;

use App\PaperModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paperModel = PaperModel::orderBy('created_at', 'desc')->paginate(6);
        return view('list')->with('list_obj', $paperModel);
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {


    }

    public function destroy($id)
    {
//
    }
}