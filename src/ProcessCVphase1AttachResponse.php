<?php

namespace Daxtra;

class ProcessCVphase1AttachResponse
{

    /**
     * @var string $hrxml
     */
    protected $hrxml = null;

    /**
     * @var string $phase2_token
     */
    protected $phase2_token = null;

    /**
     * @param string $hrxml
     * @param string $phase2_token
     */
    public function __construct($hrxml, $phase2_token)
    {
      $this->hrxml = $hrxml;
      $this->phase2_token = $phase2_token;
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
     * @return \Daxtra\ProcessCVphase1AttachResponse
     */
    public function setHrxml($hrxml)
    {
      $this->hrxml = $hrxml;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhase2_token()
    {
      return $this->phase2_token;
    }

    /**
     * @param string $phase2_token
     * @return \Daxtra\ProcessCVphase1AttachResponse
     */
    public function setPhase2_token($phase2_token)
    {
      $this->phase2_token = $phase2_token;
      return $this;
    }

}
