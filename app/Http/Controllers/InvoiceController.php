<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Cart;

class InvoiceController extends Controller
{
    public function index($file) {
        return view('invoice', [
            "kirimcode" => $file,
            "info" => Transaction::where('file', $file)->get()
        ]);
    }
    
    public function invoice() {

    }
}
