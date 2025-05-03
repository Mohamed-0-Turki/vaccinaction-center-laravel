<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::latest()->get();
        return view('vaccines.index', compact('vaccines'));
    }

    public function create()
    {
        return view('vaccines.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'doses_required' => 'required|integer|min:1',
        ]);

        Vaccine::create($data);

        return redirect()->route('admin.vaccines.index')->with('success', 'Vaccine created successfully.');
    }

    public function edit(Vaccine $vaccine)
    {
        return view('vaccines.edit', compact('vaccine'));
    }

    public function update(Request $request, Vaccine $vaccine)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'doses_required' => 'required|integer|min:1',
        ]);

        $vaccine->update($data);

        return redirect()->route('admin.vaccines.index')->with('success', 'Vaccine updated successfully.');
    }

    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();

        return redirect()->route('admin.vaccines.index')->with('success', 'Vaccine deleted successfully.');
    }
}
