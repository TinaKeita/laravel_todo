<x-layout>
<x-slot:title>Labo veicamo uzdevumu</x-slot:title>
    <h1>Labo veicamo uzdevumu</h1>
    <form method="POST" action="/todos/{{ $todo->id }}">
    @csrf 
    @method('PUT')
        <label>
            Izlabo uzdevumu: <br><br>
            <input type="text" name="content" value="{{ old("content", $todo->content) }}" /> <br><br>
        </label>
        
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        
        <label>
            Izpildīts:
            <input name="completed" type="hidden" value="0"> 
            <input name="completed" type="checkbox" value="1" {{ $todo->completed ? 'checked' : '' }}>   
        </label>

        @error("completed")
            <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
</x-layout>