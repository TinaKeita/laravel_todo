<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>
  <p>Saturs: {{ $diary->body}}</p>
  <p>Datums: {{ $diary->date}}</p>
  <a href="/diaries/{{ $diary->id }}/edit">Labot</a>
</x-layout>