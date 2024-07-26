<?php

namespace Api\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function dashboard()
    {
        $client = $this->getClient();

        return view('client::profile.dashboard' , compact('client'));
    }
    public function courses()
    {
        $client = $this->getClient();

        return view('client::profile.courses' , compact('client'));
    }

    public function favourites()
    {
        $client = $this->getClient();

        return view('client::profile.favourites' , compact('client'));
    }

    public function payments()
    {
        $client = $this->getClient();

        return view('client::profile.payments' , compact('client'));
    }
    public function comments()
    {
        $client = $this->getClient();

        return view('client::profile.comments' , compact('client'));
    }

    public function notifications()
    {
        $client = $this->getClient();

        return view('client::profile.notifications' , compact('client'));
    }

    public function editProfile()
    {
        $client = $this->getClient();

        return view('client::profile.edit' , compact('client'));
    }

    private function getClient()
    {
        $client = Auth::guard('client')->user();
        $client->load('profile');

        return $client;
    }
}

//favourites
//payments
//comments
//notifications
