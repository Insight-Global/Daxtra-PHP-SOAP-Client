<?php

namespace Daxtra;


/**
 * WSDL File for CVXtractorService
 */
class CVXtractor_Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'SubmitToDX' => 'Daxtra\\SubmitToDX',
      'SubmitToDXResponse' => 'Daxtra\\SubmitToDXResponse',
      'ProcessCV' => 'Daxtra\\ProcessCV',
      'ProcessCVResponse' => 'Daxtra\\ProcessCVResponse',
      'ProcessCVattach' => 'Daxtra\\ProcessCVattach',
      'ProcessCVattachResponse' => 'Daxtra\\ProcessCVattachResponse',
      'ProcessCVphase1Attach' => 'Daxtra\\ProcessCVphase1Attach',
      'ProcessCVphase1AttachResponse' => 'Daxtra\\ProcessCVphase1AttachResponse',
      'ProcessCVphase1' => 'Daxtra\\ProcessCVphase1',
      'ProcessCVphase1Response' => 'Daxtra\\ProcessCVphase1Response',
      'ProcessCVphase2' => 'Daxtra\\ProcessCVphase2',
      'ProcessCVphase2Response' => 'Daxtra\\ProcessCVphase2Response',
      'ProcessJobOrder' => 'Daxtra\\ProcessJobOrder',
      'ProcessJobOrderResponse' => 'Daxtra\\ProcessJobOrderResponse',
      'ProcessJobOrderAttach' => 'Daxtra\\ProcessJobOrderAttach',
      'ProcessJobOrderAttachResponse' => 'Daxtra\\ProcessJobOrderAttachResponse',
      'ReformatCV' => 'Daxtra\\ReformatCV',
      'ReformatCVResponse' => 'Daxtra\\ReformatCVResponse',
      'PDF2Word' => 'Daxtra\\PDF2Word',
      'PDF2WordResponse' => 'Daxtra\\PDF2WordResponse',
      'ConvertCV' => 'Daxtra\\ConvertCV',
      'ConvertCVResponse' => 'Daxtra\\ConvertCVResponse',
      'ProcessBatch' => 'Daxtra\\ProcessBatch',
      'ProcessBatchResponse' => 'Daxtra\\ProcessBatchResponse',
      'InstallLists' => 'Daxtra\\InstallLists',
      'InstallListsResponse' => 'Daxtra\\InstallListsResponse',
      'RetrieveLists' => 'Daxtra\\RetrieveLists',
      'RetrieveListsResponse' => 'Daxtra\\RetrieveListsResponse',
      'CreateAccount' => 'Daxtra\\CreateAccount',
      'CreateAccountResponse' => 'Daxtra\\CreateAccountResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://cvxdemo.daxtra.com/cvvalid/CVXtractorService.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param ProcessCVattach $bodyPart
     * @param base64Binary $CVattachment
     * @return ProcessCVattachResponse
     */
    public function ProcessCVattach(ProcessCVattach $bodyPart, $CVattachment)
    {
      return $this->__soapCall('ProcessCVattach', array($bodyPart, $CVattachment));
    }

    /**
     * @param ProcessCVphase1Attach $bodyPart
     * @param base64Binary $CVattachment
     * @return ProcessCVphase1AttachResponse
     */
    public function ProcessCVphase1Attach(ProcessCVphase1Attach $bodyPart, $CVattachment)
    {
      return $this->__soapCall('ProcessCVphase1Attach', array($bodyPart, $CVattachment));
    }

    /**
     * @param ProcessCV $parameters
     * @return ProcessCVResponse
     */
    public function ProcessCV(ProcessCV $parameters)
    {
      return $this->__soapCall('ProcessCV', array($parameters));
    }

    /**
     * @param ProcessCVphase1 $parameters
     * @return ProcessCVphase1Response
     */
    public function ProcessCVphase1(ProcessCVphase1 $parameters)
    {
      return $this->__soapCall('ProcessCVphase1', array($parameters));
    }

    /**
     * @param ProcessCVphase2 $parameters
     * @return ProcessCVphase2Response
     */
    public function ProcessCVphase2(ProcessCVphase2 $parameters)
    {
      return $this->__soapCall('ProcessCVphase2', array($parameters));
    }

    /**
     * @param ProcessJobOrder $parameters
     * @return ProcessJobOrderResponse
     */
    public function ProcessJobOrder(ProcessJobOrder $parameters)
    {
      return $this->__soapCall('ProcessJobOrder', array($parameters));
    }

    /**
     * @param ProcessJobOrderAttach $bodyPart
     * @param base64Binary $JOattachment
     * @return ProcessJobOrderAttachResponse
     */
    public function ProcessJobOrderAttach(ProcessJobOrderAttach $bodyPart, $JOattachment)
    {
      return $this->__soapCall('ProcessJobOrderAttach', array($bodyPart, $JOattachment));
    }

    /**
     * @param ConvertCV $parameters
     * @return ConvertCVResponse
     */
    public function ConvertCV(ConvertCV $parameters)
    {
      return $this->__soapCall('ConvertCV', array($parameters));
    }

    /**
     * @param ReformatCV $parameters
     * @return ReformatCVResponse
     */
    public function ReformatCV(ReformatCV $parameters)
    {
      return $this->__soapCall('ReformatCV', array($parameters));
    }

    /**
     * @param PDF2Word $parameters
     * @return PDF2WordResponse
     */
    public function PDF2Word(PDF2Word $parameters)
    {
      return $this->__soapCall('PDF2Word', array($parameters));
    }

    /**
     * @param ProcessBatch $parameters
     * @return ProcessBatchResponse
     */
    public function ProcessBatch(ProcessBatch $parameters)
    {
      return $this->__soapCall('ProcessBatch', array($parameters));
    }

    /**
     * @param InstallLists $parameters
     * @return InstallListsResponse
     */
    public function InstallLists(InstallLists $parameters)
    {
      return $this->__soapCall('InstallLists', array($parameters));
    }

    /**
     * @param RetrieveLists $parameters
     * @return RetrieveListsResponse
     */
    public function RetrieveLists(RetrieveLists $parameters)
    {
      return $this->__soapCall('RetrieveLists', array($parameters));
    }

    /**
     * @param CreateAccount $parameters
     * @return CreateAccountResponse
     */
    public function CreateAccount(CreateAccount $parameters)
    {
      return $this->__soapCall('CreateAccount', array($parameters));
    }

}
