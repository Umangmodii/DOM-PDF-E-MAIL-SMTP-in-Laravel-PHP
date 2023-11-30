<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use DB;  


class UserController extends Controller
{
    public function generatePdf()
    {
        $data = ['E-Mart | Online Store Invoice' => 'data'];

        $pdf = PDF::loadView('Pdf', $data);

        return $pdf->download('E-Mart | Online Store Invoice.pdf');
    }  
}
