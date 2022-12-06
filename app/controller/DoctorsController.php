<?php

namespace Wise\Controller;

use Wise\Core\Controller;

class DoctorsController extends Controller
{
    public function home(): bool|array|string
    {
        return $this->render('doctors');
    }
}