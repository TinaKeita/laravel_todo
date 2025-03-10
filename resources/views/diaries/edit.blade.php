<x-layout>
<x-slot:title>Labo dienasgrāmatu</x-slot:title>
    <h1>Labo dienasgrāmatas ierakstu</h1>
    <form method="POST" action="/diaries/{{ $diary->id }}">
    @csrf 
    @method('PUT')
        <label>
        Labotais nosaukums: <br>
            <input type="text" name="title" value="{{ old("title", $diary->title) }}" /> <br><br>
        </label>

        <label>
        Labošanas datums: <br>
            <input name= "date" type="date" value="{{ old("date", $diary->date) }}"> <br><br>
        </label>

        <label>
        Labotais saturs:<br>
        <textarea name="body" rows="4" cols="50">{{ old("body", $diary->body) }}</textarea><br>
        </label>
        <button>Saglabāt</button>
    
        </form>
        @error("title")
            <p>{{ $message }}</p>
        @enderror

        @error("date")
            <p>{{ $message }}</p>
        @enderror

        @error("body")
            <p>{{ $message }}</p>
        @enderror
</x-layout>