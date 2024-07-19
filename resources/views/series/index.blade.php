<x-layout title="Series">
    <a href="/series/criar">Criar nova serie</a>
    <ul>
        @foreach($series as $serie)
        <li>{{$serie}}</li>
        @endforeach
    </ul>
</x-layout>

