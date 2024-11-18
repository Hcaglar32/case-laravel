<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller {

    public function index() {
        $url = 'https://raw.githubusercontent.com/hcaglar32/case-laravel/main/storage/app/data.json';

        $response = Http::get($url);

        if ($response->failed()) {
            return response()->json([
                'error' => 'Dosya alınamadı.'
            ], 404);
        }

        $data = $response->json();

        return response()->json([
            'data' => $data
        ]);
    }
}
