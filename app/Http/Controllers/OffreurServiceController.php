<?php

namespace App\Http\Controllers;

use App\OffreurService;
use Illuminate\Http\Request;

class OffreurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OffreurService::orderByDesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(OffreurService::create($request->all())){
            return response()->json([
                'success' => 'Service crée avec succés'
            ],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OffreurService  $offreurService
     * @return \Illuminate\Http\Response
     */
    public function show(OffreurService $offser)
    {
        return $offser;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OffreurService  $offreurService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OffreurService $offser)
    {
        if ($offser->update($request->all())) {
            return response()->json([
                'success' => 'Service modifiée avec succès'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OffreurService  $offreurService
     * @return \Illuminate\Http\Response
     */
    public function destroy(OffreurService $offser)
    {
        if($offser->delete()){
            return response()->json([
                'success' => 'Service Supprimé avec succès'
            ], 200);
        }
    }
}
