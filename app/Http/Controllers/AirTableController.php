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
        $fields = $request->all();
        if($user == 'donor'){
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|numeric|min:9',
                'job' => 'required|string',
                'contact' => 'required|string',
                'about' => 'nullable|string',
            ]);

            $response = AirtableFacade::table('donors')->create(['fields' => $fields]);
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
