<?php

namespace Zakriyarahman\Microbilt\Boolean;

use Zakriyarahman\Microbilt\MicrobiltWsdlClass;

/**
 * File for class Boolean
 * @package Microbilt
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for Boolean originally named Boolean
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class Boolean extends MicrobiltWsdlClass
{
    /**
     * Constant for value 0
     * @return integer 0
     */
    const VALUE_0 = 0;
    /**
     * Constant for value 1
     * @return integer 1
     */
    const VALUE_1 = 1;
    /**
     * Return true if value is allowed
     * @uses Boolean::VALUE_0
     * @uses Boolean::VALUE_1
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(Boolean::VALUE_0,Boolean::VALUE_1));
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