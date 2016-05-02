<?php

namespace Daxtra;

class ConvertCVResponse
{

    /**
     * @var string $convert
     */
    protected $convert = null;

    /**
     * @param string $convert
     */
    public function __construct($convert)
    {
      $this->convert = $convert;
    }

    /**
     * @return string
     */
    public function getConvert()
    {
      return $this->convert;
    }

    /**
     * @param string $convert
     * @return \Daxtra\ConvertCVResponse
     */
    public function setConvert($convert)
    {
      $this->convert = $convert;
      return $this;
    }

}
