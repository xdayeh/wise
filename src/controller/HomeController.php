<?php

namespace MVC\controller;

class HomeController extends Controller
{
    public function index(): bool|array|string
    {
        return $this->render('home.index');
    }
    public function about(): bool|array|string
    {
        return $this->render('home.about');
    }
    public function team(): bool|array|string
    {
        return $this->render('home.team');
    }
}