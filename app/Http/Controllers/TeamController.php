<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Image;
use File;
use Session;
use Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = \App\Team::orderBy('idTeam','DESC')->get();
        return view('team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = \App\Team::orderBy('idTeam','DESC')->get();
        return view('team.index', compact('teams'));
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
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ];
        $messages = [
            
        ];
        $this->validate($request, $rules, $messages);
        $team = new \App\Team();
        $team->fill($request->all());
        if ($files = $request->file('image')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/team/';
            $ImageUpload->resize(160,160);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'team_'.time().'.'.$files->getClientOriginalExtension());
            $team->image = $ImageUpload->basename;
        }
        $team->save();
        Session::flash('message','Team member added successfully !!');
        return redirect('/teams');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = \App\Team::where('idTeam','=',$id)->first();
        $teams = \App\Team::orderBy('idTeam','DESC')->get();

        return view('team.index', compact('teams','team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = \App\Team::where('idTeam','=',$id)->first();
        $teams = \App\Team::orderBy('idTeam','DESC')->get();

        return view('team.index', compact('teams','team'));
    }

    public function update(Request $request, $id)
    {
        $team = \App\Team::where('idTeam', '=', $id)->first();

        $rules = [
            'name' => 'required',
            'designation' => 'required',
            // 'image' => 'required',
        ];
        $messages = [];
        $this->validate($request, $rules, $messages);
        $image_path = app_path("img/team/".$team->image);
        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $team->fill($request->all());
        if ($files = $request->file('image')) {     
            // for save original image
            $ImageUpload = Image::make($files);
            // for save thumnail image
            $thumbnailPath = 'img/team/';
            $ImageUpload->resize(160,160);
            $ImageUpload = $ImageUpload->save($thumbnailPath.'team_'.time().'.'.$files->getClientOriginalExtension());
            $team->image = $ImageUpload->basename;
        }
        $team->update();
        Session::flash('message','Team updated successfully !!');
        return redirect('teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = \App\Team:: where('idTeam', '=', $id)->first();
        $image_path = app_path("img/team/".$team->image);
        if(file_exists($image_path)){
            //File::delete($image_path);
            File::delete( $image_path);
        }
        $team->delete();
        return response()->json(['success' => "SUCCESS"], 200, ['app-status' => 'success']);
    }

    public function getUsers(){
        $users =\App\User::where('isAdmin','=','N')->orderBy('created_at','DESC')->get();
        return view('users.index', compact('users'));
    }
    public function getEm(){
        return view('mail.invoice');
    }
    
    public function getdetails($id){
        // dd('here');
        $user =\App\User::where('id','=',$id)->first();
        return view('users.details',compact('user'));
    }
    
    public function getUpdatePasswordForm() {
        return view('updatepassword');
    }

    public function updatePassword(Request $request) {
        $rules = [];
        $user = \App\User::where('id','=',Auth::user()->id)->first();
        
        $this->validate($request, $rules + [
            'password' => 'required|min:6|confirmed',
        ]);
        $user->password = bcrypt($request->password);
        $user->update();
        session()->flash('message','Password updated successfully.');
        // flash()->success('Password updated successfully.');
        return redirect()->back();
    }
    

}
