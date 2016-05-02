<?php

namespace Daxtra;

class ProcessJobOrderResponse
{

    /**
     * @var string $vacxml
     */
    protected $vacxml = null;

    /**
     * @param string $vacxml
     */
    public function __construct($vacxml)
    {
      $this->vacxml = $vacxml;
    }

    /**
     * @return string
     */
    public function getVacxml()
    {
      return $this->vacxml;
    }

    /**
     * @param string $vacxml
     * @return \Daxtra\ProcessJobOrderResponse
     */
    public function setVacxml($vacxml)
    {
      $this->vacxml = $vacxml;
      return $this;
    }

}
