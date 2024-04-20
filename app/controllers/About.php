<?php

class About extends Controller
{
    public function index($name = 'Guest', $job = 'Programmer')
    {
        $data = ['name' => $name, 'job' => $job];
        $this->view('about/index', $data);
    }

    public function page()
    {
        $this->view('about/page');
    }
}