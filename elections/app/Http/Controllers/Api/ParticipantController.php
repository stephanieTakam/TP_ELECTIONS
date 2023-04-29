<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use App\Models\Region;
use App\Models\Vote;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participant = Participant::all();
        return response()->json([
            'status' => true,
            'participant' => $participant
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region = Region::all();
        $vote = Vote::all();
        return view('participant\nouveau_participant', compact('region', 'vote'));
    }

    public function insert(Request $request)
    {

        try {
            $reg = Region::find('label' -> $request->region);
            \DB::beginTransaction();
            $participant = Participant::create([
                'nom' => $request->nom + ' ' + $request->prenom,
                'num_cni' => $request->cni,
                'age' => $request->age,
                'sexe' => $request->sexe,
                'statut' => $request->statut,
                'id_region' => $reg->id,
                'login' => $request->login,
                'password' => $request->password
            ]);
            \DB::commit();
            $region = Region::all();
            return view("region\liste_region", compact("region"))->with('success', 'Region created successfully');
        } catch (\Throwable $th) {
            return back()->withErrors("Fail to create");
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParticipantRequest $request)
    {
        $participant = Participant::create($request->all());
        return response()->json([
            'status' => true,
            'message' => "Participant successfully added",
            'participant' => $participant
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(StoreParticipantRequest $request, Participant $participant)
    {
        $participant -> update($request->all());
        return response()->json([
            'status' => true,
            'message' => "Participant updated successfully",
            'participant' => $participant
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        $participant->delete();
        return response()->json([
            'status' => true,
            'message' => "Participant deleted successfully"
        ], 200);
    }
}
