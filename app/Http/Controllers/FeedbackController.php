<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("page.formulir", [
            'title' => 'Formulir',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new feedback();
        $data->name      = $request->nama;
        $data->email       = $request->email;
        $data->message       = $request->message;

        $data->save();
        return redirect()->route('form')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        $feedbacks = Feedback::all();

        if ($feedbacks->isEmpty()) {
            return redirect()->route('form')->with('error', 'Data Kosong, mohon masukkan data terlebih dahulu.');
        }
        return view('page.data')
        ->with('feedbacks', $feedbacks)
        ->with('title', 'Formulir');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
