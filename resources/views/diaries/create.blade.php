<x-layout>
<x-slot:title>Izveidot dienasgrāmatas ierakstu</x-slot:title>
  <h1>Izveido dienasgrāmatas ierakstu</h1>
  <form  method="POST" action="/diary">
  @csrf
    Nosaukums: <input name="title" /><br><br>
    Datums: <input name= "date" type="date"><br><br>
    <textarea name="body" rows="4" cols="50"></textarea><br>
    
    @error("title")
        <p>{{ $message }}</p>
    @enderror

    @error("body")
        <p>{{ $message }}</p>
    @enderror

    @error("date")
        <p>{{ $message }}</p>
    @enderror
    
    <button>Saglabāt</button>
</form>
</x-layout>