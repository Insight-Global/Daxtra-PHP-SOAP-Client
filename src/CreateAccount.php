<?php

namespace Daxtra;

class CreateAccount
{

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @var string $credentials
     */
    protected $credentials = null;

    /**
     * @param string $account
     * @param string $credentials
     */
    public function __construct($account, $credentials)
    {
      $this->account = $account;
      $this->credentials = $credentials;
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
     * @return \Daxtra\CreateAccount
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return string
     */
    public function getCredentials()
    {
      return $this->credentials;
    }

    /**
     * @param string $credentials
     * @return \Daxtra\CreateAccount
     */
    public function setCredentials($credentials)
    {
      $this->credentials = $credentials;
      return $this;
    }

}
