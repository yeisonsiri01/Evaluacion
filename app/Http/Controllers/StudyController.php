<?php

namespace App\Http\Controllers;

use App\Study;
use Illuminate\Http\Request;

/**
 * Class StudyController
 * @package App\Http\Controllers
 */
class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::paginate();

        return view('study.index', compact('studies'))
            ->with('i', (request()->input('page', 1) - 1) * $studies->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $study = new Study();
        return view('study.create', compact('study'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Study::$rules);

        $study = Study::create($request->all());

        return redirect()->route('studies.index')
            ->with('success', 'Study created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $study = Study::find($id);

        return view('study.show', compact('study'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $study = Study::find($id);

        return view('study.edit', compact('study'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Study $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study $study)
    {
        request()->validate(Study::$rules);

        $study->update($request->all());

        return redirect()->route('studies.index')
            ->with('success', 'Study updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $study = Study::find($id)->delete();

        return redirect()->route('studies.index')
            ->with('success', 'Study deleted successfully');
    }
}
