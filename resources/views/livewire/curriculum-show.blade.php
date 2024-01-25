<div class="curriculumForm__data">
    <h1>Karta przedmiotu (Sylabus)</h1>
    <h2>Opis przedmiotu</h2>
    <div class="grid-container">

        <div class="grid-item">
            <div class="grid-item grid-item--column no-padding">
                <div class="title">Kod przedmiotu:</div>
                <div>
                    {{ $formData['subjectCode'] ?? '-' }}
                </div>
            </div>
            <div class="grid-item grid-item--name no-padding">
                <div class="title title--rotate"><span> Nazwa przedmiotu:</span></div>
                <div class="grid-item grid-item--column no-padding">
                    <div>
                        <b>{{ $formData['name'] ?? '-' }}</b>
                    </div>
                    <div>
                        <b>{{ $formData['nameEng'] ?? '-' }}</b>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="title">Język wykładowy:</div>
            <div>

                {{ $formData['lang'] ?? '-' }}

            </div>
        </div>

        <div class="break"></div>

        <div class="grid-item">
            <div class="title">Rok akademicki:</div>
            <div>

                {{ $formData['years'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Kierunek w zakresie:</div>
            <div>

                {{ $formData['direction'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Zakres:</div>
            <div>

                {{ $formData['range'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Poziom studiów:</div>
            <div>

                {{ $formData['level'] ?? '-' }}

            </div>
        </div>
        <div class="grid-item">
            <div class="title">Profil studiów:</div>
            <div>

                {{ $formData['profile'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Forma studiów:</div>
            <div>

                {{ $formData['type'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Semestr/semestry:</div>
            <div>

                {{ $formData['term'] ?? '-' }}

            </div>
        </div>

        <div class="break"></div>

        <div class="grid-item">
            <div class="title">Przynależność do grupy zajęć:</div>
            <div>

                {{ $formData['groupAffiliation'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Status przedmiotu:</div>
            <div>

                {{ $formData['subjectStatus'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">


            <div class="title">Formy realizacji zajęć dydaktycznych, wymiar, punkty ECTS:</div>
            <div class="no-padding">
                <div class="grid-item no-padding grid-item--ECTS">
                    <div class="div1 title">Forma zajęć</div>
                    <div class="div2 title">Liczba godzin zajęć dydaktycznych</div>
                    <div class="div3 title">Liczba Punktów ECTS</div>
                    <div class="div4">TEST</div>
                    <div class="div5">TEST</div>
                    <div class="div6">TEST </div>
                    <div class="div7"> TEST</div>
                    <div class="div8"> TEST</div>
                    <div class="div9"> TEST</div>
                    <div class="div10"> TEST</div>
                </div>
            </div>



        </div>


        <div class="grid-item">
            <div class="title">Powiązanie przedmiotu z profilem studiów:</div>
            <div>

                {{ $formData['studyProfileConnection'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Powiązanie przedmiotu z uprawnieniami:</div>
            <div>

                {{ $formData['permissionsConnection'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Powiązanie przedmiotu z dyscypliną:</div>
            <div>

                {{ $formData['disciplineConnection'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Forma nauczania:</div>
            <div>

                {{ $formData['teachingForm'] ?? '-' }}

            </div>
        </div>

        <div class="grid-item">
            <div class="title">Wymagania wstępne:</div>
            <div>

                {{ $formData['prerequisites'] ?? '-' }}

            </div>
        </div>

        <div class="break"></div>
        <!-- ... continue with additional items as needed ... -->
    </div>


</div>
</div>

