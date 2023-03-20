<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * メンバー作成.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return response()->json($user);
    }

    /**
     * メンバー取得.
     *
     * @param Request $request
     * @return void
     */
    public function fetch(Request $request)
    {
        $user = User::find($request->user_id);
        return response()->json($user);
    }

    /**
     * メンバー更新.
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return response()->json($user);
    }

    /**
     * メンバー削除.
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        $user = User::find($request->user_id);
        $user->delete();
        return response()->json();
    }
}
