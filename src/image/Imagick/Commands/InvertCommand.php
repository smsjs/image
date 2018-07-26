<?php

namespace LaiBao\Image\Imagick\Commands;

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
        return $image->getCore()->negateImage(false);
    }
}
