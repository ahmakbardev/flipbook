<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        $perPage = 9;
        $currentPage = $request->get('page', 1);

        $pdfs = Pdf::skip(($currentPage - 1) * $perPage)->take($perPage)->get();
        $totalPdfs = Pdf::count();

        return view('index', compact('pdfs', 'currentPage', 'totalPdfs', 'perPage'));
    }
    public function login()
    {

        return view('login');
    }


    public function show(Pdf $pdf)
    {
        $pdfPath = storage_path('app/public/' . $pdf->file_path);
        if (file_exists($pdfPath)) {
            // get file size in bytes
            $pdf->size = filesize($pdfPath);
        } else {
            $pdf->size = 0;
        }
        return view('details', compact('pdf'));
    }


}
