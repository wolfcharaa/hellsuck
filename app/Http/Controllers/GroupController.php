<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function add(Request $request) {
        $data = $request->toArray();
        $group = new Group();
        $group->name = $data['name'];
        $group->save();
        return new JsonResponse($data);
    }

    public function getAll() {
        return new JsonResponse(Group::all());
    }
}
