<?php

namespace Daxtra;

class SubmitToDXResponse
{

    /**
     * @var string $response
     */
    protected $response = null;

    /**
     * @param string $response
     */
    public function __construct($response)
    {
      $this->response = $response;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param string $response
     * @return \Daxtra\SubmitToDXResponse
     */
    public function setResponse($response)
    {
      $this->response = $response;
      return $this;
    }

}
