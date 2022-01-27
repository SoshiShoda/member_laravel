@extends('layouts.app')

@section('content')
<div class="container">
    @include('common.errors')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action="{{ route('update', ['id'=>$member->id]) }}" method="post">
                <!-- csrf_fieldとは？ formタグ内で{{ csrf_field() }}を宣言することにより、
                POST, PUT, DELETEのリクエストをした際に認証済みユーザーのトークンと一致するか
                自動的にチェックしてくれます。 -->
                {{ csrf_field() }}

                <h3 class="form-title text-center">会員編集 会員ID:{{ $member->id }}</h3>
                <div class="mb-4 mt-4">
                    <input type="text" class="mt-2 form-control" name="name" value="{{ $member->name }}">
                    <input type="text" class="mt-2 form-control" name="phone" value="{{ $member->phone }}">
                    <input type="email" class="mt-2 form-control" name="email" value="{{ $member->email }}">
                </div>
                <div class="form-group">
                    <div class="w-100 d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary submit">更新</button>
                    </div>
                </div>
            </form>
            <form action="{{ route('destroy', ['id'=>$member->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="w-100 d-grid mt-4 gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary delete">削除</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection