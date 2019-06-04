<?php

namespace Zakriyarahman\Microbilt\Transform;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Transform\Transform;

/**
 * File for class MicrobiltServiceTransform
 * @package Microbilt
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltServiceTransform originally named Transform
 * @package Microbilt
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltServiceTransform extends MicrobiltWsdlClass
{
    /**
     * Method to call the operation originally named Transform
     * @uses MicrobiltWsdlClass::getSoapClient()
     * @uses MicrobiltWsdlClass::setResult()
     * @uses MicrobiltWsdlClass::saveLastError()
     * @param Transform $_microbiltStructTransform
     * @return TransformResponse
     */
    public function Transform(Transform $_microbiltStructTransform)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Transform($_microbiltStructTransform));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MicrobiltWsdlClass::getResult()
     * @return TransformResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
