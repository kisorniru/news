<?php

namespace App\Http\Controllers;

use App\Models\NewsAstron;
use Illuminate\Http\Request;

use SoapBox\Formatter\Formatter;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class NewsAstronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export($id)
    {
        $NewsAstron = NewsAstron::find($id);
        $formatter = Formatter::make($NewsAstron, Formatter::JSON);
        $xml   = $formatter->toXml();
        // return $xml;

        //config
        $namefile = "newsAstron.xml";
        $content = $xml;

        //save file
        $file = fopen($namefile, "w") or die("Unable to open file!");
        fwrite($file, $content);
        fclose($file);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $NewsAstrons = NewsAstron::get();
        return view('show')->with('NewsAstrons', $NewsAstrons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NewsAstron = new NewsAstron;
        $NewsAstron->headline = $request['headline'];
        $NewsAstron->paragraph_1 = $request->paragraph_1;
        $NewsAstron->paragraph_2 = $request->paragraph_2;
        $NewsAstron->paragraph_3 = $request->paragraph_3;
        $NewsAstron->save();

        return back()->with('status', 'Successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newsAstron  $newsAstron
     * @return \Illuminate\Http\Response
     */
    public function show(newsAstron $newsAstron)
    {
        return "Hello-1";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsAstron  $newsAstron
     * @return \Illuminate\Http\Response
     */
    public function edit(newsAstron $newsAstron)
    {
        return "Hello-2";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newsAstron  $newsAstron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsAstron $newsAstron)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsAstron  $newsAstron
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsAstron $newsAstron)
    {
        return "Hello-3";
        return $newsAstron;
    }
}
