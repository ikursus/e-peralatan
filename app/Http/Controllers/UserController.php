<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\EmailSelamatDatang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        ->paginate(20);

        // dd($senaraiPengguna);

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
        // DB::table('users')->insert($data);
        $user = User::create($data);

        // Hantar Email kepada user baru ini
        Mail::to($user->email)->send(new EmailSelamatDatang($user));

        // Beri respon supaya redirect ke halaman senarai users dengan mesej berjaya
        return redirect()->route('users.index')->with('mesej-berjaya', 'Rekod berjaya ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengguna = User::findOrFail($id);

        // $senaraiPeralatan = DB::table('users')
        //             ->join('peralatan', 'users.id', '=', 'peralatan.user_id')
        //             ->where('user_id', $id)
        //             ->get();

        return view('users.template-show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengguna = DB::table('users')->where('id', '=', $id)->first();

        return view('users.template-borang-edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Dapatkan data daripada proses validation
        $data = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email:filter'],
            'status' => ['required']
        ]);

        // Semak jika password di isi.
        if ($request->has('password') && $request->filled('password'))
        {
            $request->validate([
                'password' => ['min:4', 'confirmed'],
            ]);

            // Kemudian, encrypt password yang telah divalidasi
            // Dan attachkan kembali kepada $data
            $data['password'] = bcrypt($request->input('password'));
        }

        // Simpan data ke dalam table users menggunakan kaedah Query Builder
        DB::table('users')->where('id', '=', $id)->update($data);

        // Beri respon supaya redirect ke halaman senarai users dengan mesej berjaya
        return redirect()->route('users.index')->with('mesej-berjaya', 'Rekod berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id', '=', $id)->delete();

        // Beri respon supaya redirect ke halaman senarai users dengan mesej berjaya
        return redirect()->route('users.index')->with('mesej-berjaya', 'Rekod berjaya dihapuskan');
    }
}
