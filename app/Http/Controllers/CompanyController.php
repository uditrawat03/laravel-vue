<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $companies = Company::select();
            return DataTables::eloquent($companies)
            ->addColumn('action', function($company){
                return  "
                    <a class='button is-outlined m-r-5' href='" . route('companies.show', $company->id). "'>View</a>
                    <a class='button is-light' href='" . route('companies.edit', $company->id). "'>Edit</a>
                ";
            })
            ->make(true);
        }

        return view('manage.companies.index');
    }


    public function create(Request $request){
        return view('manage.companies.create');
    }


    public function store(Request $request){
        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'status' => $request->status
        ]);
    }
}
