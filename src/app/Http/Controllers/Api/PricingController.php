<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    // GET /api/pricings
    public function index()
    {
        $pricing = Pricing::where('section_key', 'pricing_main')->first();

        return response()->json([
            'status' => 'success',
            'data' => $pricing
        ]);
    }

    // POST /api/pricings
    public function store(Request $request)
    {
        $data = $request->validate([
            'section_key' => 'required|unique:pricings',
            'small_title' => 'required|string',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'plans' => 'required|array',
        ]);

        $pricing = Pricing::create([
            ...$data,
            'plans' => json_encode($data['plans']),
        ]);

        return response()->json([
            'status' => 'created',
            'data' => $pricing
        ], 201);
    }

    // PUT /api/pricings/{pricing}
    public function update(Request $request, Pricing $pricing)
    {
        $data = $request->validate([
            'small_title' => 'required|string',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'plans' => 'required|array',
        ]);

        $pricing->update([
            ...$data,
            'plans' => json_encode($data['plans']),
        ]);

        return response()->json([
            'status' => 'updated',
            'data' => $pricing
        ]);
    }

    // DELETE /api/pricings/{pricing}
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();

        return response()->json([
            'status' => 'deleted'
        ]);
    }
}
