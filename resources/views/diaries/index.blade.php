<x-layout>
    <x-slot:title>
        Mana dienasgrāmata
    </x-slot:title>
    <h1>Dienasgrāmatas</h1>
    <ul>
        @foreach ($diaries as $diary)
        <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
        @endforeach
    </ul>
</x-layout>

