<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Helpers\HtmlToWord;
use function Spatie\LaravelPdf\Support\pdf;


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
        // $pdf = Pdf::loadView('pdf.basePdf',['formData' => $data['formData']]);
        // return $pdf->download('sylabus_o_id_'.$curriculum->id.'.pdf');

        return pdf()
        ->view('pdf.basePdf',['formData' => $data['formData']])
        ->name('sylabus_o_id_'.$curriculum->id.'.pdf')
        ->download();
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
