<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $vouchers = Voucher::latest()->paginate(10);

        return view('users.index', compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vouchers = new Voucher();
        $vouchers->user_id = auth()->user()->id;
        $vouchers->code = $request->code;
        if($vouchers->save()){
            return redirect()->back()->with('status','Code Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $voucher = Voucher::find($id);
        return view('users.show', compact('voucher'));
    }
    public function edit($id)
    {
        $voucher = Voucher::find($id);
        return view('users.update', compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $voucher = Voucher::find($id);
        $voucher->code = $request->input('code');
        $voucher->update();
        return redirect()->back()->with('status','Code Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $voucher = Voucher::find($id);
        $voucher->delete();
        return redirect()->back()->with('status','Voucher Deleted Successfully');
    }
}
