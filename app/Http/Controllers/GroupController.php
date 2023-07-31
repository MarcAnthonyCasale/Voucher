<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::latest()->paginate(10);

        return view('group.index', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $groups = new Group();
        $groups->name = $request->name;
        if($groups->save()){
            return redirect()->back()->with('status','Group Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $group = Group::find($id);
        return view('group.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $group = Group::find($id);
        return view('group.update', compact('group'));
    }

    public function editMember($id)
    {
        $group = Group::find($id);
        $members = GroupMember::where('group_id', $group->id)->get();
        return view('group.indexmember', compact('members'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $group = Group::find($id);
        $group->name = $request->input('name');
        $group->update();
        return redirect()->back()->with('status','Group Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
