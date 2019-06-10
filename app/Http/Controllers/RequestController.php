<?php

namespace App\Http\Controllers;
use App\Request;
use App\Http\Requests\StatementRequest;

class RequestController extends Controller
{
    //
    public function index()
    {
        $requests = Request::select([
            'requests.*',
            'users.name as userFirstName',
            'users.last_name as userLastName',
            'users.email as userEmail'
        ])
            ->leftJoin('users', 'users.id', '=', 'requests.user_id')
            ->paginate(20);

        return view('admin/adminrequest', ['requests' => $requests]);
    }

    public function store(StatementRequest $request)
    {
        $requestModel = new Request();
        $requestModel->service = $request->service;
        $requestModel->task = $request->task;
        $requestModel->user_id = auth()->id();
        $requestModel->save();

        return redirect()->route('request');
    }

    public function show()
    {
        // get request + all reports
    }
}
