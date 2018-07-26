<?php

namespace LaiBao\Image\Gd\Commands;

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

        return imagegammacorrect($image->getCore(), 1, $gamma);
    }
}
