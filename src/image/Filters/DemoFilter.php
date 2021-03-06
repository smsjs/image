<?php

namespace LaiBao\Image\Filters;

class DemoFilter implements FilterInterface
{
    /**
     * Default size of filter effects
     */
    const DEFAULT_SIZE = 10;

    /**
     * Size of filter effects
     *
     * @var integer
     */
    private $size;

    /**
     * Creates new instance of filter
     *
     * @param integer $size
     */
    public function __construct($size = null)
    {
        $this->size = is_numeric($size) ? intval($size) : self::DEFAULT_SIZE;
    }

    /**
     * Applies filter effects to given image
     *
     * @param  \LaiBao\Image\Image $image
     * @return \LaiBao\Image\Image
     */
    public function applyFilter(\LaiBao\Image\Image $image)
    {
        $image->pixelate($this->size);
        $image->greyscale();

        return $image;
    }
}
