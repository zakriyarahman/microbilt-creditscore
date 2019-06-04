<?php

namespace Zakriyarahman\Microbilt\Questions\Type;

use Zakriyarahman\Microbilt\Aggregate\Aggregate;
use Zakriyarahman\Microbilt\MicrobiltWsdlClass;
use Zakriyarahman\Microbilt\Boolean\Boolean;

/**
 * File for class QuestionsAnswers_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for QuestionsAnswers_Type originally named QuestionsAnswers_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class QuestionsAnswers_Type extends Aggregate
{
    /**
     * The QuestionID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionID;
    /**
     * The MultipleCorrectAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var Boolean
     */
    public $MultipleCorrectAnswers;
    /**
     * The QuestionText
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionText;
    /**
     * The QuestionInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $QuestionInfo;
    /**
     * The Answers
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var Answers_Type
     */
    public $Answers;
    /**
     * The SubQuestions
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SubQuestions_Type
     */
    public $SubQuestions;
    /**
     * The InvalidAnswers
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var InvalidAnswers_Type
     */
    public $InvalidAnswers;
    /**
     * Constructor method for QuestionsAnswers_Type
     * @see parent::__construct()
     * @param string $_questionID
     * @param Boolean $_multipleCorrectAnswers
     * @param string $_questionText
     * @param string $_questionInfo
     * @param Answers_Type $_answers
     * @param SubQuestions_Type $_subQuestions
     * @param InvalidAnswers_Type $_invalidAnswers
     * @return QuestionsAnswers_Type
     */
    public function __construct($_questionID = NULL,$_multipleCorrectAnswers = NULL,$_questionText = NULL,$_questionInfo = NULL,$_answers = NULL,$_subQuestions = NULL,$_invalidAnswers = NULL)
    {
        MicrobiltWsdlClass::__construct(array('QuestionID'=>$_questionID,'MultipleCorrectAnswers'=>$_multipleCorrectAnswers,'QuestionText'=>$_questionText,'QuestionInfo'=>$_questionInfo,'Answers'=>$_answers,'SubQuestions'=>$_subQuestions,'InvalidAnswers'=>$_invalidAnswers),false);
    }
    /**
     * Get QuestionID value
     * @return string|null
     */
    public function getQuestionID()
    {
        return $this->QuestionID;
    }
    /**
     * Set QuestionID value
     * @param string $_questionID the QuestionID
     * @return string
     */
    public function setQuestionID($_questionID)
    {
        return ($this->QuestionID = $_questionID);
    }
    /**
     * Get MultipleCorrectAnswers value
     * @return Boolean|null
     */
    public function getMultipleCorrectAnswers()
    {
        return $this->MultipleCorrectAnswers;
    }
    /**
     * Set MultipleCorrectAnswers value
     * @uses Boolean::valueIsValid()
     * @param Boolean $_multipleCorrectAnswers the MultipleCorrectAnswers
     * @return Boolean
     */
    public function setMultipleCorrectAnswers($_multipleCorrectAnswers)
    {
        if(!Boolean::valueIsValid($_multipleCorrectAnswers))
        {
            return false;
        }
        return ($this->MultipleCorrectAnswers = $_multipleCorrectAnswers);
    }
    /**
     * Get QuestionText value
     * @return string|null
     */
    public function getQuestionText()
    {
        return $this->QuestionText;
    }
    /**
     * Set QuestionText value
     * @param string $_questionText the QuestionText
     * @return string
     */
    public function setQuestionText($_questionText)
    {
        return ($this->QuestionText = $_questionText);
    }
    /**
     * Get QuestionInfo value
     * @return string|null
     */
    public function getQuestionInfo()
    {
        return $this->QuestionInfo;
    }
    /**
     * Set QuestionInfo value
     * @param string $_questionInfo the QuestionInfo
     * @return string
     */
    public function setQuestionInfo($_questionInfo)
    {
        return ($this->QuestionInfo = $_questionInfo);
    }
    /**
     * Get Answers value
     * @return Answers_Type|null
     */
    public function getAnswers()
    {
        return $this->Answers;
    }
    /**
     * Set Answers value
     * @param Answers_Type $_answers the Answers
     * @return Answers_Type
     */
    public function setAnswers($_answers)
    {
        return ($this->Answers = $_answers);
    }
    /**
     * Get SubQuestions value
     * @return SubQuestions_Type|null
     */
    public function getSubQuestions()
    {
        return $this->SubQuestions;
    }
    /**
     * Set SubQuestions value
     * @param SubQuestions_Type $_subQuestions the SubQuestions
     * @return SubQuestions_Type
     */
    public function setSubQuestions($_subQuestions)
    {
        return ($this->SubQuestions = $_subQuestions);
    }
    /**
     * Get InvalidAnswers value
     * @return InvalidAnswers_Type|null
     */
    public function getInvalidAnswers()
    {
        return $this->InvalidAnswers;
    }
    /**
     * Set InvalidAnswers value
     * @param InvalidAnswers_Type $_invalidAnswers the InvalidAnswers
     * @return InvalidAnswers_Type
     */
    public function setInvalidAnswers($_invalidAnswers)
    {
        return ($this->InvalidAnswers = $_invalidAnswers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return QuestionsAnswers_Type
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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