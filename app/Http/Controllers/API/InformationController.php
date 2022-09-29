<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\InformationResource;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function index()
    {
        $info = Content::where('category', 'Information')->latest()
            ->when(request('limit'),function ($q){
                $q->take(request('limit'));
            })->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Information',
            'data' => InformationResource::collection($info)
        ],200);
    }

    public function show($id)
    {
        $info = Content::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Data Information',
            'data' => new InformationResource($info)
        ],200);
    }
}
