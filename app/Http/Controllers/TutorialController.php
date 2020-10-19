<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutorials = \App\Tutorial::orderBy('idTutorial','DESC')->get();

        return view('tutorial.index', compact('tutorials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $tutorials = \App\Tutorial::orderBy('idTutorial','DESC')->get();

        return view('tutorial.index', compact('tutorials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'videoUrl' => 'required|unique:tutorials|max:300|between:2,300',
            'name' => 'required',
            // 'image' => 'required',

        ];
        $messages = [
            
        ];
        $this->validate($request, $rules, $messages);
        $tutorial = new \App\Tutorial();
        $tutorial->fill($request->all());
        $tutorial->save();
        flash($tutorial->name .' '.'added successfully !!');
        return redirect('/tutorials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutorial = \App\Tutorial::where('idTutorial','=',$id)->first();
        $tutorials = \App\Tutorial::orderBy('idTutorial','DESC')->get();

        return view('tutorial.index', compact('tutorials','tutorial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutorial = \App\Tutorial::where('idTutorial','=',$id)->first();
        $tutorials = \App\Tutorial::orderBy('idTutorial','DESC')->get();

        return view('tutorial.index', compact('tutorials','tutorial'));
    }

    public function update(Request $request, $id)
    {
        $tutorial = \App\Tutorial::where('idTutorial', '=', $id)->first();

        $rules = [
            'videoUrl' => 'required|max:300', Rule::unique('tutorials')->ignore($tutorial->idTutorial, 'idTutorial'),
        ];
        $messages = [];
        $this->validate($request, $rules, $messages);
        $tutorial->fill($request->all());
        $tutorial->update();
        flash($tutorial->name .' '.'updated successfully !!');
        return redirect('tutorials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutorial = \App\Tutorial:: where('idTutorial', '=', $id)->first();
        $tutorial->delete();
        return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
    }
}
