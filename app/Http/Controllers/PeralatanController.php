<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $senaraiPeralatan = [
            // Data 1
            [
                'nama_peralatan' => 'Facemask',
                'submission_id' => 'ABC123',
                'nama_pembekal' => 'Syarikat ABC',
                'nama_jenama' => 'Jovian',
                'tarikh_pendaftaran' => '2023-09-11'
            ],
            // Data 2
            [
                'nama_peralatan' => 'Latex Glove',
                'submission_id' => 'XYZ123',
                'nama_pembekal' => 'Syarikat XYZ',
                'nama_jenama' => 'Hantam',
                'tarikh_pendaftaran' => '2023-09-11'
            ],
            // Data 3
            [
                'nama_peralatan' => 'Contact Lens',
                'submission_id' => 'JKL123',
                'nama_pembekal' => 'Syarikat JKL',
                'nama_jenama' => 'Test',
                'tarikh_pendaftaran' => '2023-09-11'
            ],
            // Data 4
            [
                'nama_peralatan' => 'Picagari',
                'submission_id' => 'FGH123',
                'nama_pembekal' => 'Syarikat FGH',
                'nama_jenama' => 'ABC Test',
                'tarikh_pendaftaran' => '2023-09-09'
            ],
        ];

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
        //
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
