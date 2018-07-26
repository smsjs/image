<?php

namespace LaiBao\Image\Imagick\Commands;

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
        /** @var \Imagick $core */
        $core = $image->getCore();

        $this->setOutput(new Size(
            $core->getImageWidth(),
            $core->getImageHeight()
        ));

        return true;
    }
}
