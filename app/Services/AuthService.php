<?php
namespace App\Services;

use App\Models\User;

class AuthService
{
    public static $user;

    public static function attempt($credentials)
    {
        $user = User::where('username',$credentials['username'])->first();
    }
}
?>
