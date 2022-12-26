<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('pages.backend.users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('pages.backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'roles' => 'required',
            'photo' => 'required|image|unique:users,photo|mimes:jpg,png,jpeg,gif,svg|max:2048'

        ], [
            'name.required' => 'Please fill in this field',
            'email.required' => 'Please fill in this field',
            'email.email' => 'Please fill in valid email address like <b>xyyd@gmail.com</b>',
            'email.unique' => 'This email already in use',
            'photo.required' => 'Please choose image',
            'photo.image' => 'Please choose image only',
            'photo.unique' => 'The file with the same name exist,rename then try again',
            'photo.max' => 'File size in more than 2MB i.e. 2048KB',
            'photo.mimes' => 'Please choose image in this format jpg,png,jpeg,gif,svg',
        ]);

        $imageName = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->move('uploads/', $imageName);
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'roles' => $request->input('roles'),
            'photo' =>  $imageName,
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('pages.backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('pages.backend.users.edit', compact('user', 'roles', 'userRole'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'roles' => 'required'
        ], [
            'name.required' => 'Please fill in this field',
            'email.required' => 'Please fill in this field',
            'email.email' => 'Please fill in valid email address like <b>xyyd@gmail.com</b>',
            'email.unique' => 'This email already in use',
        ]);

        $input = $request->all();
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->hasRole('Super admin')) {
            return to_route('users.index')->with('success', "You can't delete this user");
        } elseif (auth()->user()->id == $user->id) {
            dd(auth()->user()->id == $user->id);
            //return to_route('users.index')->with('success', "Don't commit suicide");
        } else {
            $user->delete();
            return redirect()->route('users.index')
                ->with('success', 'User deleted successfully');
        }
    }
}