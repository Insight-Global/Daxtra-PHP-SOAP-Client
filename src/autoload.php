<?php


 function autoload_bdc50a6ed8facbb0506e039f73c6df7e($class)
{
    $classes = array(
        'Daxtra\CVXtractor_Service' => __DIR__ . '/CVXtractor_Service.php',
        'Daxtra\SubmitToDX' => __DIR__ . '/SubmitToDX.php',
        'Daxtra\SubmitToDXResponse' => __DIR__ . '/SubmitToDXResponse.php',
        'Daxtra\ProcessCV' => __DIR__ . '/ProcessCV.php',
        'Daxtra\ProcessCVResponse' => __DIR__ . '/ProcessCVResponse.php',
        'Daxtra\ProcessCVattach' => __DIR__ . '/ProcessCVattach.php',
        'Daxtra\ProcessCVattachResponse' => __DIR__ . '/ProcessCVattachResponse.php',
        'Daxtra\ProcessCVphase1Attach' => __DIR__ . '/ProcessCVphase1Attach.php',
        'Daxtra\ProcessCVphase1AttachResponse' => __DIR__ . '/ProcessCVphase1AttachResponse.php',
        'Daxtra\ProcessCVphase1' => __DIR__ . '/ProcessCVphase1.php',
        'Daxtra\ProcessCVphase1Response' => __DIR__ . '/ProcessCVphase1Response.php',
        'Daxtra\ProcessCVphase2' => __DIR__ . '/ProcessCVphase2.php',
        'Daxtra\ProcessCVphase2Response' => __DIR__ . '/ProcessCVphase2Response.php',
        'Daxtra\ProcessJobOrder' => __DIR__ . '/ProcessJobOrder.php',
        'Daxtra\ProcessJobOrderResponse' => __DIR__ . '/ProcessJobOrderResponse.php',
        'Daxtra\ProcessJobOrderAttach' => __DIR__ . '/ProcessJobOrderAttach.php',
        'Daxtra\ProcessJobOrderAttachResponse' => __DIR__ . '/ProcessJobOrderAttachResponse.php',
        'Daxtra\ReformatCV' => __DIR__ . '/ReformatCV.php',
        'Daxtra\ReformatCVResponse' => __DIR__ . '/ReformatCVResponse.php',
        'Daxtra\PDF2Word' => __DIR__ . '/PDF2Word.php',
        'Daxtra\PDF2WordResponse' => __DIR__ . '/PDF2WordResponse.php',
        'Daxtra\ConvertCV' => __DIR__ . '/ConvertCV.php',
        'Daxtra\ConvertCVResponse' => __DIR__ . '/ConvertCVResponse.php',
        'Daxtra\ProcessBatch' => __DIR__ . '/ProcessBatch.php',
        'Daxtra\ProcessBatchResponse' => __DIR__ . '/ProcessBatchResponse.php',
        'Daxtra\InstallLists' => __DIR__ . '/InstallLists.php',
        'Daxtra\InstallListsResponse' => __DIR__ . '/InstallListsResponse.php',
        'Daxtra\RetrieveLists' => __DIR__ . '/RetrieveLists.php',
        'Daxtra\RetrieveListsResponse' => __DIR__ . '/RetrieveListsResponse.php',
        'Daxtra\CreateAccount' => __DIR__ . '/CreateAccount.php',
        'Daxtra\CreateAccountResponse' => __DIR__ . '/CreateAccountResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bdc50a6ed8facbb0506e039f73c6df7e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
