<?php

namespace LaiBao\Image\Gd\Commands;

use LaiBao\Image\Gd\Color;

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
        $image->setCore(imagerotate($image->getCore(), $angle, $color->getInt()));

        return true;
    }
}
