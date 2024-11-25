<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('frontend.index');
    }
    public function Brochure()
    {
        $filePath = public_path('Brochure.pdf');
        $headers = ['Content-Type' => 'application/pdf'];
        return response()->download($filePath, 'Brochure.pdf', $headers);
    }
    


    public function tc()
    {
        return view('frontend.termsandcondition');
    }

    public function privacypolicy()
    {
        return view('frontend.privacypolicy');
    }

    public function underConstruction()
    {
        return view('frontend.layout.underConstruction');
    }

}