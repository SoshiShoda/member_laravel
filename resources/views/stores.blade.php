@extends('layouts.app')

@section('content')
<div class="container">
    @include('common.errors')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action="{{ route('store') }}" method="post">
                <!-- csrf_fieldとは？ formタグ内で{{ csrf_field() }}を宣言することにより、
                POST, PUT, DELETEのリクエストをした際に認証済みユーザーのトークンと一致するか
                自動的にチェックしてくれます。 -->
                {{ csrf_field() }}

                <h3 class="form-title text-center">会員登録</h3>
                <div class="mb-4 mt-4">
                    <input type="text" class="mt-2 form-control" name="name" placeholder="名前">
                    <input type="text" class="mt-2 form-control" name="phone" placeholder="電話番号">
                    <input type="email" class="mt-2 form-control" name="email" placeholder="メールアドレス">
                </div>
                <div class="form-group">
                    <div class="w-100 d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection