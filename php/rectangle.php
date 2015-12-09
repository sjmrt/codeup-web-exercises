<?php


class Rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }

    public function perimeter()
    {
        return ($this->height * 2) + ($this->width * 2);
    }

    protected function setHeight($height)
    {
        
        $this->height = (is_numeric($height)) ? $height : 0;
    }

    protected function setWidth($width)
    {
        $this->width = (is_numeric($width)) ? $width : 0;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
}