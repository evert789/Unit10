<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\UserCrud;

class UserController extends Controller
{
    public function index()
    {
        return UserCrud::all();
    }

    public function store(Request $request)
    {
        $userCrud = UserCrud::create($request->all());
        return response()->json($userCrud, 201);
    }

    public function show($id)
    {
        return UserCrud::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $userCrud = UserCrud::findOrFail($id);
        $userCrud->update($request->all());
        return response()->json($userCrud, 200);
    }

    public function destroy($id)
    {
        UserCrud::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
