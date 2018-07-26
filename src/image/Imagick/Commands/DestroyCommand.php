<?php

namespace LaiBao\Image\Imagick\Commands;

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
        $image->getCore()->clear();

        // destroy backups
        foreach ($image->getBackups() as $backup) {
            $backup->clear();
        }

        return true;
    }
}
