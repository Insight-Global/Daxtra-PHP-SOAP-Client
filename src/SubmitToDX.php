<?php

namespace Daxtra;

class SubmitToDX
{

    /**
     * @var string $event
     */
    protected $event = null;

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @param string $event
     * @param string $account
     */
    public function __construct($event, $account)
    {
      $this->event = $event;
      $this->account = $account;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
      return $this->event;
    }

    /**
     * @param string $event
     * @return \Daxtra\SubmitToDX
     */
    public function setEvent($event)
    {
      $this->event = $event;
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
     * @return \Daxtra\SubmitToDX
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
