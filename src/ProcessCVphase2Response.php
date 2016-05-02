<?php

namespace Daxtra;

class ProcessCVphase2Response
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
     * @return \Daxtra\ProcessCVphase2Response
     */
    public function setHrxml($hrxml)
    {
      $this->hrxml = $hrxml;
      return $this;
    }

}
