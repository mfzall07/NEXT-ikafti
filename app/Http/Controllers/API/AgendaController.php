<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AgendaResource;
use App\Models\Content;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Content::where('category', 'Agenda')->latest()->take(4)->get();;
        return response()->json([
            'success' => true,
            'message' => 'Data Agenda',
            'data' => AgendaResource::collection($agenda)
        ],200);
    }

    public function show($id)
    {
        $agenda = Content::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Data Agenda',
            'data' => new AgendaResource($agenda)
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
