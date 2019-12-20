@extends('layouts.app')

@section('content')
<div class="container">

    {{-- エラーメッセージ --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- 入力フォーム --}}
    {{-- 後でvalueに入っている初期値削除 --}}
    <form action="{{ route('brands.confirm') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">ブランド名<span class="text-danger">　*入力必須</span></label>
            @if ($errors->has('name'))
                <input type="text" name="name" value="{{ old('name') }}" class="form-control is-invalid" id="name" placeholder="例：HOGE商事">
            @elseif($errors->any())
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="例：HOGE商事">
            @else
                <input type="text" name="name" value="HOGE商事" class="form-control" id="name" placeholder="例：HOGE商事">
            @endif
            <span class="form-text text-danger">{{$errors->first('name')}}</span>
        </div>
        <div class="form-group">
            <label for="url">ブランドURL</label>
            @if ($errors->has('url'))
                <input type="text" name="url" value="{{ old('url') }}" class="form-control is-invalid" id="url" placeholder="例：http://example.com">
            @elseif($errors->any())
                <input type="text" name="url" value="{{ old('url') }}" class="form-control" id="url" placeholder="例：http://example.com">
            @else
                <input type="text" name="url" value="http://example.com" class="form-control" id="url" placeholder="例：http://example.com">
            @endif
            <span class="form-text text-danger">{{$errors->first('url')}}</span>
        </div>
        <div class="form-group">
            <label for="postal_code">郵便番号</label>
            @if ($errors->has('postal_code'))
                <input type="text" name="postal_code" value="{{ old('postal_code') }}" class="form-control is-invalid" id="postal_code" placeholder="例：123-4567">
            @elseif($errors->any())
                <input type="text" name="postal_code" value="{{ old('postal_code') }}" class="form-control" id="postal_code" placeholder="例：123-4567">
            @else
                <input type="text" name="postal_code" value="123-5678" class="form-control" id="postal_code" placeholder="例：123-4567">
            @endif
            <span class="form-text text-danger">{{$errors->first('postal_code')}}</span>
        </div>
        <div class="form-group">
            <label for="prefecture">都道府県</label>
            <select name="prefecture" id="prefecture" class="form-control" data-selected="{{ old('prefecture') }}" >
                    <option value="" disabled selected>都道府県を選択してください</option>
                @foreach($prefs as $index => $name)
                    <option value="{{ $index }}" @if(old('prefecture')=="{{ $index }}") selected @endif>{{ $name }}</option>
                @endforeach
            </select>
            <span class="form-text text-danger">{{$errors->first('prefecture')}}</span>
        </div>
        <div class="form-group">
            <label for="address">住所</label>
            @if ($errors->has('address'))
                <input type="text" name="address" value="{{ old('address') }}" class="form-control is-invalid" id="address" placeholder="例：港区北青山3-5-6 青朋ビル2F">
            @elseif($errors->any())
                <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="address" placeholder="例：港区北青山3-5-6 青朋ビル2F">
            @else
                <input type="text" name="address" value="123-5678" class="form-control" id="address" placeholder="例：港区北青山3-5-6 青朋ビル2F">
            @endif
            <span class="form-text text-danger">{{$errors->first('address')}}</span>
        </div>
        <div class="form-group">
            <label for="email">メールアドレス<span class="text-danger">　*入力必須</span></label>
            @if ($errors->has('email'))
                <input type="text" name="email" value="{{ old('email') }}" class="form-control is-invalid" id="email" placeholder="例：example@example.com">
            @elseif($errors->any())
                <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="例：example@example.com">
            @else
                <input type="text" name="email" value="example@example.com" class="form-control" id="email" placeholder="例：example@example.com">
            @endif
            <span class="form-text text-danger">{{$errors->first('email')}}</span>
        </div>
        <div class="form-group">
            <label for="phone_number">電話番号<span class="text-danger">　*入力必須</span></label>
            @if ($errors->has('phone_number'))
                <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control is-invalid" id="phone_number" placeholder="例：03-1234-5678>
            @elseif($errors->any())
                <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" id="phone_number" placeholder="例：03-1234-5678">
            @else
                <input type="text" name="phone_number" value="03-1234-5678" class="form-control" id="phone_number" placeholder="例：03-1234-5678">
            @endif
            <span class="form-text text-danger">{{$errors->first('phone_number')}}</span>
        </div>
        <div class="form-group">
            <label for="logo_image">ブランドロゴ画像</label><br>
            <input type="file" name="file" id="logo_image">
            <span class="form-text text-danger">{{$errors->first('file')}}</span>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">入力内容確認</button>
    </form>
</div>

@endsection
