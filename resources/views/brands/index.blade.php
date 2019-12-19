@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <h3 class="my-auto">ブランド一覧</h3>
    </div>

    {{-- ブランド作成のフラッシュメッセージ --}}
    @if (session('success'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- 一覧 --}}
    <table class="table table-hover">
        <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td class="align-middle"><img src="{{ $brand->image_url }}" class="rounded-circle d-block mx-auto" style="width: 100px;height: 100px;"></td>
                    <td class="align-middle m-auto">
                        <a href="{{ route('brands.show',$brand->id) }}"><h5 class="font-weight-bold m-auto text-center">{{ $brand->name }}</h5></a>
                    </td>
                    <td class="d-flex align-items-center m-auto">
                        <p class="m-auto text-center d-flex align-items-center">{{ $brand->prefecture_name }}</p>
                    </td>
                    <td class="align-middle"><button type="button" class="btn btn-primary d-block mx-auto">follow</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- ペジネーションリンク --}}
    <div class="row justify-content-center mb-4">
        <p>{{ $brands->links() }}</p>
    </div>
</div>

@endsection
