<?php

namespace LaiBao\Image\Gd\Commands;

class ResetCommand extends \LaiBao\Image\Commands\AbstractCommand
{
    /**
     * Resets given image to its backup state
     *
     * @param  \LaiBao\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $backupName = $this->argument(0)->value();

        if (is_resource($backup = $image->getBackup($backupName))) {

            // destroy current resource
            imagedestroy($image->getCore());

            // clone backup
            $backup = $image->getDriver()->cloneCore($backup);

            // reset to new resource
            $image->setCore($backup);

            return true;
        }

        throw new \LaiBao\Image\Exception\RuntimeException(
            "Backup not available. Call backup() before reset()."
        );
    }
}
