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
    public function about(): View
    {
        $data1 = 'About us - Online Store';
        $data2 = 'About us';
        $description = 'This is an about page ...';
        $author = 'Developed by: Your Name';

        return view('home.about')->with('title', $data1)
            ->with('subtitle', $data2)
            ->with('description', $description)
            ->with('author', $author);
    }
}
