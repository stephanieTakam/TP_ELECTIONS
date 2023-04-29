<?php

namespace App\Http\Controllers\Rest;

use App\Http\Controllers\Controller;
use App\Models\participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return response() -> json($participant, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            \DB::beginTransaction();
            $participant = Participant::create([
                'nom' => $request->nom,
                'num_cni' => $request->num_cni,
                'age' => $request->age,
                'sexe' => $request->sexe,
                'statut' => $request->statut,
                'etat' => $request->etat,
                'id_region' => $request->id_region,
                'id_vote' => $request->id_vote,
                'login' => $request->login,
                'password' => Hash::make($request->password),
            ]);
            \DB::commit();
            return response() -> json($participant, 201);
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $participant = participant::find($id);
            $participant->update($request->all());
            response()->json("{'Modification reussie'}", 200);
            return $participant;
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    public function onOff ($id) {
        try {
            $part = participant::find($id);
            $part -> etat = "inactif";
            $part -> update();
            return response()->json("Operation reussie");
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $participant = Participant::find($id);
            $participant -> delete();
            return response() -> json([
                'message' => 'Participant deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return response() ->json('{"error" : "Impossible de sauvegarder"}' . $th, 404);
        }
    }
}
