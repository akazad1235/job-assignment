<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;


class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Member::paginate(10 );
        return view('admin.pages.dashboard', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function memberSearch(){
        return view('admin.pages.memberSearch');
    }
    public function getMemberSearch(Request $request){
       // return $request->all();
        $form = $request->form;
        $to = $request->to;

      $data =  Member::whereBetween('created_at', [$form, $to])->where('name','LIKE', '%' . $request->keyword. '%')->orWhere('email', 'LIKE', '%' . $request->keyword. '%')->get();
      $fee = $data->sum('fee');
      return view('admin.pages.searchableData', compact('data', 'fee'));
    }
}

