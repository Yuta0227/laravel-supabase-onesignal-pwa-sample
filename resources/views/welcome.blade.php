@extends('layouts.app')
@section('content')
    <a href="{{ route('test.index') }}">
        テストへ
    </a>
    <button>
        <a href="{{ route('register') }}">
            登録
        </a>
    </button>
    <button>
        <a href="{{ route('login') }}">
            ログイン
        </a>
    </button>
@endsection
