<?php

namespace LaiBao\Image\Gd\Commands;

class GreyscaleCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Turns an image into a greyscale version
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        return imagefilter($image->getCore(), IMG_FILTER_GRAYSCALE);
    }
}
