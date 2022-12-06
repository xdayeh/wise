<?php

namespace Wise\Controller;

use Wise\Core\Controller;

class MajorsController extends Controller
{
    public function home(): bool|array|string
    {
        return $this->render('majors');
    }
}