<?php

namespace LaiBao\Image\Imagick\Commands;

class FlipCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Mirrors an image
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $mode = $this->argument(0)->value('h');

        if (in_array(strtolower($mode), [2, 'v', 'vert', 'vertical'])) {
            // flip vertical
            return $image->getCore()->flipImage();
        } else {
            // flip horizontal
            return $image->getCore()->flopImage();
        }
    }
}
