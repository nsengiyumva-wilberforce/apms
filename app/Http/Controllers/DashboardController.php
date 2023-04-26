<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        //total number of pupils
        $pupils = 100;

        //Number of pupils who are active
        $activePupils = 20;

        //Number of pupils are deactive
        $deactivePupils = 80;


        //total number of assignments
        $assignments = 12;

        //Assignments tat haven't reached the deadline
        $date = today()->format('Y-m-d');
         $notYetDeadline = 23;

         //Assignments that reached the deadline
        $date = today()->format('Y-m-d');
        $overdue = 50;

        //display dashboard
        return view('admin.dashboard.index', compact('pupils', 'activePupils', 'deactivePupils', 'assignments', 'notYetDeadline', 'overdue'));
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
