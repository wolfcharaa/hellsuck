<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello() {
        return new JsonResponse("Hello world");
    }

    public function sum(Request $request) {
        $a = $request->get("a");
        $b = $request->get("b");
        return new JsonResponse([
           "sum" => $a + $b
        ]);
    }
}
