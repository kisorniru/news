<?php

namespace App\Http\Controllers;

use Session;
use Response;
use Carbon\Carbon;
use App\Models\HuaweiCloud;
use Illuminate\Http\Request;

class HuaweiCloudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $huaweiClouds = HuaweiCloud::get();
        return view('huaweiCloud')->with('huaweiClouds', $huaweiClouds);
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
        if ($request->name == null) {
            return back()->with(['status' => 'Please input properly!']);
        }

        $last = HuaweiCloud::latest('id')->first();
        if ($last) {
        	$idCode = $last->id + 1;
        } else {
        	$idCode = 1;
        }
        $idCode = str_pad($idCode, 8, '0', STR_PAD_LEFT);

        $huaweiCloud = new HuaweiCloud;
        $huaweiCloud->code = "CH".$idCode."_";
        $huaweiCloud->name = str_replace(" ","_",$request->name);
        $huaweiCloud->save();

        // return $NewsAstron;

        return back()->with(['status' => 'Successfully added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HuaweiCloud  $huaweiCloud
     * @return \Illuminate\Http\Response
     */
    public function show(huaweiCloud $huaweiCloud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HuaweiCloud  $huaweiCloud
     * @return \Illuminate\Http\Response
     */
    public function edit(huaweiCloud $huaweiCloud, $id)
    {
    	$huaweiClouds = HuaweiCloud::get();

        $editHuaweiClouds = HuaweiCloud::findorFail($id);
        
        return view('huaweiCloudEdit')->with(['huaweiClouds' => $huaweiClouds, 'editHuaweiClouds' => $editHuaweiClouds]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HuaweiCloud  $huaweiCloud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $huaweiCloud    	= HuaweiCloud::findOrFail($id);
        $name           	= str_replace(" ","_",$request->name);

        $update_huaweiCloud  =   $huaweiCloud->update([
            'name'      =>  $name,
            ]);
        
        return redirect('/huaweiCloud')->with(['status' => 'Successfully Updates!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HuaweiCloud  $huaweiCloud
     * @return \Illuminate\Http\Response
     */
    public function destroy(huaweiCloud $huaweiCloud)
    {
        //
    }
}
