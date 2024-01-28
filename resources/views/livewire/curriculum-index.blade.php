<div>
    <ul>
        @foreach ($curriculumIds as $id)
            <li>
                Sylabus nr {{ $id }}
                <a href="/sylabus/{{ $id }}">Zobacz sylabus</a>
                <a href="/sylabus/edit/{{ $id }}">Edytuj sylabus</a>
                <a href="/sylabus/delete/{{ $id }}">Usuń sylabus</a>
                <a href="/sylabus/download/{{ $id }}">Pobierz sylabus w formacie PDF</a>
            </li>
        @endforeach
    </ul>
    <a href="https://www.ilovepdf.com/pdf_to_word" target="_blank"  class="button-add">Przekonwertuj sylabus na WORD</a>
    <a href="/dodaj-sylabus" class="button-add">Dodaj sylabus</a>
</div>
