<?php

namespace Wise\Controller;

use Wise\Core\Controller;

class BlockController extends Controller
{
    public function home(): bool|array|string
    {
        return $this->render('block');
    }
}