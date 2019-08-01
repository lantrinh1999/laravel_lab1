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
        // $this->_data['class_id_2'] = ClassRoom::where('id', 2)->get();

        return view('admin.class', $this->_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm()
    {
        return view('admin.add_class');
    }

    public function create(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required|min:8|string',
            'teacher_name' => 'required|string|min:5|max:50',
            'major' => 'required',
            'max_student' => 'nullable|numeric',
        ]
        );

        $data = $request->except('_token');
        // dd($data);

        $class = new ClassRoom();
        $class->name = $data['name'];
        $class->teacher_name = $data['teacher_name'];
        $class->major = $data['major'];
        $class->max_student = $data['max_student'];
        $class->save();
        $this->_data['classes'] = $class;

        return view('admin.class', $this->_data);
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