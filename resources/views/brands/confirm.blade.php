@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('brands.store') }}" method="POST">
        @csrf
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">ブランド名</th>
                    <td>{{ $input['name'] }}</td>
                    <input type="hidden" name="name" value="{{ $input['name'] }}">
                </tr>
                <tr>
                    <th scope="row">ブランドURL</th>
                    @if ($input['url'])
                        <td>{{ $input['url'] }}</td>
                        <input type="hidden" name="url" value="{{ $input['url'] }}">
                    @else
                        <td> </td>
                        <input type="hidden" name="url" value="">
                    @endif
                </tr>
                <tr>
                    <th scope="row">郵便番号</th>
                    @if ($input['postal_code'])
                        <td>{{ $input['postal_code'] }}</td>
                        <input type="hidden" name="postal_code" value="{{ $input['postal_code'] }}">
                    @else
                        <td> </td>
                        <input type="hidden" name="postal_code" value="">
                    @endif
                </tr>
                <tr>
                    <th scope="row">都道府県</th>
                    @if ($prefecture_name)
                        <td>{{ $prefecture_name }}</td>
                        <input type="hidden" name="prefecture" value="{{ $input['prefecture'] }}">
                    @else
                        <td> </td>
                        <input type="hidden" name="prefecture" value="">
                    @endif
                </tr>
                <tr>
                    <th scope="row">住所</th>
                    @if ($input['address'])
                        <td>{{ $input['address'] }}</td>
                        <input type="hidden" name="address" value="{{ $input['address'] }}">
                    @else
                        <td> </td>
                        <input type="hidden" name="address" value="">
                    @endif
                </tr>
                <tr>
                    <th scope="row">メール</th>
                    @if ($input['email'])
                        <td>{{ $input['email'] }}</td>
                        <input type="hidden" name="email" value="{{ $input['email'] }}">
                    @else
                        <td> </td>
                        <input type="hidden" name="email" value="">
                    @endif
                </tr>
                <tr>
                    <th scope="row">電話番号</th>
                    @if ($input['phone_number'])
                        <td>{{ $input['phone_number'] }}</td>
                        <input type="hidden" name="phone_number" value="{{ $input['phone_number'] }}">
                    @else
                        <td> </td>
                        <input type="hidden" name="phone_number" value="">
                    @endif
                </tr>
                <tr>
                    <th scope="row">ブランドロゴ画像</th>
                    @if ($input['logo_image'])
                        <td>{{ $input['logo_image'] }}</td>
                        <input type="hidden" name="logo_image" value="{{ $input['logo_image'] }}">
                    @else
                        <td> </td>
                        <input type="hidden" name="logo_image" value="">
                    @endif
                </tr>
            </tbody>
        </table>
        <button type="button" onclick="history.back()" class="btn btn-secondary">
            入力内容修正
        </button>
        <button type="submit" class="btn btn-primary">
            送信
        </button>
    </form>
</div>

@endsection
