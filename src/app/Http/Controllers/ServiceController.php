<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)
                          ->orderBy('order', 'asc')
                          ->get();
                          
        return view('pages.home', compact('services'));
    }
    
    public function getServices()
    {
        $services = Service::where('is_active', true)
                          ->orderBy('order', 'asc')
                          ->get();
                          
        return $services;
    }
}

