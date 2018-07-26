<?php

namespace LaiBao\Image\Imagick\Commands;

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

        $backup = $image->getBackup($backupName);

        if ($backup instanceof \Imagick) {

            // destroy current core
            $image->getCore()->clear();

            // clone backup
            $backup = clone $backup;

            // reset to new resource
            $image->setCore($backup);

            return true;
        }

        throw new \LaiBao\Image\Exception\RuntimeException(
            "Backup not available. Call backup({$backupName}) before reset()."
        );
    }
}
