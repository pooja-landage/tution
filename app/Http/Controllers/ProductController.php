<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function export() 
    {
        return Excel::download(new ProductExport, 'users.xlsx');
    }
}
