<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CandidatesCollection;
use App\Http\Resources\CandidatesResource;
use App\Parties;
use App\Candidates;

class CandidatesController extends Controller
{
  public function index()
  {
      return new CandidatesCollection(CandidatesResource::collection(Candidates::all()));
  }

  public function show($id)
    {
        $candidate = Candidates::find($id);
        if (!$candidate) {
            return response()->json([
                'error' => 404,
                'message' => 'Not found'
            ], 404);
        } else {
            return new CandidatesResource($candidate);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'parties_id'     => 'required|integer'
        ]);
        $candidate = Candidates::create($request->all());
        return response()->json([
            'id'         => $candidate->id,
            'created_at' => $candidate->created_at
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'         => 'required',
            'parties_id'     => 'required'
        ]);
        $candidate = Candidates::find($id);
        if (!$candidate || $candidate->id != $id) {
            return response()->json([
                'error' => 404,
                'message' => 'not found'
            ]);
        } else {
            $candidate->update($request->all());
            return response()->json(null, 204);
        }
    }
}
