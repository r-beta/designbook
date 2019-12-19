@extends('layouts.app')

@section('content')
<div class="container">
    {{-- 入力フォーム --}}
    {{-- 後でvalueに入っている初期値削除 --}}
    <form action="{{ route('brands.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">ブランド名</label>
            <input type="text" name="name" value="HOGE" class="form-control" id="name" placeholder="例：HOGE商事">
        </div>
        <div class="form-group">
            <label for="url">ブランドURL</label>
            <input type="text" name="url" value="http://example.com/" class="form-control" id="url" placeholder="例：http://example.com">
        </div>
        <div class="form-group">
            <label for="postal_code">郵便番号</label>
            <input type="text" name="postal_code" value="123-4567" class="form-control" id="postal_code" placeholder="例：123-4567">
        </div>
        <div class="form-group">
            <label for="prefecture">都道府県</label>
            <select class="form-control" name="prefecture" id="prefecture">
                <option value="" disabled selected>都道府県を選択してください</option>
                @foreach($prefs as $index => $name)
                    <option value="{{ $index }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="address">住所</label>
            <input type="text" name="address" class="form-control" value="住所です" id="address" placeholder="例：港区北青山3-5-6 青朋ビル2F">
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="text" name="email" class="form-control" value="example@example.com" id="email" placeholder="例：example@example.com">
        </div>
        <div class="form-group">
            <label for="phone_number">電話番号</label>
            <input type="text" name="phone_number" class="form-control" value="03-1234-5678" id="phone_number" placeholder="例：03-1234-5678">
        </div>
        <div class="form-group">
            <label for="logo_image">ブランドロゴ画像</label><br>
            <input type="file" name="file" id="logo_image">
            <span class="help-block text-danger">{{$errors->first('file')}}</span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
