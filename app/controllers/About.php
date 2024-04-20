<?php

class About
{
    public function index($name = 'Guest', $job = 'Programmer')
    {
        echo "Halo saya $name, pekerjaan saya adalah $job";
    }

    public function page()
    {
        echo "About/page";
    }
}