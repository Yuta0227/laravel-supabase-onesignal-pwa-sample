<x-layout>
    こんにちは
    <form method="POST" action="{{ route('test.send_notification') }}">
        @csrf
        <input value="通知送信" type="submit">
    </form>
</x-layout>