<?php
namespace Controllers;

use Pinatra\View\View;

class HomeController
{
    public function home()
    {
        // echo "Welcome to homepage!";

        // $arr = [1,2,3];
        // return View::json($arr); // 返回json

        // print_r(view('home'));die;
        $res = view('home')->with('title', 'Pinatra')
            ->with('home_page', 'HomePage!');

        print_r($res);
        return $res;
    }
}