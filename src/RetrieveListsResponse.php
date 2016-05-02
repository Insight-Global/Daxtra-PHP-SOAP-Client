<?php

namespace Daxtra;

class RetrieveListsResponse
{

    /**
     * @var string $list_content
     */
    protected $list_content = null;

    /**
     * @param string $list_content
     */
    public function __construct($list_content)
    {
      $this->list_content = $list_content;
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
     * @return \Daxtra\RetrieveListsResponse
     */
    public function setList_content($list_content)
    {
      $this->list_content = $list_content;
      return $this;
    }

}
