<?php

namespace App\Http\Controllers\Client;

use App\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index(){
        return view('client.settings');
    }

    public function update(Request $request){

        $client = Client::find(Auth::guard('clients')->user()->id);
        $request->validate([
            'name'                      => 'required',
            'email'                     => 'required',
            'phone'                     => 'required',
            'gender'                    => 'required',
        ]);

        $requestAll = $request->all();

        if ($request->has('avatar')) {
            if($client->avatar)
                unlink(storage_path('app/public/client/' . $client->avatar));

            $image      = $request->file('avatar');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/client', $fileName);
            $requestAll['avatar']                       = $fileName;
        }
        $client->fill($requestAll)->save();

        if(!empty($client)){
            return redirect()->back()->with([
                'status'    => 'success',
                'message'      => 'Your profile has been successfully updated'
            ]);
        }
    }
}
