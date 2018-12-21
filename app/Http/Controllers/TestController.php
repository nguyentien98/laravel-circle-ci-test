<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repositories\UserRepository;

class TestController extends Controller
{
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function test(Request $request)
    {
        echo 'Hello';
        dd($request->all());
    }
}
