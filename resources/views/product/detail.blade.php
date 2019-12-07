@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <h3 class="my-auto">ブランド詳細</h3>
    </div>
    <p>{{ $brand->name }}</p>
    <p>{{ $brand->prefecture_name }}</p>


<main role="main">
  <div class="content">
    <div class="container">

      {{-- <brand-list-component></brand-list-component> --}}

    </div>
  </div>
</main>

@endsection
