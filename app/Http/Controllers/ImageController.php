<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Glide\ServerFactory;
use League\Glide\Responses\LaravelResponseFactory;

class ImageController extends Controller
{
    public function show(Request $request, $path)
    {
        $server = ServerFactory::create([
            'response' => app(LaravelResponseFactory::class),
            'source' => public_path('images'),
            'cache' => public_path('images'),
            'cache_path_prefix' => '.cache',
        ]);

        return $server->getImageResponse($path, $request->all());
    }
}
