<?php

namespace Api\Client\Http\Controllers;

use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function editProfile()
    {
        $client = \Auth::guard('client')->user();
        $client->load('profile');

        return view('client::profile.edit' , compact('client'));
    }
}
