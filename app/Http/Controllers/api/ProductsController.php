<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller {

    public function index() {
        $path = storage_path('app/data.json');

        if (!File::exists($path)) {
            return response()->json([
                'error' => 'Dosya bulunamadı.'
            ], 404);
        }

        $json = File::get($path);
        $data = json_decode($json, true);

        return response()->json([
            'data' => $data
        ]);
    }
}
