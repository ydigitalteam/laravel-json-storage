<?php

namespace LaravelJsonStorage\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use LaravelJsonStorage\Models\Domain;

class DomainController
{

    public function index(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Success.'
        ]);
    }

    public function show(Request $request, $uuid)
    {

        $domain = new Domain();
        $domain->get(['id' => '']);
        return response()->json([
            'status' => 'Success.',
            'data' => $request->all()
        ]);
    }
}