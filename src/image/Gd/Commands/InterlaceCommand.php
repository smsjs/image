<?php

namespace LaiBao\Image\Gd\Commands;

class InterlaceCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Toggles interlaced encoding mode
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $mode = $this->argument(0)->type('bool')->value(true);

        imageinterlace($image->getCore(), $mode);

        return true;
    }
}
