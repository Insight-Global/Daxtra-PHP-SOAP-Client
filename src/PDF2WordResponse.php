<?php

namespace Daxtra;

class PDF2WordResponse
{

    /**
     * @var base64Binary $doc
     */
    protected $doc = null;

    /**
     * @param base64Binary $doc
     */
    public function __construct($doc)
    {
      $this->doc = $doc;
    }

    /**
     * @return base64Binary
     */
    public function getDoc()
    {
      return $this->doc;
    }

    /**
     * @param base64Binary $doc
     * @return \Daxtra\PDF2WordResponse
     */
    public function setDoc($doc)
    {
      $this->doc = $doc;
      return $this;
    }

}
