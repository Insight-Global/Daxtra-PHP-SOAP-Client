<?php

namespace Daxtra;

class ProcessBatchResponse
{

    /**
     * @var base64Binary $Results
     */
    protected $Results = null;

    /**
     * @var string $process_token
     */
    protected $process_token = null;

    /**
     * @param base64Binary $Results
     * @param string $process_token
     */
    public function __construct($Results, $process_token)
    {
      $this->Results = $Results;
      $this->process_token = $process_token;
    }

    /**
     * @return base64Binary
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param base64Binary $Results
     * @return \Daxtra\ProcessBatchResponse
     */
    public function setResults($Results)
    {
      $this->Results = $Results;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcess_token()
    {
      return $this->process_token;
    }

    /**
     * @param string $process_token
     * @return \Daxtra\ProcessBatchResponse
     */
    public function setProcess_token($process_token)
    {
      $this->process_token = $process_token;
      return $this;
    }

}
