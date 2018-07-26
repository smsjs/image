<?php

namespace LaiBao\Image\Filters;

interface FilterInterface
{
    /**
     * Applies filter to given image
     *
     * @param  \LaiBao\Image\Image $image
     * @return \LaiBao\Image\Image
     */
    public function applyFilter(\LaiBao\Image\Image $image);
}
