<?php

namespace Daxtra;

class ProcessCVphase2
{

    /**
     * @var string $phase2_token
     */
    protected $phase2_token = null;

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @param string $phase2_token
     * @param string $account
     */
    public function __construct($phase2_token, $account)
    {
      $this->phase2_token = $phase2_token;
      $this->account = $account;
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
     * @return \Daxtra\ProcessCVphase2
     */
    public function setPhase2_token($phase2_token)
    {
      $this->phase2_token = $phase2_token;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param string $account
     * @return \Daxtra\ProcessCVphase2
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
