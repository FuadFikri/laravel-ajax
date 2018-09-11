<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

use Yajra\DataTables\Datatables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apiContact(){
        $contact = Contact::all();
        return Datatables::of($contact)
            ->addColumn('action', function($contact){
            return  '<a href="#" class="btn btn-info btn-xs" style="margin:2px;"><i class="glyphicon glyphicon-eye-open"></i>Show</a>'.
                    '<a onclick="editForm('. $contact->id . ')" style="margin:2px;" class="btn btn-primary btn-xs"><i class =glyphicon glyphicon-eye-edit"></i>Edit</a>' .
                    '<a onclick="editForm('. $contact->id . ')" style="margin:2px;" class="btn btn-danger btn-xs"><i class =glyphicon glyphicon-eye-edit"></i>Delete</a>';
        })->make(true);
    }
}
