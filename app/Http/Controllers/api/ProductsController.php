<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProductsController extends Controller {

    public function index() {
        $path = storage_path('./data.json');

        $response = Http::get($path);

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
