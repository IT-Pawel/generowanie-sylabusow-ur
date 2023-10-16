<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <main class="container">
            <div class="curriculumDisplay">
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
            
        </main>

    </body>
</html>
