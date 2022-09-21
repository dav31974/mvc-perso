<?php

namespace Controllers;

use Source\Renderer;

class ContactController
{
    public function index(): Renderer
    {
        return Renderer::make('contact/index');
    }
}
