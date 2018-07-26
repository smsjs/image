<?php

namespace LaiBao\Image\Gd\Commands;

class BlurCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Applies blur effect on image
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $amount = $this->argument(0)->between(0, 100)->value(1);

        for ($i=0; $i < intval($amount); $i++) {
            imagefilter($image->getCore(), IMG_FILTER_GAUSSIAN_BLUR);
        }

        return true;
    }
}
