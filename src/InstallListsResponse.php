<?php

namespace Daxtra;

class InstallListsResponse
{

    /**
     * @var string $return_message
     */
    protected $return_message = null;

    /**
     * @param string $return_message
     */
    public function __construct($return_message)
    {
      $this->return_message = $return_message;
    }

    /**
     * @return string
     */
    public function getReturn_message()
    {
      return $this->return_message;
    }

    /**
     * @param string $return_message
     * @return \Daxtra\InstallListsResponse
     */
    public function setReturn_message($return_message)
    {
      $this->return_message = $return_message;
      return $this;
    }

}
