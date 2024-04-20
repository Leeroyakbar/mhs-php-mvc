<?php

class About extends Controller
{
    public function index($name = 'Guest', $job = 'Programmer')
    {
        $data = ['name' => $name, 'job' => $job];
        $this->view('templates/header', ['title' => 'About']);
        $this->view('about/index', $data);
        $this->view('templates/header');
    }

    public function page()
    {
        $this->view('templates/header', ['title' => 'Page']);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}