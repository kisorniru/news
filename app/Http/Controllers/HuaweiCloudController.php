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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HuaweiCloud  $HuaweiCloud
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
        
        return view('huaweiCloud')->with('huaweiClouds', $huaweiClouds);
        return view('huaweiCloud',compact('editHuaweiClouds'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HuaweiCloud  $huaweiCloud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, huaweiCloud $huaweiCloud)
    {
        //
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
