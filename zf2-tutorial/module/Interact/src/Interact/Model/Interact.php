<?php

namespace Interact\Model;

use Album\Controller;


class Interact
{
    protected $interact;

    public function interactFunction()
    {
        $this->interact = new Controller\AlbumController();

        $interact = $this->interact->testInteraction();

        return $interact;


    }
}