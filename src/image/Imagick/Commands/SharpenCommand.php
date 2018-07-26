<?php

namespace LaiBao\Image\Imagick\Commands;

class SharpenCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Sharpen image
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $amount = $this->argument(0)->between(0, 100)->value(10);

        return $image->getCore()->unsharpMaskImage(1, 1, $amount / 6.25, 0);
    }
}
