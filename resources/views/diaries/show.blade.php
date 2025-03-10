<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>
  <p>Saturs: {{ $diary->body}}</p>
  <p>Datums: {{ $diary->date}}</p>

<div class="button-container">
  <button><a href="/diaries/{{ $diary->id }}/edit">Labot</a></button>
 
 <form method="POST" action="/diaries/{{ $diary->id }}">
  @csrf
  @method("delete")
  <button>Dzēst</button>
  </form>
</div>
  
</x-layout>