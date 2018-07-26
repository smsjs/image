<?php

namespace LaiBao\Image\Gd\Commands;

class InvertCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Inverts colors of an image
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        return imagefilter($image->getCore(), IMG_FILTER_NEGATE);
    }
}
