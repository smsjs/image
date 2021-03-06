<?php

namespace LaiBao\Image\Gd\Commands;

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

        return imagefilter($image->getCore(), IMG_FILTER_CONTRAST, ($level * -1));
    }
}
