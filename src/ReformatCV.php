<?php

namespace Daxtra;

class ReformatCV
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
     * @var string $template
     */
    protected $template = null;

    /**
     * @var string $hrxml
     */
    protected $hrxml = null;

    /**
     * @param base64Binary $document_url
     * @param string $account
     * @param string $template
     * @param string $hrxml
     */
    public function __construct($document_url, $account, $template, $hrxml)
    {
      $this->document_url = $document_url;
      $this->account = $account;
      $this->template = $template;
      $this->hrxml = $hrxml;
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
     * @return \Daxtra\ReformatCV
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
     * @return \Daxtra\ReformatCV
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
      return $this->template;
    }

    /**
     * @param string $template
     * @return \Daxtra\ReformatCV
     */
    public function setTemplate($template)
    {
      $this->template = $template;
      return $this;
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
     * @return \Daxtra\ReformatCV
     */
    public function setHrxml($hrxml)
    {
      $this->hrxml = $hrxml;
      return $this;
    }

}
