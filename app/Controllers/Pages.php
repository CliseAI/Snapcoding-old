<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'SnapCoding'
        ];
        return view('pages/home', $data);
    }
    public function course()
    {
        $data = [
            'title' => 'Course'
        ];
        return view('pages/course', $data);
    }
    public function forum()
    {
        $data = [
            'title' => 'Forum'
        ];
        return view('pages/forum', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('pages/contact', $data);
    }
}
