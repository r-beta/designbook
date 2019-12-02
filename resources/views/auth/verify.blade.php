@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Verify Your Email Address') }}</div> --}}
                <div class="card-header">{{ __('ご登録メールの認証について') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('新しい認証リンクがご登録のメールアドレスに送信されました。') }}                            
                            {{-- {{ __('A fresh verification link has been sent to your email address.') }} --}}
                        </div>
                    @endif

                    {{-- {{ __('Before proceeding, please check your email for a verification link.') }} --}}
                    {{ __('次の手順に進まれる前に、認証のためご登録のメールをご確認ください。') }}<br>
                    {{-- {{ __('If you did not receive the email') }}, --}}
                    {{ __('もしメールを受け取られていない方は') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        {{-- <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>. --}}
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('こちらをクリックするとメールが送信されます。') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
