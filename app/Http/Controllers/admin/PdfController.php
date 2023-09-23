<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PdfController extends Controller
{
    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }

    public function index()
    {
        $user = Auth::user();
        $this->fpdf->SetFont('Arial', 'B', 15);
        $this->fpdf->AddPage("L", ['100', '100']);
        $this->fpdf->Text(10, 10, "Hello World! ". iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $user->name));

        $this->fpdf->Output();

        exit;
    }
}
