<?php

namespace LaiBao\Image\Imagick\Commands;

use LaiBao\Image\Imagick\Color;

class RotateCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Rotates image counter clockwise
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $angle = $this->argument(0)->type('numeric')->required()->value();
        $color = $this->argument(1)->value();
        $color = new Color($color);

        // rotate image
        $image->getCore()->rotateImage($color->getPixel(), ($angle * -1));

        return true;
    }
}
