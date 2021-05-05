<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{
    public function login($params)
    {
        $results = User::where('user_name', $params->userName)->first();
        if (Hash::check($params->password, $results->password)) {
            $results->use_count++;
            $results->last_connect = Carbon::now()->toDateTimeString();
            $results->token = Hash::make(Str::random(250));
            $results->save();

        }
        return $results;
    }


    public function logout($params)
    {

        $result = User::where([
            ['id', '=', $params->userId],
            ['token', '=', $params->token]
        ])->firstOrFail();

        $result->token = '';
        $result->save();
        return $result;
    }
}
