<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $senaraiPeralatan = [
            // Data 1
            [
                'id' => 1,
                'nama_peralatan' => 'Facemask',
                'submission_id' => 'ABC123',
                'nama_pembekal' => 'Syarikat ABC',
                'nama_jenama' => 'Jovian',
                'tarikh_pendaftaran' => '2023-09-11'
            ],
            // Data 2
            [
                'id' => 2,
                'nama_peralatan' => 'Latex Glove',
                'submission_id' => 'XYZ123',
                'nama_pembekal' => 'Syarikat XYZ',
                'nama_jenama' => 'Hantam',
                'tarikh_pendaftaran' => '2023-09-11'
            ],
            // Data 3
            [
                'id' => 3,
                'nama_peralatan' => 'Contact Lens',
                'submission_id' => 'JKL123',
                'nama_pembekal' => 'Syarikat JKL',
                'nama_jenama' => 'Test',
                'tarikh_pendaftaran' => '2023-09-11'
            ],
            // Data 4
            [
                'id' => 4,
                'nama_peralatan' => 'Picagari',
                'submission_id' => 'FGH123',
                'nama_pembekal' => 'Syarikat FGH',
                'nama_jenama' => 'ABC Test',
                'tarikh_pendaftaran' => '2023-09-09'
            ],
        ];

        $pageTitle = 'Dashboard';

        // Response papar template TANPA data
        // return view('template-dashboard');

        // Response Papar template DENGAN data - Cara 1
        // return view('template-dashboard')->with('senaraiPeralatan', $senaraiPeralatan)->with('pageTitle', $pageTitle);

        // Response Papar template DENGAN data - Cara 2
        // return view('template-dashboard', ['senaraiPeralatan' => $senaraiPeralatan, 'pageTitle' => $pageTitle]);

        // Response Papar template DENGAN data - Cara 3
        return view('template-dashboard', compact('senaraiPeralatan', 'pageTitle'));
    }
}
