<?php

namespace ErikFig\Solid\Tag;

class Ul
{
    public function render($content)
    {
        return '<ul>'. $content .'</ul>';
    }
}
