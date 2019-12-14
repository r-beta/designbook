@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ブランドの画像アップロード</div>

                <div class="card-body">

                    {{-- セッションを使用したメッセージのテスト --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ホーム画面
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="file">
                        <button type="submit">保存</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
