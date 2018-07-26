<?php

namespace LaiBao\Image\Imagick\Commands;

class GammaCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Applies gamma correction to a given image
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $gamma = $this->argument(0)->type('numeric')->required()->value();

        return $image->getCore()->gammaImage($gamma);
    }
}
