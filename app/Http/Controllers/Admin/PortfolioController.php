<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index() {
        $portfolioItems = \App\PortfolioItem::get();
        return view('admin.portfolio')->with(compact('portfolioItems'));
    }
}
