<x-guest-layout>
    <x-slot name="slot">
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
    </x-slot>
</x-guest-layout>