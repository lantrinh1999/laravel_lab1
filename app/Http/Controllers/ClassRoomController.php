<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $_data;

    public function index()
    {
        $this->_data['classes'] = ClassRoom::all();

        return view('class', $this->_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ClassRoom $classRoom
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ClassRoom $classRoom)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ClassRoom $classRoom
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassRoom $classRoom)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ClassRoom    $classRoom
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassRoom $classRoom)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ClassRoom $classRoom
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassRoom $classRoom)
    {
    }
}