<x-layout title="Nova Séries">
    <form action="/series/store"  method="post">
        @csrf
        <input class="input" type="text" id="name" name="name">
        <input type="submit">
    </form>
</x-layout>