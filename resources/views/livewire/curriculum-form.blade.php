<div class="curriculumForm">
    <form class="curriculumForm__form" wire:submit.prevent="createCurriculum">
        <h1>Dane do uzupełnienia</h1>
        <div> <label>Kod przedmiotu
                <input wire:model.lazy="formData.subjectCode" type="text"> </label> <label>Nazwa przedmiotu
                <input wire:model.lazy="formData.name" type="text"> </label> <label>Nazwa przedmiotu po angielsku
                <input wire:model.lazy="formData.nameEng" type="text"> </label> <label>Język wykładowy
                <input wire:model.lazy="formData.lang" type="text"> </label>
            <label>Rok akademicki
                <input wire:model.lazy="formData.years" type="text">
                <hr>
            </label> <label>Kierunek
                <input wire:model.lazy="formData.direction" type="text"> </label> <label>W zakresie
                <input wire:model.lazy="formData.range" type="text"> </label> <label>Poziom studiów
                <input wire:model.lazy="formData.level" type="text"> </label> <label>Profil studiów
                <input wire:model.lazy="formData.profile" type="text"> </label> <label>Forma studiów
                <input wire:model.lazy="formData.type" type="text"> </label> <label>Semestr/semestry
                <input wire:model.lazy="formData.term" type="text"> </label>
            <hr> <label>Przynależność do grupy zajęć
                <input wire:model.lazy="formData.groupAffiliation" type="text"> </label> <label>Status przedmiotu
                <input wire:model.lazy="formData.subjectStatus" type="text"> </label> <label>Forma zajęć I
                <input wire:model.lazy="formData.lectureType1"> </label> <label>Liczba godzin/ECTS
                <input wire:model.lazy="formData.lectureType1ECTS"> </label> <label>Forma zajęć II
                <input wire:model.lazy="formData.lectureType2"> </label> <label>Liczba godzin/ECTS
                <input wire:model.lazy="formData.lectureType2ECTS"> </label> <label>Forma zajęć III
                <input wire:model.lazy="formData.lectureType3"> </label> <label>Liczba godzin/ECTS
                <input wire:model.lazy="formData.lectureType2ECTS"> </label> <label>Całkowita liczba ECTS
                <input wire:model.lazy="formData.lectureECTSTotal"> </label> <label>Powiązanie przedmiotu z profilem
                studiów
                <input wire:model.lazy="formData.studyProfileConnection" type="text"> </label> <label>Powiązanie
                przedmiotu z uprawnieniami
                <input wire:model.lazy="formData.permissionsConnection" type="text"> </label> <label>Powiązanie
                przedmiotu z dyscypliną
                <input wire:model.lazy="formData.disciplineConnection" type="text"> </label> <label>Forma nauczania
                <input wire:model.lazy="formData.teachingForm" type="text"> </label> <label>Wymagania wstępne
                <input wire:model.lazy="formData.prerequisites" type="text"> </label>
            <hr> <label>Jednostka prowadząca
                <input wire:model.lazy="formData.organizationUnit" type="text"> </label> <label>Koordynator
                <input wire:model.lazy="formData.prerequisites" type="text"> </label> <label>Osoby prowadzące
                <input wire:model.lazy="formData.prerequisites" type="text"> </label> <label>Adres strony
                internetowej pjo
                <input wire:model.lazy="formData.prerequisites" type="text"> </label> <label>Adres e-mail, telefon
                koordynatora
                <input wire:model.lazy="formData.prerequisites" type="text"> </label>
            <hr>
            <h1>EFEKTY UCZENIA SIĘ, TREŚCI PROGRAMOWE, REALIZACJA ZAJĘĆ DYDAKTYCZNYCH, WERYFIKACJA
                EFEKTÓW UCZENIA SIĘ</h1> <label>Cel kształcenia
                <input wire:model.lazy="formData.lectureTarget" type="text"> </label> <label>Treści programowe
                <b>Wykłady:</b>
                <textarea wire:model.lazy="formData.contentLecture"></textarea>
            </label> <label>Treści programowe <b>Ćwiczenia audytoryjne:</b>
                <textarea wire:model.lazy="formData.contentExct"></textarea>
            </label> <label>Treści programowe <b>Laboratoria:</b>
                <textarea wire:model.lazy="formData.contentLab"></textarea>
            </label> <label>Metody dydaktyczne (kształcenia) <input wire:model.lazy="formData.teachingMethods"
                    type="text"> </label> <label>Rygor zaliczenia, kryteria oceny osiągniętych efektów
                uczenia się, sposób obliczania oceny końcowej: <input wire:model.lazy="formData.passingRequirements"
                    type="text"> </label>
            @foreach ($formData['outcomes'] as $index => $outcome)
                <div class="outcome-row"> <input type="text"
                        wire:model.lazy="formData.outcomes.{{ $index }}.number" placeholder="Numer efektu">
                    <input type="text" wire:model.lazy="formData.outcomes.{{ $index }}.description"
                        placeholder="Opis efektu"> <input type="text"
                        wire:model.lazy="formData.outcomes.{{ $index }}.direction"
                        placeholder="Kierunkowy efekt uczenia"> <input type="text"
                        wire:model.lazy="formData.outcomes.{{ $index }}.type" placeholder="Forma zajęć"> <input
                        type="text" wire:model.lazy="formData.outcomes.{{ $index }}.verification"
                        placeholder="Metody weryfikacji"> <input type="text"
                        wire:model.lazy="formData.outcomes.{{ $index }}.evaluation"
                        placeholder="Metody sprawdzania i oceny"> <button type="button"
                        wire:click.prevent="removeOutcome({{ $index }})">Usuń efekt</button>
                </div>
            @endforeach
            <button type="button" wire:click.prevent="addOutcome">Dodaj efekt uczenia się</button>
            <br>
            <br>
            <label>Stopień
                osiągnięcia kierunkowych efektów uczenia się: <input wire:model.lazy="formData.outcomesNumbers"
                    type="text"> </label>
            <hr>
            </label> <label>Literatura <b>podstawowa:</b>
                <textarea wire:model.lazy="formData.booksBasic"></textarea>
            </label>
            <label>Literatura <b>uzpełniająca:</b>
                <textarea wire:model.lazy="formData.booksExtra"></textarea>
            </label>
            <br>
            <br>
            @foreach ($formData['ectsCount'] as $index => $ectsCount)
                <div class="ectsCount-row">
                    <input type="text" wire:model.lazy="formData.ectsCount.{{ $index }}.description"
                        placeholder="Opis udziału">
                    <input type="text" wire:model.lazy="formData.ectsCount.{{ $index }}.igk"
                        placeholder="IGK">
                    <input type="text" wire:model.lazy="formData.ectsCount.{{ $index }}.zbn"
                        placeholder="ZBN">
                    <input type="text" wire:model.lazy="formData.ectsCount.{{ $index }}.zd"
                        placeholder="Zajęcia dydaktyczne">
                    <button type="button" wire:click.prevent="removeEctsCount({{ $index }})">Usuń udział w
                        zajęciach</button>
                </div>
            @endforeach
            <button type="button" wire:click.prevent="addEctsCount">Dodaj udział w zajęciach</button>
            <br>
            <br>
            <label> Informacje dodatkowe, uwagi
                <textarea wire:model.lazy="formData.ectsSummary"></textarea>
            </label>
            <button type="submit">Zapisz sylabus</button>
        </div>
    </form>
    <div class="curriculumForm__data">
        <h1>Karta przedmiotu (Sylabus)</h1>
        <h2>Opis przedmiotu</h2>
        <div class="grid-container">
            <div class="grid-item">
                <div class="grid-item grid-item--column no-padding">
                    <div class="title">Kod przedmiotu:</div>
                    <div> {{ $formData['subjectCode'] ?? '-' }} </div>
                </div>
                <div class="grid-item grid-item--name no-padding">
                    <div class="title title--rotate"><span> Nazwa przedmiotu:</span></div>
                    <div class="grid-item grid-item--column no-padding">
                        <div> <b>{{ $formData['name'] ?? '-' }}</b> </div>
                        <div> <b>{{ $formData['nameEng'] ?? '-' }}</b> </div>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="title">Język wykładowy:</div>
                <div> {{ $formData['lang'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Rok akademicki:</div>
                <div> {{ $formData['years'] ?? '-' }} </div>
            </div>
            <hr>
            <div class="grid-item">
                <div class="title">Kierunek:</div>
                <div> {{ $formData['direction'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Zakres:</div>
                <div> {{ $formData['range'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Poziom studiów:</div>
                <div> {{ $formData['level'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Profil studiów:</div>
                <div> {{ $formData['profile'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Forma studiów:</div>
                <div> {{ $formData['type'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Semestr/semestry:</div>
                <div> {{ $formData['term'] ?? '-' }} </div>
            </div>
            <div class="break"></div>
            <div class="grid-item">
                <div class="title">Przynależność do grupy zajęć:</div>
                <div> {{ $formData['groupAffiliation'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Status przedmiotu:</div>
                <div> {{ $formData['subjectStatus'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Formy realizacji zajęć dydaktycznych, wymiar, punkty ECTS:</div>
                <div class="no-padding">
                    <div class="grid-item no-padding grid-item--ECTS">
                        <div class="div1 title">Forma zajęć</div>
                        <div class="div2 title">Liczba godzin zajęć dydaktycznych</div>
                        <div class="div3 title">Liczba Punktów ECTS</div>
                        <div class="div4"> {{ $formData['lectureType1'] ?? '-' }} </div>
                        <div class="div5">{{ $formData['lectureType1ECTS'] ?? '-' }} </div>
                        <div class="div6"> {{ $formData['lectureType2'] ?? '-' }} </div>
                        <div class="div7"> {{ $formData['lectureType2ECTS'] ?? '-' }} </div>
                        <div class="div8"> {{ $formData['lectureType3'] ?? '-' }} </div>
                        <div class="div9"> {{ $formData['lectureType3ECTS'] ?? '-' }} </div>
                        <div class="div10">{{ $formData['lectureECTSTotal'] ?? '-' }} </div>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="title">Powiązanie przedmiotu z profilem studiów:</div>
                <div> {{ $formData['studyProfileConnection'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Powiązanie przedmiotu z uprawnieniami:</div>
                <div> {{ $formData['permissionsConnection'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Powiązanie przedmiotu z dyscypliną:</div>
                <div> {{ $formData['disciplineConnection'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Forma nauczania:</div>
                <div> {{ $formData['teachingForm'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Wymagania wstępne:</div>
                <div> {{ $formData['prerequisites'] ?? '-' }} </div>
            </div>
            <div class="break"></div>
            <div class="grid-item">
                <div class="title">Jednostka prowadząca</div>
                <div> {{ $formData['organizationUnit'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Koordynator</div>
                <div> {{ $formData['prerequisites'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Osoby prowadzące</div>
                <div> {{ $formData['prerequisites'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Adres strony internetowej pjo</div>
                <div> {{ $formData['prerequisites'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Adres e-mail, telefon koordynatora</div>
                <div> {{ $formData['prerequisites'] ?? '-' }} </div>
            </div>
            <div class="pagebreak"> </div>
            <h2 style="margin-top:20px">EFEKTY UCZENIA SIĘ, TREŚCI PROGRAMOWE, REALIZACJA ZAJĘĆ DYDAKTYCZNYCH,
                WERYFIKACJA
                EFEKTÓW UCZENIA SIĘ</h2>
            <div class="grid-item">
                <div class="title">Cel kształcenia:</div>
                <div> {{ $formData['lectureTarget'] ?? '-' }} </div>
            </div>
            <div class="grid-item">
                <div class="title">Treści programowe:</div>
                <div class="no-wrap">
                    @isset($formData['contentLecture'])
                        <b>Wykłady:</b><br>{{ $formData['contentLecture'] ?? '-' }}
                    @endisset
                    <br><br>
                    @isset($formData['contentExct'])
                        <b>Ćwiczenia audytoryjne:</b><br>{{ $formData['contentExct'] ?? '-' }}
                    @endisset
                    <br><br>
                    @isset($formData['contentLab'])
                        <b>Ćwiczenia audytoryjne:</b><br>{{ $formData['contentLab'] ?? '-' }}
                    @endisset
                    <br><br>
                </div>
            </div>

            <div class="grid-item">
                <div class="title">Metody dydaktyczne (kształcenia):</div>
                <div>{{ $formData['teachingMethods'] ?? '-' }}</div>
            </div>

            <div class="grid-item">
                <div class="title">Rygor zaliczenia, kryteria oceny osiągniętych efektów uczenia się, sposób
                    obliczania oceny końcowej:</div>
                <div>{{ $formData['passingRequirements'] ?? '-' }}</div>
            </div>

            <div class="grid-item grid-item--table">
                <div class="title title-first">Efekty uczenia się dla przedmiotu w odniesieniu do efektów kierunkowych
                    i formy zajęć</div>
                <div class="title title-second">Metody weryfikacji efektów uczenia się</div>
            </div>

            <div class="grid-item grid-item--table-headings">
                <div class="title">Numer efektu uczenia się</div>
                <div class="title">Opis efektów uczenia się dla przedmiotu (PEU) Student, który zaliczył przedmiot (W)
                    zna i rozumie/ (U) potrafi /(K) jest gotów do:</div>
                <div class="title">Kierunkowy efekt uczenia się (KEU)</div>
                <div class="title">Forma zajęć</div>
                <div class="title">Forma weryfikacji (zaliczeń)</div>
                <div class="title">Metody prawdzania i oceny</div>
            </div>
            @isset($formData['outcomes'])
                @foreach ($formData['outcomes'] as $index => $outcome)
                    <div class="grid-item grid-item--table-row">
                        <div>{{ $outcome['number'] ?? '-' }}</div>
                        <div>{{ $outcome['description'] ?? '-' }}</div>
                        <div>{{ $outcome['direction'] ?? '-' }}</div>
                        <div>{{ $outcome['type'] ?? '-' }}</div>
                        <div>{{ $outcome['verification'] ?? '-' }}</div>
                        <div>{{ $outcome['evaluation'] ?? '-' }}</div>
                    </div>
                @endforeach
            @endisset
            <div class="grid-item">
                <div style="grid-column-start:1;grid-column-end:3;">Stopień osiągnięcia kierunkowych efektów uczenia
                    się: {{ $formData['outcomesNumbers'] ?? '-' }}</div>
            </div>
            <div class="break"></div>

            <div class="grid-item">
                <div class="title" style="grid-column-start:1;grid-column-end:3;justify-content:center;">Literatura
                    podstawowa, literatura uzupełniająca, pomoce naukowe</div>
                <div class="no-wrap" style="grid-column-start:1;grid-column-end:3;">
                    @isset($formData['booksBasic'])
                        <b>Literatura podstawowa:</b><br>{{ $formData['booksBasic'] ?? '-' }}
                    @endisset
                    <br><br>
                    @isset($formData['booksExtra'])
                        <b>Literatura uzupełniająca:</b><br>{{ $formData['booksExtra'] ?? '-' }}
                    @endisset
                    <br><br>
                </div>
            </div>

            <div class="break"></div>

            <div class="grid-item">
                <div class="title" style="grid-column-start:1;grid-column-end:3;justify-content:center;">Nakład pracy
                    studenta potrzebny do osiągnięcia zakładanych efektów uczenia się – bilans punktów ECTS</div>
            </div>

            <div class="grid-item grid-item--bilans">
                <div class="title">Udział w zajęciach, aktywność</div>
                <div class="no-padding">
                    <div class="title" style="justify-content: center">Obciązenie studenta</div>
                    <div class="no-padding grid-item--bilans-headings">
                        <div class="title">Inne godz. kontaktowe (IGK)</div>
                        <div class="title">Zajęcia bez nauczyciela-praca własna studenta (ZBN)</div>
                        <div class="title">Zajęcia dydaktyczne</div>
                    </div>
                </div>
            </div>
            @isset($formData['ectsCount'])
            @foreach ($formData['ectsCount'] as $index => $ectsCount)
                <div class="grid-item">
                    <div class="title">{{ $ectsCount['description'] ?? '-' }}</div>
                    <div class="no-padding grid-item grid-item--bilans-row">
                        <div>{{ $ectsCount['igk'] ?? '-' }}</div>
                        <div>{{ $ectsCount['zbn'] ?? '-' }}</div>
                        <div>{{ $ectsCount['zd'] ?? '-' }}</div>
                    </div>
                </div>
            @endforeach
            @endisset
            <div class="grid-item">
                <div class="title">Punkty ECTS za przedmiot</div>
                <div>{{ $formData['ectsSummary'] ?? '-' }}</div>
            </div>

            <div class="break"></div>

            <div class="grid-item">
                <div class="title" style="grid-column-start:1;grid-column-end:3;justify-content:center;">Informacje
                    dodatkowe, uwagi</div>
                <div class="no-wrap" style="grid-column-start:1;grid-column-end:3;justify-content:center;">
                    {{ $formData['addtionalInfo'] ?? '-' }}</div>
            </div>
        </div>
    </div>
</div>
