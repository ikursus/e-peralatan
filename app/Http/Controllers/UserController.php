<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $senaraiPengguna = DB::table('users')
        // ->where('status', '=', 'pending')
        // ->latest('id') // orderBy('id', 'asc') // desc
        ->get();

        return view('users.template-list-users', compact('senaraiPengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.template-borang-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Dapatkan data daripada proses validation
        $data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email:filter'],
            'password' => ['required', 'min:4', 'confirmed'],
            'status' => ['required']
        ]);

        // Kemudian, encrypt password yang telah divalidasi
        // Dan attachkan kembali kepada $data
        $data['password'] = bcrypt($data['password']);

        // Simpan data ke dalam table users menggunakan kaedah Query Builder
        DB::table('users')->insert($data);

        // Beri respon supaya redirect ke halaman senarai users dengan mesej berjaya
        return redirect()->route('users.index')->with('mesej-berjaya', 'Rekod berjaya ditambah');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
