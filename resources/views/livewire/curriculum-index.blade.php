<div>
    Lista sylabusów
    <ul>
        @foreach ($curriculumIds as $id)
            <li>
                Sylabus nr {{ $id }}
                <a href="/sylabus/{{ $id }}">Zobacz sylabus</a>
                <a href="/sylabus/edit/{{ $id }}">Edytuj sylabus</a>
                <a href="/sylabus/delete/{{ $id }}">Usuń sylabus</a>
                <a href="/sylabus/download/{{ $id }}">Pobierz sylabus</a>
            </li>
        @endforeach
    </ul>
    <a href="/dodaj-sylabus">Dodaj sylabus</a>
</div>
