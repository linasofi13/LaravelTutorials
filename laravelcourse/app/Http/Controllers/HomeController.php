<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $title = 'Contact us - Online Store';
        $subtitle = 'Contact us';
        $email = 'lina@gmail.com';
        $phone = '+306 589 658';
        $address = 'Calle 4 # 30';

        return view('home.contact')->with('title', $title)->with('subtitle', $subtitle)->with('email', $email)->with('phone', $phone)->with('address', $address);
    }
}
