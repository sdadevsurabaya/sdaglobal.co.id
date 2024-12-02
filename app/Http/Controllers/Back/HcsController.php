<?php

namespace App\Http\Controllers\Back;

use App\Models\Vacancies;
use App\Models\ModelLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Validator;

class HcsController extends Controller
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
            $title = 'Master Vacancies | SDA Global';
            $ListVacancies = Vacancies::with('level')->orderByDesc('id')->get();
            // dd($ListVacancies);
            $levels = ModelLevel::all();
            return view('back.page.vacancies', compact('title', 'ListVacancies', 'levels'));
        }
    }

    public function vacancies_store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'description' => 'required',
                'level' => 'required|not_in:0',
                'status' => 'required|not_in:0',
                'start_date' => 'required',
                'end_date' => 'required',
            ],
            [
                'title.required' => 'The Job Position field is required.',
            ]
        );

        //check if validation fails
        if ($validator->passes()) {
            // insert to db
            Vacancies::create([
                'title' => $request->title,
                'description' => $request->description,
                'level_id' => $request->level,
                'status' => $request->status,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            ]);

            return response()->json(['message' => 'Added new records job!']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function vacancies_detail($id)
    {
        $GetVacanciesById = Vacancies::where('id', $id)->with('level')->first();

        return response()->json([
            'success' => true,
            'data' => $GetVacanciesById,
        ]);
    }

    public function vacancies_update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'description' => 'required',
                'level' => 'required|not_in:0',
                'status' => 'required|not_in:0',
                'start_date' => 'required',
                'end_date' => 'required',
            ],
            [
                'title.required' => 'The Job Position field is required.',
            ]
        );

        //check if validation fails
        if ($validator->passes()) {
            // insert to db
            $data = Vacancies::find($request->id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->level_id = $request->level;
            $data->status = $request->status;
            $data->start_date = $request->start_date;
            $data->end_date = $request->end_date;
            $data->save();

            return response()->json(['message' => 'Updated records job!']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function identitas($id)
    {
        $title = 'Form Career | SDA Global';
        $getVacanciesById = Vacancies::where('id', $id)->first();
        $posission = $getVacanciesById->title;

        return view('front.form_career', compact('title', 'posission'));
    }
}
