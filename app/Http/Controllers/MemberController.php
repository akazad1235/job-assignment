<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Image;



class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('memberRegistration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //   return $request->all();

        Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required','max:255', 'unique:members'],
            'phone' => ['required','min:11', 'max:11', 'unique:members'],
            'address' => ['required'],
            'fee' => ['required'],
            'district' => ['required'],
            'nid' => ['required'],
            'photo' => ['required'],
            'password' => 'required|required_with:rePassword|same:rePassword|min:7|',
            'rePassword' =>['required']
        ])->validate();

        $nid = $request->file('nid');
        $photo = $request->file('photo');
        $nidFileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $nid->getClientOriginalExtension();
        // return $fileName;
        Image::make($nid)->resize(200, 200)->save(public_path('admin/images/nid').$nidFileName );

           $photoFileName = rand(0, 999999999) . '_' . date('Ymdhis').'_' . rand(100, 999999999) . '.' . $photo->getClientOriginalExtension();
           // return $fileName;
           Image::make($photo)->resize(200, 200)->save(public_path('admin/images/photo').$photoFileName);


     $result =   Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'fee' => $request->fee,
            'district' => $request->district,
            'NID' =>  $nidFileName ,
            'photo' => $photoFileName,
            'password' => Hash::make($request->password),
        ]);
    if($result){
        return back()->with(['message'=>'member registration success']);
    }else{
        return back()->with(['error'=>'member registration failed']);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
