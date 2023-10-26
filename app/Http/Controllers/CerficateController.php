<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use PDF;

class CerficateController extends Controller
{
    public function index(Request $request)
	{
	    $user = User::get();

	    $data = [
	            'title' => 'How To Create PDF File Using DomPDF In Laravel 9 - Techsolutionstuff',
	            'date' => date('d/m/Y'),
	            'users' => $user
	    ];

	        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('index',$data);
	        return $pdf->download('users_pdf_example.pdf');
	    
        exit;
	    return view('index',compact('user'));
	}
}
