<?php

namespace Rfd\ImageMagick\Operation;

use Rfd\ImageMagick\Image\Image;

/**
 * Class Operation
 * @package Rfd\ImageMagick\Operation
 * @method Builder next()
 *          Totally fake method so that all the code hinting stuff works.  Actually found in Builder.
 * @method Result finish()
 *          Totally fake method so that all the code hinting stuff works.  Actually found in Builder.
 */
abstract class Operation {
    const CONVERT = 'convert';
    const RESIZE = 'resize';
    const SLICE = 'slice';
    const WATERMARK = 'watermark';
    const COMPARE = 'compare';
    const INFO = 'info';

    protected $processor;
    protected $options;

    /**
     * @param Image $image
     *
     * @return Result
     */
    abstract public function process(Image $image);

    public function setProcessor(Processor $processor) {
        $this->processor = $processor;
    }
} 