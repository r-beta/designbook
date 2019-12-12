@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-4">
        <h3 class="my-auto">ブランド詳細</h3>
	</div>
	
	{{-- Brand --}}
    <p>会社名：{{ $brand->name }}</p>
	<p>都道府県：{{ $brand->prefecture_name }}</p>
	
	{{-- Brandに属するUsers --}}
	@foreach ($users as $user)
		<br><p>名前：{{ $user->name }}</p>
		<p>メール：{{ $user->email }}</p>
		<p>電話：{{ $user->phone_number }}</p>
	@endforeach

	{{-- 戻るボタン --}}
	<div class="row justify-content-center mb-4">
		<a href="{{ route('brands.index') }}" role="button" class="btn btn-primary">戻る</a>
    </div>

</div>

@endsection
