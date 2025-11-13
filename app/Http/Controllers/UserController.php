<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\User;
use Illuminate\Support\Facades\Hash;
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        $data['dataUser'] = User::all();
		return view('admin.user.index',$data);
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('admin.user.create');
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        $request->validate([
            'name'  => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
		return redirect()->route('user.index')->with('success','Data Berhasil Ditambahkan!');
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
<<<<<<< HEAD
        //
=======
        $data['dataUser'] = User::findOrFail($id);
        return view('admin.user.edit', $data);
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
<<<<<<< HEAD
        //
=======
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        User::where('id', $id)->update($data);
        return redirect()->route('user.index')->with('success', 'Perubahan Data Berhasil!');
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        //
=======
        $user = User::findOrFail($id);

        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus!');
>>>>>>> d7d3480f9ae784cc4d04e6381a4f004922396251
    }
}
