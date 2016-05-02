<?php

namespace Daxtra;

class ProcessJobOrderAttach
{

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @param string $account
     */
    public function __construct($account)
    {
      $this->account = $account;
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
     * @return \Daxtra\ProcessJobOrderAttach
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
