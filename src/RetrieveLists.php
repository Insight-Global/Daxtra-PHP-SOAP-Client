<?php

namespace Daxtra;

class RetrieveLists
{

    /**
     * @var string $list_type
     */
    protected $list_type = null;

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @param string $list_type
     * @param string $account
     */
    public function __construct($list_type, $account)
    {
      $this->list_type = $list_type;
      $this->account = $account;
    }

    /**
     * @return string
     */
    public function getList_type()
    {
      return $this->list_type;
    }

    /**
     * @param string $list_type
     * @return \Daxtra\RetrieveLists
     */
    public function setList_type($list_type)
    {
      $this->list_type = $list_type;
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
     * @return \Daxtra\RetrieveLists
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
