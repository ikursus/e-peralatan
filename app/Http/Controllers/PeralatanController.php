<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peralatan;
use Illuminate\Http\Request;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $senaraiPeralatan = Peralatan::with(['rekodPendaftar'])->get();

        // dd($senaraiPeralatan);

        return view('peralatan.template-list-peralatan', compact('senaraiPeralatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peralatan.template-borang-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Buat validation
        $data = $request->validate([
            'nama_peralatan' => ['required'],
            'submission_id' => ['required', 'alpha_dash'],
            'nama_pembekal' => ['required'],
            'nama_jenama' => ['required'],
            'tarikh_pendaftaran' => ['required'],
            'status' => ['required', 'in:available,out_of_stock'],
        ]);

        // Cara 1 Simpan Data menggunakan Model
        // $peralatan = new Peralatan;
        // $peralatan->nama_peralatan = $request->input('nama_peralatan');
        // $peralatan->submission_id = $request->input('submission_id');
        // $peralatan->nama_pembekal = $request->input('nama_pembekal');
        // $peralatan->nama_jenama = $request->input('nama_jenama');
        // $peralatan->tarikh_pendaftaran = $request->input('tarikh_pendaftaran');
        // $peralatan->status = $request->input('status');
        // $peralatan->user_id = 1;
        // $peralatan->save();

        // Attach ID User (yang tengah login) kepada $data
        $data['user_id'] = auth()->id(); // Auth::id()

        // Cara 2 simpan data menggunakan Model
        Peralatan::create($data);

        // Beri respon supaya redirect ke halaman senarai peralatan dengan mesej berjaya
        return redirect()->route('peralatan.index')->with('mesej-berjaya', 'Rekod berjaya ditambah');
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
    // public function edit(string $id)
    public function edit(Peralatan $peralatan)
    {
        $senaraiPendaftar = User::select('id', 'name')->cursor();
        // $peralatan = Peralatan::where('id', '=', $id)->first();
        // $peralatan = Peralatan::find($id);

        return view('peralatan.template-borang-edit', compact('peralatan', 'senaraiPendaftar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peralatan $peralatan)
    {
        // Buat validation
        $data = $request->validate([
            'nama_peralatan' => ['required'],
            'submission_id' => ['required', 'alpha_dash'],
            'nama_pembekal' => ['required'],
            'nama_jenama' => ['required'],
            'tarikh_pendaftaran' => ['required'],
            'user_id' => ['required'],
            'status' => ['required', 'in:available,out_of_stock'],
        ]);

        // Cara 2 simpan data menggunakan Model
        $peralatan->update($data);

        // Beri respon supaya redirect ke halaman senarai peralatan dengan mesej berjaya
        return redirect()->route('peralatan.index')->with('mesej-berjaya', 'Rekod berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cara 1
        // Peralatan::where('id', '=', $id)->delete();

        // Cara 2
        // $peralatan = Peralatan::find($id);
        $peralatan = Peralatan::findOrFail($id);
        $peralatan->delete();

        return redirect()->route('peralatan.index')->with('mesej-berjaya', 'Rekod berjaya dihapuskan');
    }
}
