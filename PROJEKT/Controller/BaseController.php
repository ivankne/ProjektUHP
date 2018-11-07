<?php

namespace Controller;

class BaseController
{
    protected function render($view, $vars = null)
    {
        require_once ($view);

    }
}