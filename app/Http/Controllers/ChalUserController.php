<?php

namespace App\Http\Controllers;

use App\Models\Chal;
use App\Models\ChalUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ChalUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $ChalUsers = ChalUser::whereDate('created_at', '!=',today())->where(['user_id'=> $request->user()->id])->get();
        $doneNum = array(ChalUser::whereDate('created_at', '!=',today())->where('status', 0)->where(['user_id'=> $request->user()->id])->count(), ChalUser::whereDate('created_at', '!=',today())->where('status', 1)->where(['user_id'=> $request->user()->id])->count());

        return view('ss', compact(['ChalUsers' , 'doneNum']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(ChalUser::where(['user_id'=> $request->user()->id, 'status'=>0])->count() < 2 ){
            ChalUser::create(['chal_id'=>$request->id , 'user_id'=>$request->user()->id]);
            return redirect()->route('dashboard')->with('success', 'چالش '. Chal::findOrFail($request->id)->nam .' با موفقیت افزوده شد!');
        }
        return redirect()->back()->with('warning', 'لطفا ابتدا چالش های امروز خود را به اتمام برسانید');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ChalUser::where(['chal_id'=>$id])->where(['user_id'=>$request->user()->id])->update(['status'=>  1]);
        return redirect()->back()->with(    'done', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
