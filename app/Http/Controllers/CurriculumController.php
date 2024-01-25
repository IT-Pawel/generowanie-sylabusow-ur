<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Http\Helpers\HtmlToWord;
use App\Beganovich\Snappdf\Snappdf;



class CurriculumController extends Controller
{
    public function index()
    {
        return view('curriculum.curriculumIndex');
    }

    public function addNewCurriculum()
    {
        return view('curriculum.curriculumForm');
    }

    public function show(Curriculum $curriculum)
    {
        $data = json_decode($curriculum->formData, true);

        return view('curriculum.curriculumShow', ['formData' => $data['formData']]);
    }

    public function edit(Curriculum $curriculum)
    {
        $data = json_decode($curriculum->formData, true);

        return view('curriculum.curriculumForm', ['formData' => $data['formData'],'modelId' => $curriculum->id]);
    }

    public function delete(Curriculum $curriculum)
    {
        $curriculum->delete();
        return redirect()->route('home');
    }

    public function download(Curriculum $curriculum)
    {
        $data = json_decode($curriculum->formData, true);
        $snappdf = new \Beganovich\Snappdf\Snappdf();
        $cssFilePath = public_path('css/app.css'); 
        $inlineCss = file_get_contents($cssFilePath);

        $html = view('curriculum.curriculumShow',['formData' => $data['formData'], 'inlineCss' => $inlineCss])->render();
        
        $pdf = $snappdf
            ->setHtml($html)
            ->generate();
    
        $filename = 'sylabus_o_id_'.$curriculum->id.'.pdf';
        
        return response()->streamDownload(function() use ($pdf) {
            echo $pdf;
        }, $filename, ['Content-Type' => 'application/pdf']);
    }

    public function test(Curriculum $curriculum)
    {

        $htd = new HtmlToWord();
        $curriculum = Curriculum::find(17);
        $data = json_decode($curriculum->formData, true);
        $htmlContent = view('pdf.basePdf',['formData' => $data['formData']])->render();

        return $htd->createDoc($htmlContent, "my-document", 1);
    }
}
