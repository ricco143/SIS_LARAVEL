<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Student;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subjects = Subject::all();
        return view('subjects.index', ['subjectList' => $subjects]);
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
    public function store(StoreSubjectRequest $request)
    {
        //
        try {
            $validated = $request->validated();
            Subject::create($validated);
            return redirect('subjects')->with('success', 'Subject added Successfully');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Subject creation error: ' . $e->getMessage());
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create subject. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
        $validated = $request->validated();
        $subject->update($validated);
        return redirect()->back()->with('success', 'Subject updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
        $subject->delete();
        return redirect('subjects')->with('success', 'Subject Deleted Successfully');
    }
}
