<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Exporter\Exporter;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = Region::all();
        return view('region\liste_region', compact('region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('region\fonction_region');
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

    public function insert(Request $request)
    {

        try {
            \DB::beginTransaction();
            Region::create(['label' => $request->label]);
            \DB::commit();
            $region = Region::all();
            return view("region\liste_region", compact("region"))->with('success', 'Region created successfully');
        } catch (\Throwable $th) {
            return back()->withErrors("Fail to create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $reg = Region::find($id);
        // return $reg;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $reg = Region::find($id);
            return view("update_region", compact("reg"));
            // return redirect('/region_form_update/{{$r->id}}')->with(compact("reg"));
        } catch (\Throwable $th) {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            \DB::beginTransaction();
            $region = Region::find($request->input('id'));
            $region -> label = $request->input('nom');
            $region -> save();
            //  Region::find($request->id)->DB::update('update regions set label = ? where id = ?', [$request['nom'], $request['id']]);
            \DB::commit();
            $region = Region::all();
            return view("liste_region", compact("region"))->with('success', 'Region updated successfully');
        } catch (\Throwable $th) {
            return back()->with('success', 'Region updating failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            \DB::beginTransaction();
            Region::find($id)->delete();
            \DB::commit();
            return redirect('/region_liste');
        } catch (\Throwable $th) {
            return back()->withErrors("Fail to delete");
        }
    }
}
