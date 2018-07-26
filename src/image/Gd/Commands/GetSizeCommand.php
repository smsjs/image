<?php

namespace LaiBao\Image\Gd\Commands;

use LaiBao\Image\Size;

class GetSizeCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Reads size of given image instance in pixels
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $this->setOutput(new Size(
            imagesx($image->getCore()),
            imagesy($image->getCore())
        ));

        return true;
    }
}
