<?php

namespace App\Http\Controllers\Back;

use Validator;
use App\Models\ModelLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::get('email')) {
            return redirect('login');
        } else {
            $title = 'Master level | SDA Global';
            $levels = ModelLevel::all();
            return view('back.page.level', compact('levels', 'title'));
        }
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
        $validator = Validator::make($request->all(), [
            'title'   => 'required',
        ],
        [
            'title.required' => 'The Title field is required.',
        ]);

        //check if validation fails
        if ($validator->passes()) {
            // insert to db
            $level = ModelLevel::create([
                'title'   => $request->title,
            ]);

            return response()->json(['message'=>'Added new records level!']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $levels = ModelLevel::find($id);

        return response()->json([
            'success' => true,
            'data'    => $levels
        ]);
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
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required',
        ],
        [
            'title.required' => 'The Title field is required.',
        ]);

        //check if validation fails
        if ($validator->passes()) {
            // insert to db
            $data = ModelLevel::find($request->id);
            $data->title = $request->title;
            $data->save();

            return response()->json(['message'=>'Updated records level!']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelLevel::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Deleted records level!',
            // 'data'    => $post
        ]);
    }
}
