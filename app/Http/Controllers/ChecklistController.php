<?php namespace Todo\Http\Controllers;

use Illuminate\Http\Request;
use Todo\Checklist;

class ChecklistController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $checklists = Checklist::all();
        return view('checklists.index', compact('checklists'));
    }

    public function show($id)
    {
        //$checklist = Checklist::findOrFail($id);
        $checklist = Checklist::find($id);
        return view('checklists.show', compact('checklist'));
    }

    public function create()
    {
        return view('checklists.create');
    }

    public function store(Request $request)
    {
        //$data = $request->only(['name', 'description']);
        Checklist::create($request->all());
        return redirect('/checklists');
    }

    public function edit($id)
    {
        //$checklist = Checklist::findOrFail($id);
        $checklist = Checklist::find($id);
        return view('checklists.edit', compact('checklist'));
    }

    public function update($id, Request $request)
    {
        $checklist = Checklist::find($id);
        $checklist->update($request->all());
        return redirect('/checklists');
    }

    public function destroy($id)
    {
        $checklist = Checklist::find($id);
        $checklist->delete();
        return redirect('/checklists');
    }
}
