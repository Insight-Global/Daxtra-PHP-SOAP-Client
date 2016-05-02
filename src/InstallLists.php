<?php

namespace Daxtra;

class InstallLists
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
     * @var string $list_content
     */
    protected $list_content = null;

    /**
     * @param string $list_type
     * @param string $account
     * @param string $list_content
     */
    public function __construct($list_type, $account, $list_content)
    {
      $this->list_type = $list_type;
      $this->account = $account;
      $this->list_content = $list_content;
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
     * @return \Daxtra\InstallLists
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
     * @return \Daxtra\InstallLists
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return string
     */
    public function getList_content()
    {
      return $this->list_content;
    }

    /**
     * @param string $list_content
     * @return \Daxtra\InstallLists
     */
    public function setList_content($list_content)
    {
      $this->list_content = $list_content;
      return $this;
    }

}
