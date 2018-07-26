<?php

namespace LaiBao\Image\Imagick\Commands;

class ContrastCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Changes contrast of image
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $level = $this->argument(0)->between(-100, 100)->required()->value();

        return $image->getCore()->sigmoidalContrastImage($level > 0, $level / 4, 0);
    }
}
