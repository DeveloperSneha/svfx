<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;


class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = \App\Faq::orderBy('idFaq','DESC')->get();

        return view('faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $faqs = \App\Faq::orderBy('idFaq','DESC')->get();

        return view('faq.index', compact('faqs'));
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
            'question' => 'required|unique:faqs|max:300|between:2,300',
            'answer' => 'required',

        ];
        $messages = [
            
        ];
        $this->validate($request, $rules, $messages);
        $faq = new \App\Faq();
        $faq->fill($request->all());
        $faq->save();
        flash($faq->question .' '.'added successfully !!');
        return redirect('/faqs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = \App\Faq::where('idFaq','=',$id)->first();
        $faqs = \App\Faq::orderBy('idFaq','DESC')->get();

        return view('faq.index', compact('faqs','faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = \App\Faq::where('idFaq','=',$id)->first();
        $faqs = \App\Faq::orderBy('idFaq','DESC')->get();

        return view('faq.index', compact('faqs','faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = \App\Faq::where('idFaq', '=', $id)->first();

        $rules = [
            'question' => 'required|max:300', Rule::unique('faqs')->ignore($faq->idFaq, 'idFaq'),
        ];
        $messages = [];
        $this->validate($request, $rules, $messages);
        $faq->fill($request->all());
        $faq->update();
        flash($faq->question .' '.'updated successfully !!');
        return redirect('faqs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = \App\Faq:: where('idFaq', '=', $id)->first();
        $faq->delete();
        return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
    }
}
