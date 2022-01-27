<?php

namespace App\Repositories;

use App\Models\Member;

class MemberRepository
{
    /**
     * 会員一覧取得
     *
     * @param Member $member
     * @return Collection
     */
    public function forMember(Member $member)
    {
        return $member->members()
            ->orderBy('id', 'asc')
            ->get();
    }
}


