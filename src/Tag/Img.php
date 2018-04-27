<?php

namespace ErikFig\Solid\Tag;

class Img
{
    public function render($src)
    {
        return '<img src="'.$src.'">';
    }
}
