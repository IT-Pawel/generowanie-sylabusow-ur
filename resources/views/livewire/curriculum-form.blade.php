<div class="curriculumForm">
    <form class="curriculumForm__form" wire:submit.prevent="createCurriculum">
        <h1>Dane do uzupełnienia</h1>
        <div>
            
            <label>Kod przedmiotu
                <input wire:model.live.throttle.250ms="formData.subjectCode" type="text"> </label>
            <label>Nazwa przedmiotu
                <input wire:model.live.throttle.250ms="formData.name" type="text"> </label>
            <label>Nazwa przedmiotu po angielsku
                <input wire:model.live.throttle.250ms="formData.nameEng" type="text"> </label>
            <label>Język wykładowy
                <input wire:model.live.throttle.250ms="formData.lang" type="text"> </label>
                <hr>
            <label>Rok akademicki
                <input wire:model.live.throttle.250ms="formData.years" type="text"> </label>
            <label>Kierunek
                <input wire:model.live.throttle.250ms="formData.direction" type="text"> </label>
            <label>W zakresie
                <input wire:model.live.throttle.250ms="formData.range" type="text"> </label>
            <label>Poziom studiów
                <input wire:model.live.throttle.250ms="formData.level" type="text"> </label>
            <label>Profil studiów
                <input wire:model.live.throttle.250ms="formData.profile" type="text"> </label>
            <label>Forma studiów
                <input wire:model.live.throttle.250ms="formData.type" type="text"> </label>
            <label>Semestr/semestry
                <input wire:model.live.throttle.250ms="formData.term" type="text"> </label>
                <hr>
                <button type="submit">Zapisz sylabus</button>
        </div>
    </form>

    <div class="curriculumForm__data">
        <h1>Karta przedmiotu (Sylabus)</h1>
        <h2>Opis przedmiotu</h2>
        <table>
            <tr>
                <th>Kod przedmiotu</th>
                <td>
                    @if ($formData)
                        {{ $formData['subjectCode'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Nazwa przedmiotu</th>
                <td>
                    @if ($formData)
                        <b>
                            {{ $formData['name'] ?? '' }}
                        </b>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Nazwa przedmiotu Ang</th>
                <td>
                    @if ($formData)
                        <b>
                            {{ $formData['nameEng'] ?? '' }}
                        </b>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Język wykładowy</th>
                <td>
                    @if ($formData)
                        {{ $formData['lang'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <td class="break" colspan="2">
                </td>
            </tr>
            <tr>
                <th>Rok akademicki</th>
                <td>
                    @if ($formData)
                        {{ $formData['years'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th rowspan="2">Kierunek <br><br> w zakresie</th>
                <td>
                    @if ($formData)
                        {{ $formData['direction'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if ($formData)
                        {{ $formData['range'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Poziom studiów</th>
                <td>
                    @if ($formData)
                        {{ $formData['level'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Profil studiów</th>
                <td>
                    @if ($formData)
                        {{ $formData['profile'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Forma studiów</th>
                <td>
                    @if ($formData)
                        {{ $formData['type'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>Semestr/semestry</th>
                <td>
                    @if ($formData)
                        {{ $formData['term'] ?? '' }}
                    @endif
                </td>
            </tr>
            <tr>
                <td class="break" colspan="2">
                </td>
            </tr>

        </table>
    </div>
</div>
