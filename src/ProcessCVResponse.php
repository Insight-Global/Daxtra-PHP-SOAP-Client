<?php

namespace Daxtra;

class ProcessCVResponse
{

    /**
     * @var string $hrxml
     */
    protected $hrxml = null;

    /**
     * @param string $hrxml
     */
    public function __construct($hrxml)
    {
      $this->hrxml = $hrxml;
    }

    /**
     * @return string
     */
    public function getHrxml()
    {
      return $this->hrxml;
    }

    /**
     * @param string $hrxml
     * @return \Daxtra\ProcessCVResponse
     */
    public function setHrxml($hrxml)
    {
      $this->hrxml = $hrxml;
      return $this;
    }

}
