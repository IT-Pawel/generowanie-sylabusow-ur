<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="{{ public_path('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .curriculumForm {
            display: flex;
            margin: 20px 12px;
            -moz-column-gap: 20px;
            column-gap: 20px;
        }

        .curriculumForm__form {
            flex: 30%;
        }

        .curriculumForm__form label {
            display: flex;
            flex-direction: column;
        }

        .curriculumForm__form label:not(:last-child) {
            margin-bottom: 12px;
        }

        .curriculumForm__data {
            flex: 70%;
        }

        .curriculumForm__data h1,
        .curriculumForm__data h2 {
            margin: 0;
            text-align: center;
        }

        .curriculumForm__data h1 {
            font-size: 16px;
        }

        .curriculumForm__data h2 {
            font-size: 14px;
        }

        .curriculumForm__data table {
            text-align: center;
            width: 100%;
            border-collapse: collapse;
        }

        .curriculumForm__data th,
        .curriculumForm__data td {
            border: 1px solid black;
        }

        .curriculumForm__data th {
            width: 50%;
            background: #bcf7cc;
            padding: 12px 10px;
            font-weight: 400;
        }

        .curriculumForm__data td {
            font-weight: 400;
        }

        .curriculumForm__data td.break {
            height: 20px;
            background: grey;
        }

        .curriculumDisplay h1,
        .curriculumDisplay h2 {
            margin: 0;
            text-align: center;
        }

        .curriculumDisplay h1 {
            font-size: 16px;
        }

        .curriculumDisplay h2 {
            font-size: 14px;
        }

        .curriculumDisplay table {
            text-align: center;
            width: 100%;
            border-collapse: collapse;
        }

        .curriculumDisplay th,
        .curriculumDisplay td {
            border: 1px solid black;
        }

        .curriculumDisplay th {
            width: 50%;
            background: #bcf7cc;
            padding: 12px 10px;
            font-weight: 400;
        }

        .curriculumDisplay td {
            font-weight: 400;
        }

        .curriculumDisplay td.break {
            height: 20px;
            background-color: grey;
        }


    </style>
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
