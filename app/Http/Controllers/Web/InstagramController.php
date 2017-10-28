<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mbarwick83\Instagram\Instagram;
use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function index(Instagram $instagram)
    {
        $profiles = DB::table('users')
            ->join('instagram_user', 'users.id', '=', 'instagram_user.user_id')
            ->join('instagrams', 'instagram_user.user_id', '=', 'instagrams.id')
            ->where('instagram_user.user_id', Auth::user()->id)
            ->select('instagrams.*')
            ->get();

        foreach($profiles as $profile)
        {
            $data = $instagram->get('v1/users/'.$profile->id_insta.'/media/recent/', ['access_token' => $profile->access_token]);
        }

        $timeline = ($data['data']);

        return view('instagrams.index', compact('profiles', 'timeline'));
    }

    public function callback(Request $request, Instagram $instagram)
    {
        $response = $instagram->getAccessToken($request->code);

        if (isset($response['code']) == 400)
        {
            return response()->json($response, 400);
        }

        $client = \App\Models\Instagram::updateOrCreate(
            [
                'id_insta' => $response['user']['id']
            ],[
                'username' => $response['user']['username'],
                'profile_picture' => $response['user']['profile_picture'],
                'full_name' => $response['user']['full_name'],
                'bio' => $response['user']['bio'],
                'website' => $response['user']['website'],
                'is_business' => $response['user']['is_business'],
                'access_token' => $response['access_token'],
            ]);

        $client->users()->sync(Auth::user()->id);

        return back()->with([
            'message' => '['.$client->username.'] successfully connected!',
            'type' => 'success',
            'icon' => 'check']);
    }

    public function connect(Instagram $instagram)
    {
        return redirect($instagram->getLoginUrl());
    }
}
