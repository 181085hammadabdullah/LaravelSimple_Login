<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;
use DB;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_num='Roles';
        $data= Role::all();
        return view('role.list',compact('page_num','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_num = 'Role Create';
        $permission =Permission::pluck('name','id');
        return view('role.create',compact('permission','page_num'));

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

            'name' => 'required | min:3',
            'permission' => 'required | array',
            'permission.*' => 'required | string'
        ],[
            'name.required' => "Name field is Required",
            'permssion.required' => "You must select Permssions",
            'permission.*.required' => 'Youn Must select A permission'
        ]);
        $role = new Role();
        $role->name = $request->name;
        $role->display_name=$request->display_name;
        $role->description = $role->description;
        $role->save();
        foreach($request->permission as $key =>$value)
        {
            $role->attachPermission($value);
        }
        return redirect()->action('RoleController@index')
        ->with('success','Role Created Successfully');
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
        $page_num='Roles';
        $role= Role::find($id);
        $permission =Permission::pluck('name','id');
        $selectedPermission = DB::table('permission_role')
        ->where('permission_role.role_id',$id)->pluck('permission_id')
        ->toArray();
        return view('role.edit',compact('page_num','permission','selectedPermission','role'));
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

            'name' => 'required | min:3',
            'permission' => 'required | array',
            'permission.*' => 'required | string'
        ],[
            'name.required' => "Name field is Required",
            'permssion.required' => "You must select Permssions",
            'permission.*.required' => 'Youn Must select A permission'
        ]);
        $role = Role::find($id);
        $role->name = $request->name;
        $role->display_name=$request->display_name;
        $role->description = $role->description;
        $role->save();
        DB::table('permission_role')->where('role_id',$id)->delete();
        foreach($request->permission as $key =>$value)
        {
            $role->attachPermission($value);
        }
        return redirect()->action('RoleController@index')
        ->with('success','Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Role::where('id',$id)->delete();
        return redirect()->action('RoleController@index')
        ->with('success',"Role Delete SuccessFully");
    }
}
