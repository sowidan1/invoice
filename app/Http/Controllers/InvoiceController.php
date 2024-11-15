<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        $units = Unit::get();
        // $invoice_details = In
        return view('invoice-details',get_defined_vars());
    }
}
