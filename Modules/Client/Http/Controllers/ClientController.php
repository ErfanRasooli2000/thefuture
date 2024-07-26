<?php

namespace Api\Client\Http\Controllers;

use Api\Client\Http\Requests\ClientProfileRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function updateProfile(ClientProfileRequest $request)
    {
        $inputs = $request->validated();
        $client = $this->getClient();

        $client->update([
            'name' => $inputs['fullname'],
            'email' => $inputs['email'],
        ]);

        $client->profile()->update([
            'birth_year' => $inputs['birthYear'],
            'birth_month' => $inputs['birthMonth'],
            'birth_day' => $inputs['birthDay'],
            'biography' => $inputs['biography'],
            'website' => $inputs['website'],
            'github' => $inputs['github'],
            'telegram' => $inputs['telegram'],
            'linkedin' => $inputs['linkedin'],
        ]);

        return redirect()->back();
    }

    private function getClient()
    {
        $client = Auth::guard('client')->user();
        $client->load('profile');

        return $client;
    }
}
