<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

// use App\Repositories\MemberRepository;

class MemberController extends Controller
{
    /**
     * Memberリポジトリ
     *
     * @var MemberRepository
     */
    // protected $members;

    /**
     * コンストラクタ
     */
    // public function __construct(MemberRepository $members)
    // {
    //     $this->middleware('auth');

    //     $this->members = $members;
    // }

    /**
     * 会員情報一覧
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $members = Member::orderBy('id', 'asc')->get();
        return view('members.index', [
            'members' => $members,
            // 'members' => $this->members->forMember($request->user()),
        ]);
    }
}
