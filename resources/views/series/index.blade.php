<x-layout title="Series">
    <a href="/series/criar" class="btn btn-dark mb-2">Criar nova serie</a>
    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item">{{$serie->nome}}</li>
        @endforeach
    </ul>
</x-layout>

