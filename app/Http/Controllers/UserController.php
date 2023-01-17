<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.users.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->password;
        $validasi = [
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed'
        ];


        $data = $request->validate($validasi);

        $data['password'] = Hash::make($data['password']);

        // return $validasi['password'];

        User::create($data);
        return redirect('/dashboard/users')->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('dashboard.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('dashboard.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //

        $validasi = [
            // 'email' => 'required|email|unique:users',
            'name' => 'required'
            // 'username' => 'required|unique:users',
            // 'password' => 'required|confirmed'
        ];

        if ($request->username != $user->username) {
            $validasi['username'] = 'required|unique:users';
        }

        $data = $request->validate($validasi);


        User::where('id', $user->id)->update($data);
        return redirect('/dashboard/users')->with('success', 'Data Postingan Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        User::destroy($user->id);
        return redirect('/dashboard/users')->with('success', 'Data User Berhasil dihapus!');
    }
}
