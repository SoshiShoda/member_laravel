@extends('layouts.app')

@section('content')
@if (count($members) > 0)
<div class="panel">
    <table class="table caption-top table-striped mx-auto" style="width: 800px;">
        <caption>
            <a class="pull-right" href="{{ route('stores') }}">>>登録</a>
        </caption>
        <thead>
            <tr>
                <th>名前</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
            <tr>
                <td>
                    <div>{{ $member->name }}</div>
                </td>
                <td>
                    <div>{{ $member->phone }}</div>
                </td>
                <td>
                    <div>{{ $member->email }}</div>
                </td>
                <td>
                    <a href="{{ route('show', ['id'=>$member->id]) }}">>>編集</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection