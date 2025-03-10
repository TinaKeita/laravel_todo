<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
  <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>

<div class="button-container">
  <button><a href="/todos/{{ $todo->id }}/edit" class="no-visited-link">Labot</a></button>
 

  <form method="POST" action="/todos/{{ $todo->id }}">
  @csrf
  @method("delete")
  <button>Dzēst</button>
  </form>
</div>
</x-layout>