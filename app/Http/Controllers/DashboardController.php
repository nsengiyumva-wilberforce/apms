<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use carbon\Carbon;

use Illuminate\Http\Request;
use App\models\Feed;
use App\Models\Water;
use App\Models\Temperature;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // //get yesterday
        // $yesterday = Carbon::yesterday()->format('Y-m-d');
        // //active sensors
        // $activeSensors = Temperature::whereDate('created_at', $yesterday)->count();

        // //inactive sensors
        // $inactiveSensors = Water::whereDate('created_at', '<', $yesterday)->count();

        //dd($inactiveSensors);


        //display dashboard
        return view('admin.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        return view('admin.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
    $requestData = $request->all();
    dashboard::create($requestData);

        return redirect('admin/dashboard')->with('flash_message', 'Dashboard added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {

        $dashboard = Dashboard::findOrFail($id);

        return view('admin.dashboard.show', compact('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $dashboard = Dashboard::findOrFail($id);

        return view('admin.dashboard.edit', compact('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $dashboard = Dashboard::findOrFail($id);
        $dashboard->update($requestData);

        return redirect('admin/dashboard')->with('flash_message', 'Dashboard updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Dashboard::destroy($id);

        return redirect('admin/dashboard')->with('flash_message', 'Dashboard deleted!');
    }
}
