<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tapp\Airtable\Facades\AirtableFacade;

class AirTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \Airtable::table('default')->create(['fields' => ['name' => 'ddddddd']]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user)
    {
        if (!in_array($user, ['employee', 'employer', 'donor', 'training-provider', 'institution', 'job'])) {
            abort(404);
        }

//        return view('site.register')->with('user', $user);
        return view('airtable.'.$user)->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user)
    {
        if (!in_array($user, ['employee', 'employer', 'donor', 'training-provider', 'institution', 'job'])) {
            abort(404);
        }
//        $fields = $request->only(['name', 'email', 'phone', 'country', 'address', 'notes']);
//        $fields['type'] = $user;
        if($user == 'donor'){
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|numeric|min:9',
                'job' => 'required|string',
                'contact' => 'required|string',
                'about' => 'nullable|string',
            ]);

            $fields = $request->only(['name', 'email', 'phone', 'job', 'contact', 'about']);
            $response = AirtableFacade::table('donors')->create(['fields' => $fields]);
        }elseif($user == 'employer'){
            $this->validate($request, [
                'owner' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|numeric|min:9',
                'company' => 'required|string',
                'field' => 'required|string',
                'address' => 'required|string',
                'responsible' => 'required|string',
            ]);

            $fields = $request->only(['owner', 'email', 'phone', 'company', 'field', 'address', 'responsible']);
            $response = AirtableFacade::table('employer')->create(['fields' => $fields]);
        }elseif($user == 'employee'){
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email',
                'bd_day' => 'required|numeric',
                'bd_month' => 'required|numeric',
                'bd_year' => 'required|numeric',
                'type' => 'required|string',
                'gov' => 'required|string',
                'education' => 'required|string',
                'job' => 'required|string',
            ]);

            $fields = $request->only(['name', 'email', 'type', 'gov', 'education', 'job']);
            $fields['birth_date'] = $request->get('bd_day')."/".$request->get('bd_month')."/".$request->get('bd_year');
//            dd($fields);
            $response = AirtableFacade::table('employee')->create(['fields' => $fields]);
        }

        if ($response->has('createdTime')) {
            return view('site.success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
