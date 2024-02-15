<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Http\Helpers\HtmlToWord;
use App\Beganovich\Snappdf\Snappdf;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CurriculumController extends Controller
{

    public function index() : View
    {
        return view('curriculum.curriculumIndex');
    }

    public function addNewCurriculum() : View
    {
        return view('curriculum.curriculumForm');
    }

    public function show(Curriculum $curriculum) : View
    {
        $data = json_decode($curriculum->formData, true);

        return view('curriculum.curriculumShow', ['formData' => $data['formData']]);
    }

    public function edit(Curriculum $curriculum) : View
    {
        $data = json_decode($curriculum->formData, true);

        return view('curriculum.curriculumForm', ['formData' => $data['formData'], 'modelId' => $curriculum->id]);
    }

    public function delete(Curriculum $curriculum) : Redirect
    {
        $curriculum->delete();
        return redirect()->route('home');
    }

    public function download(Curriculum $curriculum) : StreamedResponse
    {
        $data = json_decode($curriculum->formData, true);
        $snappdf = new \Beganovich\Snappdf\Snappdf();
        $cssFilePath = public_path('css/app.css');
        $inlineCss = file_get_contents($cssFilePath);

        $html = view('curriculum.curriculumShow', ['formData' => $data, 'inlineCss' => $inlineCss])->render();

        $pdf = $snappdf
            ->setHtml($html)
            ->generate();

        $filename = 'sylabus_o_id_' . $curriculum->id . '.pdf';

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf;
        }, $filename, ['Content-Type' => 'application/pdf']);
    }

}
