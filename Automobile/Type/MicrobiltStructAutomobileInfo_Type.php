<?php
/**
 * File for class MicrobiltStructAutomobileInfo_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructAutomobileInfo_Type originally named AutomobileInfo_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructAutomobileInfo_Type extends MicrobiltStructAggregate
{
    /**
     * The OwnerRegistrantInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $OwnerRegistrantInfo;
    /**
     * The Year
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $Year;
    /**
     * The Make
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Make;
    /**
     * The VehicleModel
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VehicleModel;
    /**
     * The VehicleColor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VehicleColor;
    /**
     * The PlateNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PlateNum;
    /**
     * The RegState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RegState;
    /**
     * The VIN
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $VIN;
    /**
     * The OwnerIndividualSeqNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OwnerIndividualSeqNum;
    /**
     * The CoOwnerIndividualSeqNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $CoOwnerIndividualSeqNum;
    /**
     * The Series
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $Series;
    /**
     * The EngineSize
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $EngineSize;
    /**
     * The OdometerMileage
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OdometerMileage;
    /**
     * The FuelType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $FuelType;
    /**
     * The VehicleUse
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $VehicleUse;
    /**
     * The NumOfCylinders
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $NumOfCylinders;
    /**
     * The MotorVehicleRegistrationOption
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $MotorVehicleRegistrationOption;
    /**
     * The MajorColor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $MajorColor;
    /**
     * The MinorColor
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $MinorColor;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $Body;
    /**
     * The TitleNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TitleNum;
    /**
     * The TitleIssueDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $TitleIssueDt;
    /**
     * The PrevTitleIssueDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $PrevTitleIssueDt;
    /**
     * The RecordID
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RecordID;
    /**
     * The OriginationState
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $OriginationState;
    /**
     * The AutoStyle
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AutoStyle;
    /**
     * The AutoType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $AutoType;
    /**
     * The FirstSeenDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $FirstSeenDt;
    /**
     * The EffectiveDtRange
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructDateRange_Type
     */
    public $EffectiveDtRange;
    /**
     * The TitleEarliestIssueDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $TitleEarliestIssueDt;
    /**
     * The LienDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $LienDt;
    /**
     * The NetWeight
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $NetWeight;
    /**
     * The NumOfAxles
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var long
     */
    public $NumOfAxles;
    /**
     * The AutomobileExtras
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructAutomobileExtras_Type
     */
    public $AutomobileExtras;
    /**
     * The PlateCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PlateCode;
    /**
     * The PlateType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $PlateType;
    /**
     * The TruePlateNum
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $TruePlateNum;
    /**
     * The LienHolderInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructLienHolderInfo_Type
     */
    public $LienHolderInfo;
    /**
     * The RegistrationDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructRegistrationDetails_Type
     */
    public $RegistrationDetails;
    /**
     * The DecalDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $DecalDt;
    /**
     * The CheckDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var date
     */
    public $CheckDt;
    /**
     * The NewVehicleInd
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltEnumBoolean
     */
    public $NewVehicleInd;
    /**
     * The ModelYear
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $ModelYear;
    /**
     * The BodyType
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $BodyType;
    /**
     * Constructor method for AutomobileInfo_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_ownerRegistrantInfo
     * @param date $_year
     * @param string $_make
     * @param string $_vehicleModel
     * @param string $_vehicleColor
     * @param string $_plateNum
     * @param string $_regState
     * @param string $_vIN
     * @param string $_ownerIndividualSeqNum
     * @param string $_coOwnerIndividualSeqNum
     * @param string $_series
     * @param string $_engineSize
     * @param string $_odometerMileage
     * @param MicrobiltStructCodeDescription_Type $_fuelType
     * @param MicrobiltStructCodeDescription_Type $_vehicleUse
     * @param long $_numOfCylinders
     * @param MicrobiltStructCodeDescription_Type $_motorVehicleRegistrationOption
     * @param MicrobiltStructCodeDescription_Type $_majorColor
     * @param MicrobiltStructCodeDescription_Type $_minorColor
     * @param MicrobiltStructCodeDescription_Type $_body
     * @param string $_titleNum
     * @param date $_titleIssueDt
     * @param date $_prevTitleIssueDt
     * @param string $_recordID
     * @param string $_originationState
     * @param string $_autoStyle
     * @param string $_autoType
     * @param date $_firstSeenDt
     * @param MicrobiltStructDateRange_Type $_effectiveDtRange
     * @param date $_titleEarliestIssueDt
     * @param date $_lienDt
     * @param long $_netWeight
     * @param long $_numOfAxles
     * @param MicrobiltStructAutomobileExtras_Type $_automobileExtras
     * @param string $_plateCode
     * @param string $_plateType
     * @param string $_truePlateNum
     * @param MicrobiltStructLienHolderInfo_Type $_lienHolderInfo
     * @param MicrobiltStructRegistrationDetails_Type $_registrationDetails
     * @param date $_decalDt
     * @param date $_checkDt
     * @param MicrobiltEnumBoolean $_newVehicleInd
     * @param string $_modelYear
     * @param string $_bodyType
     * @return MicrobiltStructAutomobileInfo_Type
     */
    public function __construct($_ownerRegistrantInfo = NULL,$_year = NULL,$_make = NULL,$_vehicleModel = NULL,$_vehicleColor = NULL,$_plateNum = NULL,$_regState = NULL,$_vIN = NULL,$_ownerIndividualSeqNum = NULL,$_coOwnerIndividualSeqNum = NULL,$_series = NULL,$_engineSize = NULL,$_odometerMileage = NULL,$_fuelType = NULL,$_vehicleUse = NULL,$_numOfCylinders = NULL,$_motorVehicleRegistrationOption = NULL,$_majorColor = NULL,$_minorColor = NULL,$_body = NULL,$_titleNum = NULL,$_titleIssueDt = NULL,$_prevTitleIssueDt = NULL,$_recordID = NULL,$_originationState = NULL,$_autoStyle = NULL,$_autoType = NULL,$_firstSeenDt = NULL,$_effectiveDtRange = NULL,$_titleEarliestIssueDt = NULL,$_lienDt = NULL,$_netWeight = NULL,$_numOfAxles = NULL,$_automobileExtras = NULL,$_plateCode = NULL,$_plateType = NULL,$_truePlateNum = NULL,$_lienHolderInfo = NULL,$_registrationDetails = NULL,$_decalDt = NULL,$_checkDt = NULL,$_newVehicleInd = NULL,$_modelYear = NULL,$_bodyType = NULL)
    {
        MicrobiltWsdlClass::__construct(array('OwnerRegistrantInfo'=>$_ownerRegistrantInfo,'Year'=>$_year,'Make'=>$_make,'VehicleModel'=>$_vehicleModel,'VehicleColor'=>$_vehicleColor,'PlateNum'=>$_plateNum,'RegState'=>$_regState,'VIN'=>$_vIN,'OwnerIndividualSeqNum'=>$_ownerIndividualSeqNum,'CoOwnerIndividualSeqNum'=>$_coOwnerIndividualSeqNum,'Series'=>$_series,'EngineSize'=>$_engineSize,'OdometerMileage'=>$_odometerMileage,'FuelType'=>$_fuelType,'VehicleUse'=>$_vehicleUse,'NumOfCylinders'=>$_numOfCylinders,'MotorVehicleRegistrationOption'=>$_motorVehicleRegistrationOption,'MajorColor'=>$_majorColor,'MinorColor'=>$_minorColor,'Body'=>$_body,'TitleNum'=>$_titleNum,'TitleIssueDt'=>$_titleIssueDt,'PrevTitleIssueDt'=>$_prevTitleIssueDt,'RecordID'=>$_recordID,'OriginationState'=>$_originationState,'AutoStyle'=>$_autoStyle,'AutoType'=>$_autoType,'FirstSeenDt'=>$_firstSeenDt,'EffectiveDtRange'=>$_effectiveDtRange,'TitleEarliestIssueDt'=>$_titleEarliestIssueDt,'LienDt'=>$_lienDt,'NetWeight'=>$_netWeight,'NumOfAxles'=>$_numOfAxles,'AutomobileExtras'=>$_automobileExtras,'PlateCode'=>$_plateCode,'PlateType'=>$_plateType,'TruePlateNum'=>$_truePlateNum,'LienHolderInfo'=>$_lienHolderInfo,'RegistrationDetails'=>$_registrationDetails,'DecalDt'=>$_decalDt,'CheckDt'=>$_checkDt,'NewVehicleInd'=>$_newVehicleInd,'ModelYear'=>$_modelYear,'BodyType'=>$_bodyType),false);
    }
    /**
     * Get OwnerRegistrantInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getOwnerRegistrantInfo()
    {
        return $this->OwnerRegistrantInfo;
    }
    /**
     * Set OwnerRegistrantInfo value
     * @param MicrobiltStructPersonInfo_Type $_ownerRegistrantInfo the OwnerRegistrantInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setOwnerRegistrantInfo($_ownerRegistrantInfo)
    {
        return ($this->OwnerRegistrantInfo = $_ownerRegistrantInfo);
    }
    /**
     * Get Year value
     * @return date|null
     */
    public function getYear()
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param date $_year the Year
     * @return date
     */
    public function setYear($_year)
    {
        return ($this->Year = $_year);
    }
    /**
     * Get Make value
     * @return string|null
     */
    public function getMake()
    {
        return $this->Make;
    }
    /**
     * Set Make value
     * @param string $_make the Make
     * @return string
     */
    public function setMake($_make)
    {
        return ($this->Make = $_make);
    }
    /**
     * Get VehicleModel value
     * @return string|null
     */
    public function getVehicleModel()
    {
        return $this->VehicleModel;
    }
    /**
     * Set VehicleModel value
     * @param string $_vehicleModel the VehicleModel
     * @return string
     */
    public function setVehicleModel($_vehicleModel)
    {
        return ($this->VehicleModel = $_vehicleModel);
    }
    /**
     * Get VehicleColor value
     * @return string|null
     */
    public function getVehicleColor()
    {
        return $this->VehicleColor;
    }
    /**
     * Set VehicleColor value
     * @param string $_vehicleColor the VehicleColor
     * @return string
     */
    public function setVehicleColor($_vehicleColor)
    {
        return ($this->VehicleColor = $_vehicleColor);
    }
    /**
     * Get PlateNum value
     * @return string|null
     */
    public function getPlateNum()
    {
        return $this->PlateNum;
    }
    /**
     * Set PlateNum value
     * @param string $_plateNum the PlateNum
     * @return string
     */
    public function setPlateNum($_plateNum)
    {
        return ($this->PlateNum = $_plateNum);
    }
    /**
     * Get RegState value
     * @return string|null
     */
    public function getRegState()
    {
        return $this->RegState;
    }
    /**
     * Set RegState value
     * @param string $_regState the RegState
     * @return string
     */
    public function setRegState($_regState)
    {
        return ($this->RegState = $_regState);
    }
    /**
     * Get VIN value
     * @return string|null
     */
    public function getVIN()
    {
        return $this->VIN;
    }
    /**
     * Set VIN value
     * @param string $_vIN the VIN
     * @return string
     */
    public function setVIN($_vIN)
    {
        return ($this->VIN = $_vIN);
    }
    /**
     * Get OwnerIndividualSeqNum value
     * @return string|null
     */
    public function getOwnerIndividualSeqNum()
    {
        return $this->OwnerIndividualSeqNum;
    }
    /**
     * Set OwnerIndividualSeqNum value
     * @param string $_ownerIndividualSeqNum the OwnerIndividualSeqNum
     * @return string
     */
    public function setOwnerIndividualSeqNum($_ownerIndividualSeqNum)
    {
        return ($this->OwnerIndividualSeqNum = $_ownerIndividualSeqNum);
    }
    /**
     * Get CoOwnerIndividualSeqNum value
     * @return string|null
     */
    public function getCoOwnerIndividualSeqNum()
    {
        return $this->CoOwnerIndividualSeqNum;
    }
    /**
     * Set CoOwnerIndividualSeqNum value
     * @param string $_coOwnerIndividualSeqNum the CoOwnerIndividualSeqNum
     * @return string
     */
    public function setCoOwnerIndividualSeqNum($_coOwnerIndividualSeqNum)
    {
        return ($this->CoOwnerIndividualSeqNum = $_coOwnerIndividualSeqNum);
    }
    /**
     * Get Series value
     * @return string|null
     */
    public function getSeries()
    {
        return $this->Series;
    }
    /**
     * Set Series value
     * @param string $_series the Series
     * @return string
     */
    public function setSeries($_series)
    {
        return ($this->Series = $_series);
    }
    /**
     * Get EngineSize value
     * @return string|null
     */
    public function getEngineSize()
    {
        return $this->EngineSize;
    }
    /**
     * Set EngineSize value
     * @param string $_engineSize the EngineSize
     * @return string
     */
    public function setEngineSize($_engineSize)
    {
        return ($this->EngineSize = $_engineSize);
    }
    /**
     * Get OdometerMileage value
     * @return string|null
     */
    public function getOdometerMileage()
    {
        return $this->OdometerMileage;
    }
    /**
     * Set OdometerMileage value
     * @param string $_odometerMileage the OdometerMileage
     * @return string
     */
    public function setOdometerMileage($_odometerMileage)
    {
        return ($this->OdometerMileage = $_odometerMileage);
    }
    /**
     * Get FuelType value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getFuelType()
    {
        return $this->FuelType;
    }
    /**
     * Set FuelType value
     * @param MicrobiltStructCodeDescription_Type $_fuelType the FuelType
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setFuelType($_fuelType)
    {
        return ($this->FuelType = $_fuelType);
    }
    /**
     * Get VehicleUse value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getVehicleUse()
    {
        return $this->VehicleUse;
    }
    /**
     * Set VehicleUse value
     * @param MicrobiltStructCodeDescription_Type $_vehicleUse the VehicleUse
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setVehicleUse($_vehicleUse)
    {
        return ($this->VehicleUse = $_vehicleUse);
    }
    /**
     * Get NumOfCylinders value
     * @return long|null
     */
    public function getNumOfCylinders()
    {
        return $this->NumOfCylinders;
    }
    /**
     * Set NumOfCylinders value
     * @param long $_numOfCylinders the NumOfCylinders
     * @return long
     */
    public function setNumOfCylinders($_numOfCylinders)
    {
        return ($this->NumOfCylinders = $_numOfCylinders);
    }
    /**
     * Get MotorVehicleRegistrationOption value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getMotorVehicleRegistrationOption()
    {
        return $this->MotorVehicleRegistrationOption;
    }
    /**
     * Set MotorVehicleRegistrationOption value
     * @param MicrobiltStructCodeDescription_Type $_motorVehicleRegistrationOption the MotorVehicleRegistrationOption
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setMotorVehicleRegistrationOption($_motorVehicleRegistrationOption)
    {
        return ($this->MotorVehicleRegistrationOption = $_motorVehicleRegistrationOption);
    }
    /**
     * Get MajorColor value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getMajorColor()
    {
        return $this->MajorColor;
    }
    /**
     * Set MajorColor value
     * @param MicrobiltStructCodeDescription_Type $_majorColor the MajorColor
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setMajorColor($_majorColor)
    {
        return ($this->MajorColor = $_majorColor);
    }
    /**
     * Get MinorColor value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getMinorColor()
    {
        return $this->MinorColor;
    }
    /**
     * Set MinorColor value
     * @param MicrobiltStructCodeDescription_Type $_minorColor the MinorColor
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setMinorColor($_minorColor)
    {
        return ($this->MinorColor = $_minorColor);
    }
    /**
     * Get Body value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param MicrobiltStructCodeDescription_Type $_body the Body
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setBody($_body)
    {
        return ($this->Body = $_body);
    }
    /**
     * Get TitleNum value
     * @return string|null
     */
    public function getTitleNum()
    {
        return $this->TitleNum;
    }
    /**
     * Set TitleNum value
     * @param string $_titleNum the TitleNum
     * @return string
     */
    public function setTitleNum($_titleNum)
    {
        return ($this->TitleNum = $_titleNum);
    }
    /**
     * Get TitleIssueDt value
     * @return date|null
     */
    public function getTitleIssueDt()
    {
        return $this->TitleIssueDt;
    }
    /**
     * Set TitleIssueDt value
     * @param date $_titleIssueDt the TitleIssueDt
     * @return date
     */
    public function setTitleIssueDt($_titleIssueDt)
    {
        return ($this->TitleIssueDt = $_titleIssueDt);
    }
    /**
     * Get PrevTitleIssueDt value
     * @return date|null
     */
    public function getPrevTitleIssueDt()
    {
        return $this->PrevTitleIssueDt;
    }
    /**
     * Set PrevTitleIssueDt value
     * @param date $_prevTitleIssueDt the PrevTitleIssueDt
     * @return date
     */
    public function setPrevTitleIssueDt($_prevTitleIssueDt)
    {
        return ($this->PrevTitleIssueDt = $_prevTitleIssueDt);
    }
    /**
     * Get RecordID value
     * @return string|null
     */
    public function getRecordID()
    {
        return $this->RecordID;
    }
    /**
     * Set RecordID value
     * @param string $_recordID the RecordID
     * @return string
     */
    public function setRecordID($_recordID)
    {
        return ($this->RecordID = $_recordID);
    }
    /**
     * Get OriginationState value
     * @return string|null
     */
    public function getOriginationState()
    {
        return $this->OriginationState;
    }
    /**
     * Set OriginationState value
     * @param string $_originationState the OriginationState
     * @return string
     */
    public function setOriginationState($_originationState)
    {
        return ($this->OriginationState = $_originationState);
    }
    /**
     * Get AutoStyle value
     * @return string|null
     */
    public function getAutoStyle()
    {
        return $this->AutoStyle;
    }
    /**
     * Set AutoStyle value
     * @param string $_autoStyle the AutoStyle
     * @return string
     */
    public function setAutoStyle($_autoStyle)
    {
        return ($this->AutoStyle = $_autoStyle);
    }
    /**
     * Get AutoType value
     * @return string|null
     */
    public function getAutoType()
    {
        return $this->AutoType;
    }
    /**
     * Set AutoType value
     * @param string $_autoType the AutoType
     * @return string
     */
    public function setAutoType($_autoType)
    {
        return ($this->AutoType = $_autoType);
    }
    /**
     * Get FirstSeenDt value
     * @return date|null
     */
    public function getFirstSeenDt()
    {
        return $this->FirstSeenDt;
    }
    /**
     * Set FirstSeenDt value
     * @param date $_firstSeenDt the FirstSeenDt
     * @return date
     */
    public function setFirstSeenDt($_firstSeenDt)
    {
        return ($this->FirstSeenDt = $_firstSeenDt);
    }
    /**
     * Get EffectiveDtRange value
     * @return MicrobiltStructDateRange_Type|null
     */
    public function getEffectiveDtRange()
    {
        return $this->EffectiveDtRange;
    }
    /**
     * Set EffectiveDtRange value
     * @param MicrobiltStructDateRange_Type $_effectiveDtRange the EffectiveDtRange
     * @return MicrobiltStructDateRange_Type
     */
    public function setEffectiveDtRange($_effectiveDtRange)
    {
        return ($this->EffectiveDtRange = $_effectiveDtRange);
    }
    /**
     * Get TitleEarliestIssueDt value
     * @return date|null
     */
    public function getTitleEarliestIssueDt()
    {
        return $this->TitleEarliestIssueDt;
    }
    /**
     * Set TitleEarliestIssueDt value
     * @param date $_titleEarliestIssueDt the TitleEarliestIssueDt
     * @return date
     */
    public function setTitleEarliestIssueDt($_titleEarliestIssueDt)
    {
        return ($this->TitleEarliestIssueDt = $_titleEarliestIssueDt);
    }
    /**
     * Get LienDt value
     * @return date|null
     */
    public function getLienDt()
    {
        return $this->LienDt;
    }
    /**
     * Set LienDt value
     * @param date $_lienDt the LienDt
     * @return date
     */
    public function setLienDt($_lienDt)
    {
        return ($this->LienDt = $_lienDt);
    }
    /**
     * Get NetWeight value
     * @return long|null
     */
    public function getNetWeight()
    {
        return $this->NetWeight;
    }
    /**
     * Set NetWeight value
     * @param long $_netWeight the NetWeight
     * @return long
     */
    public function setNetWeight($_netWeight)
    {
        return ($this->NetWeight = $_netWeight);
    }
    /**
     * Get NumOfAxles value
     * @return long|null
     */
    public function getNumOfAxles()
    {
        return $this->NumOfAxles;
    }
    /**
     * Set NumOfAxles value
     * @param long $_numOfAxles the NumOfAxles
     * @return long
     */
    public function setNumOfAxles($_numOfAxles)
    {
        return ($this->NumOfAxles = $_numOfAxles);
    }
    /**
     * Get AutomobileExtras value
     * @return MicrobiltStructAutomobileExtras_Type|null
     */
    public function getAutomobileExtras()
    {
        return $this->AutomobileExtras;
    }
    /**
     * Set AutomobileExtras value
     * @param MicrobiltStructAutomobileExtras_Type $_automobileExtras the AutomobileExtras
     * @return MicrobiltStructAutomobileExtras_Type
     */
    public function setAutomobileExtras($_automobileExtras)
    {
        return ($this->AutomobileExtras = $_automobileExtras);
    }
    /**
     * Get PlateCode value
     * @return string|null
     */
    public function getPlateCode()
    {
        return $this->PlateCode;
    }
    /**
     * Set PlateCode value
     * @param string $_plateCode the PlateCode
     * @return string
     */
    public function setPlateCode($_plateCode)
    {
        return ($this->PlateCode = $_plateCode);
    }
    /**
     * Get PlateType value
     * @return string|null
     */
    public function getPlateType()
    {
        return $this->PlateType;
    }
    /**
     * Set PlateType value
     * @param string $_plateType the PlateType
     * @return string
     */
    public function setPlateType($_plateType)
    {
        return ($this->PlateType = $_plateType);
    }
    /**
     * Get TruePlateNum value
     * @return string|null
     */
    public function getTruePlateNum()
    {
        return $this->TruePlateNum;
    }
    /**
     * Set TruePlateNum value
     * @param string $_truePlateNum the TruePlateNum
     * @return string
     */
    public function setTruePlateNum($_truePlateNum)
    {
        return ($this->TruePlateNum = $_truePlateNum);
    }
    /**
     * Get LienHolderInfo value
     * @return MicrobiltStructLienHolderInfo_Type|null
     */
    public function getLienHolderInfo()
    {
        return $this->LienHolderInfo;
    }
    /**
     * Set LienHolderInfo value
     * @param MicrobiltStructLienHolderInfo_Type $_lienHolderInfo the LienHolderInfo
     * @return MicrobiltStructLienHolderInfo_Type
     */
    public function setLienHolderInfo($_lienHolderInfo)
    {
        return ($this->LienHolderInfo = $_lienHolderInfo);
    }
    /**
     * Get RegistrationDetails value
     * @return MicrobiltStructRegistrationDetails_Type|null
     */
    public function getRegistrationDetails()
    {
        return $this->RegistrationDetails;
    }
    /**
     * Set RegistrationDetails value
     * @param MicrobiltStructRegistrationDetails_Type $_registrationDetails the RegistrationDetails
     * @return MicrobiltStructRegistrationDetails_Type
     */
    public function setRegistrationDetails($_registrationDetails)
    {
        return ($this->RegistrationDetails = $_registrationDetails);
    }
    /**
     * Get DecalDt value
     * @return date|null
     */
    public function getDecalDt()
    {
        return $this->DecalDt;
    }
    /**
     * Set DecalDt value
     * @param date $_decalDt the DecalDt
     * @return date
     */
    public function setDecalDt($_decalDt)
    {
        return ($this->DecalDt = $_decalDt);
    }
    /**
     * Get CheckDt value
     * @return date|null
     */
    public function getCheckDt()
    {
        return $this->CheckDt;
    }
    /**
     * Set CheckDt value
     * @param date $_checkDt the CheckDt
     * @return date
     */
    public function setCheckDt($_checkDt)
    {
        return ($this->CheckDt = $_checkDt);
    }
    /**
     * Get NewVehicleInd value
     * @return MicrobiltEnumBoolean|null
     */
    public function getNewVehicleInd()
    {
        return $this->NewVehicleInd;
    }
    /**
     * Set NewVehicleInd value
     * @uses MicrobiltEnumBoolean::valueIsValid()
     * @param MicrobiltEnumBoolean $_newVehicleInd the NewVehicleInd
     * @return MicrobiltEnumBoolean
     */
    public function setNewVehicleInd($_newVehicleInd)
    {
        if(!MicrobiltEnumBoolean::valueIsValid($_newVehicleInd))
        {
            return false;
        }
        return ($this->NewVehicleInd = $_newVehicleInd);
    }
    /**
     * Get ModelYear value
     * @return string|null
     */
    public function getModelYear()
    {
        return $this->ModelYear;
    }
    /**
     * Set ModelYear value
     * @param string $_modelYear the ModelYear
     * @return string
     */
    public function setModelYear($_modelYear)
    {
        return ($this->ModelYear = $_modelYear);
    }
    /**
     * Get BodyType value
     * @return string|null
     */
    public function getBodyType()
    {
        return $this->BodyType;
    }
    /**
     * Set BodyType value
     * @param string $_bodyType the BodyType
     * @return string
     */
    public function setBodyType($_bodyType)
    {
        return ($this->BodyType = $_bodyType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::__set_state()
     * @uses MicrobiltWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructAutomobileInfo_Type
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
