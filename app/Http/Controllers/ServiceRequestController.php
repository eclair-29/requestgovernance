<?php

namespace App\Http\Controllers;

use ArrayObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = array(
            (object)[
                'id' => '1',
                'ticket_id' => 'HR12345678',
                'application_type_id' => 'HRIS Application',
                'user_id' => 'Miguel De Chavez',
                'approver_id' => 'John Doe',
                'status_id' => 'Pending Division Head Approval',
                'request_type_id' => 'NEW',
                'created_date' => '2023-12-18 15:52:00',
                'updated_date' => '2023-12-18 15:52:00',
            ],
            (object)[
                'id' => '2',
                'ticket_id' => 'UA12345678',
                'application_type_id' => 'User Account Application',
                'user_id' => 'Miguel De Chavez',
                'approver_id' => 'Jane Doe',
                'status_id' => 'Pending Division Head Approval',
                'request_type_id' => 'NEW',
                'created_date' => '2023-12-18 15:52:00',
                'updated_date' => '2023-12-18 15:52:00',
            ],
        );

        $requests = DB::select('SELECT * FROM service_requests');

        // $requests = [];

        return view('requests.index', [
            'user' => 'Miguel',
            'requests' => $requests
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('requests.show', [
            'requestId' => $id,
            'user' => 'Miguel',
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
