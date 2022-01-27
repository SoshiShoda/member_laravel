<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class EditController extends Controller
{

    /**
     * 会員情報の表示
     *
     * @param [type] $id
     * @return response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('edits', compact('member'));
    }


    /**
     * 会員情報の更新
     *
     * @param [type] $id
     * @return response
     */
    public function update(Request $request, $id)
    {
        $member = Member::find($id);

        $member->name = $request->input('name');
        $member->phone = $request->input('phone');
        $member->email = $request->input('email');

        // DBに保存
        $member->save();

        return redirect('members');
    }

    /**
     * 会員情報を削除
     *
     * @param [type] $id
     * @return response
     */
    public function destroy($id)
    {
        $member = Member::find($id);

        $member->delete();

        return redirect('members');
    }
}
