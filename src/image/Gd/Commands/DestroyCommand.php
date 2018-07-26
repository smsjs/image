<?php

namespace LaiBao\Image\Gd\Commands;

class DestroyCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Destroys current image core and frees up memory
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        // destroy image core
        imagedestroy($image->getCore());

        // destroy backups
        foreach ($image->getBackups() as $backup) {
            imagedestroy($backup);
        }

        return true;
    }
}
