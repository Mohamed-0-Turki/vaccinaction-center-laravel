<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\City;
use Illuminate\Http\Request;

class CenterController extends Controller
{
        public function index()
        {
            $centers = Center::with('city')->latest()->get();
            return view('centers.index', compact('centers'));
        }

        public function create()
        {
            $cities = City::all();
            return view('centers.create', compact('cities'));
        }

        public function store(Request $request)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'nullable|string',
                'city_id' => 'required|exists:cities,id',
            ]);

            Center::create($data);

            return redirect()->route('admin.centers.index')->with('success', 'Center created.');
        }

        public function edit(Center $center)
        {
            $cities = City::all();
            return view('centers.edit', compact('center', 'cities'));
        }

        public function update(Request $request, Center $center)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'nullable|string',
                'city_id' => 'required|exists:cities,id',
            ]);

            $center->update($data);

            return redirect()->route('admin.centers.index')->with('success', 'Center updated.');
        }

        public function destroy(Center $center)
        {
            $center->delete();

            return redirect()->route('admin.centers.index')->with('success', 'Center deleted.');
        }

}
