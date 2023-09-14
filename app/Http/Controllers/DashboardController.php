<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Peralatan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $senaraiPeralatan = Peralatan::latest('id')->get();

        // $statistikPeralatanAvailable = Peralatan::where('status', '=', 'available')->count();
        $statistikPeralatanAvailable = Peralatan::whereStatus('available')->count();
        $statistikPeralatanOutOfStock = Peralatan::whereStatus('out_of_stock')->count();

        $statistikUserActive = User::whereStatus('active')->count();
        $statistikUserPending = User::whereStatus('pending')->count();

        $pageTitle = 'Dashboard';

        // Response papar template TANPA data
        // return view('template-dashboard');

        // Response Papar template DENGAN data - Cara 1
        // return view('template-dashboard')->with('senaraiPeralatan', $senaraiPeralatan)->with('pageTitle', $pageTitle);

        // Response Papar template DENGAN data - Cara 2
        // return view('template-dashboard', ['senaraiPeralatan' => $senaraiPeralatan, 'pageTitle' => $pageTitle]);

        // Response Papar template DENGAN data - Cara 3
        return view('template-dashboard', compact(
            'senaraiPeralatan',
            'pageTitle',
            'statistikPeralatanAvailable',
            'statistikPeralatanOutOfStock',
            'statistikUserActive',
            'statistikUserPending'
        ));
    }
}
