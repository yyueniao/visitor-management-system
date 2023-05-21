<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display the visitor registration form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('visitor.create');
    }

    /**
     * Store a newly created visitor in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'purpose' => 'required',
        ]);

        Visitor::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'vehicle' => $request->vehicle ?? null,
            'purpose' => $request->purpose,
        ]);

        return redirect()->route('visitor.create')->with('success', 'Visitor registered successfully!');
    }
}
