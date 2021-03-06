<?php

namespace App\Http\Controllers;

use Session;
use Response;
use Carbon\Carbon;
use App\Models\NewsAstron;
use App\Models\NumbersOnly;
use Illuminate\Http\Request;

use SoapBox\Formatter\Formatter;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class NumbersOnlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbersOnly = NumbersOnly::whereDate('created_at', Carbon::today())
                        ->first();
        if ($numbersOnly) {
            $id = $numbersOnly->id;
        } else {
            $id = 0;
        }
        // return $numbersOnly;
        return view('numbersOnly')->with('numbersOnlyId', $id);
    }

    public function exportNumbersOnly()
    {
        $NumbersOnly = new NumbersOnly;
        $NumbersOnly->save();

        $formatter = Formatter::make($NumbersOnly, Formatter::JSON);
        $xml   = $formatter->toXml();

        //config
        $path = '//192.168.0.93/Users/Public/XML/';
        $namefile = $path."numbersOnly.xml";
        $content = $xml;

        //save file
        $file = fopen($namefile, "w") or die("Unable to open file!");
        fwrite($file, $content);
        fclose($file);

        session([
            'recentHeadlineID'  => $NumbersOnly->id,
        ]);

        return back()->with('status', 'Viz.xml file successfully updated.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\numbersOnly  $numbersOnly
     * @return \Illuminate\Http\Response
     */
    public function show(numbersOnly $numbersOnly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\numbersOnly  $numbersOnly
     * @return \Illuminate\Http\Response
     */
    public function edit(numbersOnly $numbersOnly)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\numbersOnly  $numbersOnly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, numbersOnly $numbersOnly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\numbersOnly  $numbersOnly
     * @return \Illuminate\Http\Response
     */
    public function destroy(numbersOnly $numbersOnly)
    {
        //
    }
}
