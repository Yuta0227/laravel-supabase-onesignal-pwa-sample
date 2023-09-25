@extends('layouts.app')
@section('content')
    こんにちは
    <form method="POST" action="{{ route('test.send_notification') }}">
        @csrf
        <input value="通知送信" type="submit">
    </form>
@endsection
