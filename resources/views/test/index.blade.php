<x-guest-layout>
    <x-slot name="slot">
        こんにちは
        <form method="POST" action="{{ route('test.send_notification') }}">
            @csrf
            <input value="通知送信" type="submit">
        </form>
    </x-slot>
</x-guest-layout>
