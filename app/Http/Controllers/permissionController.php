<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
class permissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'Permission';
        $data = Permission::all();
        return view('permission.list',compact('data','page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required | alpha_num'
        ],[
            'name.required'=>'Name Field is Required',
            'name.alpha_num'=>"This field accepts numeric data"

        ]);
        $permission = new  Permission(); 
        $permission->name=$request->name;
        $permission->display_name=$request->display_name;
        $permission->description=$request->description;
        $permission->save();
        return redirect()->action('permissionController@index')
        ->with('success',"Permission Create SuccessFully");
 
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
        $page_num = 'Permission Edit';
        $permission = Permission::find($id);
        return view('permission.edit',compact('permission','page_num'));

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
        $this->validate($request,[
            'name'=>'required | alpha_num'
        ],[
            'name.required'=>'Name Field is Required',
            'name.alpha_num'=>"This field accepts numeric data"

        ]);
        $permission = Permission::find($id); 
        $permission->name=$request->name;
        $permission->display_name=$request->display_name;
        $permission->description=$request->description;
        $permission->save();
        return redirect()->action('permissionController@index')
        ->with('success',"Permission Updated SuccessFully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::find($id); 
        $permission->delete();
        return redirect()->action('permissionController@index')
        ->with('success',"Permission Delete SuccessFully");
    }
}
