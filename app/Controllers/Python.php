<?php

namespace App\Controllers;

class Python extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Python Course',
            'courseurl' => '/python',
            'course' => 'Python'
        ];
        return view('course/python', $data);
    }
    public function gettingstarted()
    {
        $data = [
            'title' => 'Python | Getting Started',
            'courseurl' => '/python',
            'coursename' => 'Getting Started',
            'course' => 'Python'
        ];
        return view('course/python/gettingstarted/gettingstarted', $data);
    }
    public function flowcontrol()
    {
        $data = [
            'title' => 'Python | Flow control',
            'courseurl' => '/python',
            'coursename' => 'Flow Control',
            'course' => 'Python'
        ];
        return view('course/python/flowcontrol/ifelse', $data);
    }
    public function functions()
    {
        $data = [
            'title' => 'Python | Flow control',
            'courseurl' => '/python',
            'coursename' => 'Functions',
            'course' => 'Python'
        ];
        return view('course/python/functions/functions', $data);
    }
    public function datatypes()
    {
        $data = [
            'title' => 'Python | Flow control',
            'courseurl' => '/python',
            'coursename' => 'Data Types',
            'course' => 'Python'
        ];
        return view('course/python/datatypes/numbers', $data);
    }
    public function files()
    {
        $data = [
            'title' => 'Python | Flow control',
            'courseurl' => '/python',
            'coursename' => 'Files',
            'course' => 'Python'
        ];
        return view('course/python/files/fileoperations', $data);
    }
    public function objectsclass()
    {
        $data = [
            'title' => 'Python | Flow control',
            'courseurl' => '/python',
            'coursename' => 'Object & Class',
            'course' => 'Python'
        ];
        return view('course/python/objectsclass/oop', $data);
    }
    public function datetime()
    {
        $data = [
            'title' => 'Python | Flow control',
            'courseurl' => '/python',
            'coursename' => 'Date & Time',
            'course' => 'Python'
        ];
        return view('course/python/datetime/timesleep', $data);
    }
    public function test()
    {
        $side['sidecontent'] = array(
            'Getting Started' => '/python/gettingstarted',
            'Keywords $ Identifier' => '/python',
            'Statements & Comments' => '/python'
        );
        return view('course/python/test' . $side);
    }
}
