<?php

namespace MVC\core;

abstract class BaseController
{
    protected array $layoutParams = [];
    public function setLayoutParam(string $key, $value): void
    {
        $this->layoutParams[$key] = $value;
    }
    public function render(string $view, array $params = []): bool|array|string
    {
        try {
            return View::renderView($view, array_merge($this->layoutParams, $params));
        } catch (Log $e) {
            return View::renderView('error.index', [
                'exception' => $e
            ]);
        }
    }
}