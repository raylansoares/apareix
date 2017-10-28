<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Mbarwick83\Instagram\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function index()
    {
        return view('instagrams.index');
    }

    public function callback(Request $request, Instagram $instagram)
    {
        $response = $instagram->getAccessToken($request->code);

        if (isset($response['code']) == 400)
        {
            return response()->json($response, 400);
        }

        $client = new \App\Models\Instagram();

        $client->id_insta = $response['user']['id'];
        $client->username = $response['user']['username'];
        $client->profile_picture = $response['user']['profile_picture'];
        $client->full_name = $response['user']['full_name'];
        $client->bio = $response['user']['bio'];
        $client->website = $response['user']['website'];
        $client->is_business = $response['user']['is_business'];
        $client->access_token = $response['access_token'];

        $client->save();
        $client->users()->sync($client->id);

        return view('instagrams.index');
    }

    public function connect(Instagram $instagram)
    {
        return redirect($instagram->getLoginUrl());
    }
}
