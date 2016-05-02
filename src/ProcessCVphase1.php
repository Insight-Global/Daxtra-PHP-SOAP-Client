<?php

namespace Daxtra;

class ProcessCVphase1
{

    /**
     * @var base64Binary $document_url
     */
    protected $document_url = null;

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @param base64Binary $document_url
     * @param string $account
     */
    public function __construct($document_url, $account)
    {
      $this->document_url = $document_url;
      $this->account = $account;
    }

    /**
     * @return base64Binary
     */
    public function getDocument_url()
    {
      return $this->document_url;
    }

    /**
     * @param base64Binary $document_url
     * @return \Daxtra\ProcessCVphase1
     */
    public function setDocument_url($document_url)
    {
      $this->document_url = $document_url;
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
     * @return \Daxtra\ProcessCVphase1
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
