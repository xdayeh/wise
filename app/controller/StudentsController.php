<?php

namespace Wise\Controller;

use Wise\Core\Controller;

class StudentsController extends Controller
{
    public function home(): bool|array|string
    {
        return $this->render('students');
    }
}