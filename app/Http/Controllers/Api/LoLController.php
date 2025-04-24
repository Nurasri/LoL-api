<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\LoLService;
use Illuminate\Http\Request;

class LoLController extends Controller
{
    protected $apiService; 
 
    // Menambahkan dependensi pada constructor 
    public function __construct(LoLService $apiService) 
    { 
        $this->apiService = $apiService; 
    } 
 
    // Method untuk mendapatkan semua tim 
    public function getRegion() 
    { 
        // Ambil data tim dari API 
        $data = $this->apiService->getRegion(); 
        return view('bandle-city', ['data' => $data]);
    }
}
