<?php

namespace LaiBao\Image\Imagick\Commands;

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
        return $image->getCore()->modulateImage(100, 0, 100);
    }
}
