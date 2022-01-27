<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

use App\Models\Store;

class StoreController extends Controller
{
    /**
     * 会員情報を登録
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // バリデーション
        $this->validate($request, [
            'name' => 'required|max:15',
            'phone' => 'required|max:15',
            'email' => 'required|max:24',
        ]);

        // member作成
        Store::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect('/members');
    }
}