@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mb-4">
        <h3 class="my-auto">ブランド詳細</h3>
    </div>
    <p>会社名：{{ $brand->name }}</p>
	<p>都道府県：{{ $brand->prefecture_name }}</p>
	@foreach ($users as $user)
		<br><p>名前：{{ $user->name }}</p>
		<p>メール：{{ $user->email }}</p>
		<p>電話：{{ $user->phone_number }}</p>
	@endforeach
</div>


<main role="main">
  	<div class="content">
    	<div class="container">

    {{-- <brand-list-component></brand-list-component> --}}

	    </div>
  	</div>
</main>

@endsection
