<x-layout>
    <x-slot:title>
        Mana dienasgrāmata
    </x-slot:title>
    <h1>Dienasgrāmatas</h1>
    <ul>
        @foreach ($diaries as $diary)
            <li>{{ $diary->title }} - {{ $diary->date }} - {{ $diary->body }}</li>
        @endforeach
    </ul>
</x-layout>

