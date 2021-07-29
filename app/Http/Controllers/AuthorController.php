<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use Illuminate\Support\Facades\Hash;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_num= 'authors';
        $data = User::where('type',2)->get();
        return response()->json([
           'Page_Name'=>$page_num,
           'Data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_num = 'Role Create';
        $roles =Role::pluck('name','id');
        return view('author.create',compact('roles','page_num'));
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
            'email'=> 'required | unique:users,email',
            'password' => 'required | min:6',
            'roles' => 'required | array',
            'roles.*' => 'required | string'
        ],[
            'name.required' => "Name field is Required",
            'name.min' => "Name must have min 3 Charaters",
            'email.required' => 'Email Field Required',
            'email.email'=>'Invalid Email',
            'email.unique' => 'This email is already exists',
            'password.required' => 'Password Field Is Required',
            'password.min' => 'Password has Min 6 characters',
            'roles.required' => "You must select Roles",
            'roles.*.required' => 'Youn Must select A permission'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request['password']);
        $user->type=2;
        $user->save();
        foreach($request->roles as $key =>$value)
        {
            $user->attachRole($value);
        }
        return redirect()->action('AuthorController@index')
        ->with('success','User Created Successfully');
    
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
        $page_num='Author';
        $user= User::find($id);
        $roles =Role::pluck('name','id');
        $selectedRoles = DB::table('role_user')
        ->where('role_user.user_id',$id)->pluck('role_id')
        ->toArray();
        return view('Author.edit',compact('page_num','roles','selectedRoles','user'));
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
            'email'=> 'required | email',
            'password' => 'required | min:6',
            'roles' => 'required | array',
            'roles.*' => 'required | string'
        ],[
            'name.required' => "Name field is Required",
            'name.min' => "Name must have min 3 Charaters",
            'email.required' => 'Email Field Required',
            'email.email'=>'Invalid Email',
            'password.required' => 'Password Field Is Required',
            'password.min' => 'Password has Min 6 characters',
            'roles.required' => "You must select Roles",
            'roles.*.required' => 'Youn Must select A permission'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email=$request->email;
        $user->password = Hash::make($request['password']);
        $user->save();
        DB::table('role_user')->where('user_id',$id)->delete();
        foreach($request->roles as $key =>$value)
        {
            $user->attachRole($value);
        }
        return redirect()->action('AuthorController@index')
        ->with('success','User Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->action('AuthorController@index')
        ->with('success',"Author Delete SuccessFully");
    }
}
