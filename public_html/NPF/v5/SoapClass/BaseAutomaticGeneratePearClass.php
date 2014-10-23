<?php
header('Content-Type: text/html; charset=utf-8');
	session_start(); 
	include "constants.php";
        include "";

class Acknowledgement_Type {
  public $MessageId; // UUIDIdentifier_Type
  public $TraceId; // anyURI
}

class FaultCodeContent_Type {
}

class FaultReport_Type {
  public $MessageId; // UUIDIdentifier_Type
  public $FaultDescription; // string
  public $TraceId; // anyURI
}

class Ping_Type {
  public $MessageId; // UUIDIdentifier_Type
}

class RetrievalParameters_Type {
  public $any; // <anyXML>
}

class Retrieve_Type {
  public $RequestCode; // RetrieveRequestCodeContent_Type
  public $RetrievalParameters; // RetrievalParameters_Type
}

class RetrieveRequestCodeContent_Type {
}

class UUIDIdentifier_Type {
}

class ACORD_PRIVATE_CODE {
}

class ACORD_TYPE_CODE {
}

class BANDINGTYPE_TYPE {
  public $_; // string
  public $tc; // BANDINGTYPE_TYPE_TC
}

class BANDINGTYPE_TYPE_TC {
}

class BENEFIT_INQUIRY {
  public $_; // string
  public $tc; // BENEFIT_INQUIRY_TC
}

class BENEFIT_INQUIRY_TC {
}

class CONTENTSUBTYPE_TYPE {
  public $_; // string
  public $tc; // CONTENTSUBTYPE_TYPE_TC
}

class CONTENTSUBTYPE_TYPE_TC {
}

class CONTENTTYPE_TYPE {
  public $_; // string
  public $tc; // CONTENTTYPE_TYPE_TC
}

class CONTENTTYPE_TYPE_TC {
}

class CRITERIA_OPERATOR {
  public $_; // string
  public $tc; // CRITERIA_OPERATOR_TC
}

class CRITERIA_OPERATOR_TC {
}

class DATAREP_TYPES {
}

class ENUMERATEDTYPECODEVALUE_TYPE {
  public $_; // string
  public $tc; // ENUMERATEDTYPECODEVALUE_TYPE_TC
}

class ENUMERATEDTYPECODEVALUE_TYPE_TC {
}

class FOOTNOTE_CODES {
}

class ILL_VAR_PROJTYPE {
  public $_; // string
  public $tc; // ILL_VAR_PROJTYPE_TC
}

class ILL_VAR_PROJTYPE_TC {
}

class INQUIRY_LEVEL_CODES {
  public $_; // string
  public $tc; // INQUIRY_LEVEL_CODES_TC
}

class INQUIRY_LEVEL_CODES_TC {
}

class KEYSUBTYPE_TYPE {
  public $_; // string
  public $tc; // KEYSUBTYPE_TYPE_TC
}

class KEYSUBTYPE_TYPE_TC {
}

class KEYTYPE_TYPE {
  public $_; // string
  public $tc; // KEYTYPE_TYPE_TC
}

class KEYTYPE_TYPE_TC {
}

class LAPSE_REASON {
  public $_; // string
  public $tc; // LAPSE_REASON_TC
}

class LAPSE_REASON_TC {
}

class OLI_FREELOOKINVEST {
  public $_; // string
  public $tc; // OLI_FREELOOKINVEST_TC
}

class OLI_FREELOOKINVEST_TC {
}

class OLI_LU_ACCTACTTYPE {
  public $_; // string
  public $tc; // OLI_LU_ACCTACTTYPE_TC
}

class OLI_LU_ACCTACTTYPE_TC {
}

class OLI_LU_ACCTDBCRTYPE {
  public $_; // string
  public $tc; // OLI_LU_ACCTDBCRTYPE_TC
}

class OLI_LU_ACCTDBCRTYPE_TC {
}

class OLI_LU_ACCTDES {
  public $_; // string
  public $tc; // OLI_LU_ACCTDES_TC
}

class OLI_LU_ACCTDES_TC {
}

class OLI_LU_ACTIONTYPE {
  public $_; // string
  public $tc; // OLI_LU_ACTIONTYPE_TC
}

class OLI_LU_ACTIONTYPE_TC {
}

class OLI_LU_ACTSTAT {
  public $_; // string
  public $tc; // OLI_LU_ACTSTAT_TC
}

class OLI_LU_ACTSTAT_TC {
}

class OLI_LU_ACTSTATDESC {
  public $_; // string
  public $tc; // OLI_LU_ACTSTATDESC_TC
}

class OLI_LU_ACTSTATDESC_TC {
}

class OLI_LU_ACTTYPE {
  public $_; // string
  public $tc; // OLI_LU_ACTTYPE_TC
}

class OLI_LU_ACTTYPE_TC {
}

class OLI_LU_ACTTYPEDESC {
  public $_; // string
  public $tc; // OLI_LU_ACTTYPEDESC_TC
}

class OLI_LU_ACTTYPEDESC_TC {
}

class OLI_LU_ADDRFORMATTC {
  public $_; // string
  public $tc; // OLI_LU_ADDRFORMATTC_TC
}

class OLI_LU_ADDRFORMATTC_TC {
}

class OLI_LU_ADTYPE {
  public $_; // string
  public $tc; // OLI_LU_ADTYPE_TC
}

class OLI_LU_ADTYPE_TC {
}

class OLI_LU_ADVINTCALCRULE {
  public $_; // string
  public $tc; // OLI_LU_ADVINTCALCRULE_TC
}

class OLI_LU_ADVINTCALCRULE_TC {
}

class OLI_LU_AGEBASIS {
  public $_; // string
  public $tc; // OLI_LU_AGEBASIS_TC
}

class OLI_LU_AGEBASIS_TC {
}

class OLI_LU_AGECALCMETH {
  public $_; // string
  public $tc; // OLI_LU_AGECALCMETH_TC
}

class OLI_LU_AGECALCMETH_TC {
}

class OLI_LU_AGEDATEUSE {
  public $_; // string
  public $tc; // OLI_LU_AGEDATEUSE_TC
}

class OLI_LU_AGEDATEUSE_TC {
}

class OLI_LU_AGGREGATIONMETHOD {
  public $_; // string
  public $tc; // OLI_LU_AGGREGATIONMETHOD_TC
}

class OLI_LU_AGGREGATIONMETHOD_TC {
}

class OLI_LU_AIRCRAFTJOB {
  public $_; // string
  public $tc; // OLI_LU_AIRCRAFTJOB_TC
}

class OLI_LU_AIRCRAFTJOB_TC {
}

class OLI_LU_AIRCRAFTTYPE {
  public $_; // string
  public $tc; // OLI_LU_AIRCRAFTTYPE_TC
}

class OLI_LU_AIRCRAFTTYPE_TC {
}

class OLI_LU_ALLOCATION_RULE {
  public $_; // string
  public $tc; // OLI_LU_ALLOCATION_RULE_TC
}

class OLI_LU_ALLOCATION_RULE_TC {
}

class OLI_LU_ALLOCATIONOPTION {
  public $_; // string
  public $tc; // OLI_LU_ALLOCATIONOPTION_TC
}

class OLI_LU_ALLOCATIONOPTION_TC {
}

class OLI_LU_ALLOWEDDATE {
  public $_; // string
  public $tc; // OLI_LU_ALLOWEDDATE_TC
}

class OLI_LU_ALLOWEDDATE_TC {
}

class OLI_LU_ALLOWEDDAY {
  public $_; // string
  public $tc; // OLI_LU_ALLOWEDDAY_TC
}

class OLI_LU_ALLOWEDDAY_TC {
}

class OLI_LU_ALLOWPCTTYPE {
  public $_; // string
  public $tc; // OLI_LU_ALLOWPCTTYPE_TC
}

class OLI_LU_ALLOWPCTTYPE_TC {
}

class OLI_LU_AMOUNTTYPE {
  public $_; // string
  public $tc; // OLI_LU_AMOUNTTYPE_TC
}

class OLI_LU_AMOUNTTYPE_TC {
}

class OLI_LU_AMTCALCMETHOD {
  public $_; // string
  public $tc; // OLI_LU_AMTCALCMETHOD_TC
}

class OLI_LU_AMTCALCMETHOD_TC {
}

class OLI_LU_AMTCONTEXT {
  public $_; // string
  public $tc; // OLI_LU_AMTCONTEXT_TC
}

class OLI_LU_AMTCONTEXT_TC {
}

class OLI_LU_ANNDATERULE {
  public $_; // string
  public $tc; // OLI_LU_ANNDATERULE_TC
}

class OLI_LU_ANNDATERULE_TC {
}

class OLI_LU_ANNIDX {
  public $_; // string
  public $tc; // OLI_LU_ANNIDX_TC
}

class OLI_LU_ANNIDX_TC {
}

class OLI_LU_ANNPAYOUT {
  public $_; // string
  public $tc; // OLI_LU_ANNPAYOUT_TC
}

class OLI_LU_ANNPAYOUT_TC {
}

class OLI_LU_ANNPREM {
  public $_; // string
  public $tc; // OLI_LU_ANNPREM_TC
}

class OLI_LU_ANNPREM_TC {
}

class OLI_LU_ANSWERCHOICE {
  public $_; // string
  public $tc; // OLI_LU_ANSWERCHOICE_TC
}

class OLI_LU_ANSWERCHOICE_TC {
}

class OLI_LU_ANSWERTYPE {
  public $_; // string
  public $tc; // OLI_LU_ANSWERTYPE_TC
}

class OLI_LU_ANSWERTYPE_TC {
}

class OLI_LU_APPLICABILITY {
  public $_; // string
  public $tc; // OLI_LU_APPLICABILITY_TC
}

class OLI_LU_APPLICABILITY_TC {
}

class OLI_LU_APPORIGIN {
  public $_; // string
  public $tc; // OLI_LU_APPORIGIN_TC
}

class OLI_LU_APPORIGIN_TC {
}

class OLI_LU_APPPACKAGE {
  public $_; // string
  public $tc; // OLI_LU_APPPACKAGE_TC
}

class OLI_LU_APPPACKAGE_TC {
}

class OLI_LU_APPSUBMITTYPE {
  public $_; // string
  public $tc; // OLI_LU_APPSUBMITTYPE_TC
}

class OLI_LU_APPSUBMITTYPE_TC {
}

class OLI_LU_APPTYPE {
  public $_; // string
  public $tc; // OLI_LU_APPTYPE_TC
}

class OLI_LU_APPTYPE_TC {
}

class OLI_LU_ARRSUBTYPE {
  public $_; // string
  public $tc; // OLI_LU_ARRSUBTYPE_TC
}

class OLI_LU_ARRSUBTYPE_TC {
}

class OLI_LU_ARRTYPE {
  public $_; // string
  public $tc; // OLI_LU_ARRTYPE_TC
}

class OLI_LU_ARRTYPE_TC {
}

class OLI_LU_ASSEMBLYTYPE {
  public $_; // string
  public $tc; // OLI_LU_ASSEMBLYTYPE_TC
}

class OLI_LU_ASSEMBLYTYPE_TC {
}

class OLI_LU_ASSETCLASS {
  public $_; // string
  public $tc; // OLI_LU_ASSETCLASS_TC
}

class OLI_LU_ASSETCLASS_TC {
}

class OLI_LU_ASSIGNED {
  public $_; // string
  public $tc; // OLI_LU_ASSIGNED_TC
}

class OLI_LU_ASSIGNED_TC {
}

class OLI_LU_ATTACHLOCATION {
  public $_; // string
  public $tc; // OLI_LU_ATTACHLOCATION_TC
}

class OLI_LU_ATTACHLOCATION_TC {
}

class OLI_LU_ATTACHMENTCATEGORYTC {
  public $_; // string
  public $tc; // OLI_LU_ATTACHMENTCATEGORYTC_TC
}

class OLI_LU_ATTACHMENTCATEGORYTC_TC {
}

class OLI_LU_ATTACHMENTTYPE {
  public $_; // string
  public $tc; // OLI_LU_ATTACHMENTTYPE_TC
}

class OLI_LU_ATTACHMENTTYPE_TC {
}

class OLI_LU_ATTANOMALY {
  public $_; // string
  public $tc; // OLI_LU_ATTANOMALY_TC
}

class OLI_LU_ATTANOMALY_TC {
}

class OLI_LU_AUDTOT {
  public $_; // string
  public $tc; // OLI_LU_AUDTOT_TC
}

class OLI_LU_AUDTOT_TC {
}

class OLI_LU_AVAILABILITY {
  public $_; // string
  public $tc; // OLI_LU_AVAILABILITY_TC
}

class OLI_LU_AVAILABILITY_TC {
}

class OLI_LU_AVIATIONTYPE {
  public $_; // string
  public $tc; // OLI_LU_AVIATIONTYPE_TC
}

class OLI_LU_AVIATIONTYPE_TC {
}

class OLI_LU_BACKDATE {
  public $_; // string
  public $tc; // OLI_LU_BACKDATE_TC
}

class OLI_LU_BACKDATE_TC {
}

class OLI_LU_BALANCETYPE {
  public $_; // string
  public $tc; // OLI_LU_BALANCETYPE_TC
}

class OLI_LU_BALANCETYPE_TC {
}

class OLI_LU_BALLOONTYPE {
  public $_; // string
  public $tc; // OLI_LU_BALLOONTYPE_TC
}

class OLI_LU_BALLOONTYPE_TC {
}

class OLI_LU_BANKACCTTYPE {
  public $_; // string
  public $tc; // OLI_LU_BANKACCTTYPE_TC
}

class OLI_LU_BANKACCTTYPE_TC {
}

class OLI_LU_BANKRUPTCYCHAPTER {
  public $_; // string
  public $tc; // OLI_LU_BANKRUPTCYCHAPTER_TC
}

class OLI_LU_BANKRUPTCYCHAPTER_TC {
}

class OLI_LU_BANKRUPTCYSTATUS {
  public $_; // string
  public $tc; // OLI_LU_BANKRUPTCYSTATUS_TC
}

class OLI_LU_BANKRUPTCYSTATUS_TC {
}

class OLI_LU_BASICATTACHMENTTYPE {
  public $_; // string
  public $tc; // OLI_LU_BASICATTACHMENTTYPE_TC
}

class OLI_LU_BASICATTACHMENTTYPE_TC {
}

class OLI_LU_BENCHGTRIG {
  public $_; // string
  public $tc; // OLI_LU_BENCHGTRIG_TC
}

class OLI_LU_BENCHGTRIG_TC {
}

class OLI_LU_BENCHGTYPE {
  public $_; // string
  public $tc; // OLI_LU_BENCHGTYPE_TC
}

class OLI_LU_BENCHGTYPE_TC {
}

class OLI_LU_BENEDESIGNATION {
  public $_; // string
  public $tc; // OLI_LU_BENEDESIGNATION_TC
}

class OLI_LU_BENEDESIGNATION_TC {
}

class OLI_LU_BENEFICIARYSHAREMETHOD {
  public $_; // string
  public $tc; // OLI_LU_BENEFICIARYSHAREMETHOD_TC
}

class OLI_LU_BENEFICIARYSHAREMETHOD_TC {
}

class OLI_LU_BENEFITCODE {
  public $_; // string
  public $tc; // OLI_LU_BENEFITCODE_TC
}

class OLI_LU_BENEFITCODE_TC {
}

class OLI_LU_BENEFITLIMIT {
  public $_; // string
  public $tc; // OLI_LU_BENEFITLIMIT_TC
}

class OLI_LU_BENEFITLIMIT_TC {
}

class OLI_LU_BENEFITSCHEDTYPE {
  public $_; // string
  public $tc; // OLI_LU_BENEFITSCHEDTYPE_TC
}

class OLI_LU_BENEFITSCHEDTYPE_TC {
}

class OLI_LU_BENEPAYMENTTYPE {
  public $_; // string
  public $tc; // OLI_LU_BENEPAYMENTTYPE_TC
}

class OLI_LU_BENEPAYMENTTYPE_TC {
}

class OLI_LU_BENEPERIOD {
  public $_; // string
  public $tc; // OLI_LU_BENEPERIOD_TC
}

class OLI_LU_BENEPERIOD_TC {
}

class OLI_LU_BENESTAT {
  public $_; // string
  public $tc; // OLI_LU_BENESTAT_TC
}

class OLI_LU_BENESTAT_TC {
}

class OLI_LU_BENESTRUCTTYPE {
  public $_; // string
  public $tc; // OLI_LU_BENESTRUCTTYPE_TC
}

class OLI_LU_BENESTRUCTTYPE_TC {
}

class OLI_LU_BENREDUCEBASEDON {
  public $_; // string
  public $tc; // OLI_LU_BENREDUCEBASEDON_TC
}

class OLI_LU_BENREDUCEBASEDON_TC {
}

class OLI_LU_BESTRATE {
  public $_; // string
  public $tc; // OLI_LU_BESTRATE_TC
}

class OLI_LU_BESTRATE_TC {
}

class OLI_LU_BILLAMTTYPE {
  public $_; // string
  public $tc; // OLI_LU_BILLAMTTYPE_TC
}

class OLI_LU_BILLAMTTYPE_TC {
}

class OLI_LU_BILLSUBTYPE {
  public $_; // string
  public $tc; // OLI_LU_BILLSUBTYPE_TC
}

class OLI_LU_BILLSUBTYPE_TC {
}

class OLI_LU_BONUSREAS {
  public $_; // string
  public $tc; // OLI_LU_BONUSREAS_TC
}

class OLI_LU_BONUSREAS_TC {
}

class OLI_LU_BONUSTYPE {
  public $_; // string
  public $tc; // OLI_LU_BONUSTYPE_TC
}

class OLI_LU_BONUSTYPE_TC {
}

class OLI_LU_BOOLEAN {
  public $_; // string
  public $tc; // OLI_LU_BOOLEAN_TC
}

class OLI_LU_BOOLEAN_TC {
}

class OLI_LU_BUSPROCESS {
  public $_; // string
  public $tc; // OLI_LU_BUSPROCESS_TC
}

class OLI_LU_BUSPROCESS_TC {
}

class OLI_LU_CAMPAIGNTYPE {
  public $_; // string
  public $tc; // OLI_LU_CAMPAIGNTYPE_TC
}

class OLI_LU_CAMPAIGNTYPE_TC {
}

class OLI_LU_CAPABILITYLEVEL {
  public $_; // string
  public $tc; // OLI_LU_CAPABILITYLEVEL_TC
}

class OLI_LU_CAPABILITYLEVEL_TC {
}

class OLI_LU_CAPABILTYPE {
  public $_; // string
  public $tc; // OLI_LU_CAPABILTYPE_TC
}

class OLI_LU_CAPABILTYPE_TC {
}

class OLI_LU_CAPFLOORCONTRIB {
  public $_; // string
  public $tc; // OLI_LU_CAPFLOORCONTRIB_TC
}

class OLI_LU_CAPFLOORCONTRIB_TC {
}

class OLI_LU_CAPGAIN {
  public $_; // string
  public $tc; // OLI_LU_CAPGAIN_TC
}

class OLI_LU_CAPGAIN_TC {
}

class OLI_LU_CAPTYPE {
  public $_; // string
  public $tc; // OLI_LU_CAPTYPE_TC
}

class OLI_LU_CAPTYPE_TC {
}

class OLI_LU_CARDIACINT {
  public $_; // string
  public $tc; // OLI_LU_CARDIACINT_TC
}

class OLI_LU_CARDIACINT_TC {
}

class OLI_LU_CARDIACLOC {
  public $_; // string
  public $tc; // OLI_LU_CARDIACLOC_TC
}

class OLI_LU_CARDIACLOC_TC {
}

class OLI_LU_CARDIACQUAL {
  public $_; // string
  public $tc; // OLI_LU_CARDIACQUAL_TC
}

class OLI_LU_CARDIACQUAL_TC {
}

class OLI_LU_CARDIACTIM {
  public $_; // string
  public $tc; // OLI_LU_CARDIACTIM_TC
}

class OLI_LU_CARDIACTIM_TC {
}

class OLI_LU_CARRIERFORM {
  public $_; // string
  public $tc; // OLI_LU_CARRIERFORM_TC
}

class OLI_LU_CARRIERFORM_TC {
}

class OLI_LU_CASESTAT {
  public $_; // string
  public $tc; // OLI_LU_CASESTAT_TC
}

class OLI_LU_CASESTAT_TC {
}

class OLI_LU_CASETYPE {
  public $_; // string
  public $tc; // OLI_LU_CASETYPE_TC
}

class OLI_LU_CASETYPE_TC {
}

class OLI_LU_CERTLEVEL {
  public $_; // string
  public $tc; // OLI_LU_CERTLEVEL_TC
}

class OLI_LU_CERTLEVEL_TC {
}

class OLI_LU_CERTRATE {
  public $_; // string
  public $tc; // OLI_LU_CERTRATE_TC
}

class OLI_LU_CERTRATE_TC {
}

class OLI_LU_CHARGECATEGORY {
  public $_; // string
  public $tc; // OLI_LU_CHARGECATEGORY_TC
}

class OLI_LU_CHARGECATEGORY_TC {
}

class OLI_LU_CHILDAGE {
  public $_; // string
  public $tc; // OLI_LU_CHILDAGE_TC
}

class OLI_LU_CHILDAGE_TC {
}

class OLI_LU_CHILDPREM {
  public $_; // string
  public $tc; // OLI_LU_CHILDPREM_TC
}

class OLI_LU_CHILDPREM_TC {
}

class OLI_LU_CHNGBASIS {
  public $_; // string
  public $tc; // OLI_LU_CHNGBASIS_TC
}

class OLI_LU_CHNGBASIS_TC {
}

class OLI_LU_CHNGTYPE {
  public $_; // string
  public $tc; // OLI_LU_CHNGTYPE_TC
}

class OLI_LU_CHNGTYPE_TC {
}

class OLI_LU_CLAIMSTATREASON {
  public $_; // string
  public $tc; // OLI_LU_CLAIMSTATREASON_TC
}

class OLI_LU_CLAIMSTATREASON_TC {
}

class OLI_LU_CLIENTLANGUAGES {
  public $_; // string
  public $tc; // OLI_LU_CLIENTLANGUAGES_TC
}

class OLI_LU_CLIENTLANGUAGES_TC {
}

class OLI_LU_CLISTAT {
  public $_; // string
  public $tc; // OLI_LU_CLISTAT_TC
}

class OLI_LU_CLISTAT_TC {
}

class OLI_LU_CLITYPE {
  public $_; // string
  public $tc; // OLI_LU_CLITYPE_TC
}

class OLI_LU_CLITYPE_TC {
}

class OLI_LU_CLMSTAT {
  public $_; // string
  public $tc; // OLI_LU_CLMSTAT_TC
}

class OLI_LU_CLMSTAT_TC {
}

class OLI_LU_CODELIST {
  public $_; // string
  public $tc; // OLI_LU_CODELIST_TC
}

class OLI_LU_CODELIST_TC {
}

class OLI_LU_CODESUPSTAT {
  public $_; // string
  public $tc; // OLI_LU_CODESUPSTAT_TC
}

class OLI_LU_CODESUPSTAT_TC {
}

class OLI_LU_COLINDEX {
  public $_; // string
  public $tc; // OLI_LU_COLINDEX_TC
}

class OLI_LU_COLINDEX_TC {
}

class OLI_LU_COMMEVENT {
  public $_; // string
  public $tc; // OLI_LU_COMMEVENT_TC
}

class OLI_LU_COMMEVENT_TC {
}

class OLI_LU_COMMOPTION {
  public $_; // string
  public $tc; // OLI_LU_COMMOPTION_TC
}

class OLI_LU_COMMOPTION_TC {
}

class OLI_LU_COMMTRNTYPE {
  public $_; // string
  public $tc; // OLI_LU_COMMTRNTYPE_TC
}

class OLI_LU_COMMTRNTYPE_TC {
}

class OLI_LU_COMMTYPE {
  public $_; // string
  public $tc; // OLI_LU_COMMTYPE_TC
}

class OLI_LU_COMMTYPE_TC {
}

class OLI_LU_COMPCLASS {
  public $_; // string
  public $tc; // OLI_LU_COMPCLASS_TC
}

class OLI_LU_COMPCLASS_TC {
}

class OLI_LU_CONDCAUSE {
  public $_; // string
  public $tc; // OLI_LU_CONDCAUSE_TC
}

class OLI_LU_CONDCAUSE_TC {
}

class OLI_LU_CONDSTATUS {
  public $_; // string
  public $tc; // OLI_LU_CONDSTATUS_TC
}

class OLI_LU_CONDSTATUS_TC {
}

class OLI_LU_CONTINGJOINT {
  public $_; // string
  public $tc; // OLI_LU_CONTINGJOINT_TC
}

class OLI_LU_CONTINGJOINT_TC {
}

class OLI_LU_CONTRIBREASON {
  public $_; // string
  public $tc; // OLI_LU_CONTRIBREASON_TC
}

class OLI_LU_CONTRIBREASON_TC {
}

class OLI_LU_COUNTY {
  public $_; // string
  public $tc; // OLI_LU_COUNTY_TC
}

class OLI_LU_COUNTY_TC {
}

class OLI_LU_COURSETYPE {
  public $_; // string
  public $tc; // OLI_LU_COURSETYPE_TC
}

class OLI_LU_COURSETYPE_TC {
}

class OLI_LU_COVCHGCTLTYPE {
  public $_; // string
  public $tc; // OLI_LU_COVCHGCTLTYPE_TC
}

class OLI_LU_COVCHGCTLTYPE_TC {
}

class OLI_LU_COVEFFDATERSTCT {
  public $_; // string
  public $tc; // OLI_LU_COVEFFDATERSTCT_TC
}

class OLI_LU_COVEFFDATERSTCT_TC {
}

class OLI_LU_COVINDCODE {
  public $_; // string
  public $tc; // OLI_LU_COVINDCODE_TC
}

class OLI_LU_COVINDCODE_TC {
}

class OLI_LU_COVTYPE {
  public $_; // string
  public $tc; // OLI_LU_COVTYPE_TC
}

class OLI_LU_COVTYPE_TC {
}

class OLI_LU_COVUNITTYPE {
  public $_; // string
  public $tc; // OLI_LU_COVUNITTYPE_TC
}

class OLI_LU_COVUNITTYPE_TC {
}

class OLI_LU_CRAFTCERT {
  public $_; // string
  public $tc; // OLI_LU_CRAFTCERT_TC
}

class OLI_LU_CRAFTCERT_TC {
}

class OLI_LU_CREDCARDTYPE {
  public $_; // string
  public $tc; // OLI_LU_CREDCARDTYPE_TC
}

class OLI_LU_CREDCARDTYPE_TC {
}

class OLI_LU_CREDITADJ {
  public $_; // string
  public $tc; // OLI_LU_CREDITADJ_TC
}

class OLI_LU_CREDITADJ_TC {
}

class OLI_LU_CRIMETYPE {
  public $_; // string
  public $tc; // OLI_LU_CRIMETYPE_TC
}

class OLI_LU_CRIMETYPE_TC {
}

class OLI_LU_CURRENCYTYPE {
  public $CurrencuTupeCode = 'RUR'; // string
  public $tc; // OLI_LU_CURRENCYTYPE_TC
}

class OLI_LU_CURRENCYTYPE_TC {
}

class OLI_LU_DATACOLLECTION {
  public $_; // string
  public $tc; // OLI_LU_DATACOLLECTION_TC
}

class OLI_LU_DATACOLLECTION_TC {
}

class OLI_LU_DATAREQ {
  public $_; // string
  public $tc; // OLI_LU_DATAREQ_TC
}

class OLI_LU_DATAREQ_TC {
}

class OLI_LU_DATATYPE {
  public $_; // string
  public $tc; // OLI_LU_DATATYPE_TC
}

class OLI_LU_DATATYPE_TC {
}

class OLI_LU_DATEBASIS {
  public $_; // string
  public $tc; // OLI_LU_DATEBASIS_TC
}

class OLI_LU_DATEBASIS_TC {
}

class OLI_LU_DATECOLLECT {
  public $_; // string
  public $tc; // OLI_LU_DATECOLLECT_TC
}

class OLI_LU_DATECOLLECT_TC {
}

class OLI_LU_DAY {
  public $_; // string
  public $tc; // OLI_LU_DAY_TC
}

class OLI_LU_DAY_TC {
}

class OLI_LU_DCATYPE {
  public $_; // string
  public $tc; // OLI_LU_DCATYPE_TC
}

class OLI_LU_DCATYPE_TC {
}

class OLI_LU_DEBTTYPE {
  public $_; // string
  public $tc; // OLI_LU_DEBTTYPE_TC
}

class OLI_LU_DEBTTYPE_TC {
}

class OLI_LU_DEDUCTTYPE {
  public $_; // string
  public $tc; // OLI_LU_DEDUCTTYPE_TC
}

class OLI_LU_DEDUCTTYPE_TC {
}

class OLI_LU_DEGDIFFICULTY {
  public $_; // string
  public $tc; // OLI_LU_DEGDIFFICULTY_TC
}

class OLI_LU_DEGDIFFICULTY_TC {
}

class OLI_LU_DELIVERYLEVEL {
  public $_; // string
  public $tc; // OLI_LU_DELIVERYLEVEL_TC
}

class OLI_LU_DELIVERYLEVEL_TC {
}

class OLI_LU_DENIALMETHOD {
  public $_; // string
  public $tc; // OLI_LU_DENIALMETHOD_TC
}

class OLI_LU_DENIALMETHOD_TC {
}

class OLI_LU_DENIALTYPE {
  public $_; // string
  public $tc; // OLI_LU_DENIALTYPE_TC
}

class OLI_LU_DENIALTYPE_TC {
}

class OLI_LU_DESIGNATIONTYPE {
  public $_; // string
  public $tc; // OLI_LU_DESIGNATIONTYPE_TC
}

class OLI_LU_DESIGNATIONTYPE_TC {
}

class OLI_LU_DISPOSITIONRESULTS {
  public $_; // string
  public $tc; // OLI_LU_DISPOSITIONRESULTS_TC
}

class OLI_LU_DISPOSITIONRESULTS_TC {
}

class OLI_LU_DISTCHAN {
  public $_; // string
  public $tc; // OLI_LU_DISTCHAN_TC
}

class OLI_LU_DISTCHAN_TC {
}

class OLI_LU_DISTOPTION {
  public $_; // string
  public $tc; // OLI_LU_DISTOPTION_TC
}

class OLI_LU_DISTOPTION_TC {
}

class OLI_LU_DISTRIBUTION_LEVEL {
  public $_; // string
  public $tc; // OLI_LU_DISTRIBUTION_LEVEL_TC
}

class OLI_LU_DISTRIBUTION_LEVEL_TC {
}

class OLI_LU_DISTRIBUTIONSUBCHANNEL {
  public $_; // string
  public $tc; // OLI_LU_DISTRIBUTIONSUBCHANNEL_TC
}

class OLI_LU_DISTRIBUTIONSUBCHANNEL_TC {
}

class OLI_LU_DIVAMTDISP {
  public $_; // string
  public $tc; // OLI_LU_DIVAMTDISP_TC
}

class OLI_LU_DIVAMTDISP_TC {
}

class OLI_LU_DIVEARNRULE {
  public $_; // string
  public $tc; // OLI_LU_DIVEARNRULE_TC
}

class OLI_LU_DIVEARNRULE_TC {
}

class OLI_LU_DIVELOCTYPE {
  public $_; // string
  public $tc; // OLI_LU_DIVELOCTYPE_TC
}

class OLI_LU_DIVELOCTYPE_TC {
}

class OLI_LU_DIVEPURPOSE {
  public $_; // string
  public $tc; // OLI_LU_DIVEPURPOSE_TC
}

class OLI_LU_DIVEPURPOSE_TC {
}

class OLI_LU_DIVETYPE {
  public $_; // string
  public $tc; // OLI_LU_DIVETYPE_TC
}

class OLI_LU_DIVETYPE_TC {
}

class OLI_LU_DIVOYTTYPE {
  public $_; // string
  public $tc; // OLI_LU_DIVOYTTYPE_TC
}

class OLI_LU_DIVOYTTYPE_TC {
}

class OLI_LU_DIVRATETYPE {
  public $_; // string
  public $tc; // OLI_LU_DIVRATETYPE_TC
}

class OLI_LU_DIVRATETYPE_TC {
}

class OLI_LU_DIVTYPE {
  public $_; // string
  public $tc; // OLI_LU_DIVTYPE_TC
}

class OLI_LU_DIVTYPE_TC {
}

class OLI_LU_DLSTATUS {
  public $_; // string
  public $tc; // OLI_LU_DLSTATUS_TC
}

class OLI_LU_DLSTATUS_TC {
}

class OLI_LU_DOCCATEGORY {
  public $_; // string
  public $tc; // OLI_LU_DOCCATEGORY_TC
}

class OLI_LU_DOCCATEGORY_TC {
}

class OLI_LU_DOCCTRLTYPE {
  public $_; // string
  public $tc; // OLI_LU_DOCCTRLTYPE_TC
}

class OLI_LU_DOCCTRLTYPE_TC {
}

class OLI_LU_DOCSUBCATEGORY {
  public $_; // string
  public $tc; // OLI_LU_DOCSUBCATEGORY_TC
}

class OLI_LU_DOCSUBCATEGORY_TC {
}

class OLI_LU_DRIVERSLICENSETYPE {
  public $_; // string
  public $tc; // OLI_LU_DRIVERSLICENSETYPE_TC
}

class OLI_LU_DRIVERSLICENSETYPE_TC {
}

class OLI_LU_DRUGSOURCE {
  public $_; // string
  public $tc; // OLI_LU_DRUGSOURCE_TC
}

class OLI_LU_DRUGSOURCE_TC {
}

class OLI_LU_DRUGTYPE {
  public $_; // string
  public $tc; // OLI_LU_DRUGTYPE_TC
}

class OLI_LU_DRUGTYPE_TC {
}

class OLI_LU_DRVISITREASON {
  public $_; // string
  public $tc; // OLI_LU_DRVISITREASON_TC
}

class OLI_LU_DRVISITREASON_TC {
}

class OLI_LU_DTHBENEOPTCHGALLOW {
  public $_; // string
  public $tc; // OLI_LU_DTHBENEOPTCHGALLOW_TC
}

class OLI_LU_DTHBENEOPTCHGALLOW_TC {
}

class OLI_LU_DTHBENEPAY {
  public $_; // string
  public $tc; // OLI_LU_DTHBENEPAY_TC
}

class OLI_LU_DTHBENEPAY_TC {
}

class OLI_LU_DTHBENETYPE {
  public $_; // string
  public $tc; // OLI_LU_DTHBENETYPE_TC
}

class OLI_LU_DTHBENETYPE_TC {
}

class OLI_LU_EDUGRADSTAT_EGS {
  public $_; // string
  public $tc; // OLI_LU_EDUGRADSTAT_EGS_TC
}

class OLI_LU_EDUGRADSTAT_EGS_TC {
}

class OLI_LU_EDULEVEL {
  public $_; // string
  public $tc; // OLI_LU_EDULEVEL_TC
}

class OLI_LU_EDULEVEL_TC {
}

class OLI_LU_ELECAUTH {
  public $_; // string
  public $tc; // OLI_LU_ELECAUTH_TC
}

class OLI_LU_ELECAUTH_TC {
}

class OLI_LU_ELIMPERIOD {
  public $_; // string
  public $tc; // OLI_LU_ELIMPERIOD_TC
}

class OLI_LU_ELIMPERIOD_TC {
}

class OLI_LU_EMAILTYPE {
  public $_; // string
  public $tc; // OLI_LU_EMAILTYPE_TC
}

class OLI_LU_EMAILTYPE_TC {
}

class OLI_LU_EMPLOYMENTCLASS {
  public $_; // string
  public $tc; // OLI_LU_EMPLOYMENTCLASS_TC
}

class OLI_LU_EMPLOYMENTCLASS_TC {
}

class OLI_LU_EMPLOYMENTTYPE {
  public $_; // string
  public $tc; // OLI_LU_EMPLOYMENTTYPE_TC
}

class OLI_LU_EMPLOYMENTTYPE_TC {
}

class OLI_LU_EMPSTATTYPECODES {
  public $_; // string
  public $tc; // OLI_LU_EMPSTATTYPECODES_TC
}

class OLI_LU_EMPSTATTYPECODES_TC {
}

class OLI_LU_ENCODETYPE {
  public $_; // string
  public $tc; // OLI_LU_ENCODETYPE_TC
}

class OLI_LU_ENCODETYPE_TC {
}

class OLI_LU_ENDDATEBASIS {
  public $_; // string
  public $tc; // OLI_LU_ENDDATEBASIS_TC
}

class OLI_LU_ENDDATEBASIS_TC {
}

class OLI_LU_ENDORSEMENT {
  public $_; // string
  public $tc; // OLI_LU_ENDORSEMENT_TC
}

class OLI_LU_ENDORSEMENT_TC {
}

class OLI_LU_ESTTYPE {
  public $_; // string
  public $tc; // OLI_LU_ESTTYPE_TC
}

class OLI_LU_ESTTYPE_TC {
}

class OLI_LU_ETHNIC {
  public $_; // string
  public $tc; // OLI_LU_ETHNIC_TC
}

class OLI_LU_ETHNIC_TC {
}

class OLI_LU_EVENTTIMING {
  public $_; // string
  public $tc; // OLI_LU_EVENTTIMING_TC
}

class OLI_LU_EVENTTIMING_TC {
}

class OLI_LU_EVENTTYPE {
  public $_; // string
  public $tc; // OLI_LU_EVENTTYPE_TC
}

class OLI_LU_EVENTTYPE_TC {
}

class OLI_LU_EXAMMETHOD {
  public $_; // string
  public $tc; // OLI_LU_EXAMMETHOD_TC
}

class OLI_LU_EXAMMETHOD_TC {
}

class OLI_LU_EXAMSTATUSTYPE {
  public $_; // string
  public $tc; // OLI_LU_EXAMSTATUSTYPE_TC
}

class OLI_LU_EXAMSTATUSTYPE_TC {
}

class OLI_LU_EXCHGREASON {
  public $_; // string
  public $tc; // OLI_LU_EXCHGREASON_TC
}

class OLI_LU_EXCHGREASON_TC {
}

class OLI_LU_EXTCALL {
  public $_; // string
  public $tc; // OLI_LU_EXTCALL_TC
}

class OLI_LU_EXTCALL_TC {
}

class OLI_LU_EYECOLOR {
  public $_; // string
  public $tc; // OLI_LU_EYECOLOR_TC
}

class OLI_LU_EYECOLOR_TC {
}

class OLI_LU_FEEQUAL {
  public $_; // string
  public $tc; // OLI_LU_FEEQUAL_TC
}

class OLI_LU_FEEQUAL_TC {
}

class OLI_LU_FEETYPE {
  public $_; // string
  public $tc; // OLI_LU_FEETYPE_TC
}

class OLI_LU_FEETYPE_TC {
}

class OLI_LU_FEEWAIVERTYPE {
  public $_; // string
  public $tc; // OLI_LU_FEEWAIVERTYPE_TC
}

class OLI_LU_FEEWAIVERTYPE_TC {
}

class OLI_LU_FINACTSTATUS {
  public $_; // string
  public $tc; // OLI_LU_FINACTSTATUS_TC
}

class OLI_LU_FINACTSTATUS_TC {
}

class OLI_LU_FINACTSUBTYPE {
  public $_; // string
  public $tc; // OLI_LU_FINACTSUBTYPE_TC
}

class OLI_LU_FINACTSUBTYPE_TC {
}

class OLI_LU_FINACTTYPE {
  public $_; // string
  public $tc; // OLI_LU_FINACTTYPE_TC
}

class OLI_LU_FINACTTYPE_TC {
}

class OLI_LU_FINBENETYPE {
  public $_; // string
  public $tc; // OLI_LU_FINBENETYPE_TC
}

class OLI_LU_FINBENETYPE_TC {
}

class OLI_LU_FLATEXTRAPREMBASISCODE {
  public $_; // string
  public $tc; // OLI_LU_FLATEXTRAPREMBASISCODE_TC
}

class OLI_LU_FLATEXTRAPREMBASISCODE_TC {
}

class OLI_LU_FLYINGPURPOSE {
  public $_; // string
  public $tc; // OLI_LU_FLYINGPURPOSE_TC
}

class OLI_LU_FLYINGPURPOSE_TC {
}

class OLI_LU_FORMINSTDESTTYPE {
  public $_; // string
  public $tc; // OLI_LU_FORMINSTDESTTYPE_TC
}

class OLI_LU_FORMINSTDESTTYPE_TC {
}

class OLI_LU_FORMINSTSTATUS {
  public $_; // string
  public $tc; // OLI_LU_FORMINSTSTATUS_TC
}

class OLI_LU_FORMINSTSTATUS_TC {
}

class OLI_LU_FORMINSTUPDTMODE {
  public $_; // string
  public $tc; // OLI_LU_FORMINSTUPDTMODE_TC
}

class OLI_LU_FORMINSTUPDTMODE_TC {
}

class OLI_LU_FREQ {
  public $_; // string
  public $tc; // OLI_LU_FREQ_TC
}

class OLI_LU_FREQ_TC {
}

class OLI_LU_FUNDRESTRICT {
  public $_; // string
  public $tc; // OLI_LU_FUNDRESTRICT_TC
}

class OLI_LU_FUNDRESTRICT_TC {
}

class OLI_LU_GAAPCALCBASIS {
  public $_; // string
  public $tc; // OLI_LU_GAAPCALCBASIS_TC
}

class OLI_LU_GAAPCALCBASIS_TC {
}

class OLI_LU_GDLNFAILINST {
  public $_; // string
  public $tc; // OLI_LU_GDLNFAILINST_TC
}

class OLI_LU_GDLNFAILINST_TC {
}

class OLI_LU_GENDER {
  public $_; // string
  public $tc; // OLI_LU_GENDER_TC
}

class OLI_LU_GENDER_TC {
}

class OLI_LU_GEOREGION {
  public $_; // string
  public $tc; // OLI_LU_GEOREGION_TC
}

class OLI_LU_GEOREGION_TC {
}

class OLI_LU_GOVISSMED {
  public $_; // string
  public $tc; // OLI_LU_GOVISSMED_TC
}

class OLI_LU_GOVISSMED_TC {
}

class OLI_LU_GOVSOCINSPART {
  public $_; // string
  public $tc; // OLI_LU_GOVSOCINSPART_TC
}

class OLI_LU_GOVSOCINSPART_TC {
}

class OLI_LU_GOVTIDSTAT {
  public $_; // string
  public $tc; // OLI_LU_GOVTIDSTAT_TC
}

class OLI_LU_GOVTIDSTAT_TC {
}

class OLI_LU_GOVTIDTC {
  public $_; // string
  public $tc; // OLI_LU_GOVTIDTC_TC
}

class OLI_LU_GOVTIDTC_TC {
}

class OLI_LU_GPENTRY {
  public $_; // string
  public $tc; // OLI_LU_GPENTRY_TC
}

class OLI_LU_GPENTRY_TC {
}

class OLI_LU_GRPSUBTYPE {
  public $_; // string
  public $tc; // OLI_LU_GRPSUBTYPE_TC
}

class OLI_LU_GRPSUBTYPE_TC {
}

class OLI_LU_GRPTYPE {
  public $_; // string
  public $tc; // OLI_LU_GRPTYPE_TC
}

class OLI_LU_GRPTYPE_TC {
}

class OLI_LU_GTDPURCHOPT {
  public $_; // string
  public $tc; // OLI_LU_GTDPURCHOPT_TC
}

class OLI_LU_GTDPURCHOPT_TC {
}

class OLI_LU_HAIRCOLOR {
  public $_; // string
  public $tc; // OLI_LU_HAIRCOLOR_TC
}

class OLI_LU_HAIRCOLOR_TC {
}

class OLI_LU_HASHTYPE {
  public $_; // string
  public $tc; // OLI_LU_HASHTYPE_TC
}

class OLI_LU_HASHTYPE_TC {
}

class OLI_LU_HEALTHSERVICE {
  public $_; // string
  public $tc; // OLI_LU_HEALTHSERVICE_TC
}

class OLI_LU_HEALTHSERVICE_TC {
}

class OLI_LU_HOLDINGFORM {
  public $_; // string
  public $tc; // OLI_LU_HOLDINGFORM_TC
}

class OLI_LU_HOLDINGFORM_TC {
}

class OLI_LU_HOLDPURPOSE {
  public $_; // string
  public $tc; // OLI_LU_HOLDPURPOSE_TC
}

class OLI_LU_HOLDPURPOSE_TC {
}

class OLI_LU_HOLDSTAT {
  public $_; // string
  public $tc; // OLI_LU_HOLDSTAT_TC
}

class OLI_LU_HOLDSTAT_TC {
      /*
     * Class vyzova zchetchika trans type
     */
    public $tcout = 2;
    function __construct(){
        return $this->tcount;
    }
}

class OLI_LU_HOLDTYPE {
    /*
     * Pri vuzove zavazan na drugoj class
     */
  public $HoldingTypeCode = 'Policy'; // string
    function __construct(){
        $tc = new OLI_LU_HOLDSTAT_TC();
        return $tc;
        // теперь $tc->tcount будет содержать 2
    }
}

class OLI_LU_HOLDTYPE_TC {
}

class OLI_LU_IDREFTYPE {
  public $_; // string
  public $tc; // OLI_LU_IDREFTYPE_TC
}

class OLI_LU_IDREFTYPE_TC {
}

class OLI_LU_IDVERIFICATION {
  public $_; // string
  public $tc; // OLI_LU_IDVERIFICATION_TC
}

class OLI_LU_IDVERIFICATION_TC {
}

class OLI_LU_ILLUSREPORTTYPE {
  public $_; // string
  public $tc; // OLI_LU_ILLUSREPORTTYPE_TC
}

class OLI_LU_ILLUSREPORTTYPE_TC {
}

class OLI_LU_ILLUSTYPES {
  public $_; // string
  public $tc; // OLI_LU_ILLUSTYPES_TC
}

class OLI_LU_ILLUSTYPES_TC {
}

class OLI_LU_IMAGEFORM {
  public $_; // string
  public $tc; // OLI_LU_IMAGEFORM_TC
}

class OLI_LU_IMAGEFORM_TC {
}

class OLI_LU_IMAGEFORMAT {
  public $_; // string
  public $tc; // OLI_LU_IMAGEFORMAT_TC
}

class OLI_LU_IMAGEFORMAT_TC {
}

class OLI_LU_IMMSTAT {
  public $_; // string
  public $tc; // OLI_LU_IMMSTAT_TC
}

class OLI_LU_IMMSTAT_TC {
}

class OLI_LU_IMPAIRED_TYPE {
  public $_; // string
  public $tc; // OLI_LU_IMPAIRED_TYPE_TC
}

class OLI_LU_IMPAIRED_TYPE_TC {
}

class OLI_LU_INCLUDEOPTION {
  public $_; // string
  public $tc; // OLI_LU_INCLUDEOPTION_TC
}

class OLI_LU_INCLUDEOPTION_TC {
}

class OLI_LU_INCOPTION {
  public $_; // string
  public $tc; // OLI_LU_INCOPTION_TC
}

class OLI_LU_INCOPTION_TC {
}

class OLI_LU_INCRDECR {
  public $_; // string
  public $tc; // OLI_LU_INCRDECR_TC
}

class OLI_LU_INCRDECR_TC {
}

class OLI_LU_INFOOBTAINTYPE {
  public $_; // string
  public $tc; // OLI_LU_INFOOBTAINTYPE_TC
}

class OLI_LU_INFOOBTAINTYPE_TC {
}

class OLI_LU_INFOSRC {
  public $_; // string
  public $tc; // OLI_LU_INFOSRC_TC
}

class OLI_LU_INFOSRC_TC {
}

class OLI_LU_INFOSRVPROVIDER {
  public $_; // string
  public $tc; // OLI_LU_INFOSRVPROVIDER_TC
}

class OLI_LU_INFOSRVPROVIDER_TC {
}

class OLI_LU_INHERITEDTIMING {
  public $_; // string
  public $tc; // OLI_LU_INHERITEDTIMING_TC
}

class OLI_LU_INHERITEDTIMING_TC {
}

class OLI_LU_INPUTMODE {
  public $_; // string
  public $tc; // OLI_LU_INPUTMODE_TC
}

class OLI_LU_INPUTMODE_TC {
}

class OLI_LU_INTCALCTYPE {
  public $_; // string
  public $tc; // OLI_LU_INTCALCTYPE_TC
}

class OLI_LU_INTCALCTYPE_TC {
}

class OLI_LU_INTEGRATOR {
  public $_; // string
  public $tc; // OLI_LU_INTEGRATOR_TC
}

class OLI_LU_INTEGRATOR_TC {
}

class OLI_LU_INTENDUSE {
  public $_; // string
  public $tc; // OLI_LU_INTENDUSE_TC
}

class OLI_LU_INTENDUSE_TC {
}

class OLI_LU_INTENTCATEGORY {
  public $_; // string
  public $tc; // OLI_LU_INTENTCATEGORY_TC
}

class OLI_LU_INTENTCATEGORY_TC {
}

class OLI_LU_INTERESTUSE {
  public $_; // string
  public $tc; // OLI_LU_INTERESTUSE_TC
}

class OLI_LU_INTERESTUSE_TC {
}

class OLI_LU_INTERVIEWTYPE {
  public $_; // string
  public $tc; // OLI_LU_INTERVIEWTYPE_TC
}

class OLI_LU_INTERVIEWTYPE_TC {
}

class OLI_LU_INVDETSTAT {
  public $_; // string
  public $tc; // OLI_LU_INVDETSTAT_TC
}

class OLI_LU_INVDETSTAT_TC {
}

class OLI_LU_INVESTOBJ {
  public $_; // string
  public $tc; // OLI_LU_INVESTOBJ_TC
}

class OLI_LU_INVESTOBJ_TC {
}

class OLI_LU_INVESTPROD {
  public $_; // string
  public $tc; // OLI_LU_INVESTPROD_TC
}

class OLI_LU_INVESTPROD_TC {
}

class OLI_LU_INVESTPRODSTAT {
  public $_; // string
  public $tc; // OLI_LU_INVESTPRODSTAT_TC
}

class OLI_LU_INVESTPRODSTAT_TC {
}

class OLI_LU_INVESTRATESUBTYPE {
  public $_; // string
  public $tc; // OLI_LU_INVESTRATESUBTYPE_TC
}

class OLI_LU_INVESTRATESUBTYPE_TC {
}

class OLI_LU_INVMGR {
  public $_; // string
  public $tc; // OLI_LU_INVMGR_TC
}

class OLI_LU_INVMGR_TC {
}

class OLI_LU_INVSTDIV {
  public $_; // string
  public $tc; // OLI_LU_INVSTDIV_TC
}

class OLI_LU_INVSTDIV_TC {
}

class OLI_LU_IRSPREMCALCTYPE {
  public $_; // string
  public $tc; // OLI_LU_IRSPREMCALCTYPE_TC
}

class OLI_LU_IRSPREMCALCTYPE_TC {
}

class OLI_LU_IRSTRIGGER {
  public $_; // string
  public $tc; // OLI_LU_IRSTRIGGER_TC
}

class OLI_LU_IRSTRIGGER_TC {
}

class OLI_LU_JOINTAGETYPE {
  public $_; // string
  public $tc; // OLI_LU_JOINTAGETYPE_TC
}

class OLI_LU_JOINTAGETYPE_TC {
}

class OLI_LU_LABKITCODE {
  public $_; // string
  public $tc; // OLI_LU_LABKITCODE_TC
}

class OLI_LU_LABKITCODE_TC {
}

class OLI_LU_LANGPROF {
  public $_; // string
  public $tc; // OLI_LU_LANGPROF_TC
}

class OLI_LU_LANGPROF_TC {
}

class OLI_LU_LEADTYPE {
  public $_; // string
  public $tc; // OLI_LU_LEADTYPE_TC
}

class OLI_LU_LEADTYPE_TC {
}

class OLI_LU_LEVELIZEDOPT {
  public $_; // string
  public $tc; // OLI_LU_LEVELIZEDOPT_TC
}

class OLI_LU_LEVELIZEDOPT_TC {
}

class OLI_LU_LICENPROV {
  public $_; // string
  public $tc; // OLI_LU_LICENPROV_TC
}

class OLI_LU_LICENPROV_TC {
}

class OLI_LU_LICENSECLASSTYPE {
  public $_; // string
  public $tc; // OLI_LU_LICENSECLASSTYPE_TC
}

class OLI_LU_LICENSECLASSTYPE_TC {
}

class OLI_LU_LICENSESTATUS {
  public $_; // string
  public $tc; // OLI_LU_LICENSESTATUS_TC
}

class OLI_LU_LICENSESTATUS_TC {
}

class OLI_LU_LICENSETYPE {
  public $_; // string
  public $tc; // OLI_LU_LICENSETYPE_TC
}

class OLI_LU_LICENSETYPE_TC {
}

class OLI_LU_LIFEACTIVITYTYPE {
  public $_; // string
  public $tc; // OLI_LU_LIFEACTIVITYTYPE_TC
}

class OLI_LU_LIFEACTIVITYTYPE_TC {
}

class OLI_LU_LIFESTYLEVIOLATIONS {
  public $_; // string
  public $tc; // OLI_LU_LIFESTYLEVIOLATIONS_TC
}

class OLI_LU_LIFESTYLEVIOLATIONS_TC {
}

class OLI_LU_LIFETEST {
  public $_; // string
  public $tc; // OLI_LU_LIFETEST_TC
}

class OLI_LU_LIFETEST_TC {
}

class OLI_LU_LIKECONSTRAINTTYPE {
  public $_; // string
  public $tc; // OLI_LU_LIKECONSTRAINTTYPE_TC
}

class OLI_LU_LIKECONSTRAINTTYPE_TC {
}

class OLI_LU_LINEBUS {
  public $_; // string
  public $tc; // OLI_LU_LINEBUS_TC
}

class OLI_LU_LINEBUS_TC {
}

class OLI_LU_LIQUIDITYFEATURE {
  public $_; // string
  public $tc; // OLI_LU_LIQUIDITYFEATURE_TC
}

class OLI_LU_LIQUIDITYFEATURE_TC {
}

class OLI_LU_LIVESTYPE {
  public $_; // string
  public $tc; // OLI_LU_LIVESTYPE_TC
}

class OLI_LU_LIVESTYPE_TC {
}

class OLI_LU_LIVINGSTATUS {
  public $_; // string
  public $tc; // OLI_LU_LIVINGSTATUS_TC
}

class OLI_LU_LIVINGSTATUS_TC {
}

class OLI_LU_LNTYPE {
  public $_; // string
  public $tc; // OLI_LU_LNTYPE_TC
}

class OLI_LU_LNTYPE_TC {
}

class OLI_LU_LOANSUMMARY {
  public $_; // string
  public $tc; // OLI_LU_LOANSUMMARY_TC
}

class OLI_LU_LOANSUMMARY_TC {
}

class OLI_LU_LOA_TYPE {
  public $_; // string
  public $tc; // OLI_LU_LOA_TYPE_TC
}

class OLI_LU_LOA_TYPE_TC {
}

class OLI_LU_LOADINGTYPE {
  public $_; // string
  public $tc; // OLI_LU_LOADINGTYPE_TC
}

class OLI_LU_LOADINGTYPE_TC {
}

class OLI_LU_LOANADJCODE {
  public $_; // string
  public $tc; // OLI_LU_LOANADJCODE_TC
}

class OLI_LU_LOANADJCODE_TC {
}

class OLI_LU_LOANDIREC {
  public $_; // string
  public $tc; // OLI_LU_LOANDIREC_TC
}

class OLI_LU_LOANDIREC_TC {
}

class OLI_LU_LOANMETHOD {
  public $_; // string
  public $tc; // OLI_LU_LOANMETHOD_TC
}

class OLI_LU_LOANMETHOD_TC {
}

class OLI_LU_LOANREASON {
  public $_; // string
  public $tc; // OLI_LU_LOANREASON_TC
}

class OLI_LU_LOANREASON_TC {
}

class OLI_LU_LOANRESTRICT {
  public $_; // string
  public $tc; // OLI_LU_LOANRESTRICT_TC
}

class OLI_LU_LOANRESTRICT_TC {
}

class OLI_LU_LOANSTAT {
  public $_; // string
  public $tc; // OLI_LU_LOANSTAT_TC
}

class OLI_LU_LOANSTAT_TC {
}

class OLI_LU_LOANTIMING {
  public $_; // string
  public $tc; // OLI_LU_LOANTIMING_TC
}

class OLI_LU_LOANTIMING_TC {
}

class OLI_LU_LOANTYPE {
  public $_; // string
  public $tc; // OLI_LU_LOANTYPE_TC
}

class OLI_LU_LOANTYPE_TC {
}

class OLI_LU_LOASTATREAS {
  public $_; // string
  public $tc; // OLI_LU_LOASTATREAS_TC
}

class OLI_LU_LOASTATREAS_TC {
}

class OLI_LU_LOASTATUSTYPE {
  public $_; // string
  public $tc; // OLI_LU_LOASTATUSTYPE_TC
}

class OLI_LU_LOASTATUSTYPE_TC {
}

class OLI_LU_LOCRESTR {
  public $_; // string
  public $tc; // OLI_LU_LOCRESTR_TC
}

class OLI_LU_LOCRESTR_TC {
}

class OLI_LU_LOIROA {
  public $_; // string
  public $tc; // OLI_LU_LOIROA_TC
}

class OLI_LU_LOIROA_TC {
}

class OLI_LU_LOIROA_REFIDTYPE {
  public $_; // string
  public $tc; // OLI_LU_LOIROA_REFIDTYPE_TC
}

class OLI_LU_LOIROA_REFIDTYPE_TC {
}

class OLI_LU_LOOKUP {
  public $_; // string
  public $tc; // OLI_LU_LOOKUP_TC
}

class OLI_LU_LOOKUP_TC {
}

class OLI_LU_LTRINTENT {
  public $_; // string
  public $tc; // OLI_LU_LTRINTENT_TC
}

class OLI_LU_LTRINTENT_TC {
}

class OLI_LU_MANAGEDCARECAT {
  public $_; // string
  public $tc; // OLI_LU_MANAGEDCARECAT_TC
}

class OLI_LU_MANAGEDCARECAT_TC {
}

class OLI_LU_MANNERLOSS {
  public $_; // string
  public $tc; // OLI_LU_MANNERLOSS_TC
}

class OLI_LU_MANNERLOSS_TC {
}

class OLI_LU_MARKETTYPE {
  public $_; // string
  public $tc; // OLI_LU_MARKETTYPE_TC
}

class OLI_LU_MARKETTYPE_TC {
}

class OLI_LU_MARSTAT {
  public $_; // string
  public $tc; // OLI_LU_MARSTAT_TC
}

class OLI_LU_MARSTAT_TC {
}

class OLI_LU_MATPAYTYPE {
  public $_; // string
  public $tc; // OLI_LU_MATPAYTYPE_TC
}

class OLI_LU_MATPAYTYPE_TC {
}

class OLI_LU_MAXIMUMAMOUNT {
  public $_; // string
  public $tc; // OLI_LU_MAXIMUMAMOUNT_TC
}

class OLI_LU_MAXIMUMAMOUNT_TC {
}

class OLI_LU_MEASUNITS {
  public $_; // string
  public $tc; // OLI_LU_MEASUNITS_TC
}

class OLI_LU_MEASUNITS_TC {
}

class OLI_LU_MEASUREUNITS {
  public $_; // string
  public $tc; // OLI_LU_MEASUREUNITS_TC
}

class OLI_LU_MEASUREUNITS_TC {
}

class OLI_LU_MECISSUETYPE {
  public $_; // string
  public $tc; // OLI_LU_MECISSUETYPE_TC
}

class OLI_LU_MECISSUETYPE_TC {
}

class OLI_LU_MECTYPE {
  public $_; // string
  public $tc; // OLI_LU_MECTYPE_TC
}

class OLI_LU_MECTYPE_TC {
}

class OLI_LU_MEDCERTTYPE {
  public $_; // string
  public $tc; // OLI_LU_MEDCERTTYPE_TC
}

class OLI_LU_MEDCERTTYPE_TC {
}

class OLI_LU_MEDCOND {
  public $_; // string
  public $tc; // OLI_LU_MEDCOND_TC
}

class OLI_LU_MEDCOND_TC {
}

class OLI_LU_MEDEQUIP {
  public $_; // string
  public $tc; // OLI_LU_MEDEQUIP_TC
}

class OLI_LU_MEDEQUIP_TC {
}

class OLI_LU_MEDEXAM {
  public $_; // string
  public $tc; // OLI_LU_MEDEXAM_TC
}

class OLI_LU_MEDEXAM_TC {
}

class OLI_LU_MEDEXTYPE {
  public $_; // string
  public $tc; // OLI_LU_MEDEXTYPE_TC
}

class OLI_LU_MEDEXTYPE_TC {
}

class OLI_LU_MEDUW {
  public $_; // string
  public $tc; // OLI_LU_MEDUW_TC
}

class OLI_LU_MEDUW_TC {
}

class OLI_LU_MIBREASON {
  public $_; // string
  public $tc; // OLI_LU_MIBREASON_TC
}

class OLI_LU_MIBREASON_TC {
}

class OLI_LU_MILITARYORGTYPE {
  public $_; // string
  public $tc; // OLI_LU_MILITARYORGTYPE_TC
}

class OLI_LU_MILITARYORGTYPE_TC {
}

class OLI_LU_MILITARYRANK {
  public $_; // string
  public $tc; // OLI_LU_MILITARYRANK_TC
}

class OLI_LU_MILITARYRANK_TC {
}

class OLI_LU_MILITARYSTAT {
  public $_; // string
  public $tc; // OLI_LU_MILITARYSTAT_TC
}

class OLI_LU_MILITARYSTAT_TC {
}

class OLI_LU_MILPAYGR {
  public $_; // string
  public $tc; // OLI_LU_MILPAYGR_TC
}

class OLI_LU_MILPAYGR_TC {
}

class OLI_LU_MIMETYPE {
  public $_; // string
  public $tc; // OLI_LU_MIMETYPE_TC
}

class OLI_LU_MIMETYPE_TC {
}

class OLI_LU_MINBALCALCTYPE {
  public $_; // string
  public $tc; // OLI_LU_MINBALCALCTYPE_TC
}

class OLI_LU_MINBALCALCTYPE_TC {
}

class OLI_LU_MISCGUIDELINE {
  public $_; // string
  public $tc; // OLI_LU_MISCGUIDELINE_TC
}

class OLI_LU_MISCGUIDELINE_TC {
}

class OLI_LU_MONEY {
  public $_; // string
  public $tc; // OLI_LU_MONEY_TC
}

class OLI_LU_MONEY_TC {
}

class OLI_LU_MONEYTRSFR {
  public $_; // string
  public $tc; // OLI_LU_MONEYTRSFR_TC
}

class OLI_LU_MONEYTRSFR_TC {
}

class OLI_LU_MORTALITYTBL {
  public $_; // string
  public $tc; // OLI_LU_MORTALITYTBL_TC
}

class OLI_LU_MORTALITYTBL_TC {
}

class OLI_LU_MSGSEVERITY {
  public $_; // string
  public $tc; // OLI_LU_MSGSEVERITY_TC
}

class OLI_LU_MSGSEVERITY_TC {
}

class OLI_LU_NAMETYPE {
  public $_; // string
  public $tc; // OLI_LU_NAMETYPE_TC
}

class OLI_LU_NAMETYPE_TC {
}

class OLI_LU_NATION {
  public $_; // string
  public $tc; // OLI_LU_NATION_TC
}

class OLI_LU_NATION_TC {
}

class OLI_LU_NATURECAT {
  public $_; // string
  public $tc; // OLI_LU_NATURECAT_TC
}

class OLI_LU_NATURECAT_TC {
}

class OLI_LU_NATURESUBCAT {
  public $_; // string
  public $tc; // OLI_LU_NATURESUBCAT_TC
}

class OLI_LU_NATURESUBCAT_TC {
}

class OLI_LU_NEED {
  public $_; // string
  public $tc; // OLI_LU_NEED_TC
}

class OLI_LU_NEED_TC {
}

class OLI_LU_NEEDAMTBASIS {
  public $_; // string
  public $tc; // OLI_LU_NEEDAMTBASIS_TC
}

class OLI_LU_NEEDAMTBASIS_TC {
}

class OLI_LU_NEEDSRULE {
  public $_; // string
  public $tc; // OLI_LU_NEEDSRULE_TC
}

class OLI_LU_NEEDSRULE_TC {
}

class OLI_LU_NEEDSRULEAMTQUAL {
  public $_; // string
  public $tc; // OLI_LU_NEEDSRULEAMTQUAL_TC
}

class OLI_LU_NEEDSRULEAMTQUAL_TC {
}

class OLI_LU_NEEDSRULECONTEXTAMT {
  public $_; // string
  public $tc; // OLI_LU_NEEDSRULECONTEXTAMT_TC
}

class OLI_LU_NEEDSRULECONTEXTAMT_TC {
}

class OLI_LU_NEGCURRENCYFRMT {
  public $_; // string
  public $tc; // OLI_LU_NEGCURRENCYFRMT_TC
}

class OLI_LU_NEGCURRENCYFRMT_TC {
}

class OLI_LU_NFOLIMITTYPES {
  public $_; // string
  public $tc; // OLI_LU_NFOLIMITTYPES_TC
}

class OLI_LU_NFOLIMITTYPES_TC {
}

class OLI_LU_NFOMODEMETHODS {
  public $_; // string
  public $tc; // OLI_LU_NFOMODEMETHODS_TC
}

class OLI_LU_NFOMODEMETHODS_TC {
}

class OLI_LU_NGCHECK {
  public $_; // string
  public $tc; // OLI_LU_NGCHECK_TC
}

class OLI_LU_NGCHECK_TC {
}

class OLI_LU_NONFORTPROV {
  public $_; // string
  public $tc; // OLI_LU_NONFORTPROV_TC
}

class OLI_LU_NONFORTPROV_TC {
}

class OLI_LU_NOTICETYPE {
  public $_; // string
  public $tc; // OLI_LU_NOTICETYPE_TC
}

class OLI_LU_NOTICETYPE_TC {
}

class OLI_LU_OBJECTTYPE {
  public $_; // string
  public $tc; // OLI_LU_OBJECTTYPE_TC
}

class OLI_LU_OBJECTTYPE_TC {
}

class OLI_LU_OCCUPCLASS {
  public $_; // string
  public $tc; // OLI_LU_OCCUPCLASS_TC
}

class OLI_LU_OCCUPCLASS_TC {
}

class OLI_LU_OCCUPRATING {
  public $_; // string
  public $tc; // OLI_LU_OCCUPRATING_TC
}

class OLI_LU_OCCUPRATING_TC {
}

class OLI_LU_OFFSETMETHOD {
  public $_; // string
  public $tc; // OLI_LU_OFFSETMETHOD_TC
}

class OLI_LU_OFFSETMETHOD_TC {
}

class OLI_LU_OPERATION {
  public $_; // string
  public $tc; // OLI_LU_OPERATION_TC
}

class OLI_LU_OPERATION_TC {
}

class OLI_LU_OPTTYPE {
  public $_; // string
  public $tc; // OLI_LU_OPTTYPE_TC
}

class OLI_LU_OPTTYPE_TC {
}

class OLI_LU_ORGFORM {
  public $_; // string
  public $tc; // OLI_LU_ORGFORM_TC
}

class OLI_LU_ORGFORM_TC {
}

class OLI_LU_ORGFUNCT {
  public $_; // string
  public $tc; // OLI_LU_ORGFUNCT_TC
}

class OLI_LU_ORGFUNCT_TC {
}

class OLI_LU_ORIGSOURCE {
  public $_; // string
  public $tc; // OLI_LU_ORIGSOURCE_TC
}

class OLI_LU_ORIGSOURCE_TC {
}

class OLI_LU_OWNERSHIPOFFUNDS {
  public $_; // string
  public $tc; // OLI_LU_OWNERSHIPOFFUNDS_TC
}

class OLI_LU_OWNERSHIPOFFUNDS_TC {
}

class OLI_LU_PARTFREQ {
  public $_; // string
  public $tc; // OLI_LU_PARTFREQ_TC
}

class OLI_LU_PARTFREQ_TC {
}

class OLI_LU_PARTIALID {
  public $_; // string
  public $tc; // OLI_LU_PARTIALID_TC
}

class OLI_LU_PARTIALID_TC {
}

class OLI_LU_PARTICROLE {
  public $_; // string
  public $tc; // OLI_LU_PARTICROLE_TC
}

class OLI_LU_PARTICROLE_TC {
}

class OLI_LU_PARTY {
  public $_; // string
  public $tc; // OLI_LU_PARTY_TC
}

class OLI_LU_PARTY_TC {
}

class OLI_LU_PARTYPE {
  public $_; // string
  public $tc; // OLI_LU_PARTYPE_TC
}

class OLI_LU_PARTYPE_TC {
}

class OLI_LU_PARTYSELECT {
  public $_; // string
  public $tc; // OLI_LU_PARTYSELECT_TC
}

class OLI_LU_PARTYSELECT_TC {
}

class OLI_LU_PASS {
  public $_; // string
  public $tc; // OLI_LU_PASS_TC
}

class OLI_LU_PASS_TC {
}

class OLI_LU_PAYDELMETHOD {
  public $_; // string
  public $tc; // OLI_LU_PAYDELMETHOD_TC
}

class OLI_LU_PAYDELMETHOD_TC {
}

class OLI_LU_PAYMENTBASISREASON {
  public $_; // string
  public $tc; // OLI_LU_PAYMENTBASISREASON_TC
}

class OLI_LU_PAYMENTBASISREASON_TC {
}

class OLI_LU_PAYMENTFORM {
  public $_; // string
  public $tc; // OLI_LU_PAYMENTFORM_TC
}

class OLI_LU_PAYMENTFORM_TC {
}

class OLI_LU_PAYMENTSTATUS {
  public $_; // string
  public $tc; // OLI_LU_PAYMENTSTATUS_TC
}

class OLI_LU_PAYMENTSTATUS_TC {
}

class OLI_LU_PAYMENTSTRUCTTYPE {
  public $_; // string
  public $tc; // OLI_LU_PAYMENTSTRUCTTYPE_TC
}

class OLI_LU_PAYMENTSTRUCTTYPE_TC {
}

class OLI_LU_PAYMETHOD {
  public $_; // string
  public $tc; // OLI_LU_PAYMETHOD_TC
}

class OLI_LU_PAYMETHOD_TC {
}

class OLI_LU_PAYMODE {
  public $_; // string
  public $tc; // OLI_LU_PAYMODE_TC
}

class OLI_LU_PAYMODE_TC {
}

class OLI_LU_PAYOFFCOND {
  public $_; // string
  public $tc; // OLI_LU_PAYOFFCOND_TC
}

class OLI_LU_PAYOFFCOND_TC {
}

class OLI_LU_PAYRATECAT {
  public $_; // string
  public $tc; // OLI_LU_PAYRATECAT_TC
}

class OLI_LU_PAYRATECAT_TC {
}

class OLI_LU_PAYTYPES {
  public $_; // string
  public $tc; // OLI_LU_PAYTYPES_TC
}

class OLI_LU_PAYTYPES_TC {
}

class OLI_LU_PERILTYPE {
  public $_; // string
  public $tc; // OLI_LU_PERILTYPE_TC
}

class OLI_LU_PERILTYPE_TC {
}

class OLI_LU_PERIODMODE {
  public $_; // string
  public $tc; // OLI_LU_PERIODMODE_TC
}

class OLI_LU_PERIODMODE_TC {
}

class OLI_LU_PERSIST {
  public $_; // string
  public $tc; // OLI_LU_PERSIST_TC
}

class OLI_LU_PERSIST_TC {
}

class OLI_LU_PHONETYPE {
  public $_; // string
  public $tc; // OLI_LU_PHONETYPE_TC
}

class OLI_LU_PHONETYPE_TC {
}

class OLI_LU_PHYSICIANSPECIALTY {
  public $_; // string
  public $tc; // OLI_LU_PHYSICIANSPECIALTY_TC
}

class OLI_LU_PHYSICIANSPECIALTY_TC {
}

class OLI_LU_POLDELMETHOD {
  public $_; // string
  public $tc; // OLI_LU_POLDELMETHOD_TC
}

class OLI_LU_POLDELMETHOD_TC {
}

class OLI_LU_POLICYCHARGE {
  public $_; // string
  public $tc; // OLI_LU_POLICYCHARGE_TC
}

class OLI_LU_POLICYCHARGE_TC {
}

class OLI_LU_POLICYREPLPHYSTAT {
  public $_; // string
  public $tc; // OLI_LU_POLICYREPLPHYSTAT_TC
}

class OLI_LU_POLICYREPLPHYSTAT_TC {
}

class OLI_LU_POLICYVALUES {
  public $_; // string
  public $tc; // OLI_LU_POLICYVALUES_TC
}

class OLI_LU_POLICYVALUES_TC {
}

class OLI_LU_POLISSUE {
  public $_; // string
  public $tc; // OLI_LU_POLISSUE_TC
}

class OLI_LU_POLISSUE_TC {
}

class OLI_LU_POLISSUESUB {
  public $_; // string
  public $tc; // OLI_LU_POLISSUESUB_TC
}

class OLI_LU_POLISSUESUB_TC {
}

class OLI_LU_POLPROD {
  public $_; // string
  public $tc; // OLI_LU_POLPROD_TC
}

class OLI_LU_POLPROD_TC {
}

class OLI_LU_POLSTAT {
  public $_; // string
  public $tc; // OLI_LU_POLSTAT_TC
}

class OLI_LU_POLSTAT_TC {
}

class OLI_LU_POSCURRENCYFRMT {
  public $_; // string
  public $tc; // OLI_LU_POSCURRENCYFRMT_TC
}

class OLI_LU_POSCURRENCYFRMT_TC {
}

class OLI_LU_POSTINGMETHOD {
  public $_; // string
  public $tc; // OLI_LU_POSTINGMETHOD_TC
}

class OLI_LU_POSTINGMETHOD_TC {
}

class OLI_LU_PRECEDENCE {
  public $_; // string
  public $tc; // OLI_LU_PRECEDENCE_TC
}

class OLI_LU_PRECEDENCE_TC {
}

class OLI_LU_PREFCOMM {
  public $_; // string
  public $tc; // OLI_LU_PREFCOMM_TC
}

class OLI_LU_PREFCOMM_TC {
}

class OLI_LU_PREMIUMRATETYPE {
  public $_; // string
  public $tc; // OLI_LU_PREMIUMRATETYPE_TC
}

class OLI_LU_PREMIUMRATETYPE_TC {
}

class OLI_LU_PREMOFFSTAT {
  public $_; // string
  public $tc; // OLI_LU_PREMOFFSTAT_TC
}

class OLI_LU_PREMOFFSTAT_TC {
}

class OLI_LU_PREMSCHED {
  public $_; // string
  public $tc; // OLI_LU_PREMSCHED_TC
}

class OLI_LU_PREMSCHED_TC {
}

class OLI_LU_PREMSOURCE {
  public $_; // string
  public $tc; // OLI_LU_PREMSOURCE_TC
}

class OLI_LU_PREMSOURCE_TC {
}

class OLI_LU_PREMSUSPENSE {
  public $_; // string
  public $tc; // OLI_LU_PREMSUSPENSE_TC
}

class OLI_LU_PREMSUSPENSE_TC {
}

class OLI_LU_PREMWHELD {
  public $_; // string
  public $tc; // OLI_LU_PREMWHELD_TC
}

class OLI_LU_PREMWHELD_TC {
}

class OLI_LU_PRESCDATASTAT {
  public $_; // string
  public $tc; // OLI_LU_PRESCDATASTAT_TC
}

class OLI_LU_PRESCDATASTAT_TC {
}

class OLI_LU_PRESCDOSEFORM {
  public $_; // string
  public $tc; // OLI_LU_PRESCDOSEFORM_TC
}

class OLI_LU_PRESCDOSEFORM_TC {
}

class OLI_LU_PRESCDOSUNIT {
  public $_; // string
  public $tc; // OLI_LU_PRESCDOSUNIT_TC
}

class OLI_LU_PRESCDOSUNIT_TC {
}

class OLI_LU_PRIORITY {
  public $_; // string
  public $tc; // OLI_LU_PRIORITY_TC
}

class OLI_LU_PRIORITY_TC {
}

class OLI_LU_PROAGRESTAT {
  public $_; // string
  public $tc; // OLI_LU_PROAGRESTAT_TC
}

class OLI_LU_PROAGRESTAT_TC {
}

class OLI_LU_PROCEEDINGOUTCOME {
  public $_; // string
  public $tc; // OLI_LU_PROCEEDINGOUTCOME_TC
}

class OLI_LU_PROCEEDINGOUTCOME_TC {
}

class OLI_LU_PROCESSINGINSTRUCTION {
  public $_; // string
  public $tc; // OLI_LU_PROCESSINGINSTRUCTION_TC
}

class OLI_LU_PROCESSINGINSTRUCTION_TC {
}

class OLI_LU_PROCESSTYPES {
  public $_; // string
  public $tc; // OLI_LU_PROCESSTYPES_TC
}

class OLI_LU_PROCESSTYPES_TC {
}

class OLI_LU_PROCTYPE {
  public $_; // string
  public $tc; // OLI_LU_PROCTYPE_TC
}

class OLI_LU_PROCTYPE_TC {
}

class OLI_LU_PRODUCERIDSOURCE {
  public $_; // string
  public $tc; // OLI_LU_PRODUCERIDSOURCE_TC
}

class OLI_LU_PRODUCERIDSOURCE_TC {
}

class OLI_LU_PROFITOBJECTIVE {
  public $_; // string
  public $tc; // OLI_LU_PROFITOBJECTIVE_TC
}

class OLI_LU_PROFITOBJECTIVE_TC {
}

class OLI_LU_PROSTAT {
  public $_; // string
  public $tc; // OLI_LU_PROSTAT_TC
}

class OLI_LU_PROSTAT_TC {
}

class OLI_LU_PROSTATEVENT {
  public $_; // string
  public $tc; // OLI_LU_PROSTATEVENT_TC
}

class OLI_LU_PROSTATEVENT_TC {
}

class OLI_LU_PROSTATREAS {
  public $_; // string
  public $tc; // OLI_LU_PROSTATREAS_TC
}

class OLI_LU_PROSTATREAS_TC {
}

class OLI_LU_PROTYPE {
  public $_; // string
  public $tc; // OLI_LU_PROTYPE_TC
}

class OLI_LU_PROTYPE_TC {
}

class OLI_LU_PROVIDERCLASS {
  public $_; // string
  public $tc; // OLI_LU_PROVIDERCLASS_TC
}

class OLI_LU_PROVIDERCLASS_TC {
}

class OLI_LU_PROVIDERTYPE {
  public $_; // string
  public $tc; // OLI_LU_PROVIDERTYPE_TC
}

class OLI_LU_PROVIDERTYPE_TC {
}

class OLI_LU_PUTCALL {
  public $_; // string
  public $tc; // OLI_LU_PUTCALL_TC
}

class OLI_LU_PUTCALL_TC {
}

class OLI_LU_PUTPROVISION {
  public $_; // string
  public $tc; // OLI_LU_PUTPROVISION_TC
}

class OLI_LU_PUTPROVISION_TC {
}

class OLI_LU_QUALIFIED {
  public $_; // string
  public $tc; // OLI_LU_QUALIFIED_TC
}

class OLI_LU_QUALIFIED_TC {
}

class OLI_LU_QUALLEVEL {
  public $_; // string
  public $tc; // OLI_LU_QUALLEVEL_TC
}

class OLI_LU_QUALLEVEL_TC {
}

class OLI_LU_QUALOFFOR3WAY {
  public $_; // string
  public $tc; // OLI_LU_QUALOFFOR3WAY_TC
}

class OLI_LU_QUALOFFOR3WAY_TC {
}

class OLI_LU_QUALPLAN {
  public $_; // string
  public $tc; // OLI_LU_QUALPLAN_TC
}

class OLI_LU_QUALPLAN_TC {
}

class OLI_LU_QUALPLANSUBTYPE {
  public $_; // string
  public $tc; // OLI_LU_QUALPLANSUBTYPE_TC
}

class OLI_LU_QUALPLANSUBTYPE_TC {
}

class OLI_LU_QUALVALUE {
  public $_; // string
  public $tc; // OLI_LU_QUALVALUE_TC
}

class OLI_LU_QUALVALUE_TC {
}

class OLI_LU_QUESTTYPE {
  public $_; // string
  public $tc; // OLI_LU_QUESTTYPE_TC
}

class OLI_LU_QUESTTYPE_TC {
}

class OLI_LU_RACETRACKTYPE {
  public $_; // string
  public $tc; // OLI_LU_RACETRACKTYPE_TC
}

class OLI_LU_RACETRACKTYPE_TC {
}

class OLI_LU_RANGERATETYPE {
  public $_; // string
  public $tc; // OLI_LU_RANGERATETYPE_TC
}

class OLI_LU_RANGERATETYPE_TC {
}

class OLI_LU_RATCOMMRUL {
  public $_; // string
  public $tc; // OLI_LU_RATCOMMRUL_TC
}

class OLI_LU_RATCOMMRUL_TC {
}

class OLI_LU_RATEBASEDON {
  public $_; // string
  public $tc; // OLI_LU_RATEBASEDON_TC
}

class OLI_LU_RATEBASEDON_TC {
}

class OLI_LU_RATEMETH {
  public $_; // string
  public $tc; // OLI_LU_RATEMETH_TC
}

class OLI_LU_RATEMETH_TC {
}

class OLI_LU_RATETYPE {
  public $_; // string
  public $tc; // OLI_LU_RATETYPE_TC
}

class OLI_LU_RATETYPE_TC {
}

class OLI_LU_RATINGS {
  public $_; // string
  public $tc; // OLI_LU_RATINGS_TC
}

class OLI_LU_RATINGS_TC {
}

class OLI_LU_RATINGSRC {
  public $_; // string
  public $tc; // OLI_LU_RATINGSRC_TC
}

class OLI_LU_RATINGSRC_TC {
}

class OLI_LU_RATINGTYPE {
  public $_; // string
  public $tc; // OLI_LU_RATINGTYPE_TC
}

class OLI_LU_RATINGTYPE_TC {
}

class OLI_LU_REASFORLEAVING {
  public $_; // string
  public $tc; // OLI_LU_REASFORLEAVING_TC
}

class OLI_LU_REASFORLEAVING_TC {
}

class OLI_LU_REASONSRCE {
  public $_; // string
  public $tc; // OLI_LU_REASONSRCE_TC
}

class OLI_LU_REASONSRCE_TC {
}

class OLI_LU_RECAPELIG {
  public $_; // string
  public $tc; // OLI_LU_RECAPELIG_TC
}

class OLI_LU_RECAPELIG_TC {
}

class OLI_LU_RECONCILDTL {
  public $_; // string
  public $tc; // OLI_LU_RECONCILDTL_TC
}

class OLI_LU_RECONCILDTL_TC {
}

class OLI_LU_RECONSUMMTYPE {
  public $_; // string
  public $tc; // OLI_LU_RECONSUMMTYPE_TC
}

class OLI_LU_RECONSUMMTYPE_TC {
}

class OLI_LU_REDEMPTION {
  public $_; // string
  public $tc; // OLI_LU_REDEMPTION_TC
}

class OLI_LU_REDEMPTION_TC {
}

class OLI_LU_REGINFDISTAGSTAT {
  public $_; // string
  public $tc; // OLI_LU_REGINFDISTAGSTAT_TC
}

class OLI_LU_REGINFDISTAGSTAT_TC {
}

class OLI_LU_REGINFDISTAGTYPE {
  public $_; // string
  public $tc; // OLI_LU_REGINFDISTAGTYPE_TC
}

class OLI_LU_REGINFDISTAGTYPE_TC {
}

class OLI_LU_REGINFDISTRIBUTOR {
  public $_; // string
  public $tc; // OLI_LU_REGINFDISTRIBUTOR_TC
}

class OLI_LU_REGINFDISTRIBUTOR_TC {
}

class OLI_LU_REGISTRATION {
  public $_; // string
  public $tc; // OLI_LU_REGISTRATION_TC
}

class OLI_LU_REGISTRATION_TC {
}

class OLI_LU_REGISTRATION_EXAMTYPE {
  public $_; // string
  public $tc; // OLI_LU_REGISTRATION_EXAMTYPE_TC
}

class OLI_LU_REGISTRATION_EXAMTYPE_TC {
}

class OLI_LU_REGISTRATIONENTITY {
  public $_; // string
  public $tc; // OLI_LU_REGISTRATIONENTITY_TC
}

class OLI_LU_REGISTRATIONENTITY_TC {
}

class OLI_LU_REGISTRATIONTYPE {
  public $_; // string
  public $tc; // OLI_LU_REGISTRATIONTYPE_TC
}

class OLI_LU_REGISTRATIONTYPE_TC {
}

class OLI_LU_REGTYPE {
  public $_; // string
  public $tc; // OLI_LU_REGTYPE_TC
}

class OLI_LU_REGTYPE_TC {
}

class OLI_LU_REINRISKBASE {
  public $_; // string
  public $tc; // OLI_LU_REINRISKBASE_TC
}

class OLI_LU_REINRISKBASE_TC {
}

class OLI_LU_REINSISSUECAT {
  public $_; // string
  public $tc; // OLI_LU_REINSISSUECAT_TC
}

class OLI_LU_REINSISSUECAT_TC {
}

class OLI_LU_REINSPREMTAXREIMCD {
  public $_; // string
  public $tc; // OLI_LU_REINSPREMTAXREIMCD_TC
}

class OLI_LU_REINSPREMTAXREIMCD_TC {
}

class OLI_LU_REINSPUR {
  public $_; // string
  public $tc; // OLI_LU_REINSPUR_TC
}

class OLI_LU_REINSPUR_TC {
}

class OLI_LU_REINSSOURCE {
  public $_; // string
  public $tc; // OLI_LU_REINSSOURCE_TC
}

class OLI_LU_REINSSOURCE_TC {
}

class OLI_LU_REINSTATEBASEDON {
  public $_; // string
  public $tc; // OLI_LU_REINSTATEBASEDON_TC
}

class OLI_LU_REINSTATEBASEDON_TC {
}

class OLI_LU_REINSTATEEFF {
  public $_; // string
  public $tc; // OLI_LU_REINSTATEEFF_TC
}

class OLI_LU_REINSTATEEFF_TC {
}

class OLI_LU_REINSTATEPMNT {
  public $_; // string
  public $tc; // OLI_LU_REINSTATEPMNT_TC
}

class OLI_LU_REINSTATEPMNT_TC {
}

class OLI_LU_REINSTATEPREMCALC {
  public $_; // string
  public $tc; // OLI_LU_REINSTATEPREMCALC_TC
}

class OLI_LU_REINSTATEPREMCALC_TC {
}

class OLI_LU_REINSURE_SUBMITTYPES {
  public $_; // string
  public $tc; // OLI_LU_REINSURE_SUBMITTYPES_TC
}

class OLI_LU_REINSURE_SUBMITTYPES_TC {
}

class OLI_LU_REJECTIONTYPE {
  public $_; // string
  public $tc; // OLI_LU_REJECTIONTYPE_TC
}

class OLI_LU_REJECTIONTYPE_TC {
}

class OLI_LU_REL {
  public $_; // string
  public $tc; // OLI_LU_REL_TC
}

class OLI_LU_REL_TC {
}

class OLI_LU_RELATIVESIDE {
  public $_; // string
  public $tc; // OLI_LU_RELATIVESIDE_TC
}

class OLI_LU_RELATIVESIDE_TC {
}

class OLI_LU_RELDESC {
  public $_; // string
  public $tc; // OLI_LU_RELDESC_TC
}

class OLI_LU_RELDESC_TC {
}

class OLI_LU_RENEWPROV {
  public $_; // string
  public $tc; // OLI_LU_RENEWPROV_TC
}

class OLI_LU_RENEWPROV_TC {
}

class OLI_LU_REPLACETYPE {
  public $_; // string
  public $tc; // OLI_LU_REPLACETYPE_TC
}

class OLI_LU_REPLACETYPE_TC {
}

class OLI_LU_REPLYTYPE {
  public $_; // string
  public $tc; // OLI_LU_REPLYTYPE_TC
}

class OLI_LU_REPLYTYPE_TC {
}

class OLI_LU_REQCAT {
  public $_; // string
  public $tc; // OLI_LU_REQCAT_TC
}

class OLI_LU_REQCAT_TC {
}

class OLI_LU_REQCODE {
  public $_; // string
  public $tc; // OLI_LU_REQCODE_TC
}

class OLI_LU_REQCODE_TC {
}

class OLI_LU_REQRESTRICTION {
  public $_; // string
  public $tc; // OLI_LU_REQRESTRICTION_TC
}

class OLI_LU_REQRESTRICTION_TC {
}

class OLI_LU_REQSTAT {
  public $_; // string
  public $tc; // OLI_LU_REQSTAT_TC
}

class OLI_LU_REQSTAT_TC {
}

class OLI_LU_REQSUBSTAT {
  public $_; // string
  public $tc; // OLI_LU_REQSUBSTAT_TC
}

class OLI_LU_REQSUBSTAT_TC {
}

class OLI_LU_RESERVEFUNCTION {
  public $_; // string
  public $tc; // OLI_LU_RESERVEFUNCTION_TC
}

class OLI_LU_RESERVEFUNCTION_TC {
}

class OLI_LU_RESPARTY {
  public $_; // string
  public $tc; // OLI_LU_RESPARTY_TC
}

class OLI_LU_RESPARTY_TC {
}

class OLI_LU_RESPONSETYPE {
  public $_; // string
  public $tc; // OLI_LU_RESPONSETYPE_TC
}

class OLI_LU_RESPONSETYPE_TC {
}

class OLI_LU_RESTRICT {
  public $_; // string
  public $tc; // OLI_LU_RESTRICT_TC
}

class OLI_LU_RESTRICT_TC {
}

class OLI_LU_RESTRICTREASON {
  public $_; // string
  public $tc; // OLI_LU_RESTRICTREASON_TC
}

class OLI_LU_RESTRICTREASON_TC {
}

class OLI_LU_RESVALTYPE {
  public $_; // string
  public $tc; // OLI_LU_RESVALTYPE_TC
}

class OLI_LU_RESVALTYPE_TC {
}

class OLI_LU_RESVMETH {
  public $_; // string
  public $tc; // OLI_LU_RESVMETH_TC
}

class OLI_LU_RESVMETH_TC {
}

class OLI_LU_RETNLEV {
  public $_; // string
  public $tc; // OLI_LU_RETNLEV_TC
}

class OLI_LU_RETNLEV_TC {
}

class OLI_LU_REWARD {
  public $_; // string
  public $tc; // OLI_LU_REWARD_TC
}

class OLI_LU_REWARD_TC {
}

class OLI_LU_RIDERCAT {
  public $_; // string
  public $tc; // OLI_LU_RIDERCAT_TC
}

class OLI_LU_RIDERCAT_TC {
}

class OLI_LU_RIDERSELECTRULE {
  public $_; // string
  public $tc; // OLI_LU_RIDERSELECTRULE_TC
}

class OLI_LU_RIDERSELECTRULE_TC {
}

class OLI_LU_RIDERSUBTYPE {
  public $_; // string
  public $tc; // OLI_LU_RIDERSUBTYPE_TC
}

class OLI_LU_RIDERSUBTYPE_TC {
}

class OLI_LU_RIDERTYPE {
  public $_; // string
  public $tc; // OLI_LU_RIDERTYPE_TC
}

class OLI_LU_RIDERTYPE_TC {
}

class OLI_LU_RISK {
  public $_; // string
  public $tc; // OLI_LU_RISK_TC
}

class OLI_LU_RISK_TC {
}

class OLI_LU_RISKNOTIFYORG {
  public $_; // string
  public $tc; // OLI_LU_RISKNOTIFYORG_TC
}

class OLI_LU_RISKNOTIFYORG_TC {
}

class OLI_LU_RISKNOTIFYSTAT {
  public $_; // string
  public $tc; // OLI_LU_RISKNOTIFYSTAT_TC
}

class OLI_LU_RISKNOTIFYSTAT_TC {
}

class OLI_LU_RMDCALCMETH {
  public $_; // string
  public $tc; // OLI_LU_RMDCALCMETH_TC
}

class OLI_LU_RMDCALCMETH_TC {
}

class OLI_LU_RORCALCMETHOD {
  public $_; // string
  public $tc; // OLI_LU_RORCALCMETHOD_TC
}

class OLI_LU_RORCALCMETHOD_TC {
}

class OLI_LU_ROUNDMETH {
  public $_; // string
  public $tc; // OLI_LU_ROUNDMETH_TC
}

class OLI_LU_ROUNDMETH_TC {
}

class OLI_LU_RQSTPOLDTREASON {
  public $_; // string
  public $tc; // OLI_LU_RQSTPOLDTREASON_TC
}

class OLI_LU_RQSTPOLDTREASON_TC {
}

class OLI_LU_RVWREASON {
  public $_; // string
  public $tc; // OLI_LU_RVWREASON_TC
}

class OLI_LU_RVWREASON_TC {
}

class OLI_LU_SAFETYEQUIP {
  public $_; // string
  public $tc; // OLI_LU_SAFETYEQUIP_TC
}

class OLI_LU_SAFETYEQUIP_TC {
}

class OLI_LU_SEASON {
  public $_; // string
  public $tc; // OLI_LU_SEASON_TC
}

class OLI_LU_SEASON_TC {
}

class OLI_LU_SECPURCHTYPE {
  public $_; // string
  public $tc; // OLI_LU_SECPURCHTYPE_TC
}

class OLI_LU_SECPURCHTYPE_TC {
}

class OLI_LU_SERVICEPARAMETERS {
  public $_; // string
  public $tc; // OLI_LU_SERVICEPARAMETERS_TC
}

class OLI_LU_SERVICEPARAMETERS_TC {
}

class OLI_LU_SERVICEROLE {
  public $_; // string
  public $tc; // OLI_LU_SERVICEROLE_TC
}

class OLI_LU_SERVICEROLE_TC {
}

class OLI_LU_SERVICESTATUS {
  public $_; // string
  public $tc; // OLI_LU_SERVICESTATUS_TC
}

class OLI_LU_SERVICESTATUS_TC {
}

class OLI_LU_SEVERITY {
  public $_; // string
  public $tc; // OLI_LU_SEVERITY_TC
}

class OLI_LU_SEVERITY_TC {
}

class OLI_LU_SHARECLASS {
  public $_; // string
  public $tc; // OLI_LU_SHARECLASS_TC
}

class OLI_LU_SHARECLASS_TC {
}

class OLI_LU_SHAREDATATYPE {
  public $_; // string
  public $tc; // OLI_LU_SHAREDATATYPE_TC
}

class OLI_LU_SHAREDATATYPE_TC {
}

class OLI_LU_SIGNATURETYPE {
  public $_; // string
  public $tc; // OLI_LU_SIGNATURETYPE_TC
}

class OLI_LU_SIGNATURETYPE_TC {
}

class OLI_LU_SIGNRENDERTYPE {
  public $_; // string
  public $tc; // OLI_LU_SIGNRENDERTYPE_TC
}

class OLI_LU_SIGNRENDERTYPE_TC {
}

class OLI_LU_SIGNREQTYPE {
  public $_; // string
  public $tc; // OLI_LU_SIGNREQTYPE_TC
}

class OLI_LU_SIGNREQTYPE_TC {
}

class OLI_LU_SIGNREQUIRED {
  public $_; // string
  public $tc; // OLI_LU_SIGNREQUIRED_TC
}

class OLI_LU_SIGNREQUIRED_TC {
}

class OLI_LU_SIGONFILE {
  public $_; // string
  public $tc; // OLI_LU_SIGONFILE_TC
}

class OLI_LU_SIGONFILE_TC {
}

class OLI_LU_SITUSSTAT {
  public $_; // string
  public $tc; // OLI_LU_SITUSSTAT_TC
}

class OLI_LU_SITUSSTAT_TC {
}

class OLI_LU_SMOKERSTAT {
  public $_; // string
  public $tc; // OLI_LU_SMOKERSTAT_TC
}

class OLI_LU_SMOKERSTAT_TC {
}

class OLI_LU_SOLICITOR {
  public $_; // string
  public $tc; // OLI_LU_SOLICITOR_TC
}

class OLI_LU_SOLICITOR_TC {
}

class OLI_LU_SOLUTIONTYPE {
  public $_; // string
  public $tc; // OLI_LU_SOLUTIONTYPE_TC
}

class OLI_LU_SOLUTIONTYPE_TC {
}

class OLI_LU_SOURCEOFFUNDS {
  public $_; // string
  public $tc; // OLI_LU_SOURCEOFFUNDS_TC
}

class OLI_LU_SOURCEOFFUNDS_TC {
}

class OLI_LU_SPECIALHANDLING {
  public $_; // string
  public $tc; // OLI_LU_SPECIALHANDLING_TC
}

class OLI_LU_SPECIALHANDLING_TC {
}

class OLI_LU_SPEEDDIAL {
  public $_; // string
  public $tc; // OLI_LU_SPEEDDIAL_TC
}

class OLI_LU_SPEEDDIAL_TC {
}

class OLI_LU_SPONSORPLAN {
  public $_; // string
  public $tc; // OLI_LU_SPONSORPLAN_TC
}

class OLI_LU_SPONSORPLAN_TC {
}

class OLI_LU_STARTDATEBASIS {
  public $_; // string
  public $tc; // OLI_LU_STARTDATEBASIS_TC
}

class OLI_LU_STARTDATEBASIS_TC {
}

class OLI_LU_STATE {
  public $_; // string
  public $tc; // OLI_LU_STATE_TC
}

class OLI_LU_STATE_TC {
}

class OLI_LU_STATEVENTCODE {
  public $_; // string
  public $tc; // OLI_LU_STATEVENTCODE_TC
}

class OLI_LU_STATEVENTCODE_TC {
}

class OLI_LU_STATREASON {
  public $_; // string
  public $tc; // OLI_LU_STATREASON_TC
}

class OLI_LU_STATREASON_TC {
}

class OLI_LU_STMTBASIS {
  public $_; // string
  public $tc; // OLI_LU_STMTBASIS_TC
}

class OLI_LU_STMTBASIS_TC {
}

class OLI_LU_STMTTYPE {
  public $_; // string
  public $tc; // OLI_LU_STMTTYPE_TC
}

class OLI_LU_STMTTYPE_TC {
}

class OLI_LU_STOPOPTION {
  public $_; // string
  public $tc; // OLI_LU_STOPOPTION_TC
}

class OLI_LU_STOPOPTION_TC {
}

class OLI_LU_STRUCTURETYPE {
  public $_; // string
  public $tc; // OLI_LU_STRUCTURETYPE_TC
}

class OLI_LU_STRUCTURETYPE_TC {
}

class OLI_LU_SUBACCOUNTTYPE {
  public $_; // string
  public $tc; // OLI_LU_SUBACCOUNTTYPE_TC
}

class OLI_LU_SUBACCOUNTTYPE_TC {
}

class OLI_LU_SUBPAYCOMMAGE {
  public $_; // string
  public $tc; // OLI_LU_SUBPAYCOMMAGE_TC
}

class OLI_LU_SUBPAYCOMMAGE_TC {
}

class OLI_LU_SUBRESVCEASE {
  public $_; // string
  public $tc; // OLI_LU_SUBRESVCEASE_TC
}

class OLI_LU_SUBRESVCEASE_TC {
}

class OLI_LU_SUBSTANCETYPE {
  public $_; // string
  public $tc; // OLI_LU_SUBSTANCETYPE_TC
}

class OLI_LU_SUBSTANCETYPE_TC {
}

class OLI_LU_SUBSTANDARD {
  public $_; // string
  public $tc; // OLI_LU_SUBSTANDARD_TC
}

class OLI_LU_SUBSTANDARD_TC {
}

class OLI_LU_SUBSTDRESV {
  public $_; // string
  public $tc; // OLI_LU_SUBSTDRESV_TC
}

class OLI_LU_SUBSTDRESV_TC {
}

class OLI_LU_SUBSYSTEM {
  public $_; // string
  public $tc; // OLI_LU_SUBSYSTEM_TC
}

class OLI_LU_SUBSYSTEM_TC {
}

class OLI_LU_SUPPSOLVETYPE {
  public $_; // string
  public $tc; // OLI_LU_SUPPSOLVETYPE_TC
}

class OLI_LU_SUPPSOLVETYPE_TC {
}

class OLI_LU_SURFACETYPE {
  public $_; // string
  public $tc; // OLI_LU_SURFACETYPE_TC
}

class OLI_LU_SURFACETYPE_TC {
}

class OLI_LU_SURRCHGTYPE {
  public $_; // string
  public $tc; // OLI_LU_SURRCHGTYPE_TC
}

class OLI_LU_SURRCHGTYPE_TC {
}

class OLI_LU_SVCPRT {
  public $_; // string
  public $tc; // OLI_LU_SVCPRT_TC
}

class OLI_LU_SVCPRT_TC {
}

class OLI_LU_SYSTEMATIC {
  public $_; // string
  public $tc; // OLI_LU_SYSTEMATIC_TC
}

class OLI_LU_SYSTEMATIC_TC {
}

class OLI_LU_TAMRASUBRATERULE {
  public $_; // string
  public $tc; // OLI_LU_TAMRASUBRATERULE_TC
}

class OLI_LU_TAMRASUBRATERULE_TC {
}

class OLI_LU_TARGETAGERULE {
  public $_; // string
  public $tc; // OLI_LU_TARGETAGERULE_TC
}

class OLI_LU_TARGETAGERULE_TC {
}

class OLI_LU_TAXABLESTAT {
  public $_; // string
  public $tc; // OLI_LU_TAXABLESTAT_TC
}

class OLI_LU_TAXABLESTAT_TC {
}

class OLI_LU_TAXCALCBIRTHTYPECODE {
  public $_; // string
  public $tc; // OLI_LU_TAXCALCBIRTHTYPECODE_TC
}

class OLI_LU_TAXCALCBIRTHTYPECODE_TC {
}

class OLI_LU_TAXDISBURSETYPE {
  public $_; // string
  public $tc; // OLI_LU_TAXDISBURSETYPE_TC
}

class OLI_LU_TAXDISBURSETYPE_TC {
}

class OLI_LU_TAXLOCATION {
  public $_; // string
  public $tc; // OLI_LU_TAXLOCATION_TC
}

class OLI_LU_TAXLOCATION_TC {
}

class OLI_LU_TAXPLACE {
  public $_; // string
  public $tc; // OLI_LU_TAXPLACE_TC
}

class OLI_LU_TAXPLACE_TC {
}

class OLI_LU_TAXRULE {
  public $_; // string
  public $tc; // OLI_LU_TAXRULE_TC
}

class OLI_LU_TAXRULE_TC {
}

class OLI_LU_TAXSTAT {
  public $_; // string
  public $tc; // OLI_LU_TAXSTAT_TC
}

class OLI_LU_TAXSTAT_TC {
}

class OLI_LU_TAXTYPE {
  public $_; // string
  public $tc; // OLI_LU_TAXTYPE_TC
}

class OLI_LU_TAXTYPE_TC {
}

class OLI_LU_TERRAIN {
  public $_; // string
  public $tc; // OLI_LU_TERRAIN_TC
}

class OLI_LU_TERRAIN_TC {
}

class OLI_LU_TESTTYPE {
  public $_; // string
  public $tc; // OLI_LU_TESTTYPE_TC
}

class OLI_LU_TESTTYPE_TC {
}

class OLI_LU_THERCLASS {
  public $_; // string
  public $tc; // OLI_LU_THERCLASS_TC
}

class OLI_LU_THERCLASS_TC {
}

class OLI_LU_TIMINGTYPE {
  public $_; // string
  public $tc; // OLI_LU_TIMINGTYPE_TC
}

class OLI_LU_TIMINGTYPE_TC {
}

class OLI_LU_TOBACCOTYPE {
  public $_; // string
  public $tc; // OLI_LU_TOBACCOTYPE_TC
}

class OLI_LU_TOBACCOTYPE_TC {
}

class OLI_LU_TOBPREMBASIS {
  public $_; // string
  public $tc; // OLI_LU_TOBPREMBASIS_TC
}

class OLI_LU_TOBPREMBASIS_TC {
}

class OLI_LU_TRACKINGTYPE {
  public $_; // string
  public $tc; // OLI_LU_TRACKINGTYPE_TC
}

class OLI_LU_TRACKINGTYPE_TC {
}

class OLI_LU_TRANS_TYPE_CODES {
  /*
   *  Nazvanie tranzakcii zadavaemoj staticheskoj 
   */
  public $TransType = 'New Buisness Submission Transaction' ; // string
  public $tc; // OLI_LU_TRANS_TYPE_CODES_TC
}

class OLI_LU_TRANS_TYPE_CODES_TC {
    /*
     * Class vyzova zchetchika trans type
     */
    public $tcout = 103;
    function __construct(){
        return $this->tcount;
    }
}

class OLI_LU_TRAVELENV {
  public $_; // string
  public $tc; // OLI_LU_TRAVELENV_TC
}

class OLI_LU_TRAVELENV_TC {
}

class OLI_LU_TRAVELPURPOSE {
  public $_; // string
  public $tc; // OLI_LU_TRAVELPURPOSE_TC
}

class OLI_LU_TRAVELPURPOSE_TC {
}

class OLI_LU_TRAVELRISK {
  public $_; // string
  public $tc; // OLI_LU_TRAVELRISK_TC
}

class OLI_LU_TRAVELRISK_TC {
}

class OLI_LU_TRAVELTRANSPORTATION {
  public $_; // string
  public $tc; // OLI_LU_TRAVELTRANSPORTATION_TC
}

class OLI_LU_TRAVELTRANSPORTATION_TC {
}

class OLI_LU_TREATGUIDE {
  public $_; // string
  public $tc; // OLI_LU_TREATGUIDE_TC
}

class OLI_LU_TREATGUIDE_TC {
}

class OLI_LU_TREATMENTSTATUS {
  public $_; // string
  public $tc; // OLI_LU_TREATMENTSTATUS_TC
}

class OLI_LU_TREATMENTSTATUS_TC {
}

class OLI_LU_TREATMENTTYPE {
  public $_; // string
  public $tc; // OLI_LU_TREATMENTTYPE_TC
}

class OLI_LU_TREATMENTTYPE_TC {
}

class OLI_LU_TRNSFRAMTTYPE {
  public $_; // string
  public $tc; // OLI_LU_TRNSFRAMTTYPE_TC
}

class OLI_LU_TRNSFRAMTTYPE_TC {
}

class OLI_LU_TRUSTTYPE {
  public $_; // string
  public $tc; // OLI_LU_TRUSTTYPE_TC
}

class OLI_LU_TRUSTTYPE_TC {
}

class OLI_LU_UNDPRIV {
  public $_; // string
  public $tc; // OLI_LU_UNDPRIV_TC
}

class OLI_LU_UNDPRIV_TC {
}

class OLI_LU_UNDSTAT {
  public $_; // string
  public $tc; // OLI_LU_UNDSTAT_TC
}

class OLI_LU_UNDSTAT_TC {
}

class OLI_LU_UNWRITECLASS {
  public $_; // string
  public $tc; // OLI_LU_UNWRITECLASS_TC
}

class OLI_LU_UNWRITECLASS_TC {
}

class OLI_LU_UNWRITESUBCLASS {
  public $_; // string
  public $tc; // OLI_LU_UNWRITESUBCLASS_TC
}

class OLI_LU_UNWRITESUBCLASS_TC {
}

class OLI_LU_URLTYPE {
  public $_; // string
  public $tc; // OLI_LU_URLTYPE_TC
}

class OLI_LU_URLTYPE_TC {
}

class OLI_LU_USAGESTATUS {
  public $_; // string
  public $tc; // OLI_LU_USAGESTATUS_TC
}

class OLI_LU_USAGESTATUS_TC {
}

class OLI_LU_UWCATEGORY {
  public $_; // string
  public $tc; // OLI_LU_UWCATEGORY_TC
}

class OLI_LU_UWCATEGORY_TC {
}

class OLI_LU_UWREASONCODE {
  public $_; // string
  public $tc; // OLI_LU_UWREASONCODE_TC
}

class OLI_LU_UWREASONCODE_TC {
}

class OLI_LU_UWREVREASON {
  public $_; // string
  public $tc; // OLI_LU_UWREVREASON_TC
}

class OLI_LU_UWREVREASON_TC {
}

class OLI_LU_VALCLASS {
  public $_; // string
  public $tc; // OLI_LU_VALCLASS_TC
}

class OLI_LU_VALCLASS_TC {
}

class OLI_LU_VARIANT {
  public $_; // string
  public $tc; // OLI_LU_VARIANT_TC
}

class OLI_LU_VARIANT_TC {
}

class OLI_LU_VARIANTATT {
}

class OLI_LU_VEHICLE {
  public $_; // string
  public $tc; // OLI_LU_VEHICLE_TC
}

class OLI_LU_VEHICLE_TC {
}

class OLI_LU_VERIFICATIONMETHOD {
  public $_; // string
  public $tc; // OLI_LU_VERIFICATIONMETHOD_TC
}

class OLI_LU_VERIFICATIONMETHOD_TC {
}

class OLI_LU_VERIFIERROLE {
  public $_; // string
  public $tc; // OLI_LU_VERIFIERROLE_TC
}

class OLI_LU_VERIFIERROLE_TC {
}

class OLI_LU_VERIFYTYPE {
  public $_; // string
  public $tc; // OLI_LU_VERIFYTYPE_TC
}

class OLI_LU_VERIFYTYPE_TC {
}

class OLI_LU_VESTINGTYPE {
  public $_; // string
  public $tc; // OLI_LU_VESTINGTYPE_TC
}

class OLI_LU_VESTINGTYPE_TC {
}

class OLI_LU_VIOLATIONTYPE {
  public $_; // string
  public $tc; // OLI_LU_VIOLATIONTYPE_TC
}

class OLI_LU_VIOLATIONTYPE_TC {
}

class OLI_LU_VISACLASSTYPE {
  public $_; // string
  public $tc; // OLI_LU_VISACLASSTYPE_TC
}

class OLI_LU_VISACLASSTYPE_TC {
}

class OLI_LU_WAIVERREASON {
  public $_; // string
  public $tc; // OLI_LU_WAIVERREASON_TC
}

class OLI_LU_WAIVERREASON_TC {
}

class OLI_LU_WDORDER {
  public $_; // string
  public $tc; // OLI_LU_WDORDER_TC
}

class OLI_LU_WDORDER_TC {
}

class OLI_LU_WITHBKUPREAS {
  public $_; // string
  public $tc; // OLI_LU_WITHBKUPREAS_TC
}

class OLI_LU_WITHBKUPREAS_TC {
}

class OLI_LU_WITHCALCMTH {
  public $_; // string
  public $tc; // OLI_LU_WITHCALCMTH_TC
}

class OLI_LU_WITHCALCMTH_TC {
}

class OLI_LU_WORKERSCOMP {
  public $_; // string
  public $tc; // OLI_LU_WORKERSCOMP_TC
}

class OLI_LU_WORKERSCOMP_TC {
}

class OLI_LU_WORKLOCTYPE {
  public $_; // string
  public $tc; // OLI_LU_WORKLOCTYPE_TC
}

class OLI_LU_WORKLOCTYPE_TC {
}

class OLI_LU_WORKSTAT {
  public $_; // string
  public $tc; // OLI_LU_WORKSTAT_TC
}

class OLI_LU_WORKSTAT_TC {
}

class OLI_LU_WTHDRWLRULE {
  public $_; // string
  public $tc; // OLI_LU_WTHDRWLRULE_TC
}

class OLI_LU_WTHDRWLRULE_TC {
}

class OLI_SITUS_REASONCODE {
  public $_; // string
  public $tc; // OLI_SITUS_REASONCODE_TC
}

class OLI_SITUS_REASONCODE_TC {
}

class OLU_LU_CORRGUIDSTATE {
  public $_; // string
  public $tc; // OLU_LU_CORRGUIDSTATE_TC
}

class OLU_LU_CORRGUIDSTATE_TC {
}

class PARTIAL_DATE_TYPE {
}

class anonymous1164 {
}

class anonymous1165 {
}

class Persist_Types {
}

class PERSISTKEY {
  public $_; // string
  public $Persist; // Persist_Types
  public $SystemCode; // string
  public $VendorCode; // string
}

class REINS_SUBTRAN_CODES {
  public $_; // string
  public $tc; // REINS_SUBTRAN_CODES_TC
}

class REINS_SUBTRAN_CODES_TC {
}

class REINS_TRANMODEL_CODES {
  public $_; // string
  public $tc; // REINS_TRANMODEL_CODES_TC
}

class REINS_TRANMODEL_CODES_TC {
}

class RESULT_CODES {
  public $_; // string
  public $tc; // RESULT_CODES_TC
}

class RESULT_CODES_TC {
}

class RESULT_INFO_CODES {
  public $_; // string
  public $tc; // RESULT_INFO_CODES_TC
}

class RESULT_INFO_CODES_TC {
}

class SCALESUBTYPE_TYPE {
  public $_; // string
  public $tc; // SCALESUBTYPE_TYPE_TC
}

class SCALESUBTYPE_TYPE_TC {
}

class SCALETYPE_TYPE {
  public $_; // string
  public $tc; // SCALETYPE_TYPE_TC
}

class SCALETYPE_TYPE_TC {
}

class SYSKEY {
  public $_; // string
  public $Persist; // Persist_Types
  public $SystemCode; // string
  public $VendorCode; // string
}

class TC_ILLUSPRIMTYPE {
  public $_; // string
  public $tc; // TC_ILLUSPRIMTYPE_TC
}

class TC_ILLUSPRIMTYPE_TC {
}

class TC_ILLUSSECTYPE {
  public $_; // string
  public $tc; // TC_ILLUSSECTYPE_TC
}

class TC_ILLUSSECTYPE_TC {
}

class TC_ILLUSTERTTYPE {
  public $_; // string
  public $tc; // TC_ILLUSTERTTYPE_TC
}

class TC_ILLUSTERTTYPE_TC {
}

class TC_INTASSUMPTION {
  public $_; // string
  public $tc; // TC_INTASSUMPTION_TC
}

class TC_INTASSUMPTION_TC {
}

class TC_MIB_PRIORITY {
  public $_; // string
  public $tc; // TC_MIB_PRIORITY_TC
}

class TC_MIB_PRIORITY_TC {
}

class TC_MIB_SEARCHDEPTH {
  public $_; // string
  public $tc; // TC_MIB_SEARCHDEPTH_TC
}

class TC_MIB_SEARCHDEPTH_TC {
}

class TC_MIB_SERVICE {
  public $_; // string
  public $tc; // TC_MIB_SERVICE_TC
}

class TC_MIB_SERVICE_TC {
}

class TC_MORTASSUMPTION {
  public $_; // string
  public $tc; // TC_MORTASSUMPTION_TC
}

class TC_MORTASSUMPTION_TC {
}

class TC_TIMINGOPTION {
  public $_; // string
  public $tc; // TC_TIMINGOPTION_TC
}

class TC_TIMINGOPTION_TC {
}

class TC_VECTOR {
  public $_; // string
  public $tc; // TC_VECTOR_TC
}

class TC_VECTOR_TC {
}

class TC_VECTORSETTYPE {
  public $_; // string
  public $tc; // TC_VECTORSETTYPE_TC
}

class TC_VECTORSETTYPE_TC {
}

class TRAN_CONTENT_CODES {
  public $_; // string
  public $tc; // TRAN_CONTENT_CODES_TC
}

class TRAN_CONTENT_CODES_TC {
}

class TRANS_MODE_CODES {
  public $_; // string
  public $tc; // TRANS_MODE_CODES_TC
}

class TRANS_MODE_CODES_TC {
}

class TRANS_SUBTYPE_CODES {
  public $_; // string
  public $tc; // TRANS_SUBTYPE_CODES_TC
}

class TRANS_SUBTYPE_CODES_TC {
}

class XTbML_DEFAULT_TYPE_CODE {
}

class anonymous1210 {
}

class anonymous1211 {
}

class OLifE_Type {
  public $SourceInfo; // SourceInfo_Type
  public $CurrentLanguage; // OLI_LU_CLIENTLANGUAGES
  public $Activity; // Activity_Type
  public $Grouping; // Grouping_Type
  public $Holding; // Holding_Type
  public $InvestProduct; // InvestProduct_Type
  public $Party; // Party_Type
  public $PolicyProduct; // PolicyProduct_Type
  public $Relation; // Relation_Type
  public $Currency; // Currency_Type
  public $Criteria; // Criteria_Type
  public $FinancialStatement; // FinancialStatement_Type
  public $Scenario; // Scenario_Type
  public $FormInstance; // FormInstance_Type
  public $SettlementInfo; // SettlementInfo_Type
  public $DistributionAgreement; // DistributionAgreement_Type
  public $CommSchedule; // CommSchedule_Type
  public $SystemMessage; // SystemMessage_Type
  public $Campaign; // Campaign_Type
  public $Case; // Case_Type
  public $CodeList; // CodeList_Type
  public $BusinessProcessDef; // BusinessProcessDef_Type
  public $AuditEntry; // AuditEntry_Type
  public $UnderwritingGuidelines; // UnderwritingGuidelines_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $Version; // string
}

class TXLife_Type {
  public $UserAuthRequest; // UserAuthRequest_Type
  public $TXLifeRequest; // TXLifeRequest_Type
  public $UserAuthResponse; // UserAuthResponse_Type
  public $TXLifeResponse; // TXLifeResponse_Type
  public $TXLifeNotify; // TXLifeNotify_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $Version; // string
}

class XTbML_Type {
  public $ContentClassification; // ContentClassification_Type
  public $Table; // Table_Type
  public $Version; // string
  public $id; // ID
}

class AbdomenMeasure_Type {
  public $MeasureUnits; // OLI_LU_MEASUREUNITS
  public $MeasureValue; // double
}

class AccountDesignationCC_Type {
  public $AccountDesignation; // OLI_LU_ACCTDES
}

class AccountingActivity_Type {
  public $AccountingActivityKey; // PERSISTKEY
  public $AccountingActivitySysKey; // SYSKEY
  public $AccountNumber; // string
  public $AccountAmount; // decimal
  public $ActivityDate; // date
  public $JournalDate; // date
  public $PostingDate; // date
  public $AccountDebitCreditType; // OLI_LU_ACCTDBCRTYPE
  public $Jurisdiction; // OLI_LU_STATE
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $AppliesToPartyID; // IDREF
  public $PostingDateAttribute; // date
  public $JournalDateAttribute; // date
}

class AccountingStatement_Type {
  public $AccountingStatementKey; // PERSISTKEY
  public $AccountingStatementSysKey; // SYSKEY
  public $TotalCreditAmt; // decimal
  public $TotalDebitAmt; // decimal
  public $AccountingActivityDate; // date
  public $TotalCreditCount; // integer
  public $TotalDebitCount; // integer
  public $AccountingActivity; // AccountingActivity_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ActionTypeAllowedCC_Type {
  public $ActionTypeAllowed; // OLI_LU_ACTIONTYPE
}

class Activity_Type {
  public $ActivityKey; // PERSISTKEY
  public $ActivitySysKey; // SYSKEY
  public $ActivityTypeCode; // OLI_LU_ACTTYPE
  public $ActivityTypeDescription; // OLI_LU_ACTTYPEDESC
  public $ActivityStatus; // OLI_LU_ACTSTAT
  public $ActivityStatusDescription; // OLI_LU_ACTSTATDESC
  public $ActivityDetails; // string
  public $Priority; // OLI_LU_PRIORITY
  public $UserCode; // string
  public $DueDate; // date
  public $DueTime; // time
  public $DoneDate; // date
  public $DoneTime; // time
  public $StartTime; // time
  public $EndTime; // time
  public $RecurringFrequency; // OLI_LU_PAYMODE
  public $Opened; // date
  public $OpenedTime; // time
  public $LastUpdate; // date
  public $LastUpdateTime; // time
  public $Closed; // date
  public $ClosedTime; // time
  public $ActivityCode; // string
  public $ActivitySummary; // string
  public $ActivityTrigger; // string
  public $ReplyRequest; // OLI_LU_REPLYTYPE
  public $VendorCode; // string
  public $StartDate; // date
  public $EndDate; // date
  public $DateCreatedTime; // time
  public $ScheduledChange; // ScheduledChange_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $HoldingID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class AdditionalArrClassification_Type {
  public $AdditionalArrClassificationKey; // PERSISTKEY
  public $AdditionalArrClassificationSysKey; // SYSKEY
  public $ArrType; // OLI_LU_ARRTYPE
  public $ArrSubType; // OLI_LU_ARRSUBTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AdditionalInterestRateInfo_Type {
  public $AdditionalInterestRateInfoKey; // PERSISTKEY
  public $AdditionalInterestRateInfoSysKey; // SYSKEY
  public $Duration; // integer
  public $DurQualifier; // OLI_LU_PAYMODE
  public $InterestRate; // double
  public $StartDate; // date
  public $EndDate; // date
  public $AccountValue; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AdditionalRiderClassification_Type {
  public $AdditionalRiderClassificationKey; // PERSISTKEY
  public $AdditionalRiderClassificationSysKey; // SYSKEY
  public $RiderTypeCode; // OLI_LU_RIDERTYPE
  public $RiderSubTypeCode; // OLI_LU_RIDERSUBTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Address_Type {
  public $AddressKey; // PERSISTKEY
  public $AddressSysKey; // SYSKEY
  public $AddressTypeCode; // OLI_LU_ADTYPE
  public $AttentionLine; // string
  public $Line1; // string
  public $Line2; // string
  public $Line3; // string
  public $Line4; // string
  public $Line5; // string
  public $City; // string
  public $CityCode; // string
  public $AddressState; // string
  public $AddressStateTC; // OLI_LU_STATE
  public $Zip; // string
  public $AddressCountry; // string
  public $AddressCountryTC; // OLI_LU_NATION
  public $PrefAddr; // OLI_LU_BOOLEAN
  public $SolicitationInd; // OLI_LU_BOOLEAN
  public $EndDate; // date
  public $StartDate; // date
  public $YearsAtAddress; // double
  public $RecurringEndMoDay; // gMonthDay
  public $RecurringStartMoDay; // gMonthDay
  public $PostalDropCode; // string
  public $ReturnedMailInd; // OLI_LU_BOOLEAN
  public $AddressFormatTC; // OLI_LU_ADDRFORMATTC
  public $AddressBarCodeInd; // OLI_LU_BOOLEAN
  public $PreventOverrideInd; // OLI_LU_BOOLEAN
  public $LegalAddressInd; // OLI_LU_BOOLEAN
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $AddressValidInd; // OLI_LU_BOOLEAN
  public $CountyName; // string
  public $CountyCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AdminTransactionProduct_Type {
  public $AdminTransactionProductKey; // PERSISTKEY
  public $AdminTransactionProductSysKey; // SYSKEY
  public $TransAvailableDate; // date
  public $TransEndAvailableDate; // date
  public $IssueEffectiveDate; // date
  public $IssueExpirationDate; // date
  public $TransType = 'New Business Submission Transaction'; // OLI_LU_TRANS_TYPE_CODES
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $PolicyStatusCC; // PolicyStatusCC_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AgeAmtProduct_Type {
  public $AgeAmtProductKey; // PERSISTKEY
  public $AgeAmtProductSysKey; // SYSKEY
  public $AgeBasisType; // OLI_LU_AGEBASIS
  public $MinAge; // integer
  public $MaxAge; // integer
  public $MinAgeMeasureUnit; // OLI_LU_MEASUNITS
  public $MaxAgeMeasureUnit; // OLI_LU_MEASUNITS
  public $MinAmt; // decimal
  public $MaxAmt; // decimal
  public $MinPct; // double
  public $MaxPct; // double
  public $MinUnits; // double
  public $MaxUnits; // double
  public $MinRatioToBase; // double
  public $MaxRatioToBase; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AgeRestrictionRoleCC_Type {
  public $AgeRestrictionRole; // OLI_LU_REL
}

class Aircraft_Type {
  public $AircraftKey; // PERSISTKEY
  public $AircraftSysKey; // SYSKEY
  public $AircraftPrecedence; // OLI_LU_PRECEDENCE
  public $AircraftModel; // string
  public $AircraftMake; // string
  public $AircraftOwnerName; // string
  public $TimingType; // OLI_LU_TIMINGTYPE
  public $FutureAircraftDate; // date
  public $FutureAircraftPartialDate; // PARTIAL_DATE_TYPE
  public $JobAboardAircraft; // OLI_LU_AIRCRAFTJOB
  public $SpecificJobAboardAircraft; // string
  public $Sequence; // integer
  public $TotalNumOfHoursFlown; // integer
  public $NumberOfHoursLastYear; // integer
  public $NumberOfHoursNextYear; // integer
  public $NumOfHoursLast2Year; // integer
  public $AviationType; // OLI_LU_AVIATIONTYPE
  public $AircraftType; // OLI_LU_AIRCRAFTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AirSportsExp_Type {
  public $AirsportsExpKey; // PERSISTKEY
  public $AirsportsExpSysKey; // SYSKEY
  public $ProfessionalInd; // OLI_LU_BOOLEAN
  public $CompeteInd; // OLI_LU_BOOLEAN
  public $CompetitionDetail; // CompetitionDetail_Type
  public $SafetyStandardsInd; // OLI_LU_BOOLEAN
  public $AvgAerialHeight; // double
  public $MaxAerialHeight; // double
  public $AerialHeightUnitMeasure; // OLI_LU_MEASUNITS
  public $AvgAerialDuration; // double
  public $MaxAerialDuration; // double
  public $AerialDurationUnitMeasure; // OLI_LU_MEASUNITS
  public $BallooningExp; // BallooningExp_Type
  public $HangGlidingExp; // HangGlidingExp_Type
  public $ParachutingExp; // ParachutingExp_Type
  public $UltraliteExp; // UltraliteExp_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllocTypeProduct_Type {
  public $AllocTypeProductKey; // PERSISTKEY
  public $AllocTypeProductSysKey; // SYSKEY
  public $SourceTransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $DestTransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $MarketingName; // string
  public $RoundingPrecision; // integer
  public $InterestRoundType; // OLI_LU_ROUNDMETH
  public $AmountProduct; // AmountProduct_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedChange_Type {
  public $AllowedChangeKey; // PERSISTKEY
  public $AllowedChangeSysKey; // SYSKEY
  public $MinChangeAmt; // decimal
  public $MaxChangeAmt; // decimal
  public $AllowedChangeDirection; // OLI_LU_INCRDECR
  public $AllowedPercent; // AllowedPercent_Type
  public $AllowedChangeMode; // AllowedChangeMode_Type
  public $AllowedTimingBasis; // AllowedTimingBasis_Type
  public $AnnualIndexTypeCC; // AnnualIndexTypeCC_Type
  public $FeatureOptConflict; // FeatureOptConflict_Type
  public $FeatureOptRequisite; // FeatureOptRequisite_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedChangeMode_Type {
  public $ChangeMode; // OLI_LU_PAYMODE
}

class AllowedDayCC_Type {
  public $AllowedDay; // OLI_LU_ALLOWEDDAY
  public $AllowedBusinessDay; // OLI_LU_ALLOWEDDAY
}

class AllowedDesignation_Type {
  public $AllowedDesignationKey; // PERSISTKEY
  public $AllowedDesignationSysKey; // SYSKEY
  public $BeneficiaryDesignation; // OLI_LU_BENEDESIGNATION
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedDistributionAgreement_Type {
  public $AllowedDistributionAgreementKey; // PERSISTKEY
  public $AllowedDistributionAgreementSysKey; // SYSKEY
  public $CarrierCode; // string
  public $DistributionAgreementCode; // string
  public $EffDate; // date
  public $EndDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedFeatureTransaction_Type {
  public $AllowedFeatureTransactionKey; // PERSISTKEY
  public $AllowedFeatureTransactionSysKey; // SYSKEY
  public $TransType; // OLI_LU_TRANS_TYPE_CODES
  public $TransSubType; // TRANS_SUBTYPE_CODES
  public $EffDate; // date
  public $ExpDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedIndexInfo_Type {
  public $AllowedIndexInfoKey; // PERSISTKEY
  public $AllowedIndexInfoSysKey; // SYSKEY
  public $AnnualIndexType; // OLI_LU_ANNIDX
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedPercent_Type {
  public $AllowedPercentKey; // PERSISTKEY
  public $AllowedPercentSysKey; // SYSKEY
  public $AllowedPayoutPct; // double
  public $AllowedPctType; // OLI_LU_ALLOWPCTTYPE
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $Sequence; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedRelationship_Type {
  public $AllowedRelationshipKey; // PERSISTKEY
  public $AllowedRelationshipSysKey; // SYSKEY
  public $OriginatingRole; // OLI_LU_REL
  public $RelatedRole; // OLI_LU_REL
  public $RelationshipCC; // RelationshipCC_Type
  public $ComboRelationship; // ComboRelationship_Type
  public $MinNumRelatedRolePlayers; // integer
  public $MaxNumRelatedRolePlayers; // integer
  public $MinAgeRelatedRolePlayer; // double
  public $MaxAgeRelatedRolePlayer; // double
  public $AnyRelatedRolePlayerAgeInd; // OLI_LU_BOOLEAN
  public $OppositeGenderInd; // OLI_LU_BOOLEAN
  public $RoundingPrecision; // integer
  public $RoundingRule; // OLI_LU_ROUNDMETH
  public $IrrevokableInd; // OLI_LU_BOOLEAN
  public $VerificationRequirement; // VerificationRequirement_Type
  public $Fee; // Fee_Type
  public $AgeAmtProduct; // AgeAmtProduct_Type
  public $AllowedDesignation; // AllowedDesignation_Type
  public $EntityType; // EntityType_Type
  public $BenePayoutTypeAllowed; // BenePayoutTypeAllowed_Type
  public $DeliveryInfo; // DeliveryInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedSubstandard_Type {
  public $AllowedSubstandardKey; // PERSISTKEY
  public $AllowedSubstandardSysKey; // SYSKEY
  public $PermInd; // OLI_LU_BOOLEAN
  public $SubstandardType; // OLI_LU_SUBSTANDARD
  public $AllowPercentRatingPolicyInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AllowedTimingBasis_Type {
  public $TimingBasis; // OLI_LU_STMTBASIS
}

class AllowedTransType_Type {
  public $AllowedTransTypeKey; // PERSISTKEY
  public $AllowedTransTypeSysKey; // SYSKEY
  public $TransType; // OLI_LU_TRANS_TYPE_CODES
  public $TransSubType; // TRANS_SUBTYPE_CODES
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AltPremMode_Type {
  public $PaymentMode; // OLI_LU_PAYMODE
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $PaymentAmt; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AmountProduct_Type {
  public $AmountProductKey; // PERSISTKEY
  public $AmountProductSysKey; // SYSKEY
  public $MinAmt; // decimal
  public $MinPct; // double
  public $MaxAmt; // decimal
  public $MaxPct; // double
  public $AmountContext; // OLI_LU_AMTCONTEXT
  public $ContextAmount; // decimal
  public $ContextPercentage; // double
  public $TransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $EnumeratedValue; // EnumeratedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AnnualIndexOption_Type {
  public $AnnualIndexOptionKey; // PERSISTKEY
  public $AnnualIndexOptionSysKey; // SYSKEY
  public $AnnualIndex; // double
  public $AnnualIndexType; // OLI_LU_ANNIDX
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AnnualIndexTypeCC_Type {
  public $AnnualIndexType; // OLI_LU_ANNIDX
}

class AnnuitizationDateRestriction_Type {
  public $AnnuitizationDateRestrictionKey; // PERSISTKEY
  public $AnnuitizationDateRestrictionSysKey; // SYSKEY
  public $AnnuitizationDateRule; // OLI_LU_ANNDATERULE
  public $AnnuitizationDateRuleValue; // double
  public $AnnuitizationDateRuleEntity; // OLI_LU_PARTICROLE
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Annuity_Type {
  public $AnnuityKey; // PERSISTKEY
  public $AnnuitySysKey; // SYSKEY
  public $PremType; // OLI_LU_ANNPREM
  public $PayoutType; // OLI_LU_ANNPAYOUT
  public $QualPlanType; // OLI_LU_QUALPLAN
  public $QualPlanSubType; // OLI_LU_QUALPLANSUBTYPE
  public $QualPlanOriginationDate; // date
  public $SourceOfFunds; // string
  public $SourceOfFundsTC; // OLI_LU_SOURCEOFFUNDS
  public $OwnershipOfFunds; // OLI_LU_OWNERSHIPOFFUNDS
  public $NumWthdrwATD; // integer
  public $NumWthdrwITD; // integer
  public $NumWthdrwMTD; // integer
  public $NumWthdrwYTD; // integer
  public $WithdrwMaxPct; // double
  public $TotalAmtWthdrwn; // decimal
  public $DivSeriesIndString; // string
  public $ManPayoutDate; // date
  public $HomeLoanAmt; // decimal
  public $CumWthdrwlAmtATD; // decimal
  public $CumWthdrwlAmtITD; // decimal
  public $CumWthdrwlAmtMTD; // decimal
  public $CumWthdrwlAmtYTD; // decimal
  public $NetWthdrwlAmtATD; // decimal
  public $NetWthdrwlAmtITD; // decimal
  public $NetWthdrwlAmtMTD; // decimal
  public $NetWthdrwlAmtYTD; // decimal
  public $CumWithdrawalAmtPriorYr; // decimal
  public $MaxAvailableLoan; // decimal
  public $DeathBenefitPaymentOption; // OLI_LU_DTHBENEPAY
  public $DeathBenefitAmt; // decimal
  public $CashValueMaturity; // decimal
  public $PenaltyPhaseEndDate; // date
  public $SurrenderValue; // decimal
  public $SurrenderFreeAmtUsedATD; // decimal
  public $SurrenderFreeAmtATD; // decimal
  public $SurrenderCharge; // decimal
  public $FedTaxableGain; // decimal
  public $JurisdictionTaxableGain; // decimal
  public $GuarIntEndDate; // date
  public $GuarIntRate; // double
  public $GuarLifetimeRate; // double
  public $WithdrawalRule; // OLI_LU_WTHDRWLRULE
  public $EEContribAmt; // decimal
  public $EEContribPct; // double
  public $EEContValueITD; // decimal
  public $ERContribAmt; // decimal
  public $ERContribPct; // double
  public $ERValueITD; // decimal
  public $InitDepositAmt; // decimal
  public $InitDepositDate; // date
  public $InitPaymentAmt; // decimal
  public $LastPaidAmt; // decimal
  public $LastPaidDate; // date
  public $TotalDepositITD; // decimal
  public $GrossPremATD; // decimal
  public $GrossPremAmtITD; // decimal
  public $CumPremAmtFirstYr; // decimal
  public $GrossPremPriorYr; // decimal
  public $AccumValueIntRateCurrent; // double
  public $InitDepIntRateCurrent; // double
  public $TaxableStatus; // OLI_LU_TAXABLESTAT
  public $LoanedAmtIntRate; // double
  public $LockedInInd; // OLI_LU_BOOLEAN
  public $FirstTaxYear; // gYear
  public $RothIraNetContributionAmt; // decimal
  public $PrevReportedTaxYear; // gYear
  public $PrevReportedTaxAmt; // decimal
  public $RequestedMaturityAge; // integer
  public $RequestedMaturityDate; // date
  public $RequestedMaturityDur; // integer
  public $RMDCalcMeth; // OLI_LU_RMDCALCMETH
  public $SubjectToTaxAggregationInd; // OLI_LU_BOOLEAN
  public $BonusValueAmt; // decimal
  public $PremiumBonusAmt; // decimal
  public $ProjectedIncomeAmt; // decimal
  public $SuspenseAmt; // decimal
  public $EndPeriodCertainDate; // date
  public $LOIROARefNumType; // OLI_LU_LOIROA_REFIDTYPE
  public $LOIROARefNum; // string
  public $LOIROAType; // OLI_LU_LOIROA
  public $LOIROAAmt; // decimal
  public $LOICommitmentDate; // date
  public $CommissionLink; // string
  public $LoadingType; // OLI_LU_LOADINGTYPE
  public $PrevTaxYearReportableAmt; // decimal
  public $CurrTaxYearReportableAmt; // decimal
  public $ValuationClassType; // OLI_LU_VALCLASS
  public $ValuationBaseSeries; // string
  public $ValuationSubSeries; // string
  public $NetPremAmtATD; // decimal
  public $NetPremAmtITD; // decimal
  public $NetPremAmtYTD; // decimal
  public $NetPremAmtPriorYr; // decimal
  public $LoanIntDue; // decimal
  public $ReserveFunction; // OLI_LU_RESERVEFUNCTION
  public $ReserveIntRate; // double
  public $ReserveMethod; // OLI_LU_RESVMETH
  public $MortalityOrMorbidityTable; // OLI_LU_MORTALITYTBL
  public $InheritedContractInd; // OLI_LU_BOOLEAN
  public $InheritedPayoutTiming; // OLI_LU_INHERITEDTIMING
  public $CarrierPricingIndicator; // string
  public $RMDBasisValue; // decimal
  public $RMDActuarialPresentValue; // decimal
  public $BeneDesignationWording; // string
  public $InterestEarnedATD; // decimal
  public $RMDAmt; // decimal
  public $InterestOnlyAmt; // decimal
  public $Payout; // Payout_Type
  public $Rider; // Rider_Type
  public $KeyedValue; // KeyedValue_Type
  public $AnnuityUSA; // AnnuityUSA_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AnnuityProduct_Type {
  public $PremType; // OLI_LU_ANNPREM
  public $PayoutType; // OLI_LU_ANNPAYOUT
  public $RateBasedOn; // OLI_LU_RATEBASEDON
  public $NewMoneyAllocationRule; // OLI_LU_ALLOCATIONOPTION
  public $LoadingType; // OLI_LU_LOADINGTYPE
  public $LOIROAType; // OLI_LU_LOIROA
  public $AnnuitizationDateRequired; // OLI_LU_DATAREQ
  public $MaxNumPayoutsAtIssue; // integer
  public $MedicalUnderwriting; // OLI_LU_MEDUW
  public $DeathBenefitsBasedOn; // OLI_LU_PARTICROLE
  public $IncomePayoutProductOption; // IncomePayoutProductOption_Type
  public $FeatureProduct; // FeatureProduct_Type
  public $FeatureTransactionProduct; // FeatureTransactionProduct_Type
  public $AnnuitizationDateRestriction; // AnnuitizationDateRestriction_Type
  public $RMDCalcMethInfo; // RMDCalcMethInfo_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AnnuityProductExclude_Type {
  public $AnnuityProductExcludeKey; // PERSISTKEY
  public $AnnuityProductExcludeSysKey; // SYSKEY
  public $FeatureCode; // string
  public $ProductCode; // string
  public $EffDate; // date
  public $ExpDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AnnuityUSA_Type {
  public $PreTEFRACostBasis; // decimal
  public $PostTEFRACostBasisAmt; // decimal
  public $TotalCostBasis; // decimal
  public $Amount1035; // decimal
  public $Basis1035; // decimal
  public $Internal1035; // OLI_LU_BOOLEAN
  public $TaxGrandfatheredType; // OLI_LU_TAXTYPE
  public $ERISAInd; // OLI_LU_BOOLEAN
  public $Exchange1035Ind; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AnswerChoice_Type {
  public $AnswerChoiceKey; // PERSISTKEY
  public $AnswerChoiceSysKey; // SYSKEY
  public $AnswerChoiceIdent; // string
  public $AnswerChoiceText; // string
  public $AnswerChoiceType; // OLI_LU_ANSWERCHOICE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ApplicationInfo_Type {
  public $HOAssignedAppNumber; // string
  public $TrackingID; // string
  public $TrackingIDVendorCode; // string
  public $HOAppFormNumber; // string
  public $ApplicationType; // OLI_LU_APPTYPE
  public $ApplicationJurisdiction; // OLI_LU_STATE
  public $ApplicationCounty; // string
  public $ApplicationCountry; // OLI_LU_NATION
  public $Territory; // string
  public $FormalAppInd; // OLI_LU_BOOLEAN
  public $CounterOfferOK; // OLI_LU_BOOLEAN
  public $SignedDate; // date
  public $SubmissionDate; // date
  public $SubmissionTime; // time
  public $SubmissionType; // OLI_LU_APPSUBMITTYPE
  public $ApplicationCollectionDate; // date
  public $HOReceiptDate; // date
  public $CarrierInputDate; // date
  public $ResubmitDate; // date
  public $CaseRewriteDate; // date
  public $HOCompletionDate; // date
  public $RequestedIssueDate; // date
  public $HOPolicyMailDate; // date
  public $HOPolicyRemailDate; // date
  public $PlacementEndDate; // date
  public $AgentCWADate; // date
  public $HOCWADate; // date
  public $PolicyDeliveryReceiptDate; // date
  public $TIASignedDate; // date
  public $AppRequestDate; // date
  public $InitialBillToDate; // date
  public $RequestedPolDate; // date
  public $CWAAmt; // decimal
  public $TotalCWAAmt; // decimal
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $PremBalDue; // decimal
  public $MaxRiskAmt; // decimal
  public $CaseOrgCodeFunction; // OLI_LU_ORGFUNCT
  public $CaseOrgCode; // string
  public $CaseLocationDate; // date
  public $AppProposedInsuredSignatureOK; // OLI_LU_BOOLEAN
  public $AppOwnerSignatureOK; // OLI_LU_BOOLEAN
  public $AppWritingAgentSignatureOK; // OLI_LU_BOOLEAN
  public $BlanketAuthorizationInd; // OLI_LU_BOOLEAN
  public $DefaultEnrollmentInd; // OLI_LU_BOOLEAN
  public $PrefLanguage; // OLI_LU_CLIENTLANGUAGES
  public $NBContactName; // string
  public $HOUnderwriterName; // string
  public $LastUnderwritingActivityDate; // date
  public $LastUnderwritingActivityTime; // time
  public $AdditionalInd; // OLI_LU_BOOLEAN
  public $AlternateInd; // OLI_LU_BOOLEAN
  public $ClientMaterialsInd; // OLI_LU_BOOLEAN
  public $ConsumerInfoInd; // OLI_LU_BOOLEAN
  public $DisclosureInd; // OLI_LU_BOOLEAN
  public $HIVConsentAuthInd; // OLI_LU_BOOLEAN
  public $HIVTestedInd; // OLI_LU_BOOLEAN
  public $HomeOfficePurchaseInd; // OLI_LU_BOOLEAN
  public $ReplacementInd; // OLI_LU_BOOLEAN
  public $SalesMaterialInd; // OLI_LU_BOOLEAN
  public $SuitabiltyPerformedInd; // OLI_LU_BOOLEAN
  public $SuitabilityInd; // OLI_LU_BOOLEAN
  public $ApplicationSignatureType; // OLI_LU_SIGNREQUIRED
  public $FundingDisclosureInd; // OLI_LU_BOOLEAN
  public $ReplacementReason; // string
  public $ProducerReplacementDisclosureInd; // OLI_LU_BOOLEAN
  public $ProducerReplacementAppropriatenessInd; // OLI_LU_BOOLEAN
  public $UserCode; // string
  public $AgentRelatedInd; // OLI_LU_BOOLEAN
  public $IllustrationConfirmationNum; // string
  public $IllustrationProvidedInd; // OLI_LU_BOOLEAN
  public $BackDateType; // OLI_LU_BACKDATE
  public $QuotedPremiumAmt; // decimal
  public $HOAppFormType; // OLI_LU_ATTACHMENTTYPE
  public $ApplicationOrigin; // OLI_LU_APPORIGIN
  public $QuotedPremiumMode; // OLI_LU_PAYMODE
  public $DistributorReceiptDate; // date
  public $ReqPolicyDeliveryMethod; // OLI_LU_POLDELMETHOD
  public $ApplicationCountyTC; // OLI_LU_COUNTY
  public $CreditCardOffered; // OLI_LU_BOOLEAN
  public $ContractSitusDiffersInd; // OLI_LU_BOOLEAN
  public $ContractSitusReasonCode; // OLI_SITUS_REASONCODE
  public $CashOnDeliveryInd; // OLI_LU_BOOLEAN
  public $AnticipatedEnrollmentDate; // date
  public $QuestionsFromCarrierDueDate; // date
  public $ProposalDueDate; // date
  public $AnticipatedClientIntenDate; // date
  public $ApplicationSignedState; // OLI_LU_STATE
  public $RequestedPresentationDate; // date
  public $ProposalDueTime; // time
  public $ApplicationCollectionTime; // time
  public $AppPackageType; // OLI_LU_APPPACKAGE
  public $SolicitationDate; // date
  public $OrderSolicitationInd; // OLI_LU_BOOLEAN
  public $AppAcceptablyCompletedInd; // OLI_LU_BOOLEAN
  public $InsuredImpairmentInd; // OLI_LU_BOOLEAN
  public $InfoTrueCompleteInd; // OLI_LU_BOOLEAN
  public $LastMaintenanceActivityDate; // date
  public $RequestedPolicyDateReason; // OLI_LU_RQSTPOLDTREASON
  public $SignatureInfo; // SignatureInfo_Type
  public $IdentityVerification; // IdentityVerification_Type
  public $Interview; // Interview_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $CasePartyID; // IDREF
  public $ReqPolicyDeliverToPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ApptCounty_Type {
  public $ApptCountyTC; // OLI_LU_COUNTY
}

class Arrangement_Type {
  public $ArrangementKey; // PERSISTKEY
  public $ArrangementSysKey; // SYSKEY
  public $ReferenceNo; // string
  public $ProductCode; // string
  public $ArrMode; // OLI_LU_PAYMODE
  public $ArrType; // OLI_LU_ARRTYPE
  public $ArrSubType; // OLI_LU_ARRSUBTYPE
  public $ArrStatus; // OLI_LU_HOLDSTAT
  public $NextActivityDate; // date
  public $StartDate; // date
  public $DayOfMonth; // integer
  public $BusinessDayOfMonth; // OLI_LU_ALLOWEDDAY
  public $EndDate; // date
  public $RestartDate; // date
  public $NumOfModalOccurrences; // integer
  public $ModalAmt; // decimal
  public $ModalPct; // double
  public $WithholdingOption; // OLI_LU_TAXLOCATION
  public $FedWithholdingCalcMethod; // OLI_LU_WITHCALCMTH
  public $FedWithholdingOverridePct; // double
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $CommissionRate; // double
  public $VariancePercent; // double
  public $ThresholdAmt; // decimal
  public $ArrCostBasisAdj; // decimal
  public $MarketValAdjustInd; // OLI_LU_BOOLEAN
  public $MarketValAdjustAmt; // decimal
  public $QualifiedDistInd; // OLI_LU_BOOLEAN
  public $SurrenderChargeAmt; // decimal
  public $TotalAmt; // decimal
  public $PlanName = 'Anna'; // string
  public $TimingBasis; // OLI_LU_STMTBASIS
  public $AdministrativeTransaction; // OLI_LU_TRANS_TYPE_CODES
  public $MaxDisbursementAmt; // decimal
  public $MaxDisbursementPct; // decimal
  public $StartMonth; // integer
  public $LastActivityAmt; // decimal
  public $LastActivityDate; // date
  public $RMDTaxRule; // OLI_LU_TAXRULE
  public $SourceTransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $DestTransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $UserCode; // string
  public $FeatureName; // string
  public $RqstPaymentDeliveryMethod; // OLI_LU_PAYDELMETHOD
  public $AmountQualifier; // OLI_LU_AMOUNTTYPE
  public $ArrSource; // ArrSource_Type
  public $ArrDestination; // ArrDestination_Type
  public $TaxWithholding; // TaxWithholding_Type
  public $Fee; // Fee_Type
  public $AmountProduct; // AmountProduct_Type
  public $AdditionalArrClassification; // AdditionalArrClassification_Type
  public $SourceOfFundsInfo; // SourceOfFundsInfo_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ArrangementOptProduct_Type {
  public $ArrangementOptProductKey; // PERSISTKEY
  public $ArrangementOptProductSysKey; // SYSKEY
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $ProductCode; // string
  public $Name; // string
  public $Description; // string
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $NoNewMoneyDate; // date
  public $MinNumSourceInvestments; // integer
  public $MinNumDestinationInvestments; // integer
  public $MaxNumSourceInvestProd; // integer
  public $MaxNumDestinationInvestProd; // integer
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MinIssueAgeOwner; // integer
  public $MaxIssueAgeOwner; // integer
  public $MinContractAmt; // decimal
  public $MaxContractAmt; // decimal
  public $MinRemainingBalanceAmt; // decimal
  public $MinTransactionAmt; // decimal
  public $MaxTransactionAmt; // decimal
  public $MinTotalAmt; // decimal
  public $MinTerm; // integer
  public $MaxTerm; // integer
  public $TermQualifier; // OLI_LU_PAYMODE
  public $MinPct; // double
  public $MaxPct; // double
  public $Sequence; // integer
  public $MaxNumInstances; // integer
  public $InitialWaitingPeriod; // integer
  public $InitialWaitingPeriodQualifier; // OLI_LU_MEASUNITS
  public $SubsequentWaitingPeriod; // integer
  public $SubsequentWaitPeriodQualifier; // OLI_LU_MEASUNITS
  public $ArrSubType; // OLI_LU_ARRSUBTYPE
  public $AmountQualifier; // OLI_LU_AMOUNTTYPE
  public $ConflictObjectInfo; // ConflictObjectInfo_Type
  public $RequisiteObjectInfo; // RequisiteObjectInfo_Type
  public $OccurrenceLimitInfo; // OccurrenceLimitInfo_Type
  public $AgeAmtProduct; // AgeAmtProduct_Type
  public $SourceInvestProduct; // SourceInvestProduct_Type
  public $DestInvestProduct; // DestInvestProduct_Type
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $NumInvestProduct; // NumInvestProduct_Type
  public $AllocTypeProduct; // AllocTypeProduct_Type
  public $PaymentModeMethProduct; // PaymentModeMethProduct_Type
  public $Fee; // Fee_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $AdditionalArrClassification; // AdditionalArrClassification_Type
  public $TaxWithholdingProduct; // TaxWithholdingProduct_Type
  public $SourceOfFundsCC; // SourceOfFundsCC_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ArrangementProduct_Type {
  public $ArrangementProductKey; // PERSISTKEY
  public $ArrangementProductSysKey; // SYSKEY
  public $SelectionRule; // OLI_LU_RIDERSELECTRULE
  public $ArrType; // OLI_LU_ARRTYPE
  public $Name; // string
  public $Description; // string
  public $Sequence; // integer
  public $ProductCode; // string
  public $MaxNumInstances; // integer
  public $ArrangementOptProduct; // ArrangementOptProduct_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ArrDestination_Type {
  public $ArrDestinationKey; // PERSISTKEY
  public $ArrDestinationSysKey; // SYSKEY
  public $AccountNumber; // string
  public $PolNumber; // string
  public $TransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $TransferAmt; // decimal
  public $TransferUnits; // double
  public $TransferPct; // double
  public $SubAcctName; // string
  public $AnnualIndex; // double
  public $AllocChargeAmt; // decimal
  public $PayeeRelationRoleCode; // OLI_LU_PARTICROLE
  public $CheckNo; // string
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $CreateCheckInd; // OLI_LU_BOOLEAN
  public $ArrDestination; // ArrDestination_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $HoldingID; // IDREF
  public $SubAcctID; // IDREF
  public $PaymentPartyID; // IDREF
  public $BankingInfoID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ArrSource_Type {
  public $ArrSourceKey; // PERSISTKEY
  public $ArrSourceSysKey; // SYSKEY
  public $TransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $TransferAmt; // decimal
  public $TransferUnits; // double
  public $TransferPct; // double
  public $SubAcctName; // string
  public $AnnualIndex; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $SubAcctID; // IDREF
  public $PaymentPartyID; // IDREF
  public $BankingInfoID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $HoldingID; // IDREF
}

class AssociatedObjectInfo_Type {
  public $AssociatedObjectInfoKey; // PERSISTKEY
  public $AssociatedObjectInfoSysKey; // SYSKEY
  public $ObjectType; // OLI_LU_OBJECTTYPE
  public $KeyFromRelatedObject; // PERSISTKEY
  public $RelatedRefID; // string
  public $RelatedRefIDType; // OLI_LU_IDREFTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $AssociatedObjectRef; // IDREF
}

class AssociatedResponseData_Type {
  public $AssociatedResponseDataKey; // PERSISTKEY
  public $AssociatedResponseDataSysKey; // SYSKEY
  public $TopLevelObjectType; // OLI_LU_OBJECTTYPE
  public $ActualObjectType; // OLI_LU_OBJECTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $TopLevelObjectID; // IDREF
  public $ActualObjectID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class AssocParticipantObjectInfo_Type {
  public $AssocParticipantObjectInfoKey; // PERSISTKEY
  public $AssocParticipantObjectInfoSysKey; // SYSKEY
  public $KeyFromRelatedObject; // PERSISTKEY
  public $RelatedRefID; // string
  public $RelatedRefIDType; // OLI_LU_IDREFTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $AssociatedObjectRef; // IDREF
}

class AssumedInterestRateCC_Type {
  public $AssumedInterestRate; // double
}

class Attachment_Type {
  public $AttachmentKey; // PERSISTKEY
  public $AttachmentSysKey; // SYSKEY
  public $DateCreated; // date
  public $UserCode; // string
  public $UserName; // string
  public $AttachmentBasicType; // OLI_LU_BASICATTACHMENTTYPE
  public $AttachmentSource; // string
  public $Description; // string
  public $AttachmentData; // OLI_LU_VARIANT
  public $AttachmentReference; // AttachmentReference_Type
  public $AttachmentData64Binary; // base64Binary
  public $AttachmentType; // OLI_LU_ATTACHMENTTYPE
  public $MimeType; // string
  public $MimeTypeTC; // OLI_LU_MIMETYPE
  public $TransferEncodingTypeString; // string
  public $TransferEncodingTypeTC; // OLI_LU_ENCODETYPE
  public $ImageType; // OLI_LU_IMAGEFORMAT
  public $AttachmentLocation; // OLI_LU_ATTACHLOCATION
  public $LastUpdate; // date
  public $LastUpdateTime; // time
  public $FollowUpDate; // date
  public $FollowUpTime; // time
  public $ImageSubmissionType; // OLI_LU_APPSUBMITTYPE
  public $Priority; // OLI_LU_PRIORITY
  public $PurgeDate; // date
  public $PurgeTime; // time
  public $ArchiveNumber; // string
  public $ArchiveRefNumber; // string
  public $AttachmentCategoryTC; // OLI_LU_ATTACHMENTCATEGORYTC
  public $FileName; // string
  public $Sequence; // integer
  public $ReceivedDate; // date
  public $AttachmentHashValue; // string
  public $AttachmentHashType; // OLI_LU_HASHTYPE
  public $OriginatingSourceType; // OLI_LU_ORIGSOURCE
  public $CreationTime; // time
  public $PageCount; // integer
  public $SignatureInfo; // SignatureInfo_Type
  public $AttachmentAnomaly; // AttachmentAnomaly_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AttachmentAnomaly_Type {
  public $AttachmentAnomalyKey; // PERSISTKEY
  public $AttachmentAnomalySysKey; // SYSKEY
  public $Description; // string
  public $AttachmentAnomalyType; // OLI_LU_ATTANOMALY
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AttachmentReference_Type {
  public $AttachmentID; // IDREF
}

class AuditElement_Type {
  public $AuditElementKey; // PERSISTKEY
  public $AuditElementSysKey; // SYSKEY
  public $Name; // string
  public $XPathSelector; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AuditEntry_Type {
  public $AuditEntryKey; // PERSISTKEY
  public $AuditEntrySysKey; // SYSKEY
  public $AuditEntryIdent; // string
  public $ACORDVendorCode; // string
  public $StartDate; // date
  public $StartTime; // time
  public $EndDate; // date
  public $EndTime; // time
  public $Name; // string
  public $Description; // string
  public $AuditTransSummation; // AuditTransSummation_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $OwnerPartyID; // IDREF
}

class AuditTransaction_Type {
  public $AuditTransactionKey; // PERSISTKEY
  public $AuditTransactionSysKey; // SYSKEY
  public $TransDirection; // string
  public $XPathSelector; // string
  public $TransType; // OLI_LU_TRANS_TYPE_CODES
  public $TransSubType; // TRANS_SUBTYPE_CODES
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AuditTransSummation_Type {
  public $AuditTransSummationKey; // PERSISTKEY
  public $AuditTransSummationSysKey; // SYSKEY
  public $AuditTotalType; // OLI_LU_AUDTOT
  public $AuditTotal; // string
  public $Name; // string
  public $Description; // string
  public $AuditTotalCode; // string
  public $AuditElement; // AuditElement_Type
  public $AuditTransaction; // AuditTransaction_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Authorization_Type {
  public $AuthorizationKey; // PERSISTKEY
  public $AuthorizationSysKey; // SYSKEY
  public $BusinessMethodCC; // BusinessMethodCC_Type
  public $AuthorizationEntityCC; // AuthorizationEntityCC_Type
  public $AuthorizationTransaction; // AuthorizationTransaction_Type
  public $AuthorizationSignatureReqInd; // OLI_LU_BOOLEAN
  public $SignatureInfo; // SignatureInfo_Type
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PartyID; // IDREF
}

class AuthorizationEntityCC_Type {
  public $AuthorizationEntity; // OLI_LU_REL
  public $AuthorizeAllAgentsInd; // OLI_LU_BOOLEAN
  public $AuthorizeAllOwnerDesigneesInd; // OLI_LU_BOOLEAN
}

class AuthorizationTransaction_Type {
  public $AuthorizationTransactionKey; // PERSISTKEY
  public $AuthorizationTransactionSysKey; // SYSKEY
  public $AuthorizationMappingCodeInd; // OLI_LU_BOOLEAN
  public $AdministrativeTransaction; // OLI_LU_TRANS_TYPE_CODES
  public $AdministrativeTransactionSubType; // TRANS_SUBTYPE_CODES
  public $FinActivityType; // OLI_LU_FINACTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AuthorizedSignatory_Type {
  public $AuthorizedSignatoryKey; // PERSISTKEY
  public $AuthorizedSignatorySysKey; // SYSKEY
  public $SignatoryName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Availability_Type {
  public $AvailabilityKey; // PERSISTKEY
  public $AvailabilitySysKey; // SYSKEY
  public $AvailabilityType; // OLI_LU_AVAILABILITY
  public $AvailableDay; // OLI_LU_DAY
  public $StartDate; // date
  public $EndDate; // date
  public $StartTime; // time
  public $EndTime; // time
  public $AvailabilityContactPoint; // AvailabilityContactPoint_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AvailabilityContactPoint_Type {
  public $AvailabilityContactPointKey; // PERSISTKEY
  public $AvailabilityContactPointSysKey; // SYSKEY
  public $ContactPointObjectType; // OLI_LU_OBJECTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $ContactPointID; // IDREF
}

class AviationExp_Type {
  public $AviationExpKey; // PERSISTKEY
  public $AviationExpSysKey; // SYSKEY
  public $IFRInd; // OLI_LU_BOOLEAN
  public $AviationType; // OLI_LU_AVIATIONTYPE
  public $StudentInd; // OLI_LU_BOOLEAN
  public $AircraftType; // OLI_LU_AIRCRAFTTYPE
  public $AircraftSeries; // string
  public $JobAboardAircraft; // OLI_LU_AIRCRAFTJOB
  public $FlyingPurpose; // OLI_LU_FLYINGPURPOSE
  public $HighestQualificationLevel; // OLI_LU_QUALLEVEL
  public $HighestQualificationLevelDesc; // string
  public $ProposedQualificationLevelInd; // OLI_LU_BOOLEAN
  public $DateOfQualification; // date
  public $QualificationPartialDate; // PARTIAL_DATE_TYPE
  public $RenewalInd; // OLI_LU_BOOLEAN
  public $ForeignFlightInd; // OLI_LU_BOOLEAN
  public $GroundedInd; // OLI_LU_BOOLEAN
  public $MedClassWaiverInd; // OLI_LU_BOOLEAN
  public $RevokedInd; // OLI_LU_BOOLEAN
  public $ExpectedForeignFlightYr; // gYear
  public $PreviousForeignFlightYr; // integer
  public $MedExamClass; // OLI_LU_MEDEXAM
  public $MedExamClassDesc; // string
  public $MedCertInd; // OLI_LU_BOOLEAN
  public $MedCertOrigDate; // date
  public $MedCertOrigPartialDate; // PARTIAL_DATE_TYPE
  public $NumberOfHoursLastYear; // integer
  public $NumberOfHoursNextYear; // integer
  public $NumOfHoursInstructPerYear; // integer
  public $USCertificatedInd; // OLI_LU_BOOLEAN
  public $AirmanCertificateInd; // OLI_LU_BOOLEAN
  public $NumOfHoursLast2Year; // integer
  public $TotalNumOfHoursFlown; // integer
  public $FutureFlyingDiffPurposeInd; // OLI_LU_BOOLEAN
  public $FutureFlyingDiffAircraftInd; // OLI_LU_BOOLEAN
  public $SpecificJobAboardAircraft; // string
  public $NonDomesticAirCarrierInd; // OLI_LU_BOOLEAN
  public $ValidAircraftInsuranceInd; // OLI_LU_BOOLEAN
  public $CraftCertificateType; // OLI_LU_CRAFTCERT
  public $CraftCertificateTypeDesc; // string
  public $BranchOfService; // OLI_LU_MILITARYORGTYPE
  public $Applicability; // OLI_LU_APPLICABILITY
  public $CertificateRatingType; // CertificateRatingType_Type
  public $MedicalCertRestriction; // MedicalCertRestriction_Type
  public $CertificateCraftType; // CertificateCraftType_Type
  public $Aircraft; // Aircraft_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AviationGuideline_Type {
  public $AviationGuidelineKey; // PERSISTKEY
  public $AviationGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $AviationType; // OLI_LU_AVIATIONTYPE
  public $MinAge; // integer
  public $MaxAge; // integer
  public $MinQualificationLevel; // OLI_LU_QUALLEVEL
  public $MinNumHoursPerYear; // double
  public $MaxNumHoursPerYear; // double
  public $MinTotalHoursFlown; // double
  public $MinSoloHoursFlown; // double
  public $ForeignFlightInd; // OLI_LU_BOOLEAN
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AviationGuidelines_Type {
  public $AviationGuidelinesKey; // PERSISTKEY
  public $AviationGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $AviationGuideline; // AviationGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AvocationGuideline_Type {
  public $AvocationGuidelineKey; // PERSISTKEY
  public $AvocationGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $MaxNumberOccurrences; // integer
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $AvocationInfo; // AvocationInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AvocationGuidelines_Type {
  public $AvocationGuidelinesKey; // PERSISTKEY
  public $AvocationGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $AvocationGuideline; // AvocationGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class AvocationInfo_Type {
  public $AvocationInfoKey; // PERSISTKEY
  public $AvocationInfoSysKey; // SYSKEY
  public $AvocationType; // OLI_LU_LIFEACTIVITYTYPE
  public $AvocationDetails; // string
  public $MaxAvocationValue; // string
  public $MinAvocationValue; // string
  public $AvocationValueQualifier; // OLI_LU_MEASUNITS
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Axis_Type {
  public $Axis; // Axis_Type
  public $Y; // Y_Type
  public $Extension; // Extension_Type
  public $T; // string
  public $DT; // date
  public $AxisDefID; // IDREF
}

class AxisDef_Type {
  public $ScaleType; // SCALETYPE_TYPE
  public $ScaleSubType; // SCALESUBTYPE_TYPE
  public $BandingType; // BANDINGTYPE_TYPE
  public $AxisName; // string
  public $DimensionSequence; // integer
  public $MinScaleDate; // string
  public $MaxScaleDate; // string
  public $MinScaleValue; // string
  public $MaxScaleValue; // string
  public $Increment; // integer
  public $Mode; // OLI_LU_PAYMODE
  public $Continuous; // OLI_LU_BOOLEAN
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $TimingOption; // TC_TIMINGOPTION
  public $EnumeratedValue; // EnumeratedValue_Type
  public $Extension; // Extension_Type
  public $id; // ID
}

class BallooningExp_Type {
  public $BallooningExpKey; // PERSISTKEY
  public $BallooningExpSysKey; // SYSKEY
  public $LandInd; // OLI_LU_BOOLEAN
  public $InlandWaterInd; // OLI_LU_BOOLEAN
  public $RemoteTerrainInd; // OLI_LU_BOOLEAN
  public $MountainsInd; // OLI_LU_BOOLEAN
  public $OceanInd; // OLI_LU_BOOLEAN
  public $BalloonType; // OLI_LU_BALLOONTYPE
  public $NumberHours; // integer
  public $CraftAssembly; // OLI_LU_ASSEMBLYTYPE
  public $ExperimentalEquipmentInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Banking_Type {
  public $BankingKey; // PERSISTKEY
  public $BankingSysKey; // SYSKEY
  public $CreditDebitType; // OLI_LU_ACCTDBCRTYPE
  public $BankAcctType; // OLI_LU_BANKACCTTYPE
  public $CreditCardType; // OLI_LU_CREDCARDTYPE
  public $CreditCardExpDate; // gYearMonth
  public $AccountNumber; // string
  public $RoutingNum; // string
  public $AcctHolderName; // string
  public $BankName; // string
  public $BankBranchName; // string
  public $CardVerificationNum; // string
  public $SurrenderChargeAmt; // decimal
  public $AccountToken; // string
  public $AccountVerificationNumber; // string
  public $AuthorizedSignatory; // AuthorizedSignatory_Type
  public $PriorName; // PriorName_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $FinancialInstitutionPartyID; // IDREF
  public $AppliesToPartyID; // IDREF
  public $MailingAddressID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class Bankruptcy_Type {
  public $BankruptcyKey; // PERSISTKEY
  public $BankruptcySysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $BankruptcyReason; // string
  public $BankruptcyStatus; // OLI_LU_BANKRUPTCYSTATUS
  public $BankruptcyStatusDate; // date
  public $BankruptcyStatusPartialDate; // PARTIAL_DATE_TYPE
  public $ChapterFiled; // OLI_LU_BANKRUPTCYCHAPTER
  public $FilingDate; // date
  public $FilingPartialDate; // PARTIAL_DATE_TYPE
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BeneficiaryIncomeOptionInfo_Type {
  public $BeneficiaryIncomeOptionInfoKey; // PERSISTKEY
  public $BeneficiaryIncomeOptionInfoSysKey; // SYSKEY
  public $BeneficiaryPaymentType; // OLI_LU_BENEPAYMENTTYPE
  public $PaymentAmt; // decimal
  public $PaymentMode; // OLI_LU_PAYMODE
  public $Duration; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BenefitChangeAllowed_Type {
  public $BenefitChangeAllowedKey; // PERSISTKEY
  public $BenefitChangeAllowedSysKey; // SYSKEY
  public $ProductCode; // string
  public $AllowedPercent; // AllowedPercent_Type
  public $AllowedChangeMode; // AllowedChangeMode_Type
  public $AllowedIndexInfo; // AllowedIndexInfo_Type
  public $ConflictObjectInfo; // ConflictObjectInfo_Type
  public $RequisiteObjectInfo; // RequisiteObjectInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BenefitLimit_Type {
  public $BenefitLimitKey; // PERSISTKEY
  public $BenefitLimitSysKey; // SYSKEY
  public $MaxBenefitAmt; // decimal
  public $PaymentMode; // OLI_LU_PAYMODE
  public $MaxBenefitDuration; // integer
  public $MaxBenefitDurPeriod; // OLI_LU_BENEPERIOD
  public $ClaimedAmt; // decimal
  public $MinBenefitAmt; // decimal
  public $LimitVariation; // LimitVariation_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BenefitLimitOption_Type {
  public $BenefitLimitOptionKey; // PERSISTKEY
  public $BenefitLimitOptionSysKey; // SYSKEY
  public $BenefitLimitType; // OLI_LU_BENEFITLIMIT
  public $BenefitLimitAmt; // decimal
  public $BenefitMode; // OLI_LU_PAYMODE
  public $BenefitPeriod; // OLI_LU_BENEPERIOD
  public $MaxBenefitDuration; // integer
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $ProductCode; // string
  public $MinIssueAmt; // decimal
  public $MaxIssueAmt; // decimal
  public $Sequence; // integer
  public $ConflictObjectInfo; // ConflictObjectInfo_Type
  public $RequisiteObjectInfo; // RequisiteObjectInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BenePayoutTypeAllowed_Type {
  public $BenePayoutTypeAllowedKey; // PERSISTKEY
  public $BenePayoutTypeAllowedSysKey; // SYSKEY
  public $BenePayoutType; // OLI_LU_BENEFICIARYSHAREMETHOD
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BenePeriodAccOption_Type {
  public $BenePeriodAccOptionKey; // PERSISTKEY
  public $BenePeriodAccOptionSysKey; // SYSKEY
  public $BenefitPeriodAcc; // OLI_LU_BENEPERIOD
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BenePeriodSickOption_Type {
  public $BenePeriodSickOptionKey; // PERSISTKEY
  public $BenePeriodSickOptionSysKey; // SYSKEY
  public $BenefitPeriodSick; // OLI_LU_BENEPERIOD
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BestDayToCallCC_Type {
  public $BestDayToCall; // OLI_LU_DAY
}

class BillingDetail_Type {
  public $BillingDetailKey; // PERSISTKEY
  public $BillingDetailSysKey; // SYSKEY
  public $CarrierCode; // string
  public $PolNumber; // string
  public $ProductCode; // string
  public $PaymentAmt; // decimal
  public $PaymentMode; // OLI_LU_PAYMODE
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $OwnerName; // string
  public $BillingType; // OLI_LU_NOTICETYPE
  public $BillingSubtype; // OLI_LU_BILLSUBTYPE
  public $BillingAmtType; // OLI_LU_BILLAMTTYPE
  public $SuspenseInd; // OLI_LU_BOOLEAN
  public $AnnivSummaryInd; // OLI_LU_BOOLEAN
  public $BackBillInd; // OLI_LU_BOOLEAN
  public $AdvancedAnniversaryDateInd; // OLI_LU_BOOLEAN
  public $BilledToDate; // date
  public $NumMonthsBilled; // integer
  public $ParticipatingType; // OLI_LU_PARTYPE
  public $DividendReductionAmt; // decimal
  public $NonDividendReductionAmt; // decimal
  public $PastDueBalanceAmt; // decimal
  public $InvoiceDetail; // InvoiceDetail_Type
  public $ReferenceNo; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $HoldingID; // IDREF
  public $OwnerPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $RequirementInfoID; // IDREF
}

class BillingStatement_Type {
  public $BillingStatementKey; // PERSISTKEY
  public $BillingStatementSysKey; // SYSKEY
  public $PaymentRemitterName; // string
  public $BillingPayPoint; // string
  public $BranchOfService; // OLI_LU_MILITARYORGTYPE
  public $PaymentAmt; // decimal
  public $PreviousBalanceAmt; // decimal
  public $NewBalanceAmt; // decimal
  public $PaymentMode; // OLI_LU_PAYMODE
  public $PaymentDueDate; // date
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $PaymentTermsDesc; // string
  public $AccountNumber; // string
  public $CustomerAccountNumber; // string
  public $RoutingNumber; // string
  public $AcctHolderName; // string
  public $CreditCardExpDate; // gYearMonth
  public $CreditCardType; // OLI_LU_CREDCARDTYPE
  public $BankAcctType; // OLI_LU_BANKACCTTYPE
  public $BankBranchName; // string
  public $PastDueBalanceAmt; // decimal
  public $OCRLine; // string
  public $BillingDetail; // BillingDetail_Type
  public $ReconciliationSummary; // ReconciliationSummary_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $RemitterPartyID; // IDREF
  public $BankPartyID; // IDREF
  public $BankingHoldingID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class BloodPressureGuideline_Type {
  public $BloodPressureGuidelineKey; // PERSISTKEY
  public $BloodPressureGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $MinAge; // integer
  public $MaxAge; // integer
  public $MaxSystolicBPReading; // integer
  public $MinSystolicBPReading; // integer
  public $MaxDiastolicBPReading; // integer
  public $MinDiastolicBPReading; // integer
  public $TreatmentGuidelineType; // OLI_LU_TREATGUIDE
  public $GuidelineDescription; // string
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BloodPressureGuidelines_Type {
  public $BloodPressureGuidelinesKey; // PERSISTKEY
  public $BloodPressureGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $BloodPressureGuideline; // BloodPressureGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Breakpoint_Type {
  public $BreakpointKey; // PERSISTKEY
  public $BreakpointSysKey; // SYSKEY
  public $LOIROAType; // OLI_LU_LOIROA
  public $RangeLowAmt; // decimal
  public $RangeHighAmt; // decimal
  public $RangeRateBP; // double
  public $RangeRateType; // OLI_LU_RANGERATETYPE
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BusinessContact_Type {
  public $BusinessContactKey; // PERSISTKEY
  public $BusinessContactSysKey; // SYSKEY
  public $ContactName; // string
  public $ContactDesc; // string
  public $PrefContact; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $ContactID; // IDREF
}

class BusinessInsPurposeInfo_Type {
  public $BusinessInsPurposeInfoKey; // PERSISTKEY
  public $BusinessInsPurposeInfoSysKey; // SYSKEY
  public $BusInsPurposeType; // OLI_LU_NEED
  public $BuySellAgreementInd; // OLI_LU_BOOLEAN
  public $MultiPartyCoveredInd; // OLI_LU_BOOLEAN
  public $MultiPartyCoveredDesc; // string
  public $KeyManDesc; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BusinessMethodCC_Type {
  public $BusinessMethod; // OLI_LU_APPSUBMITTYPE
}

class BusinessProcessAllowed_Type {
  public $BusinessProcessAllowedKey; // PERSISTKEY
  public $BusinessProcessAllowedSysKey; // SYSKEY
  public $AdministrativeTransaction; // OLI_LU_TRANS_TYPE_CODES
  public $Description; // string
  public $BusinessProcessCC; // BusinessProcessCC_Type
  public $BusinessMethodCC; // BusinessMethodCC_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class BusinessProcessCC_Type {
  public $BusinessProcess; // OLI_LU_BUSPROCESS
}

class BusinessProcessDef_Type {
  public $BusinessProcessDefKey; // PERSISTKEY
  public $BusinessProcessDefSysKey; // SYSKEY
  public $ProcessType; // OLI_LU_PROCESSTYPES
  public $ProcessName; // string
  public $ProcessDesc; // string
  public $ProcessVersion; // ProcessVersion_Type
  public $BusinessContact; // BusinessContact_Type
  public $BusinessService; // BusinessService_Type
  public $LineOfAuthority; // LineOfAuthority_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $ProcessOrganizationID; // IDREF
}

class BusinessService_Type {
  public $BusinessServiceKey; // PERSISTKEY
  public $BusinessServiceSysKey; // SYSKEY
  public $ServiceStatus; // OLI_LU_SERVICESTATUS
  public $ServiceName; // string
  public $ServiceDesc; // string
  public $ServiceRequired; // OLI_LU_BOOLEAN
  public $ServiceRole; // OLI_LU_SERVICEROLE
  public $SpecificationName; // string
  public $SpecificationDescription; // string
  public $SpecificationSource; // string
  public $IntermediaryName; // string
  public $IntermediaryProviderID; // string
  public $IntermediaryDesc; // string
  public $ServiceParameter; // ServiceParameter_Type
  public $ServiceVersion; // ServiceVersion_Type
  public $ServiceProtocol; // ServiceProtocol_Type
  public $BusinessContact; // BusinessContact_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $IntermediaryID; // IDREF
}

class Campaign_Type {
  public $CampaignKey; // PERSISTKEY
  public $CampaignSysKey; // SYSKEY
  public $CampaignName; // string
  public $CampaignShortName; // string
  public $CampaignType; // OLI_LU_CAMPAIGNTYPE
  public $CampaignCode; // string
  public $CarrierCode; // string
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CardiacMurmur_Type {
  public $CardiacMurmurKey; // PERSISTKEY
  public $CardiacMurmurSysKey; // SYSKEY
  public $ConditionInd; // OLI_LU_BOOLEAN
  public $TransmittedInd; // OLI_LU_BOOLEAN
  public $IntensityGradeTC; // OLI_LU_CARDIACINT
  public $LocationTC; // OLI_LU_CARDIACLOC
  public $QualityTC; // OLI_LU_CARDIACQUAL
  public $TimingTC; // OLI_LU_CARDIACTIM
  public $AfterExerciseDesc; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class Carrier_Type {
  public $CarrierKey; // PERSISTKEY
  public $CarrierSysKey; // SYSKEY
  public $CarrierCode; // string
  public $CarrierForm; // OLI_LU_CARRIERFORM
  public $NAICCode; // string
  public $ReinsuranceNetworkIdent; // string
  public $DSTCarrierCode; // string
  public $PershingCarrierCode; // string
  public $NAICGroupCode; // string
  public $License; // License_Type
  public $RestrictOwnerJurisdiction; // RestrictOwnerJurisdiction_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CarrierAppointment_Type {
  public $CarrierAppointmentKey; // PERSISTKEY
  public $CarrierAppointmentSysKey; // SYSKEY
  public $CompanyProducerID; // string
  public $CompanyProducerIDSource; // OLI_LU_PRODUCERIDSOURCE
  public $CarrierAppointmentCode; // string
  public $CarrierAppointmentName; // string
  public $CarrierCode; // string
  public $CarrierName; // string
  public $ApptCountry; // OLI_LU_NATION
  public $ApptState; // OLI_LU_STATE
  public $EffDate; // date
  public $ExpDate; // date
  public $Duration; // integer
  public $CarrierApptTypeCode; // OLI_LU_PROTYPE
  public $CarrierApptStatus; // OLI_LU_PROSTAT
  public $Class; // string
  public $LineOfBusiness; // OLI_LU_LINEBUS
  public $LicenseProvisionTC; // OLI_LU_LICENPROV
  public $BackgroundCheckAuthorizationInd; // OLI_LU_BOOLEAN
  public $EmployeeInd; // OLI_LU_BOOLEAN
  public $EOWaiverU4SuppliedInd; // OLI_LU_BOOLEAN
  public $AppointmentCategory; // string
  public $CarrierApptStatusDate; // date
  public $CarrierApptStatusReason; // string
  public $QualOfficerOr3Way; // OLI_LU_QUALOFFOR3WAY
  public $UnderwritingPrivilegeType; // OLI_LU_UNDPRIV
  public $WorkStatusCode; // OLI_LU_WORKSTAT
  public $SolicitorType; // OLI_LU_SOLICITOR
  public $VestedType; // OLI_LU_VESTINGTYPE
  public $RenewalDate; // date
  public $ApptCounty; // ApptCounty_Type
  public $DistributionChannelCC; // DistributionChannelCC_Type
  public $DistributionAgreementInfo; // DistributionAgreementInfo_Type
  public $DistributionLevel; // DistributionLevel_Type
  public $LineOfAuthority; // LineOfAuthority_Type
  public $DistributionChannelInfo; // DistributionChannelInfo_Type
  public $RequirementInfo; // RequirementInfo_Type
  public $Fee; // Fee_Type
  public $ServiceModelContact; // ServiceModelContact_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $LicenseID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $AppointmentAddressID; // IDREF
  public $AgencyAffiliationID; // IDREF
  public $QualifyingOfficerID; // IDREF
}

class Case_Type {
  public $CaseKey; // PERSISTKEY
  public $CaseSysKey; // SYSKEY
  public $CaseType; // OLI_LU_CASETYPE
  public $CaseID; // string
  public $CarrierCode; // string
  public $CaseName; // string
  public $CaseStatus; // OLI_LU_CASESTAT
  public $CaseStatusDate; // date
  public $CaseModificationDate; // date
  public $StartDate; // date
  public $EndDate; // date
  public $NumHoldings; // integer
  public $RestrictionInfo; // RestrictionInfo_Type
  public $FinancialActivity; // FinancialActivity_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CashValueRate_Type {
  public $CashValueRateKey; // PERSISTKEY
  public $CashValueRateSysKey; // SYSKEY
  public $Description; // string
  public $MortalityAssumptionType; // TC_MORTASSUMPTION
  public $TableRef; // TableRef_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CauseOfDeath_Type {
  public $CauseOfDeathTC; // OLI_LU_MEDCOND
  public $CausePrecedence; // OLI_LU_PRECEDENCE
}

class CertificateCraftType_Type {
  public $CertificateCraftTypeKey; // PERSISTKEY
  public $CertificateCraftTypeSysKey; // SYSKEY
  public $CraftCertificateType; // OLI_LU_CRAFTCERT
  public $CraftCertificateTypeDesc; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CertificateRatingType_Type {
  public $CertificateRatingTypeCode; // OLI_LU_CERTRATE
  public $CertificateRatingTypeDesc; // string
}

class ChangeSubType_Type {
  public $ChangeSubTypeKey; // PERSISTKEY
  public $ChangeSubTypeSysKey; // SYSKEY
  public $ChangeTC; // OLI_LU_CHNGTYPE
  public $TranContentCode; // TRAN_CONTENT_CODES
  public $ChangeBasedOn; // OLI_LU_CHNGBASIS
  public $ElementName; // string
  public $ChangeComment; // string
  public $ChangeKey; // string
  public $OriginalObjectKey; // string
  public $ChangeObjectType; // OLI_LU_OBJECTTYPE
  public $OriginalObjectType; // OLI_LU_OBJECTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ChangeID; // IDREF
  public $OriginalObjectID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ChargePctSchedule_Type {
  public $ChargePctScheduleKey; // PERSISTKEY
  public $ChargePctScheduleSysKey; // SYSKEY
  public $Percentage; // double
  public $Duration; // integer
  public $DurQualifier; // OLI_LU_PAYMODE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ChestForcedMeasure_Type {
  public $MeasureUnits; // OLI_LU_MEASUREUNITS
  public $MeasureValue; // double
}

class ChestFullMeasure_Type {
  public $MeasureUnits; // OLI_LU_MEASUREUNITS
  public $MeasureValue; // double
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CholesterolGuideline_Type {
  public $CholesterolGuidelineKey; // PERSISTKEY
  public $CholesterolGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $Gender; // OLI_LU_GENDER
  public $MinTotalCholesterol; // integer
  public $MaxTotalCholesterol; // integer
  public $MaxCholesterolToHDLRatio; // double
  public $TreatmentGuidelineType; // OLI_LU_TREATGUIDE
  public $GuidelineDescription; // string
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CholesterolGuidelines_Type {
  public $CholesterolGuidelinesKey; // PERSISTKEY
  public $CholesterolGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $CholesterolGuideline; // CholesterolGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Claim_Type {
  public $ClaimKey; // PERSISTKEY
  public $ClaimSysKey; // SYSKEY
  public $HOClaimReferenceID; // string
  public $ActualObjectType; // OLI_LU_OBJECTTYPE
  public $LossReportDate; // date
  public $ClaimDateOfLoss; // date
  public $ClaimStatus; // OLI_LU_CLMSTAT
  public $ClaimStatusReason; // OLI_LU_CLAIMSTATREASON
  public $ClaimPaymentDate; // date
  public $DeathCertificateCertifiedDate; // date
  public $ForeignLossInd; // OLI_LU_BOOLEAN
  public $MannerofLoss; // OLI_LU_MANNERLOSS
  public $ClaimFinalizedDate; // date
  public $TotalCost; // decimal
  public $CaseID; // string
  public $AmountPaidToDate; // decimal
  public $ClaimFinalCost; // decimal
  public $ClaimFinalDuration; // integer
  public $ClaimFinalDecision; // string
  public $DurationUnitMeasure; // OLI_LU_MEASUNITS
  public $ClaimEstimate; // ClaimEstimate_Type
  public $Participant; // Participant_Type
  public $RequirementInfo; // RequirementInfo_Type
  public $ClaimMedConditionInfo; // ClaimMedConditionInfo_Type
  public $ClaimReview; // ClaimReview_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $MedicalTransport; // MedicalTransport_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $CaseIDREF; // IDREF
  public $PartyID; // IDREF
  public $ActualObjectID; // IDREF
  public $ParticipantObjectID; // IDREF
  public $ProviderPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ClaimEstimate_Type {
  public $ClaimEstimateKey; // PERSISTKEY
  public $ClaimEstimateSysKey; // SYSKEY
  public $EstType; // OLI_LU_ESTTYPE
  public $EstCost; // decimal
  public $EstRecoveryDate; // date
  public $EstDurationValue; // integer
  public $FulfilledDate; // date
  public $ActivityDetails; // string
  public $DurationUnitMeasure; // OLI_LU_MEASUNITS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $ProviderPartyID; // IDREF
}

class ClaimMedConditionInfo_Type {
  public $ClaimMedConditionInfoKey; // PERSISTKEY
  public $ClaimMedConditionInfoSysKey; // SYSKEY
  public $StartDate; // date
  public $EndDate; // date
  public $CausePrecedence; // OLI_LU_PRECEDENCE
  public $LostCapability; // LostCapability_Type
  public $ClaimMedTreatmentInfo; // ClaimMedTreatmentInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $MedicalConditionID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ClaimMedTreatmentInfo_Type {
  public $ClaimMedTreatmentInfoKey; // PERSISTKEY
  public $ClaimMedTreatmentInfoSysKey; // SYSKEY
  public $StartDate; // date
  public $EndDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $MedicalTreatmentID; // IDREF
}

class ClaimReferenceInfo_Type {
  public $HOClaimReferenceID; // string
}

class ClaimReview_Type {
  public $ClaimReviewKey; // PERSISTKEY
  public $ClaimReviewSysKey; // SYSKEY
  public $ClaimStatus; // OLI_LU_CLMSTAT
  public $ClaimStatusReason; // OLI_LU_CLAIMSTATREASON
  public $ReviewReason; // OLI_LU_RVWREASON
  public $StartDate; // date
  public $EndDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Client_Type {
  public $ClientKey; // PERSISTKEY
  public $ClientSysKey; // SYSKEY
  public $ClientTypeCode; // OLI_LU_CLITYPE
  public $ClientStatus; // OLI_LU_CLISTAT
  public $NumRelations; // integer
  public $LeadSource; // string
  public $EstTaxBracket; // double
  public $PrefLanguage; // OLI_LU_CLIENTLANGUAGES
  public $AlternateLanguage; // OLI_LU_CLIENTLANGUAGES
  public $AlternateLanguageProficiency; // OLI_LU_LANGPROF
  public $InvestorType; // integer
  public $GovtSocialInsEligibilityInd; // OLI_LU_BOOLEAN
  public $ShareInfoWithTradePartnerInd; // OLI_LU_BOOLEAN
  public $BrokerDealerInd; // OLI_LU_BOOLEAN
  public $DirectorInd; // OLI_LU_BOOLEAN
  public $EstIncomeAmt; // decimal
  public $PrimaryInvObjective; // OLI_LU_INVESTOBJ
  public $InvHorizonPeriod; // OLI_LU_FREQ
  public $InvHorizonRangeMin; // integer
  public $InvHorizonRangeMax; // integer
  public $PrivacyAffiliateCode; // OLI_LU_SHAREDATATYPE
  public $PrivacyThirdPartyCode; // OLI_LU_SHAREDATATYPE
  public $LeadType; // OLI_LU_LEADTYPE
  public $ClientRegion; // string
  public $ClientSubRegion; // string
  public $ExpenseNeed; // ExpenseNeed_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ClimbingExp_Type {
  public $ClimbingExpKey; // PERSISTKEY
  public $ClimbingExpSysKey; // SYSKEY
  public $TypeOfEquipment; // string
  public $LocationOfLastClimb; // string
  public $AvgClimbDuration; // integer
  public $AvgClimbHeight; // integer
  public $AvgDegreeOfDifficulty; // OLI_LU_DEGDIFFICULTY
  public $MaxClimbHeightToDate; // integer
  public $GuideUsageInd; // OLI_LU_BOOLEAN
  public $ClimbSoloInd; // OLI_LU_BOOLEAN
  public $ClimbSoloDesc; // string
  public $AvgPartySize; // integer
  public $BreathingApparatusInd; // OLI_LU_BOOLEAN
  public $AboveCriticalHeightInd; // OLI_LU_BOOLEAN
  public $AboveCriticalHeightDesc; // string
  public $DiffInFutureInd; // OLI_LU_BOOLEAN
  public $DiffInFutureDesc; // string
  public $GeographicRegion; // GeographicRegion_Type
  public $Terrain; // Terrain_Type
  public $Season; // Season_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CodeDefinition_Type {
  public $CodeDefinitionKey; // PERSISTKEY
  public $CodeDefinitionSysKey; // SYSKEY
  public $CodeSupportStatus; // OLI_LU_CODESUPSTAT
  public $EnumeratedTypeCodeValue; // ENUMERATEDTYPECODEVALUE_TYPE
  public $EnumeratedStringValue; // string
  public $Name; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CodeList_Type {
  public $CodeListKey; // PERSISTKEY
  public $CodeListSysKey; // SYSKEY
  public $CodeListType; // OLI_LU_CODELIST
  public $CodeListCode; // string
  public $CodeListVersion; // string
  public $KeyCodeType; // OLI_LU_LOOKUP
  public $ProviderDomain; // string
  public $VersionDate; // date
  public $Name; // string
  public $Description; // string
  public $CodeDefinition; // CodeDefinition_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $OwnerPartyID; // IDREF
}

class COIRate_Type {
  public $COIRateKey; // PERSISTKEY
  public $COIRateSysKey; // SYSKEY
  public $Description; // string
  public $MortalityAssumptionType; // TC_MORTASSUMPTION
  public $TableRef; // TableRef_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class COLIndexCapCC_Type {
  public $COLIndexCap; // double
}

class COLIndexCC_Type {
  public $COLIndex; // OLI_LU_COLINDEX
}

class ComboRelationship_Type {
  public $Relationship; // OLI_LU_REL
}

class CommFormula_Type {
  public $CommFormulaKey; // PERSISTKEY
  public $CommFormulaSysKey; // SYSKEY
  public $CommEvent; // OLI_LU_COMMEVENT
  public $CommissionType; // OLI_LU_COMMTYPE
  public $RelationRoleCode; // OLI_LU_REL
  public $CarrierCommCode; // string
  public $TableIdentity; // string
  public $ProviderDomain; // string
  public $PaymentRateCategory; // OLI_LU_PAYRATECAT
  public $TableRef; // TableRef_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CommissionCalcActivity_Type {
  public $CommissionCalcActivityKey; // PERSISTKEY
  public $CommissionCalcActivitySysKey; // SYSKEY
  public $CommissionCalcDetail; // CommissionCalcDetail_Type
  public $CommissionDetail; // CommissionDetail_Type
  public $CompanyProducerID; // string
  public $CommissionBasisAmt; // decimal
  public $RelationRoleCode; // OLI_LU_REL
  public $CommissionLink; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $CompanyProducerIDREF; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class CommissionCalcDetail_Type {
  public $CommissionCalcDetailKey; // PERSISTKEY
  public $CommissionCalcDetailSysKey; // SYSKEY
  public $NumOfMonths; // integer
  public $CommissionCalcPct; // double
  public $ProductionCalcPct; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CommissionCalcInfo_Type {
  public $CommissionCalcInfoKey; // PERSISTKEY
  public $CommissionCalcInfoSysKey; // SYSKEY
  public $CarrierCode; // string
  public $UserCode; // string
  public $EffDate; // date
  public $TransactionDate; // date
  public $PremiumDueDate; // date
  public $ProcessingType; // OLI_LU_PROCTYPE
  public $CommissionableEvent; // OLI_LU_COMMEVENT
  public $ProductionAffectedInd; // OLI_LU_BOOLEAN
  public $DecreaseInd; // OLI_LU_BOOLEAN
  public $CarrierAdminSubSystem; // OLI_LU_SUBSYSTEM
  public $CommissionCalcActivity; // CommissionCalcActivity_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CommissionDetail_Type {
  public $CommissionDetailKey; // PERSISTKEY
  public $CommissionDetailSysKey; // SYSKEY
  public $CarrierCode; // string
  public $CommissionType; // OLI_LU_COMMTYPE
  public $CommissionTransactionType; // OLI_LU_COMMTRNTYPE
  public $TransactionDate; // date
  public $CommissionRate; // double
  public $SplitPercent; // double
  public $PaymentBasisAmt; // decimal
  public $OriginatingBasisAmt; // decimal
  public $OriginatingBasisType; // OLI_LU_PAYRATECAT
  public $PaymentBasisReason; // OLI_LU_PAYMENTBASISREASON
  public $PaymentRateCategory; // OLI_LU_PAYRATECAT
  public $Description; // string
  public $CommissionSchedule; // string
  public $PaidAmt; // decimal
  public $EarnedAmt; // decimal
  public $PolNumber; // string
  public $ProductCode; // string
  public $EffDate; // date
  public $CommissionEarnedDate; // date
  public $PaidToDate; // date
  public $CoverageAmt; // decimal
  public $WritingProducerID; // string
  public $PaidProducerID; // string
  public $DebtRecaptureProducerID; // string
  public $ActualObjectType; // OLI_LU_OBJECTTYPE
  public $ActualProductCode; // string
  public $ActualEffDate; // date
  public $ActualPlanName; // string
  public $TaxableInd; // OLI_LU_BOOLEAN
  public $CommissionEvent; // OLI_LU_COMMEVENT
  public $PaymentMode; // OLI_LU_PAYMODE
  public $ChargeBackRate; // double
  public $ClientName; // string
  public $AdvancedInd; // OLI_LU_BOOLEAN
  public $SettlementAmt; // decimal
  public $SettlementDate; // date
  public $FundCarrierCode; // string
  public $FundProductCode; // string
  public $TrailFrequency; // OLI_LU_PAYMODE
  public $PayType; // OLI_LU_PAYTYPES
  public $PolicyStatus; // OLI_LU_POLSTAT
  public $OwnerName; // string
  public $CusipNum; // string
  public $CovNumber; // string
  public $CarrierAdminSystem; // string
  public $CommissionStatus; // OLI_LU_ACTSTAT
  public $SponsoringPlanName; // string
  public $SponsoringPlanCode; // string
  public $SponsorName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $HoldingID; // IDREF
  public $WritingProducerPartyID; // IDREF
  public $PaidProducerPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $ActualObjectID; // IDREF
  public $CoverageID; // IDREF
  public $OwnerPartyID; // IDREF
  public $PaidProducerAgreementID; // IDREF
  public $WritingProducerAgreementID; // IDREF
  public $SettlementVendorID; // IDREF
}

class CommissionLinkCC_Type {
  public $CommissionLink; // string
}

class CommissionProduct_Type {
  public $CommissionProductKey; // PERSISTKEY
  public $CommissionProductSysKey; // SYSKEY
  public $CommissionAgeCalculationType; // OLI_LU_AGECALCMETH
  public $SubpayCommAgeBasis; // OLI_LU_SUBPAYCOMMAGE
  public $CommissionAgePartySelection; // OLI_LU_PARTYSELECT
  public $ParticipantBasedPartySelection; // OLI_LU_PARTICROLE
  public $CommOptionAvailable; // CommOptionAvailable_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CommissionStatement_Type {
  public $CommissionStatementKey; // PERSISTKEY
  public $CommissionStatementSysKey; // SYSKEY
  public $CompanyProducerID; // string
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $RemittanceAmt; // decimal
  public $PreviousBalanceAmt; // decimal
  public $NetNewCommissionAmt; // decimal
  public $NewBalanceAmt; // decimal
  public $TotalManualAdjustments; // decimal
  public $TotalExpenseRecovered; // decimal
  public $TotalChargeBacks; // decimal
  public $TotalEarningsATD; // decimal
  public $TotalTaxableEarningsYTD; // decimal
  public $CommissionDetail; // CommissionDetail_Type
  public $Payment; // Payment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $AgentPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $PaidProducerAgreementID; // IDREF
  public $WritingProducerAgreementID; // IDREF
}

class CommOptionAvailable_Type {
  public $CommOptionAvailableKey; // PERSISTKEY
  public $CommOptionAvailableSysKey; // SYSKEY
  public $CommOption; // OLI_LU_COMMOPTION
  public $CarrierCommCode; // string
  public $CommOptionDesc; // string
  public $MinAvailableAge; // integer
  public $MaxAvailableAge; // integer
  public $EffDate; // date
  public $TermDate; // date
  public $CommOptionName; // string
  public $Sequence; // integer
  public $MinPremiumInitialAmt; // decimal
  public $MaxPremiumInitialAmt; // decimal
  public $LogicalExpression; // LogicalExpression_Type
  public $ExclusionInvestProduct; // ExclusionInvestProduct_Type
  public $FeatureOptConflict; // FeatureOptConflict_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CommRemittance_Type {
  public $CommRemittanceKey; // PERSISTKEY
  public $CommRemittanceSysKey; // SYSKEY
  public $AdvancingAllowedInd; // OLI_LU_BOOLEAN
  public $NettingAllowedInd; // OLI_LU_BOOLEAN
  public $CommEvent; // OLI_LU_COMMEVENT
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $PaymentMode; // OLI_LU_PAYMODE
  public $AdvanceRate; // double
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CommSchedule_Type {
  public $CommScheduleKey; // PERSISTKEY
  public $CommScheduleSysKey; // SYSKEY
  public $EffDate; // date
  public $ExpDate; // date
  public $CarrierCode; // string
  public $CommScheduleCode; // string
  public $CommFormula; // CommFormula_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CompatiblePaymentFormCC_Type {
  public $PaymentForm; // OLI_LU_PAYMENTFORM
}

class CompensationPayment_Type {
  public $CompensationPaymentKey; // PERSISTKEY
  public $CompensationPaymentSysKey; // SYSKEY
  public $CompanyProducerID; // string
  public $ReferenceNo; // string
  public $EffDate; // date
  public $AsOfDate; // date
  public $PaymentBasisReason; // OLI_LU_PAYMENTBASISREASON
  public $PaymentBasisAmt; // decimal
  public $PaidAmt; // decimal
  public $PaymentRateCategory; // OLI_LU_PAYRATECAT
  public $CommissionRate; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $FinancialStatementID; // IDREF
  public $CommDetailID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class CompetitionDetail_Type {
  public $CompetitionDetailKey; // PERSISTKEY
  public $CompetitionDetailSysKey; // SYSKEY
  public $LastRaceLocation; // string
  public $LastRaceDate; // date
  public $CompetitionVehicleMake; // string
  public $CompetitionVehicleModel; // string
  public $EngineMake; // string
  public $EngineModel; // string
  public $EngineSize; // integer
  public $HP; // string
  public $ClassOfCompetition; // OLI_LU_COMPCLASS
  public $ClassOfCompetitionDesc; // string
  public $ChangeClassOfCompetitionInd; // OLI_LU_BOOLEAN
  public $VehicleUsageInd; // OLI_LU_BOOLEAN
  public $VehicleType; // OLI_LU_VEHICLE
  public $VehicleTypeDesc; // string
  public $SupervisingOrganizationInd; // OLI_LU_BOOLEAN
  public $SupervisingOrganization; // string
  public $RaceTrack; // RaceTrack_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ComplexContentDescriptor_Type {
  public $ComplexContentDescriptorKey; // PERSISTKEY
  public $ComplexContentDescriptorSysKey; // SYSKEY
  public $ComplexContentCode; // string
  public $ContentSubType; // CONTENTSUBTYPE_TYPE
  public $ScalingFactor; // integer
  public $DataType; // OLI_LU_DATATYPE
  public $ContentCodeType; // OLI_LU_LOOKUP
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $Mode; // OLI_LU_PAYMODE
  public $Description; // string
  public $Sequence; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ConditionTypeOption_Type {
  public $ConditionTypeOptionKey; // PERSISTKEY
  public $ConditionTypeOptionSysKey; // SYSKEY
  public $ConditionType; // OLI_LU_MEDCOND
  public $ExcludedInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ConflictObjectInfo_Type {
  public $ConflictObjectInfoKey; // PERSISTKEY
  public $ConflictObjectInfoSysKey; // SYSKEY
  public $ObjectType; // OLI_LU_OBJECTTYPE
  public $ProductCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $ObjectIDRef; // IDREF
}

class ContentClassification_Type {
  public $ContentClassificationKey; // PERSISTKEY
  public $TableIdentity; // string
  public $ProviderDomain; // string
  public $ProviderName; // string
  public $TableURL; // string
  public $TableReference; // string
  public $ContentType; // CONTENTTYPE_TYPE
  public $TableName; // string
  public $TableDescription; // string
  public $EffDate; // date
  public $Comments; // string
  public $KeyWord; // string
  public $MortalityOrMorbidityTable; // OLI_LU_MORTALITYTBL
  public $ContentSubType; // CONTENTSUBTYPE_TYPE
  public $ComplexContentInd; // OLI_LU_BOOLEAN
  public $Extension; // Extension_Type
}

class ContingencyBenefitChange_Type {
  public $ContingencyBenefitChangeKey; // PERSISTKEY
  public $ContingencyBenefitChangeSysKey; // SYSKEY
  public $BenefitChangeBasedOn; // OLI_LU_BENREDUCEBASEDON
  public $BenefitChangeDirection; // OLI_LU_INCRDECR
  public $ContingentJointCC; // ContingentJointCC_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ContingentJointCC_Type {
  public $ContingentJoint; // OLI_LU_CONTINGJOINT
}

class Coverage_Type {
  public $CoverageKey; // PERSISTKEY
  public $CoverageSysKey; // SYSKEY
  public $CarrierAdminSystem; // string
  public $PlanName; // string
  public $ShortName; // string
  public $MarketingName; // string
  public $ProductCode; // string
  public $ProductVersionCode; // string
  public $CovNumber; // string
  public $FormNo; // string
  public $LifeCovStatus; // OLI_LU_POLSTAT
  public $StatusReason; // OLI_LU_STATREASON
  public $IssueType; // OLI_LU_POLISSUE
  public $IssueSubType; // OLI_LU_POLISSUESUB
  public $Purpose; // OLI_LU_HOLDPURPOSE
  public $IssueNation; // OLI_LU_NATION
  public $IssueNationDesc; // string
  public $Jurisdiction; // OLI_LU_STATE
  public $LifeCovTypeCode; // OLI_LU_COVTYPE
  public $IndicatorCode; // OLI_LU_COVINDCODE
  public $DBOSwitch; // OLI_LU_BOOLEAN
  public $RenewableInd; // OLI_LU_BOOLEAN
  public $DurationDesign; // integer
  public $CostOfInsDurationDesign; // integer
  public $CostOfInsAgeDesign; // integer
  public $LivesType; // OLI_LU_LIVESTYPE
  public $ExpiryDate; // date
  public $PaymentStructure; // OLI_LU_PAYMENTSTRUCTTYPE
  public $PremFreezeDate; // date
  public $BenefitStructure; // OLI_LU_BENESTRUCTTYPE
  public $DeathBenefitOptType; // OLI_LU_DTHBENETYPE
  public $DeathBenefitOptionName; // string
  public $GuaranteedCoverageOption; // OLI_LU_GTDPURCHOPT
  public $EquivalentAge; // integer
  public $GuarIntRate; // double
  public $PremSourceType; // OLI_LU_PREMSOURCE
  public $QualAddBenefitInd; // OLI_LU_BOOLEAN
  public $BeneDesignationWording; // string
  public $PaymentMode; // OLI_LU_PAYMODE
  public $DivSeriesIndString; // string
  public $TIAInEffectInd; // OLI_LU_BOOLEAN
  public $TIAEffDate; // date
  public $TIAAmount; // decimal
  public $CumPremAmtFirstYr; // decimal
  public $PremAmtATD; // decimal
  public $CashSurrValue; // decimal
  public $CashValue; // decimal
  public $SurrChargeAmt; // decimal
  public $CurrentAmt; // decimal
  public $DeathBenefitAmt; // decimal
  public $InitCovAmt; // decimal
  public $IntialNumberOfUnits; // double
  public $CurrentNumberOfUnits; // double
  public $ValuePerUnit; // decimal
  public $MinPremAmt; // decimal
  public $ModalPremAmt; // decimal
  public $TargetPremAmt; // decimal
  public $Target2PremAmt; // decimal
  public $TargetPremAmtATD; // decimal
  public $TargetPremAmtITD; // decimal
  public $TargetPremAmtMTD; // decimal
  public $TargetPremAmtYTD; // decimal
  public $AnnualPremAmt; // decimal
  public $TotAnnualPremAmt; // decimal
  public $AllocPremATD; // decimal
  public $AllocPremITD; // decimal
  public $GuarCOIChargesMTD; // decimal
  public $DeductedCOIChgsATD; // decimal
  public $DeductedCOIChgsITD; // decimal
  public $DeductedCOIChgsMTD; // decimal
  public $DeductedCOIChgsYTD; // decimal
  public $SurrTargetPrem; // decimal
  public $GDBPrem; // decimal
  public $SurrCharge; // decimal
  public $SurrChargeITD; // decimal
  public $ConversionDate; // date
  public $EffDate; // date
  public $TermDate; // date
  public $FinalPaymentDate; // date
  public $PaymentDueDate; // date
  public $LastPaymentDate; // date
  public $BenefitPeriod; // OLI_LU_BENEPERIOD
  public $BenefitMode; // OLI_LU_PAYMODE
  public $BenefitIndex; // double
  public $MonthlyBenefitAmt; // decimal
  public $MonthlyBenefitEffDate; // date
  public $GuidelineAnnPrem; // decimal
  public $GuidelineAnnPremSum; // decimal
  public $GuidelineSinglePrem; // decimal
  public $GuidelineFace; // decimal
  public $Mec7DBLowest; // decimal
  public $SECGuidelinePrem; // decimal
  public $SalaryPct; // double
  public $NetAmtAtRisk; // decimal
  public $InterestEarnedATD; // decimal
  public $InterestEarnedITD; // decimal
  public $GrandfatheredInd; // OLI_LU_BOOLEAN
  public $BenefitScheduleType; // OLI_LU_BENEFITSCHEDTYPE
  public $CoveragePercentageSelected; // double
  public $FiledFormNumber; // string
  public $EliminationPeriod; // OLI_LU_ELIMPERIOD
  public $MortgageInterestRate; // double
  public $IssuedAsAppliedInd; // OLI_LU_BOOLEAN
  public $EquivalentUnderwritingClass; // OLI_LU_UNWRITECLASS
  public $EquivalentUnderwritingSubClass; // OLI_LU_UNWRITESUBCLASS
  public $ExcessPremAmtATD; // decimal
  public $ExcessPremAmtITD; // decimal
  public $ExcessPremAmtMTD; // decimal
  public $ExcessPremAmtYTD; // decimal
  public $PremiumPerUnit; // decimal
  public $PremiumRatePerUnit; // double
  public $RenewalPremiumPerUnit; // decimal
  public $RenewalPremiumRatePerUnit; // double
  public $TobaccoPremiumBasis; // OLI_LU_TOBPREMBASIS
  public $CommissionLink; // string
  public $ValuationClassType; // OLI_LU_VALCLASS
  public $ValuationBaseSeries; // string
  public $ValuationSubSeries; // string
  public $PolicyExhibitStatus; // OLI_LU_POLSTAT
  public $ReserveMethod; // OLI_LU_RESVMETH
  public $LastPremAmt; // decimal
  public $ChildMatureAge; // integer
  public $ChildAgeUse; // OLI_LU_CHILDAGE
  public $BenefitCoordinationInd; // OLI_LU_BOOLEAN
  public $PreExistingConditionInd; // OLI_LU_BOOLEAN
  public $BenefitPeriodAcc; // OLI_LU_BENEPERIOD
  public $BenefitPeriodSick; // OLI_LU_BENEPERIOD
  public $ElimPeriodAcc; // OLI_LU_ELIMPERIOD
  public $ElimPeriodSick; // OLI_LU_ELIMPERIOD
  public $DeductionOption; // DeductionOption_Type
  public $BenefitAmtAcc; // decimal
  public $BenefitAmtSick; // decimal
  public $PayToAge; // integer
  public $PayToYear; // integer
  public $LevelPremiumPeriod; // integer
  public $LevelPremiumPeriodUnits; // OLI_LU_MEASUNITS
  public $CommissionRate; // double
  public $ERContribAmt; // decimal
  public $EEContribAmt; // decimal
  public $ERContribPct; // double
  public $EEContribPct; // double
  public $CovOption; // CovOption_Type
  public $LifeParticipant; // LifeParticipant_Type
  public $Attachment; // Attachment_Type
  public $ReinsuranceInfo; // ReinsuranceInfo_Type
  public $BenefitLimit; // BenefitLimit_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $UnderwritingReview; // UnderwritingReview_Type
  public $SubAccountInfo; // SubAccountInfo_Type
  public $AltPremMode; // AltPremMode_Type
  public $AddedDate; // date
  public $IssueDate; // date
  public $ExerciseDate; // date
  public $Duration; // integer
  public $LastAnniversaryDate; // date
  public $NextAnniversaryDate; // date
  public $IssueGender; // OLI_LU_GENDER
  public $StatusChangeDate; // date
  public $GroupCoverage; // GroupCoverage_Type
  public $ConditionTypeOption; // ConditionTypeOption_Type
  public $UpgradeAvailableInd; // OLI_LU_BOOLEAN
  public $KeyedValue; // KeyedValue_Type
  public $CoverageXLat; // CoverageXLat_Type
  public $PaidUpDate; // date
  public $MortalityOrMorbidityTable; // OLI_LU_MORTALITYTBL
  public $ChargeTotalAmt; // decimal
  public $ReserveIntRate; // double
  public $ParticipatingCSVInd; // OLI_LU_BOOLEAN
  public $PriorCovNumber; // string
  public $IssueBasis; // string
  public $DeathBenefitPctInc; // double
  public $Fee; // Fee_Type
  public $ReserveFunction; // OLI_LU_RESERVEFUNCTION
  public $JointAgeBasis; // OLI_LU_JOINTAGETYPE
  public $LineOfBusiness; // OLI_LU_LINEBUS
  public $PaidToDate; // date
  public $ParticipatingInd; // OLI_LU_BOOLEAN
  public $PriorEffDate; // date
  public $Description; // string
  public $NumLives; // integer
  public $NumChildrenExcluded; // integer
  public $NumChildren; // integer
  public $InitialReserveIntRate; // double
  public $ReserveIntRateSplitDur; // integer
  public $TIAPremAmt; // decimal
  public $NetCurrentAmt; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $CarrierLicenseID; // IDREF
  public $IncreasedCoverageID; // IDREF
}

class CoverageProduct_Type {
  public $CoverageProductKey; // PERSISTKEY
  public $CoverageProductSysKey; // SYSKEY
  public $Sequence; // integer
  public $PlanName; // string
  public $ProductCode; // string
  public $ProductVersionCode; // string
  public $ShortName; // string
  public $MarketingName; // string
  public $Description; // string
  public $IndicatorCode; // OLI_LU_COVINDCODE
  public $JointAgeBasis; // OLI_LU_JOINTAGETYPE
  public $DeathBenefitOptCC; // DeathBenefitOptCC_Type
  public $DBOptChanges; // OLI_LU_DTHBENEOPTCHGALLOW
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $IssueGenderCC; // IssueGenderCC_Type
  public $ParticipatingInd; // OLI_LU_BOOLEAN
  public $MaxTableOnBase; // OLI_LU_RATINGS
  public $FlatExtraPremBasis; // OLI_LU_FLATEXTRAPREMBASISCODE
  public $CovUnitType; // OLI_LU_COVUNITTYPE
  public $CovAmountChanges; // OLI_LU_COVCHGCTLTYPE
  public $CovScope; // OLI_LU_ILLUSTYPES
  public $LivesType; // OLI_LU_LIVESTYPE
  public $MaxMultiLives; // integer
  public $ReqRelToPrimaryIns; // OLI_LU_REL
  public $MaxCovInstances; // integer
  public $CovAmtModulusFactor; // double
  public $MaxAmtOfBase; // decimal
  public $MinAmtOfBase; // decimal
  public $MinRatioToBase; // double
  public $MaxRatioToBase; // double
  public $MaxFlatExtraOnBase; // decimal
  public $MinAmtAfterDecrease; // decimal
  public $MaturityAge; // integer
  public $MinAmtDecrease; // decimal
  public $MinAmtIncrease; // decimal
  public $MaxPctIncrease; // double
  public $MinPctIncrease; // double
  public $MaxFlatExtra; // decimal
  public $MaxTableRating; // OLI_LU_RATINGS
  public $FiledFormNumber; // string
  public $LTDPaidUpInd; // OLI_LU_BOOLEAN
  public $LTDIncreaseInd; // OLI_LU_BOOLEAN
  public $ValuePerUnit; // decimal
  public $SubstdMaxIssueAge; // integer
  public $SubstdMaxIssueAmt; // decimal
  public $SubstdMaxIssueUnits; // double
  public $SubstdPolicyReservePct; // double
  public $SubstdReserveCeaseType; // OLI_LU_SUBRESVCEASE
  public $SubstdReserveCeaseValue; // integer
  public $SubstdFlatAdjInd; // OLI_LU_BOOLEAN
  public $SubstdFlatAdjFactor; // double
  public $CovEffDateRestriction; // OLI_LU_COVEFFDATERSTCT
  public $MaturityAgeUse; // OLI_LU_AGEDATEUSE
  public $MaturityDuration; // integer
  public $MaturityDurationQualifier; // OLI_LU_PAYMODE
  public $LifeCovTypeCode; // OLI_LU_COVTYPE
  public $SubstdPolicyReserveMethod; // OLI_LU_SUBSTDRESV
  public $InitialPremRenewYrs; // integer
  public $SubseqPremStartYr; // integer
  public $SubseqPremRenewYrs; // integer
  public $GuarInitRenewYrs; // integer
  public $GuarSubseqRenewStartYr; // integer
  public $GuarSubseqRenewYrs; // integer
  public $IndeterPremRenewPeriod; // integer
  public $IndeterPremRenewMode; // OLI_LU_PAYMODE
  public $RenewableInd; // OLI_LU_BOOLEAN
  public $ChildMaxIssueAge; // integer
  public $ChildMatureAge; // integer
  public $ChildAgeUse; // OLI_LU_CHILDAGE
  public $ChildPremRule; // OLI_LU_CHILDPREM
  public $ValuationClassType; // OLI_LU_VALCLASS
  public $HIPAANinetyDayCertRequireInd; // OLI_LU_BOOLEAN
  public $BenefitCoordinationInd; // OLI_LU_BOOLEAN
  public $PreExistingConditionInd; // OLI_LU_BOOLEAN
  public $MinAmtOfBasePlusAddOns; // decimal
  public $MaxAmtOfBasePlusAddOns; // decimal
  public $MinMaturityDuration; // integer
  public $MinMaturityDurationQualifier; // OLI_LU_PAYMODE
  public $SelectionRule; // OLI_LU_RIDERSELECTRULE
  public $MinIssueAmt; // decimal
  public $MaxIssueAmt; // decimal
  public $MinIssueUnits; // double
  public $MaxIssueUnits; // double
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MinRatioToBasePlusAddOns; // double
  public $MaxRatioToBasePlusAddOns; // double
  public $PaymentStructure; // OLI_LU_PAYMENTSTRUCTTYPE
  public $MaxPermFlatExtra; // decimal
  public $MaxTempFlatExtra; // decimal
  public $MaxPermFlatExtraOnBase; // decimal
  public $MaxTempFlatExtraOnBase; // decimal
  public $UnderwritingClassProduct; // UnderwritingClassProduct_Type
  public $CovOptionProduct; // CovOptionProduct_Type
  public $CoverageProductXLat; // CoverageProductXLat_Type
  public $PremiumRate; // PremiumRate_Type
  public $CashValueRate; // CashValueRate_Type
  public $COIRate; // COIRate_Type
  public $TableRef; // TableRef_Type
  public $Fee; // Fee_Type
  public $DividendRate; // DividendRate_Type
  public $DisabilityHealthProvisions; // DisabilityHealthProvisions_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $DeathBenefitOptionInfo; // DeathBenefitOptionInfo_Type
  public $ParticipantProduct; // ParticipantProduct_Type
  public $ConflictObjectInfo; // ConflictObjectInfo_Type
  public $RequisiteObjectInfo; // RequisiteObjectInfo_Type
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $Attachment; // Attachment_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $AgeAmtProduct; // AgeAmtProduct_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class CoverageProductXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $PlanName; // string
  public $ShortName; // string
  public $FiledFormNumber; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CoverageXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $ShortName; // string
  public $PlanName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CovOption_Type {
  public $CovOptionKey; // PERSISTKEY
  public $CovOptionSysKey; // SYSKEY
  public $ShortName; // string
  public $MarketingName; // string
  public $PlanName; // string
  public $ProductCode; // string
  public $ProductVersionCode; // string
  public $FormNo; // string
  public $ClassName; // string
  public $CovOptionStatus; // OLI_LU_POLSTAT
  public $IssueType; // OLI_LU_POLISSUE
  public $IssueSubType; // OLI_LU_POLISSUESUB
  public $LifeCovOptTypeCode; // OLI_LU_OPTTYPE
  public $ExpiryDate; // date
  public $RatingReason; // string
  public $RatingOverriddenInd; // OLI_LU_BOOLEAN
  public $RatingCommissionRule; // OLI_LU_RATCOMMRUL
  public $TobaccoPremiumBasis; // OLI_LU_TOBPREMBASIS
  public $PermTableRating; // OLI_LU_RATINGS
  public $PermTableRatingEndDate; // date
  public $TempTableRating; // OLI_LU_RATINGS
  public $TempTableRatingStartDate; // date
  public $TempTableRatingEndDate; // date
  public $QualAddBenefitInd; // OLI_LU_BOOLEAN
  public $LivesType; // OLI_LU_LIVESTYPE
  public $IssuedAsAppliedInd; // OLI_LU_BOOLEAN
  public $UnderwritingClass; // OLI_LU_UNWRITECLASS
  public $UnderwritingSubClass; // OLI_LU_UNWRITESUBCLASS
  public $PremSourceType; // OLI_LU_PREMSOURCE
  public $AnnualPremAmt; // decimal
  public $ModalPremAmt; // decimal
  public $CovOptionPctInd; // OLI_LU_BOOLEAN
  public $OptionAmt; // decimal
  public $OptionPct; // double
  public $OptionPctType; // OLI_LU_ALLOWPCTTYPE
  public $OptionNumberOfUnits; // double
  public $ValuePerUnit; // decimal
  public $DeathBenefitAmt; // decimal
  public $TempFlatExtraAmt; // decimal
  public $TempFlatEndDate; // date
  public $PermFlatExtraAmt; // decimal
  public $PermFlatExtraEndDate; // date
  public $FlatExtraPremBasis; // OLI_LU_FLATEXTRAPREMBASISCODE
  public $ModalGrossFlatExtraPremAmt; // decimal
  public $ModalGrossFlatExtraAllowanceAmt; // decimal
  public $EffDate; // date
  public $ExerciseDate; // date
  public $TermDate; // date
  public $GracePeriodStartDate; // date
  public $TempPercentageLoading; // double
  public $PermPercentageLoading; // double
  public $FiledFormNumber; // string
  public $EliminationPeriod; // OLI_LU_ELIMPERIOD
  public $BenefitPeriod; // OLI_LU_BENEPERIOD
  public $BenefitMode; // OLI_LU_PAYMODE
  public $PremiumPerUnit; // decimal
  public $PremiumRatePerUnit; // double
  public $RenewalPremiumPerUnit; // decimal
  public $RenewalPremiumRatePerUnit; // double
  public $MaxBenefitAmt; // decimal
  public $CommissionLink; // string
  public $AddedDate; // date
  public $ModalGrossPermFlatAllowAmt; // decimal
  public $PermTableRatingAlphaCode; // string
  public $TempTableRatingCode; // string
  public $ModalGrossTempFlatAllowAmt; // decimal
  public $PaidUpDate; // date
  public $TempFlatExtraDuration; // integer
  public $CovOptionNumber; // string
  public $TempFlatStartDate; // date
  public $GuidelineAnnPrem; // decimal
  public $GuidelineAnnPremSum; // decimal
  public $GuidelineSinglePrem; // decimal
  public $Mec7DBLowest; // decimal
  public $SECGuidelinePrem; // decimal
  public $MinPremAmt; // decimal
  public $TargetPremAmtATD; // decimal
  public $TargetPremAmtITD; // decimal
  public $TargetPremAmtMTD; // decimal
  public $TargetPremAmtYTD; // decimal
  public $GDBPrem; // decimal
  public $Duration; // integer
  public $DurationDesign; // integer
  public $PreExistingConditionInd; // OLI_LU_BOOLEAN
  public $ChildMatureAge; // integer
  public $ChildAgeUse; // OLI_LU_CHILDAGE
  public $BenefitCoordinationInd; // OLI_LU_BOOLEAN
  public $TargetPremAmt; // decimal
  public $AnnualIndexType; // OLI_LU_ANNIDX
  public $PayToAge; // integer
  public $PayToYear; // integer
  public $PermRatingAmtPerThou; // decimal
  public $TempRatingAmtPerThou; // decimal
  public $TempFlatExtraOverrideEndDate; // date
  public $TempFlatExtraOverrideEffDate; // date
  public $Occupation; // string
  public $OccupRating; // OLI_LU_OCCUPRATING
  public $LastRatingDate; // date
  public $TempRatingType; // OLI_LU_RATINGTYPE
  public $PermRatingType; // OLI_LU_RATINGTYPE
  public $LevelPremiumPeriod; // integer
  public $LevelPremiumPeriodUnits; // OLI_LU_MEASUNITS
  public $PaymentStructure; // OLI_LU_PAYMENTSTRUCTTYPE
  public $CommissionRate; // double
  public $Description; // string
  public $ERContribAmt; // decimal
  public $EEContribAmt; // decimal
  public $ERContribPct; // double
  public $EEContribPct; // double
  public $UpgradeAvailableInd; // OLI_LU_BOOLEAN
  public $ModalPermRatingAmt; // decimal
  public $ModalTempRatingAmt; // decimal
  public $NetCurrentAmt; // decimal
  public $ReinsuranceInfo; // ReinsuranceInfo_Type
  public $SubstandardRating; // SubstandardRating_Type
  public $CovOptionXLat; // CovOptionXLat_Type
  public $Participant; // Participant_Type
  public $BenefitLimit; // BenefitLimit_Type
  public $DeductionOption; // DeductionOption_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $GroupCovOption; // GroupCovOption_Type
  public $Attachment; // Attachment_Type
  public $ConditionTypeOption; // ConditionTypeOption_Type
  public $AltPremMode; // AltPremMode_Type
  public $Fee; // Fee_Type
  public $ShadowAccount; // ShadowAccount_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $LifeParticipantRefID; // IDREF
  public $CarrierLicenseID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class CovOptionProduct_Type {
  public $CovOptionProductKey; // PERSISTKEY
  public $CovOptionProductSysKey; // SYSKEY
  public $Sequence; // integer
  public $PlanName; // string
  public $ProductCode; // string
  public $ProductVersionCode; // string
  public $ShortName; // string
  public $MarketingName; // string
  public $Description; // string
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $IssueGenderCC; // IssueGenderCC_Type
  public $MaxTableOnParent; // OLI_LU_RATINGS
  public $FlatExtraPremBasis; // OLI_LU_FLATEXTRAPREMBASISCODE
  public $CovUnitType; // OLI_LU_COVUNITTYPE
  public $CovAmountChanges; // OLI_LU_COVCHGCTLTYPE
  public $CovScope; // OLI_LU_ILLUSTYPES
  public $MaxCovInstances; // integer
  public $CovAmtModulusFactor; // double
  public $MaxAmtOfParent; // decimal
  public $MinAmtOfParent; // decimal
  public $MinRatioToParent; // double
  public $MaxRatioToParent; // double
  public $MaxFlatExtraOnParent; // decimal
  public $MinAmtAfterDecrease; // decimal
  public $MaturityAge; // integer
  public $MinAmtDecrease; // decimal
  public $MinAmtIncrease; // decimal
  public $MaxPctIncrease; // double
  public $MinPctIncrease; // double
  public $MaxFlatExtra; // decimal
  public $MaxTableRating; // OLI_LU_RATINGS
  public $FiledFormNumber; // string
  public $ValuePerUnit; // decimal
  public $LifeCovOptTypeCode; // OLI_LU_OPTTYPE
  public $SubstdMaxIssueAge; // integer
  public $SubstdMaxIssueAmt; // decimal
  public $SubstdMaxIssueUnits; // double
  public $SubstdPolicyReserveMethod; // OLI_LU_SUBSTDRESV
  public $SubstdPolicyReservePct; // double
  public $SubstdReserveCeaseType; // OLI_LU_SUBRESVCEASE
  public $SubstdReserveCeaseValue; // integer
  public $SubstdFlatAdjInd; // OLI_LU_BOOLEAN
  public $SubstdFlatAdjFactor; // double
  public $CovEffDateRestriction; // OLI_LU_COVEFFDATERSTCT
  public $MaturityAgeUse; // OLI_LU_AGEDATEUSE
  public $MaturityDuration; // integer
  public $MaturityDurationQualifier; // OLI_LU_PAYMODE
  public $RenewableInd; // OLI_LU_BOOLEAN
  public $LivesType; // OLI_LU_LIVESTYPE
  public $ChildMaxIssueAge; // integer
  public $ChildMatureAge; // integer
  public $ChildAgeUse; // OLI_LU_CHILDAGE
  public $ChildPremRule; // OLI_LU_CHILDPREM
  public $ValuationClassType; // OLI_LU_VALCLASS
  public $HIPAANinetyDayCertRequireInd; // OLI_LU_BOOLEAN
  public $BenefitCoordinationInd; // OLI_LU_BOOLEAN
  public $PreExistingConditionInd; // OLI_LU_BOOLEAN
  public $SelectionRule; // OLI_LU_RIDERSELECTRULE
  public $DurationDesign; // integer
  public $PayToAge; // integer
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MinIssueUnits; // double
  public $MaxIssueUnits; // double
  public $MinIssueAmt; // decimal
  public $MaxIssueAmt; // decimal
  public $PaymentStructure; // OLI_LU_PAYMENTSTRUCTTYPE
  public $MaxPermFlatExtra; // decimal
  public $MaxTempFlatExtra; // decimal
  public $MaxPermFlatExtraOnParent; // decimal
  public $MaxTempFlatExtraOnParent; // decimal
  public $UnderwritingClassProduct; // UnderwritingClassProduct_Type
  public $CovOptionProductXLat; // CovOptionProductXLat_Type
  public $DividendRate; // DividendRate_Type
  public $Fee; // Fee_Type
  public $PremiumRate; // PremiumRate_Type
  public $COIRate; // COIRate_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $DisabilityHealthProvisions; // DisabilityHealthProvisions_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $ConflictObjectInfo; // ConflictObjectInfo_Type
  public $RequisiteObjectInfo; // RequisiteObjectInfo_Type
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $Attachment; // Attachment_Type
  public $ParticipantProduct; // ParticipantProduct_Type
  public $AgeAmtProduct; // AgeAmtProduct_Type
  public $BenefitChangeAllowed; // BenefitChangeAllowed_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class CovOptionProductXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $PlanName; // string
  public $ShortName; // string
  public $FiledFormNumber; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CovOptionXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $ShortName; // string
  public $PlanName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CreditCardTypeCC_Type {
  public $CreditCardType; // OLI_LU_CREDCARDTYPE
  public $OLifEExtension; // OLifEExtension_Type
}

class CriminalConviction_Type {
  public $CriminalConvictionKey; // PERSISTKEY
  public $CriminalConvictionSysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $FineAmount; // decimal
  public $CrimeType; // OLI_LU_CRIMETYPE
  public $CrimeDescription; // string
  public $ConvictionDate; // date
  public $ConvictionPartialDate; // PARTIAL_DATE_TYPE
  public $ConvictionCountry; // OLI_LU_NATION
  public $ConvictionJurisdiction; // OLI_LU_STATE
  public $ProbationInd; // OLI_LU_BOOLEAN
  public $ProbationEndDate; // date
  public $ProbationEndPartialDate; // PARTIAL_DATE_TYPE
  public $ChargeCategory; // OLI_LU_CHARGECATEGORY
  public $ProceedingOutcome; // OLI_LU_PROCEEDINGOUTCOME
  public $CriminalSentenceDesc; // string
  public $RiskNotification; // RiskNotification_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CriminalConvictionGuideline_Type {
  public $CriminalConvictionGuidelineKey; // PERSISTKEY
  public $CriminalConvictionGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $ProbationInd; // OLI_LU_BOOLEAN
  public $ChargeCategory; // OLI_LU_CHARGECATEGORY
  public $ProceedingOutcome; // OLI_LU_PROCEEDINGOUTCOME
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class CriminalConvictionGuidelines_Type {
  public $CriminalConvictionGuidelinesKey; // PERSISTKEY
  public $CriminalConvictionGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $CriminalConvictionGuideline; // CriminalConvictionGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Criteria_Type {
  public $ObjectType; // OLI_LU_OBJECTTYPE
  public $PropertyName; // string
  public $PropertyValue; // PropertyValue_Type
  public $Operation; // OLI_LU_OPERATION
  public $ComparedObjectType; // OLI_LU_OBJECTTYPE
  public $ComparedPropertyName; // string
  public $PercentageMatch; // double
  public $LikeConstraintType; // OLI_LU_LIKECONSTRAINTTYPE
  public $LikeConstraintLimit; // integer
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
}

class CriteriaExpression_Type {
  public $Criteria; // Criteria_Type
  public $CriteriaOperator; // CRITERIA_OPERATOR
  public $CriteriaExpression; // CriteriaExpression_Type
  public $ObjectTypeConstraint; // OLI_LU_OBJECTTYPE
  public $OLifEExtension; // OLifEExtension_Type
}

class Currency_Type {
  public $CurrencyKey; // PERSISTKEY
  public $CurrencySysKey; // SYSKEY
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $IntlSymbol; // string
  public $CurrencySymbol; // string
  public $DecimalSep; // string
  public $NumDigits; // integer
  public $LeadingZero; // OLI_LU_BOOLEAN
  public $ThousandSep; // string
  public $CurrGrouping; // integer
  public $NegativeOrder; // OLI_LU_NEGCURRENCYFRMT
  public $PositiveOrder; // OLI_LU_POSCURRENCYFRMT
  public $ExchangeRate; // ExchangeRate_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DataTransmittalSubType_Type {
  public $ObjectType; // OLI_LU_OBJECTTYPE
  public $TranContentCode; // TRAN_CONTENT_CODES
  public $OLifEExtension; // OLifEExtension_Type
}

class DateCollection_Type {
  public $DateCollectionKey; // PERSISTKEY
  public $DateCollectionSysKey; // SYSKEY
  public $EffDateEntryRule; // OLI_LU_DATECOLLECT
  public $EndDateEntryRule; // OLI_LU_DATECOLLECT
  public $MinDuration; // double
  public $MaxDuration; // double
  public $MinDurationQualifier; // OLI_LU_MEASUNITS
  public $MaxDurationQualifier; // OLI_LU_MEASUNITS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DeathBenefitOptCC_Type {
  public $DeathBenefitOpt; // OLI_LU_DTHBENETYPE
}

class DeathBenefitOptionInfo_Type {
  public $DeathBenefitOptionInfoKey; // PERSISTKEY
  public $DeathBenefitOptionInfoSysKey; // SYSKEY
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $DeathBenefitOptType; // OLI_LU_DTHBENETYPE
  public $DeathBenefitOptionName; // string
  public $AdditionalInterestRateInfo; // AdditionalInterestRateInfo_Type
  public $DefLifeInsMethodCC; // DefLifeInsMethodCC_Type
  public $ConflictObjectInfo; // ConflictObjectInfo_Type
  public $RequisiteObjectInfo; // RequisiteObjectInfo_Type
  public $AgeAmtProduct; // AgeAmtProduct_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DeductionOption_Type {
  public $DeductionOptionKey; // PERSISTKEY
  public $DeductionOptionSysKey; // SYSKEY
  public $DeductAmt; // decimal
  public $DeductAmtType; // OLI_LU_DEDUCTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DefLifeInsMethodCC_Type {
  public $DefLifeInsMethod; // OLI_LU_LIFETEST
}

class DeliveryDestination_Type {
  public $DeliveryDestinationKey; // PERSISTKEY
  public $DeliveryDestinationSysKey; // SYSKEY
  public $DocumentDestinationType; // OLI_LU_PREFCOMM
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $DestinationID; // IDREF
}

class DeliveryInfo_Type {
  public $DeliveryInfoKey; // PERSISTKEY
  public $DeliveryInfoSysKey; // SYSKEY
  public $DocumentCategory; // OLI_LU_DOCCATEGORY
  public $DocumentSubCategory; // OLI_LU_DOCSUBCATEGORY
  public $DeliveryLevel; // OLI_LU_DELIVERYLEVEL
  public $LineOfBusiness; // OLI_LU_LINEBUS
  public $CommonAddressDeliveryInd; // OLI_LU_BOOLEAN
  public $DeliveryDestination; // DeliveryDestination_Type
  public $AccountDesignationCC; // AccountDesignationCC_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DenialInfo_Type {
  public $DenialInfoKey; // PERSISTKEY
  public $DenialInfoSysKey; // SYSKEY
  public $DenialCode; // string
  public $DenialReason; // string
  public $DenialType; // OLI_LU_DENIALTYPE
  public $DenialAmt; // decimal
  public $DenialMethodType; // OLI_LU_DENIALMETHOD
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Department_Type {
  public $DepartmentKey; // PERSISTKEY
  public $DepartmentSysKey; // SYSKEY
  public $DepartmentName; // string
  public $DepartmentCode; // string
  public $DepartmentLevel; // integer
  public $WorkLocationInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DesignationInfo_Type {
  public $DesignationInfoKey; // PERSISTKEY
  public $DesignationInfoSysKey; // SYSKEY
  public $DesignationType; // OLI_LU_DESIGNATIONTYPE
  public $DesignationYear; // gYear
  public $EffDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DestInvestProduct_Type {
  public $DestInvestProductKey; // PERSISTKEY
  public $DestInvestProductSysKey; // SYSKEY
  public $CarrierCode; // string
  public $ProductCode; // string
  public $MinAmt; // decimal
  public $MaxAmt; // decimal
  public $MinPct; // double
  public $MaxPct; // double
  public $FeatureOptRequisite; // FeatureOptRequisite_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DisabilityHealth_Type {
  public $DisabilityHealthKey; // PERSISTKEY
  public $DisabilityHealthSysKey; // SYSKEY
  public $FamilyDeductAmt; // decimal
  public $IndDeductAmt; // decimal
  public $LifetimeMaxAmt; // decimal
  public $AnnualMaxAmt; // decimal
  public $SuspenseAmt; // decimal
  public $RenewProv; // OLI_LU_RENEWPROV
  public $BenefitAmtAcc; // decimal
  public $BenefitAmtSick; // decimal
  public $BenefitAmtMaximum; // decimal
  public $BenefitPeriodAcc; // OLI_LU_BENEPERIOD
  public $BenefitPeriodSick; // OLI_LU_BENEPERIOD
  public $ElimPeriodAcc; // OLI_LU_ELIMPERIOD
  public $ElimPeriodSick; // OLI_LU_ELIMPERIOD
  public $BenefitCutOffAgeAcc; // integer
  public $BenefitCutOffAgeSick; // integer
  public $LifetimeBenQualAgeAcc; // integer
  public $LifetimeBenQualAgeSick; // integer
  public $EEContribAmt; // decimal
  public $ERContribAmt; // decimal
  public $EEContribPct; // double
  public $ERContribPct; // double
  public $IncomeAmtCov; // decimal
  public $BenefitMode; // OLI_LU_PAYMODE
  public $ContribMode; // OLI_LU_PAYMODE
  public $ContribStructure; // OLI_LU_PAYMENTSTRUCTTYPE
  public $PremFreezeDate; // date
  public $BenefitStructure; // OLI_LU_BENESTRUCTTYPE
  public $BenefitScheduleType; // OLI_LU_BENEFITSCHEDTYPE
  public $TaxableBenefitCode; // OLI_LU_TAXLOCATION
  public $IndexCover; // OLI_LU_BOOLEAN
  public $IndexRate; // double
  public $BeneDesignationWording; // string
  public $InitialPremAmt; // decimal
  public $CommissionLink; // string
  public $ValuationClassType; // OLI_LU_VALCLASS
  public $ValuationBaseSeries; // string
  public $ValuationSubSeries; // string
  public $ReserveMethod; // OLI_LU_RESVMETH
  public $MortalityOrMorbidityTable; // OLI_LU_MORTALITYTBL
  public $ChildMatureAge; // integer
  public $ChildAgeUse; // OLI_LU_CHILDAGE
  public $BenefitCoordinationInd; // OLI_LU_BOOLEAN
  public $PreExistingConditionInd; // OLI_LU_BOOLEAN
  public $GrossPremAmtATD; // decimal
  public $BasePaymentAmt; // decimal
  public $LastPremDate; // date
  public $MaxBenefitDuration; // integer
  public $MaxBenefitDurPeriod; // OLI_LU_BENEPERIOD
  public $ReinsuranceInfo; // ReinsuranceInfo_Type
  public $Rider; // Rider_Type
  public $Participant; // Participant_Type
  public $DeductionOption; // DeductionOption_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DisabilityHealthProduct_Type {
  public $DisabilityHealthProductKey; // PERSISTKEY
  public $DisabilityHealthProductSysKey; // SYSKEY
  public $ChildMaxIssueAge; // integer
  public $ChildMatureAge; // integer
  public $ChildAgeUse; // OLI_LU_CHILDAGE
  public $ChildPremRule; // OLI_LU_CHILDPREM
  public $BenefitCoordinationInd; // OLI_LU_BOOLEAN
  public $PreExistingConditionInd; // OLI_LU_BOOLEAN
  public $IssueGenderCC; // IssueGenderCC_Type
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $FlatExtraPremBasis; // OLI_LU_FLATEXTRAPREMBASISCODE
  public $CovUnitType; // OLI_LU_COVUNITTYPE
  public $CovAmountChanges; // OLI_LU_COVCHGCTLTYPE
  public $CovScope; // OLI_LU_ILLUSTYPES
  public $LivesType; // OLI_LU_LIVESTYPE
  public $MaxMultiLives; // integer
  public $MaturityAge; // integer
  public $MaxFlatExtra; // decimal
  public $MaxTableRating; // OLI_LU_RATINGS
  public $ValuePerUnit; // decimal
  public $SubstdMaxIssueAge; // integer
  public $SubstdMaxIssueAmt; // decimal
  public $SubstdMaxIssueUnits; // double
  public $SubstdPolicyReservePct; // double
  public $SubstdReserveCeaseType; // OLI_LU_SUBRESVCEASE
  public $SubstdReserveCeaseValue; // integer
  public $SubstdFlatAdjInd; // OLI_LU_BOOLEAN
  public $SubstdFlatAdjFactor; // double
  public $CovEffDateRestriction; // OLI_LU_COVEFFDATERSTCT
  public $MaturityAgeUse; // OLI_LU_AGEDATEUSE
  public $MaturityDuration; // integer
  public $MaturityDurationQualifier; // OLI_LU_PAYMODE
  public $SubstdPolicyReserveMethod; // OLI_LU_SUBSTDRESV
  public $InitialPremRenewYrs; // integer
  public $SubseqPremStartYr; // integer
  public $SubseqPremRenewYrs; // integer
  public $HIPAANinetyDayCertRequireInd; // OLI_LU_BOOLEAN
  public $RiderProduct; // RiderProduct_Type
  public $DisabilityHealthProvisions; // DisabilityHealthProvisions_Type
  public $PremiumRate; // PremiumRate_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $FeatureTransactionProduct; // FeatureTransactionProduct_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DisabilityHealthProvisions_Type {
  public $DisabilityHealthProvisionsKey; // PERSISTKEY
  public $DisabilityHealthProvisionsSysKey; // SYSKEY
  public $ElimPeriodAccOption; // ElimPeriodAccOption_Type
  public $ElimPeriodSickOption; // ElimPeriodSickOption_Type
  public $BenePeriodAccOption; // BenePeriodAccOption_Type
  public $BenePeriodSickOption; // BenePeriodSickOption_Type
  public $EmploymentClassOption; // EmploymentClassOption_Type
  public $OccupClassOption; // OccupClassOption_Type
  public $HealthServiceOption; // HealthServiceOption_Type
  public $NatureSubCategoryOption; // NatureSubCategoryOption_Type
  public $MedProviderOption; // MedProviderOption_Type
  public $ProviderClassOption; // ProviderClassOption_Type
  public $ConditionTypeOption; // ConditionTypeOption_Type
  public $MannerOfLossOption; // MannerOfLossOption_Type
  public $DeductionOption; // DeductionOption_Type
  public $BenefitLimitOption; // BenefitLimitOption_Type
  public $ManagedCareOption; // ManagedCareOption_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DistinguishedObject_Type {
  public $OLifEExtension; // OLifEExtension_Type
  public $DistinguishedObjectID; // IDREF
}

class DistributionAgreement_Type {
  public $DistributionAgreementKey; // PERSISTKEY
  public $DistributionAgreementSysKey; // SYSKEY
  public $AdvancingAllowedInd; // OLI_LU_BOOLEAN
  public $BackDatingAllowedInd; // OLI_LU_BOOLEAN
  public $ProductType; // OLI_LU_POLPROD
  public $NettingAllowedInd; // OLI_LU_BOOLEAN
  public $InterestRateClass; // string
  public $DateBasedOn; // OLI_LU_DATEBASIS
  public $EffDate; // date
  public $ExpDate; // date
  public $DistributionAgreementCode; // string
  public $CarrierCode; // string
  public $Name; // string
  public $DistLimitMaxNumAgents; // integer
  public $DistLimitMaxNumInvestProducts; // integer
  public $DistLimitMaxPremiumInitialAmt; // decimal
  public $DistLimitMaxPremiumAddOnAmt; // decimal
  public $PolicyProductInfo; // PolicyProductInfo_Type
  public $CommRemittance; // CommRemittance_Type
  public $BusinessProcessAllowed; // BusinessProcessAllowed_Type
  public $FundingSourceMethodsAllowed; // FundingSourceMethodsAllowed_Type
  public $QualifiedPlanEntityExclude; // QualifiedPlanEntityExclude_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DistributionAgreementInfo_Type {
  public $DistributionAgreementInfoKey; // PERSISTKEY
  public $DistributionAgreementInfoSysKey; // SYSKEY
  public $AdvancingAllowedInd; // OLI_LU_BOOLEAN
  public $BackDatingAllowedInd; // OLI_LU_BOOLEAN
  public $NettingAllowedInd; // OLI_LU_BOOLEAN
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $PaymentMode; // OLI_LU_PAYMODE
  public $EffDate; // date
  public $ExpDate; // date
  public $DistributionAgreementCode; // string
  public $CarrierCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DistributionAgreementID; // IDREF
  public $BankingInfoID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class DistributionChannelCC_Type {
  public $DistributionChannel; // OLI_LU_DISTCHAN
}

class DistributionChannelInfo_Type {
  public $DistributionChannelInfoKey; // PERSISTKEY
  public $DistributionChannelInfoSysKey; // SYSKEY
  public $DistributionChannel; // OLI_LU_DISTCHAN
  public $DistributionChannelSubType; // OLI_LU_DISTRIBUTIONSUBCHANNEL
  public $DistributionChannelName; // string
  public $DistributionChannelCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DistributionLevel_Type {
  public $DistributionLevelKey; // PERSISTKEY
  public $DistributionLevelSysKey; // SYSKEY
  public $DistributionLevelType; // OLI_LU_DISTRIBUTION_LEVEL
  public $DistributionLevelValue; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $RelatedDistributionLevelID; // IDREF
}

class DiveDetail_Type {
  public $DiveDetailKey; // PERSISTKEY
  public $DiveDetailSysKey; // SYSKEY
  public $NumberOfDivesLastYr; // integer
  public $NumberOfDivesNextYr; // integer
  public $MinDiveDepth; // double
  public $MaxDiveDepth; // double
  public $DiveDepthMeasureUnits; // OLI_LU_MEASUNITS
  public $AvgDiveTimeLastYear; // double
  public $AvgDiveTimeNextYear; // double
  public $AvgDiveTimeMeasureUnits; // OLI_LU_MEASUNITS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DiveLocation_Type {
  public $DiveLocationKey; // PERSISTKEY
  public $DiveLocationSysKey; // SYSKEY
  public $DiveLocationType; // OLI_LU_DIVELOCTYPE
  public $DiveLocationTypeDesc; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DivePurpose_Type {
  public $DivePurposeKey; // PERSISTKEY
  public $DivePurposeSysKey; // SYSKEY
  public $DivePurposeType; // OLI_LU_DIVEPURPOSE
  public $DivePurposeDesc; // string
  public $AvgDepthLastYear; // integer
  public $AvgDepthNextYear; // integer
  public $AvgMinuteLastYear; // integer
  public $AvgMinuteNextYear; // integer
  public $DivingLocations; // string
  public $DivingEquipment; // string
  public $EquipmentServicedInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Dividend_Type {
  public $DividendKey; // PERSISTKEY
  public $DividendSysKey; // SYSKEY
  public $GuarInd; // OLI_LU_BOOLEAN
  public $DivType; // OLI_LU_DIVTYPE
  public $DivOYTOptType; // OLI_LU_DIVOYTTYPE
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $SelectionRule; // OLI_LU_RIDERSELECTRULE
  public $TableRef; // TableRef_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DividendRate_Type {
  public $DividendRateKey; // PERSISTKEY
  public $DividendRateSysKey; // SYSKEY
  public $DividendRateType; // OLI_LU_DIVRATETYPE
  public $Description; // string
  public $MortalityAssumptionType; // TC_MORTASSUMPTION
  public $TableRef; // TableRef_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DrivingHistoryGuideline_Type {
  public $DrivingHistoryGuidelineKey; // PERSISTKEY
  public $DrivingHistoryGuidelineSysKey; // SYSKEY
  public $ViolationType; // OLI_LU_VIOLATIONTYPE
  public $MaxNumberOccurrences; // integer
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class DrivingHistoryGuidelines_Type {
  public $DrivingHistoryGuidelinesKey; // PERSISTKEY
  public $DrivingHistoryGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $DrivingHistoryGuideline; // DrivingHistoryGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Education_Type {
  public $EducationKey; // PERSISTKEY
  public $EducationSysKey; // SYSKEY
  public $EndDate; // date
  public $StartDate; // date
  public $GraduationStatus; // OLI_LU_EDUGRADSTAT_EGS
  public $NumberYears; // integer
  public $NumberHours; // integer
  public $Course; // string
  public $Major; // string
  public $ProviderOrSchool; // string
  public $CourseCertNum; // string
  public $ProviderCertNum; // string
  public $EducationType; // OLI_LU_EDULEVEL
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ProviderID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class EligibleDependents_Type {
  public $EligibleDependentsKey; // PERSISTKEY
  public $EligibleDependentsSysKey; // SYSKEY
  public $RelationRoleCode; // OLI_LU_REL
  public $RelationDescription; // OLI_LU_RELDESC
  public $DependentDetails; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ElimPeriodAccOption_Type {
  public $ElimPeriodAccOptionKey; // PERSISTKEY
  public $ElimPeriodAccOptionSysKey; // SYSKEY
  public $ElimPeriodAcc; // OLI_LU_ELIMPERIOD
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ElimPeriodSickOption_Type {
  public $ElimPeriodSickOptionKey; // PERSISTKEY
  public $ElimPeriodSickOptionSysKey; // SYSKEY
  public $ElimPeriodSick; // OLI_LU_ELIMPERIOD
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class EMailAddress_Type {
  public $EMailAddressKey; // PERSISTKEY
  public $EMailAddressSysKey; // SYSKEY
  public $EMailType; // OLI_LU_EMAILTYPE
  public $AddrLine; // string
  public $PrefEMailAddr; // OLI_LU_BOOLEAN
  public $AttachmentInd; // OLI_LU_BOOLEAN
  public $UndeliverableInd; // OLI_LU_BOOLEAN
  public $SolicitationInd; // OLI_LU_BOOLEAN
  public $StartDate; // date
  public $EndDate; // date
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Employment_Type {
  public $EmploymentKey; // PERSISTKEY
  public $EmploymentSysKey; // SYSKEY
  public $EmployeeID; // string
  public $HireDate; // date
  public $RetirementDate; // date
  public $TerminationDate; // date
  public $AnnualEarnings; // decimal
  public $HoursWorkedPerWeek; // integer
  public $WorkStatusCode; // OLI_LU_WORKSTAT
  public $PayType; // OLI_LU_PAYTYPES
  public $SalaryMode; // OLI_LU_PAYMODE
  public $AnnualSalary; // decimal
  public $SalaryEffectiveDate; // date
  public $EmploymentStatusTC; // OLI_LU_EMPSTATTYPECODES
  public $ReturnDate; // date
  public $BenefitStatus; // OLI_LU_BENESTAT
  public $BenefitStatusEventDate; // date
  public $BenefitStatusEventPartialDate; // PARTIAL_DATE_TYPE
  public $EmploymentStatusEffectiveDate; // date
  public $OccupClass; // OLI_LU_OCCUPCLASS
  public $OccupClassDesc; // string
  public $Occupation; // string
  public $EmployeeType; // OLI_LU_EMPLOYMENTTYPE
  public $Title; // string
  public $CorporateStockOwnedPct; // double
  public $COLIInForceAmt; // decimal
  public $COLIAppliedForAmt; // decimal
  public $CostCenter; // string
  public $EmployerName; // string
  public $ReasonForLeaving; // OLI_LU_REASFORLEAVING
  public $YearsAtEmployment; // double
  public $EstimatedReturnToWorkDate; // date
  public $EmploymentDuties; // string
  public $Applicability; // OLI_LU_APPLICABILITY
  public $WorkersCompElibility; // OLI_LU_WORKERSCOMP
  public $GovIssuedMedicalCoverage; // OLI_LU_GOVISSMED
  public $GovtSocialInsParticipation; // OLI_LU_GOVSOCINSPART
  public $Department; // Department_Type
  public $WorkLocation; // WorkLocation_Type
  public $Pay; // Pay_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $EmployerPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class EmploymentClassOption_Type {
  public $EmploymentClassOptionKey; // PERSISTKEY
  public $EmploymentClassOptionSysKey; // SYSKEY
  public $EmploymentClass; // OLI_LU_EMPLOYMENTCLASS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Endorsement_Type {
  public $EndorsementKey; // PERSISTKEY
  public $EndorsementSysKey; // SYSKEY
  public $StartDate; // date
  public $EndDate; // date
  public $EndorsementCode; // OLI_LU_ENDORSEMENT
  public $EndorsementInfo; // string
  public $RelatedObjectType; // OLI_LU_OBJECTTYPE
  public $Exclusion; // Exclusion_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $AppliesToPartyID; // IDREF
  public $RelatedObjectID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class EntityType_Type {
  public $OrgForm; // OLI_LU_ORGFORM
  public $PartyTypeCode; // OLI_LU_PARTY
  public $TrustTypeCC; // TrustTypeCC_Type
  public $id; // ID
}

class Exam_Type {
  public $ExamKey; // PERSISTKEY
  public $ExamSysKey; // SYSKEY
  public $ExamType; // OLI_LU_REGISTRATION_EXAMTYPE
  public $CourseType; // OLI_LU_COURSETYPE
  public $StatusDate; // date
  public $ExamName; // string
  public $InstitutionName; // string
  public $ExamDate; // date
  public $CompletedInd; // OLI_LU_BOOLEAN
  public $RequiredInd; // OLI_LU_BOOLEAN
  public $ExemptionInd; // OLI_LU_BOOLEAN
  public $EducationalCreditEquivalent; // string
  public $ProducerExamStatus; // OLI_LU_EXAMSTATUSTYPE
  public $ExamNumber; // string
  public $ExamApprovalNumber; // string
  public $ExamWindowStartDate; // date
  public $ExamWindowEndDate; // date
  public $ApprovedHours; // double
  public $ExamDetail; // string
  public $EffDate; // date
  public $ExpDate; // date
  public $RegistrationJurisdiction; // RegistrationJurisdiction_Type
  public $PolicyProductInfo; // PolicyProductInfo_Type
  public $ExamMethodInfo; // ExamMethodInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $ExaminingInstitutionID; // IDREF
}

class ExamMethodInfo_Type {
  public $ExamMethodInfoKey; // PERSISTKEY
  public $ExamMethodInfoSysKey; // SYSKEY
  public $ExamMethod; // OLI_LU_EXAMMETHOD
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ExchangeRate_Type {
  public $ExchangeRateKey; // PERSISTKEY
  public $ExchangeRateSysKey; // SYSKEY
  public $SourceCurrencyType; // OLI_LU_CURRENCYTYPE
  public $ConversionFactor; // double
  public $AsOfDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ExchangeReason_Type {
  public $ExchangeReasonKey; // PERSISTKEY
  public $ExchangeReasonSysKey; // SYSKEY
  public $ExchangeReasonCode; // OLI_LU_EXCHGREASON
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Exclusion_Type {
  public $ExclusionKey; // PERSISTKEY
  public $ExclusionSysKey; // SYSKEY
  public $LifeCovOptTypeCode; // OLI_LU_OPTTYPE
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $RelatedCovOptionID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ExclusionInvestProduct_Type {
  public $CarrierCode; // string
  public $ProductCode; // string
}

class ExpenseNeed_Type {
  public $ExpenseNeedKey; // PERSISTKEY
  public $ExpenseNeedSysKey; // SYSKEY
  public $NeedName; // string
  public $ExpenseNeedTypeCode; // OLI_LU_NEED
  public $Objective; // OLI_LU_INVESTOBJ
  public $TaxInterpretationFlag; // OLI_LU_BOOLEAN
  public $NeedAmount; // decimal
  public $NeedAmountBasedOn; // OLI_LU_NEEDAMTBASIS
  public $Frequency; // OLI_LU_FREQ
  public $StartDate; // date
  public $StartDateBasedOn; // OLI_LU_STARTDATEBASIS
  public $EndDate; // date
  public $EndDateBasedOn; // OLI_LU_ENDDATEBASIS
  public $SolutionType; // OLI_LU_SOLUTIONTYPE
  public $VendorCode; // string
  public $ScenarioName; // string
  public $TimesRuleNumber; // integer
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ScenarioID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ExtendOrCall_Type {
  public $ExtendOrCallKey; // PERSISTKEY
  public $ExtendOrCallSysKey; // SYSKEY
  public $ExtendOrCallType; // OLI_LU_EXTCALL
  public $ExtendOrCallDate; // date
  public $NumDaysNotice; // integer
  public $NewRate; // double
  public $StartDate; // date
  public $EndDate; // date
  public $ExtendOrCallAmt; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Extension_Type {
  public $any; // <anyXML>
  public $VendorCode; // string
  public $ExtensionCode; // string
}

class FamilyHistoryGuideline_Type {
  public $FamilyHistoryGuidelineKey; // PERSISTKEY
  public $FamilyHistoryGuidelineSysKey; // SYSKEY
  public $BeforeOnsetAge; // double
  public $BeforeAgeAtDeath; // double
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $MaxNumberOccurrences; // integer
  public $GuidelineDescription; // string
  public $MedicalConditionGuidelines; // MedicalConditionGuidelines_Type
  public $RelationshipCC; // RelationshipCC_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FamilyHistoryGuidelines_Type {
  public $FamilyHistoryGuidelinesKey; // PERSISTKEY
  public $FamilyHistoryGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $FamilyHistoryGuideline; // FamilyHistoryGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FamilyIllness_Type {
  public $FamilyIllnessKey; // PERSISTKEY
  public $FamilyIllnessSysKey; // SYSKEY
  public $DateLastUpdated; // date
  public $RoleCodeDesc; // OLI_LU_RELDESC
  public $FullName; // string
  public $OnsetAge; // integer
  public $DateOfOnset; // date
  public $OnsetPartialDate; // PARTIAL_DATE_TYPE
  public $RecoveryInd; // OLI_LU_BOOLEAN
  public $RecoveryDate; // date
  public $RecoveryPartialDate; // PARTIAL_DATE_TYPE
  public $Diagnosis; // OLI_LU_MEDCOND
  public $AgeAtDeath; // integer
  public $AgeIfLiving; // integer
  public $AgeAsOfDate; // date
  public $DiagnosisDesc; // string
  public $RelationRoleCode; // OLI_LU_REL
  public $Applicability; // OLI_LU_APPLICABILITY
  public $LivingStatus; // OLI_LU_LIVINGSTATUS
  public $RiskNotification; // RiskNotification_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FeatureConflict_Type {
  public $FeatureConflictKey; // PERSISTKEY
  public $FeatureConflictSysKey; // SYSKEY
  public $FeatureCode; // string
  public $ProductCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FeatureOptConflict_Type {
  public $FeatureOptConflictKey; // PERSISTKEY
  public $FeatureOptConflictSysKey; // SYSKEY
  public $FeatureCode; // string
  public $ProductCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FeatureOptProduct_Type {
  public $FeatureOptProductKey; // PERSISTKEY
  public $FeatureOptProductSysKey; // SYSKEY
  public $ProductCode; // string
  public $JurisdictionCC; // JurisdictionCC_Type
  public $Name; // string
  public $Description; // string
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $NoNewMoneyDate; // date
  public $QualifiedPlanCC; // QualifiedPlanCC_Type
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $RevokableInd; // OLI_LU_BOOLEAN
  public $SignatureRequiredCode; // OLI_LU_SIGNREQUIRED
  public $LivesType; // OLI_LU_LIVESTYPE
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $ParticipantBasedOn; // OLI_LU_PARTICROLE
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MinIssueAgeOwner; // integer
  public $MaxIssueAgeOwner; // integer
  public $MinContractAmt; // decimal
  public $OverrideMinAmtInd; // OLI_LU_BOOLEAN
  public $MaxContractAmt; // decimal
  public $MinRemainingBalanceAmt; // decimal
  public $MinTransactionAmt; // decimal
  public $MinTotalAmt; // decimal
  public $SubPayDCAType; // OLI_LU_DCATYPE
  public $CostBP; // double
  public $RateCreditBP; // double
  public $MinTerm; // integer
  public $MaxTerm; // integer
  public $TermQualifier; // OLI_LU_PAYMODE
  public $MinPct; // double
  public $MaxPct; // double
  public $PaymentModeMethProduct; // PaymentModeMethProduct_Type
  public $MaxNumSourceInvestProd; // integer
  public $MaxNumDestinationInvestProd; // integer
  public $MaxTransactionAmt; // decimal
  public $MinParticipantIssueAge; // integer
  public $MaxParticipantIssueAge; // integer
  public $MaxNumPrimaryOwners; // integer
  public $MaxNumInstances; // integer
  public $ParticipantBasedPartySelection; // OLI_LU_PARTICROLE
  public $SpecifiedRequestDateAllowed; // OLI_LU_ALLOWEDDATE
  public $MinNumSourceInvestments; // integer
  public $MinNumDestinationInvestments; // integer
  public $Sequence; // integer
  public $MinNumPrimaryOwners; // integer
  public $MinNumPrimaryCoveredPersons; // integer
  public $MaxNumPrimaryCoveredPersons; // integer
  public $ArrSubType; // OLI_LU_ARRSUBTYPE
  public $AmountQualifier; // OLI_LU_AMOUNTTYPE
  public $RiderSubTypeCode; // OLI_LU_RIDERSUBTYPE
  public $RequisiteLogic; // CRITERIA_OPERATOR
  public $EventTimingBasis; // OLI_LU_STMTBASIS
  public $EventType; // OLI_LU_EVENTTYPE
  public $TargetAgeRequired; // OLI_LU_BOOLEAN
  public $AgeRestrictionRule; // OLI_LU_PARTYSELECT
  public $RestrictToSameInvestProdInd; // OLI_LU_BOOLEAN
  public $FeatureOptConflict; // FeatureOptConflict_Type
  public $FeatureOptRequisite; // FeatureOptRequisite_Type
  public $AllocTypeProduct; // AllocTypeProduct_Type
  public $SourceInvestProduct; // SourceInvestProduct_Type
  public $DestInvestProduct; // DestInvestProduct_Type
  public $ExclusionInvestProduct; // ExclusionInvestProduct_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $IncomeOptConflict; // IncomeOptConflict_Type
  public $IncomeOptRequisite; // IncomeOptRequisite_Type
  public $SurrenderChargeSchedule; // SurrenderChargeSchedule_Type
  public $NumInvestProduct; // NumInvestProduct_Type
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $Fee; // Fee_Type
  public $Reward; // Reward_Type
  public $DateCollection; // DateCollection_Type
  public $RequisiteInvestProduct; // RequisiteInvestProduct_Type
  public $TableRef; // TableRef_Type
  public $AllowedRelationship; // AllowedRelationship_Type
  public $BenefitLimitOption; // BenefitLimitOption_Type
  public $Attachment; // Attachment_Type
  public $AdditionalRiderClassification; // AdditionalRiderClassification_Type
  public $AdditionalArrClassification; // AdditionalArrClassification_Type
  public $TaxWithholdingProduct; // TaxWithholdingProduct_Type
  public $RoleRelationRestriction; // RoleRelationRestriction_Type
  public $AgeRestrictionRoleCC; // AgeRestrictionRoleCC_Type
  public $TargetAgeRestriction; // TargetAgeRestriction_Type
  public $DisabilityHealthProvisions; // DisabilityHealthProvisions_Type
  public $BenefitChangeAllowed; // BenefitChangeAllowed_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FeatureOptRequisite_Type {
  public $FeatureOptRequisiteKey; // PERSISTKEY
  public $FeatureOptRequisiteSysKey; // SYSKEY
  public $FeatureCode; // string
  public $ProductCode; // string
  public $RequisiteLogic; // CRITERIA_OPERATOR
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FeatureProduct_Type {
  public $FeatureProductKey; // PERSISTKEY
  public $FeatureProductSysKey; // SYSKEY
  public $FeatureCode; // string
  public $JurisdictionCC; // JurisdictionCC_Type
  public $Name; // string
  public $Description; // string
  public $SelectionRule; // OLI_LU_RIDERSELECTRULE
  public $MaxNumInstances; // integer
  public $FeatureMappingCode; // OLI_LU_OBJECTTYPE
  public $RiderTypeCode; // OLI_LU_RIDERTYPE
  public $ArrType; // OLI_LU_ARRTYPE
  public $Sequence; // integer
  public $FeatureConflict; // FeatureConflict_Type
  public $FeatureRequisite; // FeatureRequisite_Type
  public $FeatureOptProduct; // FeatureOptProduct_Type
  public $IncomeOptConflict; // IncomeOptConflict_Type
  public $IncomeOptRequisite; // IncomeOptRequisite_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FeatureProductInfo_Type {
  public $FeatureProductInfoKey; // PERSISTKEY
  public $FeatureProductInfoSysKey; // SYSKEY
  public $FeatureCode; // string
  public $ProductCode; // string
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $TransmissableInd; // OLI_LU_BOOLEAN
  public $FeatureMappingCode; // OLI_LU_OBJECTTYPE
  public $ActionTypeAllowedCC; // ActionTypeAllowedCC_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FeatureRequisite_Type {
  public $FeatureRequisiteKey; // PERSISTKEY
  public $FeatureRequisiteSysKey; // SYSKEY
  public $FeatureCode; // string
  public $ProductCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FeatureTransactionProduct_Type {
  public $FeatureTransactionProductKey; // PERSISTKEY
  public $FeatureTransactionProductSysKey; // SYSKEY
  public $TransAvailableDate; // date
  public $TransEndAvailableDate; // date
  public $IssueEffectiveDate; // date
  public $IssueExpirationDate; // date
  public $TransType; // OLI_LU_TRANS_TYPE_CODES
  public $TransSubType; // TRANS_SUBTYPE_CODES
  public $ArrType; // OLI_LU_ARRTYPE
  public $Description; // string
  public $FeatureProductInfo; // FeatureProductInfo_Type
  public $PolicyStatusCC; // PolicyStatusCC_Type
  public $AllowedDistributionAgreement; // AllowedDistributionAgreement_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Fee_Type {
  public $FeeKey; // PERSISTKEY
  public $FeeSysKey; // SYSKEY
  public $FeeType; // OLI_LU_FEETYPE
  public $FeeTypeQualifier; // OLI_LU_FEEQUAL
  public $FeeMode; // OLI_LU_PAYMODE
  public $Description; // string
  public $FeeAmt; // decimal
  public $FeePct; // double
  public $FeeCapPct; // double
  public $FeeCapAmt; // decimal
  public $FeeWaiverBasedOn; // OLI_LU_RATEBASEDON
  public $FeeWaiverReason; // OLI_LU_WAIVERREASON
  public $FeeWaiverAmt; // decimal
  public $FeeWaiverPct; // double
  public $FeeWaiverType; // OLI_LU_FEEWAIVERTYPE
  public $CommissionablePremCalcInd; // OLI_LU_BOOLEAN
  public $WaiverWindowInd; // OLI_LU_BOOLEAN
  public $WaiverWindowDays; // integer
  public $TimingBasis; // OLI_LU_STMTBASIS
  public $MinAmt; // decimal
  public $ChargeBasedOn; // OLI_LU_RATEBASEDON
  public $StartDate; // date
  public $EndDate; // date
  public $TaxLocality; // string
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $TableRef; // TableRef_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FinActivityTypeCC_Type {
  public $FinActivityType; // OLI_LU_FINACTTYPE
}

class FinancialActivity_Type {
  public $FinancialActivityKey; // PERSISTKEY
  public $FinancialActivitySysKey; // SYSKEY
  public $AccountingActivityType; // OLI_LU_ACCTACTTYPE
  public $FinActivityType; // OLI_LU_FINACTTYPE
  public $FinActivitySubType; // OLI_LU_FINACTSUBTYPE
  public $FinActivityStatus; // OLI_LU_FINACTSTATUS
  public $FinActivityStatusComments; // string
  public $ReversalInd; // OLI_LU_BOOLEAN
  public $Description; // string
  public $FinActivityGrossAmt; // decimal
  public $FinActivityNetAmt; // decimal
  public $FinActivityFee; // decimal
  public $FinActivityDate; // date
  public $FinEffDate; // date
  public $GracePeriodEndDate; // date
  public $ReferenceNo; // string
  public $IntPostingRate; // double
  public $IntPostingDate; // date
  public $OrderDate; // date
  public $OrderTime; // time
  public $OrderSource; // string
  public $SettlementDate; // date
  public $TotalUnits; // double
  public $UnitValue; // decimal
  public $TotalUnitsIssued; // double
  public $TotalUnitsUnissued; // double
  public $LockedInInd; // OLI_LU_BOOLEAN
  public $FederalTaxWithheld; // decimal
  public $JurisdictionTaxWithheld; // decimal
  public $LocalTaxWithheld; // decimal
  public $ServicesTaxWithheld; // decimal
  public $AnnuityContributionAmt; // decimal
  public $BestIntRateType; // OLI_LU_BESTRATE
  public $CommPremOvrRidnAmt; // decimal
  public $CostBasisAdjAmt; // decimal
  public $CostBasis; // decimal
  public $FirstTaxYear; // gYear
  public $GrandfatheredDate; // date
  public $IntTreatmentInd; // OLI_LU_BOOLEAN
  public $MonthsPaid; // integer
  public $PremLoadOvrRidnAmt; // decimal
  public $PreTEFRACostBasis; // decimal
  public $PostTEFRACostBasisAmt; // decimal
  public $ReportingTaxYear; // gYear
  public $RothIra1stYrConverIncome; // decimal
  public $RollloverIntAmt; // decimal
  public $RothIraConverIncDate; // date
  public $RothIraConverIncAmt; // decimal
  public $RothIraNetContributionAmt; // decimal
  public $TaxOverriddenInd; // OLI_LU_BOOLEAN
  public $RetainedCommissionAmt; // decimal
  public $UserCode; // string
  public $FinActivitySolicitedInd; // OLI_LU_BOOLEAN
  public $FinActivityPct; // double
  public $WithldPremsOnLoan; // OLI_LU_PREMWHELD
  public $PaymentMode; // OLI_LU_PAYMODE
  public $GuarIntEndDate; // date
  public $ERContribReason; // OLI_LU_CONTRIBREASON
  public $EEContribReason; // OLI_LU_CONTRIBREASON
  public $CommissionableInd; // OLI_LU_BOOLEAN
  public $PremiumBonusReason; // OLI_LU_BONUSREAS
  public $TransConfirmNum; // string
  public $OFACDate; // date
  public $CommissionAmt; // decimal
  public $CancellationPeriodEndDate; // date
  public $CancellationPeriodEndTime; // time
  public $CancellationDate; // date
  public $CancellationTime; // time
  public $Payment; // Payment_Type
  public $PaymentReference; // PaymentReference_Type
  public $AccountingActivity; // AccountingActivity_Type
  public $TaxWithholding; // TaxWithholding_Type
  public $FinancialActivityInfo; // FinancialActivityInfo_Type
  public $Fee; // Fee_Type
  public $ClaimReferenceInfo; // ClaimReferenceInfo_Type
  public $LoanActivity; // LoanActivity_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $ReversalFinancialActivityID; // IDREF
  public $AppliesToCoverageID; // IDREF
  public $ArrangementRefID; // IDREF
}

class FinancialActivityInfo_Type {
  public $FinancialActivityInfoKey; // PERSISTKEY
  public $FinancialActivityInfoSysKey; // SYSKEY
  public $ReferenceNo; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $FinancialActivityID; // IDREF
  public $HoldingRefID; // IDREF
}

class FinancialBenefit_Type {
  public $FinancialBenefitKey; // PERSISTKEY
  public $FinancialBenefitSysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $FinancialBenefitType; // OLI_LU_FINBENETYPE
  public $StartDate; // date
  public $StartPartialDate; // PARTIAL_DATE_TYPE
  public $EndDate; // date
  public $EndPartialDate; // PARTIAL_DATE_TYPE
  public $Description; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FinancialExperience_Type {
  public $FinancialExperienceKey; // PERSISTKEY
  public $FinancialExperienceSysKey; // SYSKEY
  public $InvestmentType; // OLI_LU_INVESTPROD
  public $YearsOfInvestmentExperience; // integer
  public $Applicability; // OLI_LU_APPLICABILITY
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FinancialGuideline_Type {
  public $FinancialGuidelineKey; // PERSISTKEY
  public $FinancialGuidelineSysKey; // SYSKEY
  public $GuidelineDescription; // string
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $IntentCategory; // OLI_LU_INTENTCATEGORY
  public $ExpenseNeedTypeCode; // OLI_LU_NEED
  public $NeedsGuideline; // NeedsGuideline_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FinancialGuidelines_Type {
  public $FinancialGuidelinesKey; // PERSISTKEY
  public $FinancialGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $FinancialGuideline; // FinancialGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FinancialStatement_Type {
  public $FinancialStatementKey; // PERSISTKEY
  public $FinancialStatementSysKey; // SYSKEY
  public $StatementType; // OLI_LU_STMTTYPE
  public $StatementBasis; // OLI_LU_STMTBASIS
  public $StatementRefID; // string
  public $StatementDate; // date
  public $StatementTime; // time
  public $TransmissionDate; // date
  public $StartDate; // date
  public $StartDateBasedOn; // OLI_LU_STARTDATEBASIS
  public $EndDate; // date
  public $CarrierCode; // string
  public $StatementMode; // OLI_LU_PAYMODE
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $Description; // string
  public $CarrierName; // string
  public $UserCode; // string
  public $CommissionStatement; // CommissionStatement_Type
  public $BillingStatement; // BillingStatement_Type
  public $AccountingStatement; // AccountingStatement_Type
  public $PeriodicBalanceYTDInfo; // PeriodicBalanceYTDInfo_Type
  public $CommissionCalcInfo; // CommissionCalcInfo_Type
  public $PolicyStatement; // PolicyStatement_Type
  public $InvestmentStatement; // InvestmentStatement_Type
  public $Attachment; // Attachment_Type
  public $OrgCode; // string
  public $CreationDate; // date
  public $CreationTime; // time
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $CarrierPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $MailToPartyIDAttribute; // IDREF
  public $RemittancePartyID; // IDREF
  public $MailingAddressID; // IDREF
  public $InvoicerPartyID; // IDREF
}

class ForeignTravel_Type {
  public $ForeignTravelKey; // PERSISTKEY
  public $ForeignTravelSysKey; // SYSKEY
  public $BusinessTravelInd; // OLI_LU_BOOLEAN
  public $PleasureTravelInd; // OLI_LU_BOOLEAN
  public $TravelCountry; // OLI_LU_NATION
  public $TravelTransportation; // OLI_LU_TRAVELTRANSPORTATION
  public $TravelLocation; // string
  public $TravelAvgTime; // integer
  public $TravelMaxTime; // integer
  public $TimingType; // OLI_LU_TIMINGTYPE
  public $DateLastTrip; // date
  public $DateLastTripPartialDate; // PARTIAL_DATE_TYPE
  public $TravelEnvironment; // OLI_LU_TRAVELENV
  public $TravelEvent; // TravelEvent_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $DataRep; // DATAREP_TYPES
  public $id; // ID
}

class ForeignTravelGuideline_Type {
  public $ForeignTravelGuidelineKey; // PERSISTKEY
  public $ForeignTravelGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $TimingType; // OLI_LU_TIMINGTYPE
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $MaxActivityFrequency; // integer
  public $ActivityFrequencyMode; // OLI_LU_PARTFREQ
  public $GuidelineDescription; // string
  public $MaxTravelRiskRating; // OLI_LU_TRAVELRISK
  public $TravelPurposeInfo; // TravelPurposeInfo_Type
  public $LocationRestrictionInfo; // LocationRestrictionInfo_Type
  public $TravelLocationRatingsInfo; // TravelLocationRatingsInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ForeignTravelGuidelines_Type {
  public $ForeignTravelGuidelinesKey; // PERSISTKEY
  public $ForeignTravelGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $ForeignTravelGuideline; // ForeignTravelGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FormInstance_Type {
  public $FormInstanceKey; // PERSISTKEY
  public $FormInstanceSysKey; // SYSKEY
  public $FormName; // string
  public $PrimaryFormInd; // OLI_LU_BOOLEAN
  public $ProviderFormNumber; // string
  public $FormVersion; // string
  public $SubmitDate; // date
  public $CompletionDate; // date
  public $ImageSubmissionType; // OLI_LU_APPSUBMITTYPE
  public $OriginalInputMode; // OLI_LU_INPUTMODE
  public $FormInstanceCategory; // string
  public $CarrierCode; // string
  public $PolNumber; // string
  public $CreationDate; // date
  public $CreationTime; // time
  public $CompanyProducerID; // string
  public $RelatedObjectType; // OLI_LU_OBJECTTYPE
  public $FormInstanceTrackingID; // string
  public $FormInstanceVersion; // string
  public $DocumentControlNumber; // string
  public $DocumentControlType; // OLI_LU_DOCCTRLTYPE
  public $FormInstanceStatus; // OLI_LU_FORMINSTSTATUS
  public $UpdateMode; // OLI_LU_FORMINSTUPDTMODE
  public $FormInstanceUpdateReason; // string
  public $FormInstanceStatusDate; // date
  public $ImageForm; // OLI_LU_IMAGEFORM
  public $UserCode; // string
  public $OriginatingTransType; // OLI_LU_TRANS_TYPE_CODES
  public $OriginatingTransSubType; // TRANS_SUBTYPE_CODES
  public $FormResponse; // FormResponse_Type
  public $SignatureInfo; // SignatureInfo_Type
  public $Attachment; // Attachment_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ProviderPartyID; // IDREF
  public $RelatedObjectID; // IDREF
  public $ReceiverPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class FormInstanceDestination_Type {
  public $FormInstanceDestinationKey; // PERSISTKEY
  public $FormInstanceDestinationSysKey; // SYSKEY
  public $FormInstanceDestinationType; // OLI_LU_FORMINSTDESTTYPE
  public $FormInstanceDestinationDesc; // string
  public $MailToPartyID; // IDREF
  public $NumberOfCopies; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $MailToPartyIDAttribute; // IDREF
}

class FormInstanceRequest_Type {
  public $FormInstanceRequestKey; // PERSISTKEY
  public $FormInstanceRequestSysKey; // SYSKEY
  public $FormInstanceCategory; // string
  public $FormInstanceKey; // PERSISTKEY
  public $FormName; // string
  public $FormInstanceVersion; // string
  public $RequestedLanguage; // OLI_LU_CLIENTLANGUAGES
  public $CreationDate; // date
  public $CreationTime; // time
  public $ReprintInd; // OLI_LU_BOOLEAN
  public $FormInstanceDestination; // FormInstanceDestination_Type
  public $IllustrationRequest; // IllustrationRequest_Type
  public $IllustrationResult; // IllustrationResult_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FormResponse_Type {
  public $FormResponseKey; // PERSISTKEY
  public $FormResponseSysKey; // SYSKEY
  public $QuestionNumber; // string
  public $QuestionText; // string
  public $HelpText; // string
  public $ResponseCode; // integer
  public $ResponseData; // string
  public $ResponseText; // string
  public $QuestionType; // OLI_LU_QUESTTYPE
  public $ResponseType; // OLI_LU_RESPONSETYPE
  public $AnswerType; // OLI_LU_ANSWERTYPE
  public $SectionIdentifier; // string
  public $Attachment; // Attachment_Type
  public $AssociatedResponseData; // AssociatedResponseData_Type
  public $AnswerChoice; // AnswerChoice_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FreelookInvestRuleProduct_Type {
  public $FreelookInvestRuleProductKey; // PERSISTKEY
  public $FreelookInvestRuleProductSysKey; // SYSKEY
  public $FreeLookInvestDuration; // integer
  public $FreeLookReturnProvision; // OLI_LU_RATEBASEDON
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $Description; // string
  public $InvestRuleProduct; // InvestRuleProduct_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $QualifiedPlanOption; // QualifiedPlanOption_Type
  public $FundingSourceMethodsAllowed; // FundingSourceMethodsAllowed_Type
  public $FundViaExchangeInd; // OLI_LU_BOOLEAN
  public $MinIssueAgeOwner; // integer
  public $MaxIssueAgeOwner; // integer
  public $ParticipantBasedOn; // OLI_LU_PARTICROLE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class FundingSourceMethodsAllowed_Type {
  public $FundingSourceMethodsAllowedKey; // PERSISTKEY
  public $FundingSourceMethodsAllowedSysKey; // SYSKEY
  public $MarketingName; // string
  public $FinActivityType; // OLI_LU_FINACTTYPE
  public $MaxNumInstances; // integer
  public $SourceOfFundsCC; // SourceOfFundsCC_Type
  public $PaymentFormCC; // PaymentFormCC_Type
  public $PaymentFormInfo; // PaymentFormInfo_Type
  public $PaymentSourceCC; // PaymentSourceCC_Type
  public $AllowedTransType; // AllowedTransType_Type
  public $CreditCardTypeCC; // CreditCardTypeCC_Type
  public $AllowedRelationship; // AllowedRelationship_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class GeographicRegion_Type {
  public $GeographicRegionKey; // PERSISTKEY
  public $GeographicRegionSysKey; // SYSKEY
  public $GeographicRegionType; // OLI_LU_GEOREGION
  public $GeographicRegionTypeDesc; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class GovtIDInfo_Type {
  public $GovtIDInfoKey; // PERSISTKEY
  public $GovtIDInfoSysKey; // SYSKEY
  public $GovtID; // string
  public $GovtIDStat; // OLI_LU_GOVTIDSTAT
  public $GovtIDTC; // OLI_LU_GOVTIDTC
  public $GovtIDCertificationDate; // date
  public $WithholdingRequiredInd; // OLI_LU_BOOLEAN
  public $GovtIDIssueDate; // date
  public $GovtIDExpDate; // date
  public $GovtIDIssueAgency; // string
  public $Locality; // string
  public $Nation; // OLI_LU_NATION
  public $Jurisdiction; // OLI_LU_STATE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class GroupCoverage_Type {
  public $GroupCoverageKey; // PERSISTKEY
  public $GroupCoverageSysKey; // SYSKEY
  public $BenefitBasis; // OLI_LU_PAYTYPES
  public $MaxIssueAge; // integer
  public $EvidenceOfInsurabilityReqInd; // OLI_LU_BOOLEAN
  public $ReductionScheduleInfo; // ReductionScheduleInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class GroupCovOption_Type {
  public $GroupCovOptionKey; // PERSISTKEY
  public $GroupCovOptionSysKey; // SYSKEY
  public $MaxIssueAge; // integer
  public $BenefitBasis; // OLI_LU_PAYTYPES
  public $EvidenceOfInsurabilityReqInd; // OLI_LU_BOOLEAN
  public $ReductionScheduleInfo; // ReductionScheduleInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Grouping_Type {
  public $GroupingKey; // PERSISTKEY
  public $GroupingSysKey; // SYSKEY
  public $GroupingTypeCode; // OLI_LU_GRPTYPE
  public $GroupingSubTypeCode; // OLI_LU_GRPSUBTYPE
  public $FullName; // string
  public $Description; // string
  public $GroupingStatus; // OLI_LU_CLISTAT
  public $NumMembers; // integer
  public $Source; // string
  public $EffDate; // date
  public $TermDate; // date
  public $GroupingCode; // string
  public $DuesAmt; // decimal
  public $DuesMode; // OLI_LU_PAYMODE
  public $Address; // Address_Type
  public $Household; // Household_Type
  public $RegulatoryDistAgreement; // RegulatoryDistAgreement_Type
  public $DeliveryInfo; // DeliveryInfo_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class GroupPolicy_Type {
  public $GroupPolicyKey; // PERSISTKEY
  public $GroupPolicySysKey; // SYSKEY
  public $DependentAgeLimit; // integer
  public $FullTimeStudentAgeLimit; // integer
  public $EvidenceOfInsurabilityReqInd; // OLI_LU_BOOLEAN
  public $LifetimeMaxAmt; // decimal
  public $EliminationPeriod; // OLI_LU_ELIMPERIOD
  public $MaxIssueAge; // integer
  public $MinParticipationPct; // double
  public $MinParticipationNum; // integer
  public $RetireesEligibleInd; // OLI_LU_BOOLEAN
  public $ElimPeriodExistingEmployees; // OLI_LU_ELIMPERIOD
  public $RoundingRule; // OLI_LU_ROUNDMETH
  public $UnionEmployeesEligibleInd; // OLI_LU_BOOLEAN
  public $SelfInsuredInd; // OLI_LU_BOOLEAN
  public $TimingBasis; // OLI_LU_STMTBASIS
  public $NumEmployees; // integer
  public $RoundingPrecision; // integer
  public $EligibleDependents; // EligibleDependents_Type
  public $ReductionScheduleInfo; // ReductionScheduleInfo_Type
  public $RateInfo; // RateInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class HangGlidingExp_Type {
  public $HangGlidingExpKey; // PERSISTKEY
  public $HangGlidingExpSysKey; // SYSKEY
  public $CertifiedCraftInd; // OLI_LU_BOOLEAN
  public $ExperimentalEquipmentInd; // OLI_LU_BOOLEAN
  public $GliderAssembly; // OLI_LU_ASSEMBLYTYPE
  public $JumpLocationType; // string
  public $CraftAssembly; // OLI_LU_ASSEMBLYTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class HealthServiceOption_Type {
  public $HealthServiceOptionKey; // PERSISTKEY
  public $HealthServiceOptionSysKey; // SYSKEY
  public $HealthService; // OLI_LU_HEALTHSERVICE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Height2_Type {
  public $MeasureUnits; // OLI_LU_MEASUREUNITS
  public $MeasureValue; // double
  public $HeightMeasuredInd; // OLI_LU_BOOLEAN
}

class HHFamilyInsurance_Type {
  public $HHFamilyInsuranceKey; // PERSISTKEY
  public $HHFamilyInsuranceSysKey; // SYSKEY
  public $RoleCodeDesc; // OLI_LU_RELDESC
  public $FullName; // string
  public $AmtOfIns; // decimal
  public $AppliedForInsAmt; // decimal
  public $DeclinedInd; // OLI_LU_BOOLEAN
  public $AppPendingInd; // OLI_LU_BOOLEAN
  public $LineOfBusiness; // OLI_LU_LINEBUS
  public $MEC1035; // OLI_LU_BOOLEAN
  public $ReplacementInd; // OLI_LU_BOOLEAN
  public $RoleCode; // OLI_LU_REL
  public $Applicability; // OLI_LU_APPLICABILITY
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PartyID; // IDREF
}

class Holding_Type {
  public $HoldingKey; // PERSISTKEY
  public $HoldingSysKey; // SYSKEY
  public $AccountDesignation; // OLI_LU_ACCTDES
  public $HoldingTypeCode; // OLI_LU_HOLDTYPE
  public $HoldingName; // string
  public $HoldingStatus; // OLI_LU_HOLDSTAT
  public $Purpose; // OLI_LU_HOLDPURPOSE
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $CarrierAdminSystem; // string
  public $CarrierAdminSubSystem; // OLI_LU_SUBSYSTEM
  public $CostBasis; // decimal
  public $ComponentOfPackage; // OLI_LU_BOOLEAN
  public $AssetValue; // decimal
  public $LiabilityValue; // decimal
  public $AsOfDate; // date
  public $LastFinActivityDate; // date
  public $LastFinActivityType; // OLI_LU_FINACTTYPE
  public $LastNonFinActivityDate; // date
  public $LastAnniversaryDate; // date
  public $NextAnniversaryDate; // date
  public $HoldingForm; // OLI_LU_HOLDINGFORM
  public $AssignmentCode; // OLI_LU_ASSIGNED
  public $QualifiedCode; // OLI_LU_QUALIFIED
  public $RestrictionCode; // OLI_LU_RESTRICT
  public $DistributorClientAcctNum; // string
  public $CommissionHoldInd; // OLI_LU_BOOLEAN
  public $MarketType; // OLI_LU_MARKETTYPE
  public $ShareClass; // OLI_LU_SHARECLASS
  public $Policy; // Policy_Type
  public $Investment; // Investment_Type
  public $Attachment; // Attachment_Type
  public $CompensationPayment; // CompensationPayment_Type
  public $Intent; // Intent_Type
  public $Arrangement; // Arrangement_Type
  public $Loan; // Loan_Type
  public $SystemMessage; // SystemMessage_Type
  public $Banking; // Banking_Type
  public $Authorization; // Authorization_Type
  public $HoldingXLat; // HoldingXLat_Type
  public $Fee; // Fee_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $PolicyValues; // PolicyValues_Type
  public $SurrenderChargeSchedule; // SurrenderChargeSchedule_Type
  public $Integrator; // Integrator_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  function __constuct(){
      $this->HoldingTypeCode;
  }
}

class HoldingXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $HoldingName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Household_Type {
  public $HouseholdKey; // PERSISTKEY
  public $HouseholdSysKey; // SYSKEY
  public $SalutationLabel; // string
  public $GreetingName; // string
  public $EstIncome; // decimal
  public $EstTaxBracket; // double
  public $NumChildren; // integer
  public $GrossUnearnedIncomeAmt; // decimal
  public $GrossEarnedIncomeAmt; // decimal
  public $GrossAnnualCashIncomeAmt; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Identification_Type {
  public $IdentificationKey; // PERSISTKEY
  public $IdentificationSysKey; // SYSKEY
  public $IdentificationNum; // string
  public $IdentityVerificationType; // OLI_LU_IDVERIFICATION
  public $IdentificationExpDate; // date
  public $PictureIDInd; // OLI_LU_BOOLEAN
  public $Jurisdiction; // OLI_LU_STATE
  public $Nation; // OLI_LU_NATION
  public $IdentificationIssueDate; // date
  public $IssuingAgency; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class IdentityVerification_Type {
  public $IdentityVerificationKey; // PERSISTKEY
  public $IdentityVerificationSysKey; // SYSKEY
  public $VerificationDate; // date
  public $VerificationMethod; // OLI_LU_VERIFICATIONMETHOD
  public $Identification; // Identification_Type
  public $VerifierParticipant; // VerifierParticipant_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $VerifiedPartyID; // IDREF
}

class IdentityVerificationTypeCC_Type {
  public $IdentityVerificationType; // OLI_LU_IDVERIFICATION
}

class IllustrationReportRequest_Type {
  public $IllustrationReportRequestKey; // PERSISTKEY
  public $IllustrationReportRequestSysKey; // SYSKEY
  public $IllustrationReportType; // OLI_LU_ILLUSREPORTTYPE
  public $IllustrationReportName; // string
  public $TargetURL; // TargetURL_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class IllustrationRequest_Type {
  public $StartDate; // date
  public $EndDate; // date
  public $RelaxLapseRulesInd; // OLI_LU_BOOLEAN
  public $WaivePolicyFeesInd; // OLI_LU_BOOLEAN
  public $StopOption; // OLI_LU_STOPOPTION
  public $StopAgeYears; // integer
  public $VariableProjectionType; // ILL_VAR_PROJTYPE
  public $ImageType; // OLI_LU_IMAGEFORMAT
  public $AttachmentLocation; // OLI_LU_ATTACHLOCATION
  public $RevisedIllustrationInd; // OLI_LU_BOOLEAN
  public $RequestBasis; // RequestBasis_Type
  public $IllustrationTxn; // IllustrationTxn_Type
  public $IllustrationReportRequest; // IllustrationReportRequest_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $AnchorBasisID; // IDREF
}

class IllustrationResult_Type {
  public $TaxFailDate; // date
  public $ResultBasis; // ResultBasis_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
}

class IllustrationTxn_Type {
  public $IllusTxnPrimaryType; // TC_ILLUSPRIMTYPE
  public $IllusTxnSecondaryType; // TC_ILLUSSECTYPE
  public $IllusTxnTertiaryType; // TC_ILLUSTERTTYPE
  public $IllusTxnAmt; // decimal
  public $IllusTxnMode; // OLI_LU_PAYMODE
  public $StartDate; // date
  public $EndDate; // date
  public $IncreasePercent; // double
  public $OverrideStatePremiumTaxInd; // OLI_LU_BOOLEAN
  public $OverrideStatePremiumTaxAmt; // double
  public $SuppSolveType; // OLI_LU_SUPPSOLVETYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $CoverageRef; // string
  public $CoverageID; // IDREF
}

class ImpairedOptions_Type {
  public $ImpairedOptionsKey; // PERSISTKEY
  public $ImpairedOptionsSysKey; // SYSKEY
  public $ImpairedType; // OLI_LU_IMPAIRED_TYPE
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class IncomeOptConflict_Type {
  public $IncomeOptConflictKey; // PERSISTKEY
  public $IncomeOptConflictSysKey; // SYSKEY
  public $IncomePayoutProductOptionCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class IncomeOptionCC_Type {
  public $IncomeOption; // OLI_LU_INCOPTION
}

class IncomeOptionInfo_Type {
  public $IncomeOptionInfoKey; // PERSISTKEY
  public $IncomeOptionInfoSysKey; // SYSKEY
  public $IncomeOptionName; // string
  public $IncomeOptionDescription; // string
  public $IncomeOption; // OLI_LU_INCOPTION
  public $MaxIssueAge; // integer
  public $MaxIssueAgeOwner; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class IncomeOptRequisite_Type {
  public $IncomeOptRequisiteKey; // PERSISTKEY
  public $IncomeOptRequisiteSysKey; // SYSKEY
  public $IncomePayoutProductOptionCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class IncomePayoutProductOption_Type {
  public $IncomePayoutProductOptionKey; // PERSISTKEY
  public $IncomePayoutProductOptionSysKey; // SYSKEY
  public $ProductCode; // string
  public $Sequence; // integer
  public $IncomeOptionCC; // IncomeOptionCC_Type
  public $LivesType; // OLI_LU_LIVESTYPE
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $LiquidityFeatureType; // OLI_LU_LIQUIDITYFEATURE
  public $RevokableInd; // OLI_LU_BOOLEAN
  public $AnnuitizationMinDelayMonths; // integer
  public $PayoutType; // OLI_LU_ANNPAYOUT
  public $BenefitReductionBasedOn; // OLI_LU_BENREDUCEBASEDON
  public $MinDelayMonths; // integer
  public $MaxDelayMonths; // integer
  public $MaxNumPayees; // integer
  public $MinPremiumInitialAmt; // decimal
  public $MaxPremiumInitialAmt; // decimal
  public $Description; // string
  public $ParticipantBasedOn; // OLI_LU_PARTICROLE
  public $Name; // string
  public $IncomeOption; // OLI_LU_INCOPTION
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MinIssueAgeOwner; // integer
  public $MaxIssueAgeOwner; // integer
  public $ContingentJointCC; // ContingentJointCC_Type
  public $SplitPctIncrementsCC; // SplitPctIncrementsCC_Type
  public $AssumedInterestRateCC; // AssumedInterestRateCC_Type
  public $COLFixedPct; // double
  public $COLIndexCC; // COLIndexCC_Type
  public $COLIndexCapCC; // COLIndexCapCC_Type
  public $PaymentModeMethProduct; // PaymentModeMethProduct_Type
  public $PeriodCertainCC; // PeriodCertainCC_Type
  public $LevelizationOptionCC; // LevelizationOptionCC_Type
  public $FeatureOptConflict; // FeatureOptConflict_Type
  public $FeatureOptRequisite; // FeatureOptRequisite_Type
  public $IncomeOptionRequired; // OLI_LU_DATAREQ
  public $IncomeOptionInfo; // IncomeOptionInfo_Type
  public $ContingencyBenefitChange; // ContingencyBenefitChange_Type
  public $AllowedChange; // AllowedChange_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $TaxWithholdingProduct; // TaxWithholdingProduct_Type
  public $LevelizationProductOption; // LevelizationProductOption_Type
  public $Attachment; // Attachment_Type
  public $ReturnOfPremium; // ReturnOfPremium_Type
  public $AnnualIndexOption; // AnnualIndexOption_Type
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $AllowedRelationship; // AllowedRelationship_Type
  public $DateCollection; // DateCollection_Type
  public $AllocTypeProduct; // AllocTypeProduct_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InformationService_Type {
  public $InformationServiceKey; // PERSISTKEY
  public $InformationServiceSysKey; // SYSKEY
  public $InformationServiceProvider; // OLI_LU_INFOSRVPROVIDER
  public $InformationServiceCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InheritedTimingAllowed_Type {
  public $InheritedTimingAllowedKey; // PERSISTKEY
  public $InheritedTimingAllowedSysKey; // SYSKEY
  public $InheritedPayoutTiming; // OLI_LU_INHERITEDTIMING
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InquiryView_Type {
  public $InquiryViewKey; // PERSISTKEY
  public $InquiryViewSysKey; // SYSKEY
  public $InquiryViewCode; // string
  public $ObjectTypeInfo; // ObjectTypeInfo_Type
  public $RelationRoleCodeCC; // RelationRoleCodeCC_Type
  public $ParticipantRoleCodeCC; // ParticipantRoleCodeCC_Type
  public $PersistTypeCode; // OLI_LU_PERSIST
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Integrator_Type {
  public $IntegratorKey; // PERSISTKEY
  public $IntegratorSysKey; // SYSKEY
  public $IntegratorType; // OLI_LU_INTEGRATOR
  public $IntegratorAmt; // decimal
  public $IntegratorPct; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $AppliesToHoldingID; // IDREF
}

class Intent_Type {
  public $ExpenseNeedKey; // PERSISTKEY
  public $NeedName; // string
  public $IntentCategory; // OLI_LU_INTENTCATEGORY
  public $ExpenseNeedTypeCode; // OLI_LU_NEED
  public $Objective; // OLI_LU_INVESTOBJ
  public $TaxInterpretationFlag; // OLI_LU_BOOLEAN
  public $NeedAmount; // decimal
  public $NeedAmountBasedOn; // OLI_LU_NEEDAMTBASIS
  public $Frequency; // OLI_LU_FREQ
  public $StartDate; // date
  public $StartDateBasedOn; // OLI_LU_STARTDATEBASIS
  public $EndDate; // date
  public $EndDateBasedOn; // OLI_LU_ENDDATEBASIS
  public $SolutionType; // OLI_LU_SOLUTIONTYPE
  public $VendorCode; // string
  public $ScenarioName; // string
  public $TimesRuleNumber; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $ScenarioID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $BusInterestID; // IDREF
}

class Interview_Type {
  public $InterviewKey; // PERSISTKEY
  public $InterviewSysKey; // SYSKEY
  public $InterviewType; // OLI_LU_INTERVIEWTYPE
  public $InterviewStatus; // OLI_LU_ACTSTAT
  public $InterviewerRole; // OLI_LU_PARTICROLE
  public $IntervieweeRole; // OLI_LU_PARTICROLE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Investment_Type {
  public $InvestmentKey; // PERSISTKEY
  public $InvestmentSysKey; // SYSKEY
  public $CarrierAdminSystem; // string
  public $AcctNum; // string
  public $AcctOpenDate; // date
  public $AcctCloseDate; // date
  public $Liability; // decimal
  public $QualPlanType; // OLI_LU_QUALPLAN
  public $QualPlanSubType; // OLI_LU_QUALPLANSUBTYPE
  public $QualPlanOriginationDate; // date
  public $TaxStatus; // OLI_LU_TAXSTAT
  public $DownloadDate; // date
  public $CarrierCode; // string
  public $LastFinActivityDate; // date
  public $LastNonFinActivityDate; // date
  public $CustomerStatementDate; // date
  public $RedemptionMethod; // OLI_LU_REDEMPTION
  public $ClearingHouseInd; // OLI_LU_BOOLEAN
  public $CheckWritingInd; // OLI_LU_BOOLEAN
  public $TelephoneTransferInd; // OLI_LU_BOOLEAN
  public $ElectronicTransInd; // OLI_LU_BOOLEAN
  public $PolicyChargeAllocation; // OLI_LU_POLICYCHARGE
  public $EEContribPct; // double
  public $ERContribPct; // double
  public $EEContribAmt; // decimal
  public $ERContribAmt; // decimal
  public $LetterOfIntentAmt; // decimal
  public $LetterOfIntentStatus; // OLI_LU_LTRINTENT
  public $MarginInd; // OLI_LU_BOOLEAN
  public $OptionsInd; // OLI_LU_BOOLEAN
  public $TaxCalcBirthDateTC; // OLI_LU_TAXCALCBIRTHTYPECODE
  public $TotalTradesYTD; // integer
  public $LastTradeDate; // date
  public $MarginLoanAvailable; // decimal
  public $AccountValue; // decimal
  public $AccountValueLastMonth; // decimal
  public $AccountValueLastAnn; // decimal
  public $AccountValueLastYear; // decimal
  public $TaxQualRolloverAmt; // decimal
  public $FundTransferLockInd; // OLI_LU_BOOLEAN
  public $FundTransferPendingInd; // OLI_LU_BOOLEAN
  public $FundTransferAllowedInd; // OLI_LU_BOOLEAN
  public $InvManagerType; // OLI_LU_INVMGR
  public $InvestType; // OLI_LU_INVESTPROD
  public $PooledInd; // OLI_LU_BOOLEAN
  public $PutProvType; // OLI_LU_PUTPROVISION
  public $TotalFundTransfersYTD; // integer
  public $TotalFundTransfersATD; // integer
  public $FreeWithdrawalPct; // double
  public $AnnualFreeWithdrawalAmtLeft; // decimal
  public $BackEndLoadFreeAmt; // decimal
  public $NetSurrValueAmt; // decimal
  public $SurrenderChargeAmt; // decimal
  public $SignedDate; // date
  public $IssueNation; // OLI_LU_NATION
  public $IssueNationDesc; // string
  public $Jurisdiction; // OLI_LU_STATE
  public $NextBonusDate; // date
  public $InvestmentSubTotalInfo; // InvestmentSubTotalInfo_Type
  public $SubAccount; // SubAccount_Type
  public $RateOfReturnInfo; // RateOfReturnInfo_Type
  public $Participant; // Participant_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $CarrierPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $ProductID; // IDREF
}

class InvestmentStatement_Type {
  public $InvestmentStatementKey; // PERSISTKEY
  public $InvestmentStatementSysKey; // SYSKEY
  public $AcctNum; // string
  public $VolDedContribPriorPeriodAmt; // decimal
  public $VolDedContribAmt; // decimal
  public $VolNonDedContribPriorPeriodAmt; // decimal
  public $VolNonDedContribAmt; // decimal
  public $EEContribAmtPriorPeriodAmt; // decimal
  public $EEContribAmt; // decimal
  public $TaxQualRolloverAmtPriorPerAmt; // decimal
  public $TaxQualRolloverAmt; // decimal
  public $SubAccountStatement; // SubAccountStatement_Type
  public $InvestmentStatementDetail; // InvestmentStatementDetail_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $AccountHolderPartyID; // IDREF
  public $HoldingID; // IDREF
}

class InvestmentStatementDetail_Type {
  public $InvestmentStatementDetailKey; // PERSISTKEY
  public $InvestmentStatementDetailSysKey; // SYSKEY
  public $StartDate; // date
  public $EndDate; // date
  public $VolDedContribAmt; // decimal
  public $VolNonDedContribAmt; // decimal
  public $EEContribAmt; // decimal
  public $TaxQualRolloverAmt; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InvestmentSubTotalInfo_Type {
  public $InvestmentSubTotalInfoKey; // PERSISTKEY
  public $InvestmentSubTotalInfoSysKey; // SYSKEY
  public $InvestType; // OLI_LU_INVESTPROD
  public $AssetClass; // OLI_LU_ASSETCLASS
  public $TotalValue; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InvestPortfolio_Type {
  public $InvestPortfolioKey; // PERSISTKEY
  public $InvestPortfolioSysKey; // SYSKEY
  public $FullName; // string
  public $CusipNum; // string
  public $ProductSymbol; // string
  public $ProductCode; // string
  public $AssetClass; // OLI_LU_ASSETCLASS
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $AnnualDividend; // decimal
  public $GrowthRate; // double
  public $PriceFactor; // double
  public $InvestmentRate; // double
  public $RateType; // OLI_LU_RATETYPE
  public $GuarLifetimeRate; // double
  public $GuarInvestmentRate; // double
  public $GuarEndDate; // date
  public $UnitPrice; // decimal
  public $UnitPriceAsOfDate; // date
  public $CompoundMode; // OLI_LU_PAYMODE
  public $LoadingType; // OLI_LU_LOADINGTYPE
  public $InvestPortfolioXLat; // InvestPortfolioXLat_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InvestPortfolioXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $FullName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InvestProduct_Type {
  public $InvestProductKey; // PERSISTKEY
  public $InvestProductSysKey; // SYSKEY
  public $CusipNum; // string
  public $InvestProductTypeCode; // OLI_LU_INVESTPROD
  public $ProductSymbol; // string
  public $ProductCode; // string
  public $JurisdictionCC; // JurisdictionCC_Type
  public $FullName; // string
  public $ShortName; // string
  public $Objective; // OLI_LU_INVESTOBJ
  public $CarrierCode; // string
  public $CarrierName; // string
  public $AssetClass; // OLI_LU_ASSETCLASS
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $AnnualDividend; // decimal
  public $GrowthRate; // double
  public $PriceFactor; // double
  public $InvestmentRate; // double
  public $RateType; // OLI_LU_RATETYPE
  public $InvestRateSubType; // OLI_LU_INVESTRATESUBTYPE
  public $InterestMode; // OLI_LU_PAYMODE
  public $InterestCalcType; // OLI_LU_INTCALCTYPE
  public $GuarLifetimeRate; // double
  public $GuarInvestmentRate; // double
  public $GuarEndDate; // date
  public $UnitPrice; // decimal
  public $UnitPriceAsOfDate; // date
  public $UnitValueBuyRate; // decimal
  public $CompoundMode; // OLI_LU_PAYMODE
  public $LoadingType; // OLI_LU_LOADINGTYPE
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $AvgRateOfReturn; // double
  public $CurrYrProductFeeAmt; // decimal
  public $MarketValAdjustInd; // OLI_LU_BOOLEAN
  public $VersionDate; // date
  public $MoneyMovementCode; // OLI_LU_MONEY
  public $QualifiedCode; // OLI_LU_QUALIFIED
  public $RegulatedCode; // OLI_LU_REGISTRATION
  public $RiskToleranceCode; // OLI_LU_RISK
  public $NoNewMoneyDate; // date
  public $MinPct; // double
  public $InvManagerType; // OLI_LU_INVMGR
  public $FinActivityTypeCC; // FinActivityTypeCC_Type
  public $InterestRateClass; // string
  public $DateBasedOn; // OLI_LU_DATEBASIS
  public $SoftCloseDate; // date
  public $FundFamilyName; // string
  public $ProprietaryFundInd; // OLI_LU_BOOLEAN
  public $LiquidationDate; // date
  public $FiscalYearEndMoDay; // gMonthDay
  public $ProspectusMoDay; // gMonthDay
  public $InvestProductStatus; // OLI_LU_INVESTPRODSTAT
  public $ShareClass; // OLI_LU_SHARECLASS
  public $AllocationRuleAlgorithm; // OLI_LU_ALLOCATION_RULE
  public $AllocationRuleRefInvestProdCd; // string
  public $Fee; // Fee_Type
  public $RateVariation; // RateVariation_Type
  public $InvestPortfolio; // InvestPortfolio_Type
  public $InvestProductInfo; // InvestProductInfo_Type
  public $InvestProductXLat; // InvestProductXLat_Type
  public $InformationService; // InformationService_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $RateLockInfo; // RateLockInfo_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class InvestProductInfo_Type {
  public $InvestProductInfoKey; // PERSISTKEY
  public $InvestProductInfoSysKey; // SYSKEY
  public $CarrierCode; // string
  public $Sequence; // integer
  public $FullName; // string
  public $CusipNum; // string
  public $ProductSymbol; // string
  public $ProductCode; // string
  public $IncludeOption; // OLI_LU_INCLUDEOPTION
  public $RateVariationKey; // PERSISTKEY
  public $UnitPriceBuyRate; // decimal
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $NoNewMoneyDate; // date
  public $MinDepositAmt; // decimal
  public $MaxDepositAmt; // decimal
  public $MinDepositPct; // double
  public $MaxDepositPct; // double
  public $MaxAmt; // decimal
  public $MinAmt; // decimal
  public $MaxPct; // double
  public $MinPct; // double
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $PartySelection; // OLI_LU_PARTYSELECT
  public $ParticipantBasedPartySelection; // OLI_LU_PARTICROLE
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MinIssueAgeOwner; // integer
  public $MaxIssueAgeOwner; // integer
  public $SoftCloseDate; // date
  public $InforceExclusionCalendarDate; // date
  public $InforceExclusionContractDate; // date
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $InvestProductTypeCode; // OLI_LU_INVESTPROD
  public $Fee; // Fee_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $InvestProductInfoXLat; // InvestProductInfoXLat_Type
  public $RateVariationCode; // string
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ProductID; // IDREF
  public $InvestProductID; // IDREF
  public $RateVariationID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class InvestProductInfoXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $FullName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InvestProductXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $FullName; // string
  public $ShortName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InvestRuleProduct_Type {
  public $InvestRuleProductKey; // PERSISTKEY
  public $InvestRuleProductSysKey; // SYSKEY
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $InvestRule; // OLI_FREELOOKINVEST
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class InvoiceDetail_Type {
  public $InvoiceDetailKey; // PERSISTKEY
  public $InvoiceDetailSysKey; // SYSKEY
  public $UserCode; // string
  public $InvoiceDetailStatus; // OLI_LU_INVDETSTAT
  public $OrderedQuantity; // integer
  public $FilledQuantity; // integer
  public $GrossAmt; // decimal
  public $DiscountAmt; // decimal
  public $DisputedAmt; // decimal
  public $OriginalBilledAmt; // decimal
  public $CustomerAccountNumber; // string
  public $AmountPaidToDate; // decimal
  public $ProviderPackageCode; // string
  public $ProviderPackageDesc; // string
  public $Jurisdiction; // OLI_LU_STATE
  public $Zip; // string
  public $LabSlipTicketNum; // string
  public $ServiceDate; // date
  public $EvaluationFaceAmt; // decimal
  public $InvoiceRequirementInfo; // InvoiceRequirementInfo_Type
  public $Fee; // Fee_Type
  public $DenialInfo; // DenialInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $AgencyPartyID; // IDREF
  public $AgentPartyID; // IDREF
  public $AppliesToPartyID; // IDREF
  public $RequesterPartyID; // IDREF
  public $FulfillerPartyID; // IDREF
  public $PhysicianPartyID; // IDREF
  public $FacilityPartyID; // IDREF
  public $ExaminerCompanyID; // IDREF
}

class InvoiceRequirementInfo_Type {
  public $InvoiceRequirementInfoKey; // PERSISTKEY
  public $InvoiceRequirementInfoSysKey; // SYSKEY
  public $ReqCategory; // OLI_LU_REQCAT
  public $ProviderOrderNum; // string
  public $CarrierOrderNum; // string
  public $ReqCode; // OLI_LU_REQCODE
  public $HORequirementRefID; // string
  public $RequirementInfoUniqueID; // string
  public $RequirementDetails; // string
  public $ReqStatus; // OLI_LU_REQSTAT
  public $RequestedDate; // date
  public $ReceivedDate; // date
  public $ScheduledDate; // date
  public $RequirementAcctNum; // string
  public $Priority; // OLI_LU_PRIORITY
  public $TrackingInfo; // TrackingInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $RequirementInfoID; // IDREF
}

class IRSPremCalcMethod_Type {
  public $IRSPremCalcMethodKey; // PERSISTKEY
  public $IRSPremCalcMethodSysKey; // SYSKEY
  public $IRSPremCalcType; // OLI_LU_IRSPREMCALCTYPE
  public $SubstandardRateRule; // OLI_LU_TAMRASUBRATERULE
  public $TabularRateInd; // OLI_LU_BOOLEAN
  public $MortalityAssumption; // TC_MORTASSUMPTION
  public $InterestAssumption; // TC_INTASSUMPTION
  public $Duration; // integer
  public $DurQualifier; // OLI_LU_PAYMODE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class IssueGenderCC_Type {
  public $IssueGender; // OLI_LU_GENDER
}

class JurisdictionApproval_Type {
  public $JurisdictionApprovalKey; // PERSISTKEY
  public $JurisdictionApprovalSysKey; // SYSKEY
  public $Jurisdiction; // OLI_LU_STATE
  public $Name; // string
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $InforceExclusionCalendarDate; // date
  public $InforceExclusionContractDate; // date
  public $NoNewMoneyDate; // date
  public $FiledFormNumber; // string
  public $ContractSitusCanDifferInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class JurisdictionCC_Type {
  public $Jurisdiction; // OLI_LU_STATE
}

class Key_Type {
  public $Key; // Key_Type
  public $Axis; // Axis_Type
  public $Y; // Y_Type
  public $Extension; // Extension_Type
  public $tc; // XTbML_DEFAULT_TYPE_CODE
  public $KeyIs; // string
  public $KeyDefID; // IDREF
}

class KeyDef_Type {
  public $KeyType; // KEYTYPE_TYPE
  public $KeySubType; // KEYSUBTYPE_TYPE
  public $KeySubClassType; // OLI_LU_OBJECTTYPE
  public $KeySubClass; // string
  public $KeyName; // string
  public $DimensionSequence; // integer
  public $EnumeratedTypeCodeValue; // ENUMERATEDTYPECODEVALUE_TYPE
  public $EnumeratedStringValue; // string
  public $KeyCodeType; // OLI_LU_LOOKUP
  public $Extension; // Extension_Type
  public $id; // ID
}

class KeyedValue_Type {
  public $KeyName; // string
  public $VendorCode; // string
  public $KeyValue; // KeyValue_Type
  public $id; // ID
  public $tc; // OLI_LU_VARIANTATT
  public $DataRep; // DATAREP_TYPES
  public $SystemCode; // string
}

class Kit_Type {
  public $KitKey; // PERSISTKEY
  public $KitSysKey; // SYSKEY
  public $KitCode; // OLI_LU_LABKITCODE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LabTesting_Type {
  public $LabTestingKey; // PERSISTKEY
  public $LabTestingSysKey; // SYSKEY
  public $TestUpdateDate; // date
  public $SensitiveResultsInd; // OLI_LU_BOOLEAN
  public $CertifiedOrg; // string
  public $CertNo; // string
  public $TestDate; // date
  public $TestPartialDate; // PARTIAL_DATE_TYPE
  public $LabTestResult; // LabTestResult_Type
  public $LabTestRemark; // LabTestRemark_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LabTestRemark_Type {
  public $LabTestRemarkKey; // PERSISTKEY
  public $LabTestRemarkSysKey; // SYSKEY
  public $RemarkCode; // string
  public $RemarkSubCode; // string
  public $RemarkValue; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LabTestResult_Type {
  public $LabTestResultKey; // PERSISTKEY
  public $LabTestResultSysKey; // SYSKEY
  public $TestCode; // OLI_LU_REQCODE
  public $ProviderTestCode; // string
  public $TestDate; // date
  public $TestUpdateDate; // date
  public $QualitativeResult; // QualitativeResult_Type
  public $QuantitativeResult; // QuantitativeResult_Type
  public $ReferenceRange; // ReferenceRange_Type
  public $LabTestRemark; // LabTestRemark_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $RequirementInfoID; // IDREF
}

class LapseProvision_Type {
  public $LapseProvisionKey; // PERSISTKEY
  public $LapseProvisionSysKey; // SYSKEY
  public $GracePeriodEntryType; // OLI_LU_GPENTRY
  public $ExtendPeriodOnIncreaseInd; // OLI_LU_BOOLEAN
  public $MarketingName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LevelizationOptionCC_Type {
  public $LevelizationOption; // OLI_LU_LEVELIZEDOPT
  public $PaymentModeMethProduct; // PaymentModeMethProduct_Type
}

class LevelizationProductOption_Type {
  public $LevelizationProductOptionKey; // PERSISTKEY
  public $LevelizationProductOptionSysKey; // SYSKEY
  public $PaymentFloorPct; // double
  public $LevelizationOption; // OLI_LU_LEVELIZEDOPT
  public $LevelizationOptionName; // string
  public $LevelizationOptionCode; // string
  public $PaymentModeMethProduct; // PaymentModeMethProduct_Type
  public $Fee; // Fee_Type
  public $FeatureOptRequisite; // FeatureOptRequisite_Type
  public $ExclusionInvestProduct; // ExclusionInvestProduct_Type
  public $AssumedInterestRateCC; // AssumedInterestRateCC_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class License_Type {
  public $LicenseKey; // PERSISTKEY
  public $LicenseSysKey; // SYSKEY
  public $LicenseID; // string
  public $LicenseNum; // string
  public $LicenseCountry; // OLI_LU_NATION
  public $LicenseState; // OLI_LU_STATE
  public $LicenseType; // OLI_LU_LICENSETYPE
  public $LicenseClassType; // OLI_LU_LICENSECLASSTYPE
  public $LicenseStatus; // OLI_LU_LICENSESTATUS
  public $LicenseStatusDate; // date
  public $LicenseStatusReason; // string
  public $EffDate; // date
  public $ExpDate; // date
  public $OriginationDate; // date
  public $NameOnLicense; // string
  public $ResidentOfState; // OLI_LU_BOOLEAN
  public $GovtID; // string
  public $GovtIDTC; // OLI_LU_GOVTIDTC
  public $LicenseInterruptedInd; // OLI_LU_BOOLEAN
  public $RenewalDate; // date
  public $Exam; // Exam_Type
  public $LineOfAuthority; // LineOfAuthority_Type
  public $RequirementInfo; // RequirementInfo_Type
  public $Fee; // Fee_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $RegistrationRefID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $LicenseAddressID; // IDREF
  public $AgencyAffiliationID; // IDREF
}

class Life_Type {
  public $LifeKey; // PERSISTKEY
  public $LifeSysKey; // SYSKEY
  public $NonFortProv; // OLI_LU_NONFORTPROV
  public $QualPlanType; // OLI_LU_QUALPLAN
  public $QualPlanSubType; // OLI_LU_QUALPLANSUBTYPE
  public $QualPlanOriginationDate; // date
  public $ExcessPremAmtATD; // decimal
  public $GrossPremAmtATD; // decimal
  public $PremDurationDate; // date
  public $PremOffsetMethod; // OLI_LU_OFFSETMETHOD
  public $TargetPremAmt; // decimal
  public $Target2PremAmt; // decimal
  public $TotCumPremAmt; // decimal
  public $CumMinPremAmt; // decimal
  public $CumPremAmtFirstYr; // decimal
  public $LastPremAmt; // decimal
  public $LastPremDate; // date
  public $SuspenseAmt; // decimal
  public $LastPremExpenseCharge; // decimal
  public $MinPremAmt; // decimal
  public $InitDepositAmt; // decimal
  public $InitDepositDate; // date
  public $GDBDate; // date
  public $GDBValue; // decimal
  public $SumGDBLifePrems; // decimal
  public $SumGDBLimPrems; // decimal
  public $TotalRolloverAmt; // decimal
  public $PremiumSuspenseAmt; // decimal
  public $PremiumSuspenseReason; // OLI_LU_PREMSUSPENSE
  public $GrossPremAmtPriorAnnYr; // decimal
  public $GrossPremAmtITD; // decimal
  public $GrossPremAmtMTD; // decimal
  public $GrossPremAmtYTD; // decimal
  public $UnschedPremAmtITD; // decimal
  public $LastUnschedPremDate; // date
  public $UnschedPremAmtATD; // decimal
  public $NonCommPremAnnualized; // decimal
  public $FullyCommPremAnnualized; // decimal
  public $InitialPremAmt; // decimal
  public $EEContribAmt; // decimal
  public $ERContribAmt; // decimal
  public $EEContribPct; // double
  public $ERContribPct; // double
  public $CurrLoanIntRate; // double
  public $LastLoanAmt; // decimal
  public $LastLoanDate; // date
  public $LoanIntDue; // decimal
  public $LoanAmtATD; // decimal
  public $LoanIntAmtATD; // decimal
  public $LoanIntTiming; // OLI_LU_LOANTIMING
  public $LoanIntType; // OLI_LU_LOANTYPE
  public $LoanIntMethod; // OLI_LU_LOANMETHOD
  public $LoanedAmtIntRate; // double
  public $LoanBalanceForImpaired; // decimal
  public $LoanIntPaidToDate; // date
  public $RegularLoanBalance; // decimal
  public $PreferredLoanBalance; // decimal
  public $MaxAvailableLoan; // decimal
  public $MaxAvailPrefLoan; // decimal
  public $LoanPaymentMethod; // OLI_LU_PAYMETHOD
  public $LoanPaymentMode; // OLI_LU_PAYMODE
  public $LoanPaymentAmt; // decimal
  public $LoanPaymentDraftDay; // integer
  public $LoanFedWithholding; // decimal
  public $LoanJurisdictionWithholding; // decimal
  public $FaceAmt; // decimal
  public $FaceUnits; // double
  public $ValuePerUnit; // decimal
  public $NetSurrValueAmt; // decimal
  public $CashValueAmt; // decimal
  public $DeathBenefitAmt; // decimal
  public $SurrenderChargeAmt; // decimal
  public $NetDeathBenefitAmt; // decimal
  public $CurrIntRate; // double
  public $CurrIntRateDate; // date
  public $WithdrawalRule; // OLI_LU_WTHDRWLRULE
  public $GrossWthdrwlAmt; // decimal
  public $LastWthdrwlDate; // date
  public $TotWthdrwlAmtITD; // decimal
  public $TotWthdrwlAmtATD; // decimal
  public $CumWthdrwlAmtMTD; // decimal
  public $CumWthdrwlAmtYTD; // decimal
  public $NetWthdrwlAmtATD; // decimal
  public $NetWthdrwlAmtITD; // decimal
  public $NetWthdrwlAmtMTD; // decimal
  public $NetWthdrwlAmtYTD; // decimal
  public $NumWthdrwATD; // integer
  public $NumWthdrwITD; // integer
  public $NumWthdrwMTD; // integer
  public $NumWthdrwYTD; // integer
  public $WithdrwMaxPct; // double
  public $CashValueIncreaseAmtATD; // decimal
  public $CashValueIncreaseAmtPriorYr; // decimal
  public $DivType; // OLI_LU_DIVTYPE
  public $DivOYTDate; // date
  public $DivOYTOptType; // OLI_LU_DIVOYTTYPE
  public $DivPaidInCash; // decimal
  public $LastDivAmt; // decimal
  public $LastDivDate; // date
  public $TermDivAmt; // decimal
  public $DivSeriesInd; // OLI_LU_BOOLEAN
  public $DivSeriesIndString; // string
  public $NextDivAmt; // decimal
  public $NextDivDate; // date
  public $IndexCover; // OLI_LU_BOOLEAN
  public $IndexRate; // double
  public $RolloverDate; // date
  public $TransferToPaidDate; // date
  public $TaxableInterestEarnedATD; // decimal
  public $TaxWithheldOnInterestEarnedATD; // decimal
  public $ConversionCreditAmt; // decimal
  public $TotalMiscCashValueAdjustments; // decimal
  public $TotalRiskAmt; // decimal
  public $PremiumDepositFundAmt; // decimal
  public $ProjectedCurrLapseDate; // date
  public $ProjectedCurrIntRate; // double
  public $ProjectedGuarLapseDate; // date
  public $ProjectedGuarIntRate; // double
  public $ProjectedLapseCalcDate; // date
  public $DivCashVal; // decimal
  public $DivOnDepositIntRate; // double
  public $DivOnDepositIntAmt; // decimal
  public $DivOnDepositAmt; // decimal
  public $DivPUA; // decimal
  public $TotalPUA; // decimal
  public $OYTPurchaseAmt; // decimal
  public $PremiumPerUnit; // decimal
  public $PremiumRatePerUnit; // double
  public $RenewalPremiumPerUnit; // decimal
  public $RenewalPremiumRatePerUnit; // double
  public $CumPrefWthdrwlAmtYTD; // decimal
  public $CumPrefWthdrwlAmtITD; // decimal
  public $CurrImpairedLoanChgIntRate; // double
  public $RequestedMaturityAge; // integer
  public $RequestedMaturityDur; // integer
  public $RequestedMaturityDate; // date
  public $ExcessPremAmtITD; // decimal
  public $PremiumBonusReason; // OLI_LU_BONUSREAS
  public $PremiumBonusAmt; // decimal
  public $CarrierPricingIndicator; // string
  public $NonDivCashVal; // decimal
  public $NonDivOnDepositIntAmt; // decimal
  public $NonDivOnDepositAmt; // decimal
  public $NonDivPUA; // decimal
  public $HighestTableRating; // OLI_LU_RATINGS
  public $CommissionablePremiumAmt; // decimal
  public $BeneDesignationWording; // string
  public $TotDivOnDepositAmtITD; // decimal
  public $PolicyOptionCode; // string
  public $InterestEarnedATD; // decimal
  public $RPUInitialAmt; // decimal
  public $RPUUltimateAmt; // decimal
  public $RPUChangeDate; // date
  public $XIYears; // integer
  public $XIDays; // integer
  public $XIAmtOfPureEndow; // decimal
  public $ExcessDivAmt; // decimal
  public $ExcessDivAmtDisp; // OLI_LU_DIVAMTDISP
  public $ExcessDivType; // OLI_LU_DIVTYPE
  public $ExcessResidualDivAmt; // decimal
  public $ExcessResidualDivAmtDisp; // OLI_LU_DIVAMTDISP
  public $ResidualDivType; // OLI_LU_DIVTYPE
  public $ResidualDivAmt; // decimal
  public $PremiumOffsetStatus; // OLI_LU_PREMOFFSTAT
  public $PolicyReviewDate; // date
  public $Coverage; // Coverage_Type
  public $LifeUSA; // LifeUSA_Type
  public $LifeCanada; // LifeCanada_Type
  public $KeyedValue; // KeyedValue_Type
  public $Superannuation; // Superannuation_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LifeCanada_Type {
  public $LifeCanadaKey; // PERSISTKEY
  public $LifeCanadaSysKey; // SYSKEY
  public $MaxTaxExemptPremAmt; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LifeParticipant_Type {
  public $LifeParticipantKey; // PERSISTKEY
  public $LifeParticipantSysKey; // SYSKEY
  public $ParticipantName; // string
  public $LifeParticipantRoleCode; // OLI_LU_PARTICROLE
  public $ParticipationPct; // double
  public $IssueAge; // integer
  public $ClosedAge; // integer
  public $IssueGender; // OLI_LU_GENDER
  public $ResidenceNationAtIssue; // OLI_LU_NATION
  public $ResidenceJurisdictionAtIssue; // OLI_LU_STATE
  public $OccupRating; // OLI_LU_OCCUPRATING
  public $PermFlatExtraAmt; // decimal
  public $PermFlatExtraEndDate; // date
  public $SmokerStat; // OLI_LU_SMOKERSTAT
  public $TobaccoPremiumBasis; // OLI_LU_TOBPREMBASIS
  public $RatingReason; // string
  public $RatingOverriddenInd; // OLI_LU_BOOLEAN
  public $PermTableRating; // OLI_LU_RATINGS
  public $PermTableRatingEndDate; // date
  public $TempTableRating; // OLI_LU_RATINGS
  public $TempTableRatingStartDate; // date
  public $TempTableRatingEndDate; // date
  public $TempFlatEndDate; // date
  public $TempFlatExtraAmt; // decimal
  public $FlatExtraPremBasis; // OLI_LU_FLATEXTRAPREMBASISCODE
  public $ModalGrossFlatExtraPremAmt; // decimal
  public $ModalGrossFlatExtraAllowanceAmt; // decimal
  public $IssuedAsAppliedInd; // OLI_LU_BOOLEAN
  public $UnderwritingClass; // OLI_LU_UNWRITECLASS
  public $UnderwritingSubClass; // OLI_LU_UNWRITESUBCLASS
  public $BeneficiarySeqNum; // integer
  public $BeneficiaryPercentDistribution; // double
  public $BeneficiaryAmountDistribution; // decimal
  public $IrrevokableInd; // OLI_LU_BOOLEAN
  public $BeneficiaryShareMethod; // OLI_LU_BENEFICIARYSHAREMETHOD
  public $BeneficiaryCommonDisasterPeriod; // integer
  public $DistributionOption; // OLI_LU_DISTOPTION
  public $BeneficiaryDesignation; // OLI_LU_BENEDESIGNATION
  public $BeneficiaryRoleCode; // OLI_LU_REL
  public $BeneficiaryRoleCodeDesc; // OLI_LU_RELDESC
  public $ASCOCode; // string
  public $ReconsiderationDate; // date
  public $RatingCommissionRule; // OLI_LU_RATCOMMRUL
  public $ClassName; // string
  public $CommissionLink; // string
  public $ParticipantStatus; // OLI_LU_CLISTAT
  public $UnderwritingStatus; // OLI_LU_UNDSTAT
  public $IssueAgeSource; // OLI_LU_INFOOBTAINTYPE
  public $AgeSetBackQuantity; // integer
  public $OriginalIssueAge; // integer
  public $InsuredSeqNum; // integer
  public $ModalGrossPermFlatExtraAllowanceAmt; // decimal
  public $ModalGrossTempFlatExtraAllowanceAmt; // decimal
  public $TempFlatExtraDuration; // integer
  public $EffDate; // date
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $TempPercentageLoading; // double
  public $PermPercentageLoading; // double
  public $PermTableRatingAlphaCode; // string
  public $TempTableRatingCode; // string
  public $Occupation; // string
  public $OccupClass; // OLI_LU_OCCUPCLASS
  public $PrivacyLastCommunicationDate; // date
  public $BeneficiaryIncomeOption; // OLI_LU_INCOPTION
  public $TempRatingType; // OLI_LU_RATINGTYPE
  public $ProceedsHoldDuration; // integer
  public $ProceedsHoldDurUnitMeasure; // OLI_LU_MEASUNITS
  public $LastRatingDate; // date
  public $EmploymentClass; // OLI_LU_EMPLOYMENTCLASS
  public $BeneficiaryClaimPeriod; // integer
  public $BeneClaimPeriodMeasureUnit; // OLI_LU_MEASUNITS
  public $PermRatingType; // OLI_LU_RATINGTYPE
  public $TermDate; // date
  public $FaceAmt; // decimal
  public $LivesWithPrimaryInsInd; // OLI_LU_BOOLEAN
  public $DependentOnPrimaryInsInd; // OLI_LU_BOOLEAN
  public $TempFlatStartDate; // date
  public $TempFlatExtraOverrideEndDate; // date
  public $TempFlatExtraOverrideEffDate; // date
  public $PermRatingAmtPerThou; // decimal
  public $TempRatingAmtPerThou; // decimal
  public $TemporaryRoleInd; // OLI_LU_BOOLEAN
  public $PreferredBeneficiaryInd; // OLI_LU_BOOLEAN
  public $ModalPermRatingAmt; // decimal
  public $ModalTempRatingAmt; // decimal
  public $SubstandardRating; // SubstandardRating_Type
  public $AssocParticipantObjectInfo; // AssocParticipantObjectInfo_Type
  public $UnderwritingResult; // UnderwritingResult_Type
  public $DeliveryInfo; // DeliveryInfo_Type
  public $BeneficiaryIncomeOptionInfo; // BeneficiaryIncomeOptionInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $MailingAddressID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class LifeProduct_Type {
  public $LifeProductKey; // PERSISTKEY
  public $LifeProductSysKey; // SYSKEY
  public $MinSingleLoan; // decimal
  public $MinModalPayment; // decimal
  public $MinAnnualizedPayment; // decimal
  public $MinSingleWithdrawal; // decimal
  public $ValuePerUnit; // decimal
  public $TIAAvailableInd; // OLI_LU_BOOLEAN
  public $MaxTIAFaceAmt; // decimal
  public $DefLifeInsMethodCC; // DefLifeInsMethodCC_Type
  public $PolicyIssueTypeCC; // PolicyIssueTypeCC_Type
  public $CoverageProduct; // CoverageProduct_Type
  public $LifeUSAProduct; // LifeUSAProduct_Type
  public $ArrangementProduct; // ArrangementProduct_Type
  public $PolicyOptionInfo; // PolicyOptionInfo_Type
  public $FeatureTransactionProduct; // FeatureTransactionProduct_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LifeStyleActivity_Type {
  public $LifeStyleActivityKey; // PERSISTKEY
  public $LifeStyleActivitySysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $LifeStyleActivityType; // OLI_LU_LIFEACTIVITYTYPE
  public $ActivityDesc; // string
  public $ActivityFrequencyMode; // OLI_LU_PARTFREQ
  public $ActivityFrequency; // integer
  public $StartDate; // date
  public $StartPartialDate; // PARTIAL_DATE_TYPE
  public $EndDate; // date
  public $EndPartialDate; // PARTIAL_DATE_TYPE
  public $ActivityCountTotal; // integer
  public $ActivityCountLastYear; // integer
  public $ActivityCountNextYear; // integer
  public $ClubActivityCount; // integer
  public $ClubMemberInd; // OLI_LU_BOOLEAN
  public $ClubName; // string
  public $LastActivityDate; // date
  public $LastActivityPartialDate; // PARTIAL_DATE_TYPE
  public $LastAccidentDate; // date
  public $LastAccidentPartialDate; // PARTIAL_DATE_TYPE
  public $AccidentInd; // OLI_LU_BOOLEAN
  public $AccidentDetails; // string
  public $AtFaultInd; // OLI_LU_BOOLEAN
  public $HoursOfInstruction; // integer
  public $LicenseInd; // OLI_LU_BOOLEAN
  public $LicenseDesc; // string
  public $ProfessionalInd; // OLI_LU_BOOLEAN
  public $OutsideResidentCountryInd; // OLI_LU_BOOLEAN
  public $OutsideResidentCountryCode; // OLI_LU_NATION
  public $OutsideResidentCountryDesc; // string
  public $SafetyEquipmentUsedInd; // OLI_LU_BOOLEAN
  public $SafetyEquipmentUsed; // string
  public $SafetyEquipment; // SafetyEquipment_Type
  public $ActivityLocation; // string
  public $ExhibitionInd; // OLI_LU_BOOLEAN
  public $ActivityDuration; // integer
  public $DurationUnitMeasure; // OLI_LU_MEASUNITS
  public $ActivityDurationDesc; // string
  public $AviationExp; // AviationExp_Type
  public $RacingExp; // RacingExp_Type
  public $UnderwaterDivingExp; // UnderwaterDivingExp_Type
  public $ClimbingExp; // ClimbingExp_Type
  public $AirSportsExp; // AirSportsExp_Type
  public $ForeignTravel; // ForeignTravel_Type
  public $LifeStyleViolation; // LifeStyleViolation_Type
  public $LifeStyleActivityPeril; // LifeStyleActivityPeril_Type
  public $RiskNotification; // RiskNotification_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LifeStyleActivityPeril_Type {
  public $LifeStyleActivityPerilKey; // PERSISTKEY
  public $LifeStyleActivityPerilSysKey; // SYSKEY
  public $LifeStyleActivityPerilType; // OLI_LU_PERILTYPE
  public $TimingType; // OLI_LU_TIMINGTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LifeStyleViolation_Type {
  public $LifeStyleViolationKey; // PERSISTKEY
  public $LifeStyleViolationSysKey; // SYSKEY
  public $LifestyleViolationTC; // OLI_LU_LIFESTYLEVIOLATIONS
  public $Disposition; // OLI_LU_DISPOSITIONRESULTS
  public $Description; // string
  public $ViolationDate; // date
  public $ViolationPartialDate; // PARTIAL_DATE_TYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LifeUSA_Type {
  public $DeemedCashValueAmt; // decimal
  public $DeemedFaceAmt; // decimal
  public $DefLifeInsMethod; // OLI_LU_LIFETEST
  public $GuidelineAnnPrem; // decimal
  public $CumGuidelineAnnPrem; // decimal
  public $GuidelineSinglePrem; // decimal
  public $MaterialChangeDate; // date
  public $MatChangeNSP; // double
  public $MatChangeAV; // decimal
  public $MECInd; // OLI_LU_BOOLEAN
  public $MECConvInd; // OLI_LU_BOOLEAN
  public $MECDate; // date
  public $MECMaxContribution; // decimal
  public $InitSevenPayPrem; // decimal
  public $SevenPayPrem; // decimal
  public $CumSevenPayPrem; // decimal
  public $TaxableAmt; // decimal
  public $TaxableIncomeAmt; // decimal
  public $TaxGrandfatheredType; // OLI_LU_TAXTYPE
  public $Amount1035; // decimal
  public $Basis1035; // decimal
  public $MEC1035; // OLI_LU_BOOLEAN
  public $Internal1035; // OLI_LU_BOOLEAN
  public $Loan1035; // decimal
  public $AccumValue1035; // decimal
  public $TaxableGain1035; // decimal
  public $UnnecPremPaidITD; // decimal
  public $UnnecGAP; // decimal
  public $UnnecGSP; // decimal
  public $Unadjust7PayPrem; // decimal
  public $HighAvgAmtsPaid; // decimal
  public $DEFRASumPremsITD; // decimal
  public $TAMRASumPremsITD; // decimal
  public $DEFRASumDisburseL2Y; // decimal
  public $DEFRADisburseDateL2Y; // date
  public $DEFRATaxablePortionL2Y; // decimal
  public $DEFRADisburseBasisL2Y; // decimal
  public $DEFRADisburseAVL2Y; // decimal
  public $LifeInsTestMaxContribution; // decimal
  public $CorridorInd; // OLI_LU_BOOLEAN
  public $GLPExcessPayAmt; // decimal
  public $SevenPayExcessPayAmt; // decimal
  public $GuidelineAnnAVFPremAmt; // decimal
  public $GuidelineSingleAVFPremAmt; // decimal
  public $MECAccumStartDate; // date
  public $CumSevenPayPremWthdrwl; // decimal
  public $SevenPayPremStartDate; // date
  public $SevenPayPremEndDate; // date
  public $ERISAInd; // OLI_LU_BOOLEAN
  public $SevenPayYear; // integer
  public $MECType; // OLI_LU_MECTYPE
  public $PremsExceedDBYearMonth; // gYearMonth
  public $BenefitChangeDate; // date
  public $Exchange1035Ind; // OLI_LU_BOOLEAN
  public $SevenPayTestHistory; // SevenPayTestHistory_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LifeUSAProduct_Type {
  public $LifeUSAProductKey; // PERSISTKEY
  public $LifeUSAProductSysKey; // SYSKEY
  public $MECIssueType; // OLI_LU_MECISSUETYPE
  public $IRSPremCalcMethod; // IRSPremCalcMethod_Type
  public $DefLifeInsMethodCC; // DefLifeInsMethodCC_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LimitVariation_Type {
  public $LimitVariationKey; // PERSISTKEY
  public $LimitVariationSysKey; // SYSKEY
  public $BenefitChangeTrigger; // OLI_LU_BENCHGTRIG
  public $BenefitChangeType; // OLI_LU_BENCHGTYPE
  public $BenefitChangeAge; // integer
  public $BenefitChangePct; // double
  public $BenefitChangeDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LineOfAuthority_Type {
  public $LineOfAuthorityKey; // PERSISTKEY
  public $LineOfAuthoritySysKey; // SYSKEY
  public $EffDate; // date
  public $ExpDate; // date
  public $FilingDate; // date
  public $OriginationDate; // date
  public $StatusDate; // date
  public $LineOfAuthorityStatusType; // OLI_LU_LOASTATUSTYPE
  public $StatusDesc; // string
  public $LineOfAuthorityType; // OLI_LU_LOA_TYPE
  public $LOAStatusReason; // OLI_LU_LOASTATREAS
  public $Exam; // Exam_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LineOfAuthorityCC_Type {
  public $LineOfAuthority; // LineOfAuthority_Type
}

class Loan_Type {
  public $LoanKey; // PERSISTKEY
  public $LoanSysKey; // SYSKEY
  public $LoanType; // OLI_LU_LNTYPE
  public $LoanStatus; // OLI_LU_LOANSTAT
  public $LoanStatusReason; // string
  public $LoanReason; // OLI_LU_LOANREASON
  public $LoanReasonDesc; // string
  public $LoanAmt; // decimal
  public $LoanBalance; // decimal
  public $LoanPrincipal; // decimal
  public $LoanPaymentAmt; // decimal
  public $LoanPaymentMethod; // OLI_LU_PAYMETHOD
  public $LoanPaymentMode; // OLI_LU_PAYMODE
  public $LoanInterestRate; // double
  public $LoanIntMethod; // OLI_LU_LOANMETHOD
  public $LoanIntType; // OLI_LU_LOANTYPE
  public $LoanIntAsOfDate; // date
  public $LoanIntPaidToDate; // date
  public $LoanRepayNumYear; // integer
  public $LoanSuspendDate; // date
  public $LoanUnsuspendDate; // date
  public $LoanTaxInd; // OLI_LU_BOOLEAN
  public $LoanRepayDueDate; // date
  public $LeaveOfAbsenceInd; // OLI_LU_BOOLEAN
  public $LastActivityDate; // date
  public $LastFinActivityType; // OLI_LU_FINACTTYPE
  public $LoanIntAmtDue; // double
  public $LoanIntAmtDueATD; // decimal
  public $LoanIntTiming; // OLI_LU_LOANTIMING
  public $LoanIntNextBillDate; // date
  public $LoanIntNextCapitalizationDate; // date
  public $LoanedAmtIntRate; // double
  public $LoanIntAmtATD; // decimal
  public $LoanIntAmtEarnedATD; // decimal
  public $LoanIntAmtUnearnedATD; // decimal
  public $LoanDefaultDate; // date
  public $CumLoanIntAmt; // decimal
  public $LoanIntAmtPaidATD; // decimal
  public $LoanIntAmtPaidITD; // decimal
  public $LoanIntAmtDueITD; // decimal
  public $LoanNumber; // string
  public $LoanOriginationDate; // date
  public $EffDate; // date
  public $PayoffBalance; // decimal
  public $PayoffBalanceAsOfDate; // date
  public $CarryOverLoanIntAmtDue; // decimal
  public $CarryOverLoanIntCreditedAmt; // decimal
  public $CommitmentDate; // date
  public $RepaymentScheduleDesc; // string
  public $LastPaidDate; // date
  public $ResponsibleLoanPartyType; // OLI_LU_PARTICROLE
  public $MaxAvailableLoan; // decimal
  public $LoanAvgDailyBalATD; // decimal
  public $GracePeriodEndDate; // date
  public $LoanBalanceForImpaired; // decimal
  public $ImpairedType; // OLI_LU_IMPAIRED_TYPE
  public $LoanTiming; // OLI_LU_EVENTTIMING
  public $LoanRestriction; // LoanRestriction_Type
  public $Participant; // Participant_Type
  public $PayoffCondition; // PayoffCondition_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $FinancialInstitutionPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class LoanActivity_Type {
  public $LoanActivityKey; // PERSISTKEY
  public $LoanActivitySysKey; // SYSKEY
  public $LoanIntAmt; // decimal
  public $LoanBalance; // decimal
  public $LoanNumber; // string
  public $LoanPrincipal; // decimal
  public $LoanIntAmtDue; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LoanIntMethodCC_Type {
  public $LoanIntMethod; // OLI_LU_LOANMETHOD
}

class LoanProvision_Type {
  public $LoanProvisionKey; // PERSISTKEY
  public $LoanProvisionSysKey; // SYSKEY
  public $CreditIntAdjRateRule; // OLI_LU_CREDITADJ
  public $CreditIntAdjRate; // double
  public $InterestAllocationRule; // OLI_LU_ALLOCATIONOPTION
  public $FirstYearAvailable; // integer
  public $MaxAvailablePercent; // double
  public $MaxAvailableCalculation; // OLI_LU_MAXIMUMAMOUNT
  public $AdvancedInterestCalcRule; // OLI_LU_ADVINTCALCRULE
  public $LoanType; // OLI_LU_LNTYPE
  public $LoanIntTiming; // OLI_LU_LOANTIMING
  public $LoanIntType; // OLI_LU_LOANTYPE
  public $MinSingleLoan; // decimal
  public $MinRemainingBalanceAmt; // decimal
  public $LoanTiming; // OLI_LU_EVENTTIMING
  public $ArrProductCode; // string
  public $ArrOptProductCode; // string
  public $FeatureProductFeatureCode; // string
  public $FeatureOptProductCode; // string
  public $MaxNumConcurrentLoans; // integer
  public $MaxNumNewLoansPolYr; // integer
  public $CarrierCode; // string
  public $ProductCode; // string
  public $LoanIntCapitalizationTiming; // OLI_LU_EVENTTIMING
  public $LoanIntCapitalizationFreq; // OLI_LU_PAYMODE
  public $LoanInterestBillingDays; // integer
  public $InterestAdvancePriorDays; // integer
  public $LoanCapBillingGracePeriod; // integer
  public $TSALoanDefaultNotificationDays; // integer
  public $AllowedMissedConsecRepayments; // integer
  public $AllowedMissedCumRepayments; // integer
  public $LoanIntMethodCC; // LoanIntMethodCC_Type
  public $MinBalanceCalcRule; // MinBalanceCalcRule_Type
  public $RateVariation; // RateVariation_Type
  public $ImpairedOptions; // ImpairedOptions_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LoanRestriction_Type {
  public $LoanRestrictionType; // OLI_LU_LOANRESTRICT
}

class LoanTypeInfo_Type {
  public $LoanType; // OLI_LU_LNTYPE
}

class LocationRestrictionInfo_Type {
  public $LocationRestrictionInfoKey; // PERSISTKEY
  public $LocationRestrictionInfoSysKey; // SYSKEY
  public $LocationRestrictionType; // OLI_LU_LOCRESTR
  public $Description; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LogicalCriteria_Type {
  public $LogicalCriteriaKey; // PERSISTKEY
  public $LogicalCriteriaSysKey; // SYSKEY
  public $Operation; // OLI_LU_OPERATION
  public $EnumeratedStringValue; // string
  public $EnumeratedTypeCodeValue; // ENUMERATEDTYPECODEVALUE_TYPE
  public $EnumeratedValue; // EnumeratedValue_Type
  public $KeyDef; // KeyDef_Type
  public $AxisDef; // AxisDef_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LogicalExpression_Type {
  public $LogicalExpressionKey; // PERSISTKEY
  public $LogicalExpressionSysKey; // SYSKEY
  public $LogicalCriteria; // LogicalCriteria_Type
  public $LogicalExpression; // LogicalExpression_Type
  public $CriteriaOperator; // CRITERIA_OPERATOR
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class LostCapability_Type {
  public $LostCapabilityKey; // PERSISTKEY
  public $LostCapabilitySysKey; // SYSKEY
  public $CapabilityType; // OLI_LU_CAPABILTYPE
  public $LossPct; // double
  public $StartDate; // date
  public $EndDate; // date
  public $HIPAANinetyDayCertRequireInd; // OLI_LU_BOOLEAN
  public $CapabilityLevel; // OLI_LU_CAPABILITYLEVEL
  public $Applicability; // OLI_LU_APPLICABILITY
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ManagedCareOption_Type {
  public $ManagedCareOptionKey; // PERSISTKEY
  public $ManagedCareOptionSysKey; // SYSKEY
  public $ManagedCareCategory; // OLI_LU_MANAGEDCARECAT
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MannerOfLossOption_Type {
  public $MannerOfLossOptionKey; // PERSISTKEY
  public $MannerOfLossOptionSysKey; // SYSKEY
  public $MannerofLoss; // OLI_LU_MANNERLOSS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Market_Type {
  public $MarketType; // OLI_LU_MARKETTYPE
}

class MedicalCertRestriction_Type {
  public $MedicalCertRestrictionKey; // PERSISTKEY
  public $MedicalCertRestrictionSysKey; // SYSKEY
  public $MedCertRestrictionType; // OLI_LU_MEDCERTTYPE
  public $MedCertRestrictionTypeDesc; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MedicalCondition_Type {
  public $MedicalConditionKey; // PERSISTKEY
  public $MedicalConditionSysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $DateLastUpdated; // date
  public $LastUpdatedPartialDate; // PARTIAL_DATE_TYPE
  public $ConditionType; // OLI_LU_MEDCOND
  public $ConditionDescription; // string
  public $ConditionOnsetDate; // date
  public $ConditionOnsetPartialDate; // PARTIAL_DATE_TYPE
  public $ConditionStatus; // OLI_LU_CONDSTATUS
  public $DateLastSeen; // date
  public $LastSeenPartialDate; // PARTIAL_DATE_TYPE
  public $RecurrencesInd; // OLI_LU_BOOLEAN
  public $DisabilityInd; // OLI_LU_BOOLEAN
  public $TimeOffWork; // integer
  public $NumberEpisodesLastYear; // integer
  public $NumberEpisodesTotal; // integer
  public $LastEpisodeDate; // date
  public $LastEpisodePartialDate; // PARTIAL_DATE_TYPE
  public $RecoveryDate; // date
  public $RecoveryPartialDate; // PARTIAL_DATE_TYPE
  public $ExamineeDesc; // string
  public $WeightChange; // double
  public $TreatmentStartDate; // date
  public $TreatmentStartPartialDate; // PARTIAL_DATE_TYPE
  public $NumberEpisodesAverageYear; // integer
  public $ConditionLocation; // string
  public $ConditionStage; // string
  public $Cause; // OLI_LU_CONDCAUSE
  public $Severity; // OLI_LU_SEVERITY
  public $FirstDiagnosisDate; // date
  public $FirstDiagnosisPartialDate; // PARTIAL_DATE_TYPE
  public $MedicalConditionDuration; // integer
  public $DurationUnitMeasure; // OLI_LU_MEASUNITS
  public $DurationDescription; // string
  public $MedicalTreatment; // MedicalTreatment_Type
  public $CardiacMurmur; // CardiacMurmur_Type
  public $RiskNotification; // RiskNotification_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PrimaryPhysicianID; // IDREF
}

class MedicalConditionGuideline_Type {
  public $MedicalConditionGuidelineKey; // PERSISTKEY
  public $MedicalConditionGuidelineSysKey; // SYSKEY
  public $ConditionType; // OLI_LU_MEDCOND
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $MaxNumberOccurrences; // integer
  public $GuidelineDescription; // string
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MedicalConditionGuidelines_Type {
  public $MedicalConditionGuidelinesKey; // PERSISTKEY
  public $MedicalConditionGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $MedicalConditionGuideline; // MedicalConditionGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MedicalEquipment_Type {
  public $MedicalEquipmentKey; // PERSISTKEY
  public $MedicalEquipmentSysKey; // SYSKEY
  public $MedicalEquipType; // OLI_LU_MEDEQUIP
  public $Applicability; // OLI_LU_APPLICABILITY
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $MedicalConditionID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class MedicalExam_Type {
  public $MedicalExamKey; // PERSISTKEY
  public $MedicalExamSysKey; // SYSKEY
  public $CommentsIncompleteInd; // OLI_LU_BOOLEAN
  public $ExamStatus; // OLI_LU_REQSTAT
  public $InterpreterRelationship; // OLI_LU_REL
  public $ReportLanguage; // OLI_LU_CLIENTLANGUAGES
  public $ExamDate; // date
  public $ExamTime; // time
  public $FirstDiastolicBPReading; // integer
  public $SecondDiastolicBPReading; // integer
  public $ThirdDiastolicBPReading; // integer
  public $FirstSystolicBPReading; // integer
  public $SecondSystolicBPReading; // integer
  public $ThirdSystolicBPReading; // integer
  public $FirstPulseReading; // integer
  public $SecondPulseReading; // integer
  public $SignsOfAlcoholAbuseObs; // string
  public $SignsOfDrugAbuseObs; // string
  public $HeightMeasuredInd; // OLI_LU_BOOLEAN
  public $WeightMeasuredInd; // OLI_LU_BOOLEAN
  public $PulseIrregularInd; // OLI_LU_BOOLEAN
  public $FirstPrematureVC; // integer
  public $SecondPrematureVC; // integer
  public $Menstruation; // OLI_LU_BOOLEAN
  public $BloodGlucoseLevel; // integer
  public $CholesterolNum; // integer
  public $HDLCholesterolNum; // integer
  public $LDLCholesterolNum; // integer
  public $TriglyceridesNum; // integer
  public $UrineTemperature; // UrineTemperature_Type
  public $MedicalExamType; // OLI_LU_MEDEXTYPE
  public $LabSlipTicketNum; // string
  public $ThirdPulseReading; // integer
  public $PhysicianInd; // OLI_LU_BOOLEAN
  public $CurrentDrugUseInd; // OLI_LU_BOOLEAN
  public $MedicalExamAuthorizationInd; // OLI_LU_BOOLEAN
  public $CurrentDrugUseDesc; // string
  public $MovingViolationInd; // OLI_LU_BOOLEAN
  public $LastPhysicianVisit; // integer
  public $LastTobaccoMonths; // integer
  public $NicotineSubstanceMonths; // integer
  public $BloodCentrifugeDate; // date
  public $BloodCentrifugeTime; // time
  public $LastAteDate; // date
  public $LastDrankDate; // date
  public $LastAteTime; // time
  public $LastDrankTime; // time
  public $HoursSinceLastAte; // integer
  public $HoursSinceLastDrank; // integer
  public $ExaminerComments; // string
  public $ThirdBPTime; // time
  public $SecondBPTime; // time
  public $FirstBPTime; // time
  public $ThirdBPDate; // date
  public $SecondBPDate; // date
  public $FirstBPDate; // date
  public $ThirdBPArmCode; // OLI_LU_RELATIVESIDE
  public $SecondBPArmCode; // OLI_LU_RELATIVESIDE
  public $FirstBPArmCode; // OLI_LU_RELATIVESIDE
  public $RequirementAcctNum; // string
  public $ProviderOrderNum; // string
  public $FaceAmt; // decimal
  public $SmokerStat; // OLI_LU_SMOKERSTAT
  public $ThirdPrematureVC; // integer
  public $BloodCollectionDate; // date
  public $BloodCollectionTime; // time
  public $ChestFullMeasure; // ChestFullMeasure_Type
  public $ChestForcedMeasure; // ChestForcedMeasure_Type
  public $AbdomenMeasure; // AbdomenMeasure_Type
  public $SpecialTestOrdered; // SpecialTestOrdered_Type
  public $Kit; // Kit_Type
  public $Height2; // Height2_Type
  public $Weight2; // Weight2_Type
  public $SignatureInfo; // SignatureInfo_Type
  public $SubstanceUsage; // SubstanceUsage_Type
  public $Attachment; // Attachment_Type
  public $IdentityVerification; // IdentityVerification_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $ExaminerPartyID; // IDREF
  public $ExaminerCompanyID; // IDREF
  public $InterpreterPartyID; // IDREF
  public $RequirementInfoID; // IDREF
}

class MedicalPrevention_Type {
  public $MedicalPreventionKey; // PERSISTKEY
  public $MedicalPreventionSysKey; // SYSKEY
  public $TestType; // OLI_LU_TESTTYPE
  public $TestDate; // date
  public $TestPartialDate; // PARTIAL_DATE_TYPE
  public $Results; // OLI_LU_BOOLEAN
  public $VisitReason; // OLI_LU_DRVISITREASON
  public $TestDuration; // integer
  public $DurationUnitMeasure; // OLI_LU_MEASUNITS
  public $DateLastSeen; // date
  public $LastSeenPartialDate; // PARTIAL_DATE_TYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $LastTestFacility; // IDREF
  public $LastTestPhysician; // IDREF
  public $MedConditionID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class MedicalTransport_Type {
  public $MedicalTransportKey; // PERSISTKEY
  public $MedicalTransportSysKey; // SYSKEY
  public $TransportVehicleDesc; // string
  public $TransportReasonDesc; // string
  public $Sequence; // integer
  public $OriginDesc; // string
  public $StartDate; // date
  public $StartTime; // time
  public $DestinationDesc; // string
  public $EndDate; // date
  public $EndTime; // time
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PointOfOriginAddressID; // IDREF
  public $PointOfDestinationAddressID; // IDREF
}

class MedicalTreatment_Type {
  public $MedicalTreatmentKey; // PERSISTKEY
  public $MedicalTreatmentSysKey; // SYSKEY
  public $TreatmentType; // OLI_LU_TREATMENTTYPE
  public $Applicability; // OLI_LU_APPLICABILITY
  public $TreatmentStatus; // OLI_LU_TREATMENTSTATUS
  public $TreatmentStartDate; // date
  public $TreatmentStartPartialDate; // PARTIAL_DATE_TYPE
  public $DateLastSeen; // date
  public $LastSeenPartialDate; // PARTIAL_DATE_TYPE
  public $TreatmentCompletionInd; // OLI_LU_BOOLEAN
  public $TreatmentFrequencyMode; // OLI_LU_PARTFREQ
  public $TreatmentAmt; // integer
  public $Medication; // string
  public $ComplicationsInd; // OLI_LU_BOOLEAN
  public $PatientID; // string
  public $ExamineeDesc; // string
  public $TreatmentDesc; // string
  public $TreatmentDuration; // integer
  public $TreatmentReason; // string
  public $DurationUnitMeasure; // OLI_LU_MEASUNITS
  public $PrescriptionDrugInfo; // PrescriptionDrugInfo_Type
  public $PersonalAssistance; // PersonalAssistance_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $TreatmentPhysicianPartyID; // IDREF
  public $TreatmentFacilityPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class MedicalTreatmentGuideline_Type {
  public $MedicalTreatmentGuidelineKey; // PERSISTKEY
  public $MedicalTreatmentGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $TreatmentType; // OLI_LU_TREATMENTTYPE
  public $TreatmentPurposeInfo; // TreatmentPurposeInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MedicalTreatmentGuidelines_Type {
  public $MedicalTreatmentGuidelinesKey; // PERSISTKEY
  public $MedicalTreatmentGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $MedicalTreatmentGuideline; // MedicalTreatmentGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MedProviderOption_Type {
  public $MedProviderOptionKey; // PERSISTKEY
  public $MedProviderOptionSysKey; // SYSKEY
  public $MedProviderType; // OLI_LU_REL
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MetaData_Type {
  public $ScalingFactor; // integer
  public $DataType; // OLI_LU_DATATYPE
  public $ContentCodeType; // OLI_LU_LOOKUP
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $Nation; // OLI_LU_NATION
  public $JurisdictionCC; // JurisdictionCC_Type
  public $TableDescription; // string
  public $StructureType; // OLI_LU_STRUCTURETYPE
  public $Mode; // OLI_LU_PAYMODE
  public $Description; // string
  public $KeyDef; // KeyDef_Type
  public $AxisDef; // AxisDef_Type
  public $ComplexContentDescriptor; // ComplexContentDescriptor_Type
}

class MIBRequest_Type {
  public $MIBRecipientList; // string
  public $MIBPriority; // TC_MIB_PRIORITY
  public $MIBSearchDepth; // TC_MIB_SEARCHDEPTH
  public $MIBServiceDescriptor; // MIBServiceDescriptor_Type
  public $MIBServiceConfigurationID; // string
  public $OLifEExtension; // OLifEExtension_Type
}

class MIBServiceDescriptor_Type {
  public $MIBService; // TC_MIB_SERVICE
  public $MIBServiceOptions; // MIBServiceOptions_Type
  public $OLifEExtension; // OLifEExtension_Type
}

class MIBServiceOptions_Type {
  public $MIBFollowUpInd; // OLI_LU_BOOLEAN
  public $MIBLimitedInfoSearchInd; // OLI_LU_BOOLEAN
  public $MIBPolicyNumberSearchInd; // OLI_LU_BOOLEAN
  public $FileCode; // string
  public $OLifEExtension; // OLifEExtension_Type
}

class MilitaryExp_Type {
  public $MilitaryExpKey; // PERSISTKEY
  public $MilitaryExpSysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $MilitaryRank; // OLI_LU_MILITARYRANK
  public $Duties; // string
  public $MilitaryStatus; // OLI_LU_MILITARYSTAT
  public $MilitaryOrganizationType; // OLI_LU_MILITARYORGTYPE
  public $MilitaryPayGrade; // OLI_LU_MILPAYGR
  public $TimeInCurrentAssignment; // integer
  public $TransferAlertInd; // OLI_LU_BOOLEAN
  public $TransferDetails; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MilitaryGuideline_Type {
  public $MilitaryGuidelineKey; // PERSISTKEY
  public $MilitaryGuidelineSysKey; // SYSKEY
  public $MaxTravelRiskRating; // OLI_LU_TRAVELRISK
  public $MilitaryStatus; // OLI_LU_MILITARYSTAT
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $TimingType; // OLI_LU_TIMINGTYPE
  public $LocationRestrictionInfo; // LocationRestrictionInfo_Type
  public $TravelLocationRatingsInfo; // TravelLocationRatingsInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MilitaryGuidelines_Type {
  public $MilitaryGuidelinesKey; // PERSISTKEY
  public $MilitaryGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $MilitaryGuideline; // MilitaryGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MinBalanceCalcRule_Type {
  public $MinBalanceCalcRuleKey; // PERSISTKEY
  public $MinBalanceCalcRuleSysKey; // SYSKEY
  public $AggregationMethod; // OLI_LU_AGGREGATIONMETHOD
  public $MinBalanceCalcRuleType; // OLI_LU_MINBALCALCTYPE
  public $FlatAmount; // decimal
  public $MinMonthCOI; // integer
  public $BalanceType; // OLI_LU_BALANCETYPE
  public $MinPct; // double
  public $MinBalanceCalcRule; // MinBalanceCalcRule_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MiscellaneousGuideline_Type {
  public $MiscellaneousGuidelineKey; // PERSISTKEY
  public $MiscellaneousGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $MiscellaneousGuidelineType; // OLI_LU_MISCGUIDELINE
  public $Age; // integer
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class MiscellaneousGuidelines_Type {
  public $MiscellaneousGuidelinesKey; // PERSISTKEY
  public $MiscellaneousGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $MiscellaneousGuideline; // MiscellaneousGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class NationApproval_Type {
  public $NationApprovalKey; // PERSISTKEY
  public $NationApprovalSysKey; // SYSKEY
  public $Nation; // OLI_LU_NATION
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class NatureSubCategoryOption_Type {
  public $NatureSubCategoryOptionKey; // PERSISTKEY
  public $NatureSubCategoryOptionSysKey; // SYSKEY
  public $NatureSubCategory; // OLI_LU_NATURESUBCAT
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class NeedsGuideline_Type {
  public $NeedsGuidelineKey; // PERSISTKEY
  public $NeedsGuidelineSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $NeedsGuidelineRule; // NeedsGuidelineRule_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class NeedsGuidelineRule_Type {
  public $NeedsGuidelineRuleKey; // PERSISTKEY
  public $NeedsGuidelineRuleSysKey; // SYSKEY
  public $GuidelineDescription; // string
  public $NeedsRuleType; // OLI_LU_NEEDSRULE
  public $NeedsRuleContextAmtType; // OLI_LU_NEEDSRULECONTEXTAMT
  public $NeedsRuleAmtQualifier; // OLI_LU_NEEDSRULEAMTQUAL
  public $InfoSourceTC; // OLI_LU_INFOSRC
  public $InfoSourceDesc; // string
  public $MinAge; // integer
  public $MaxAge; // integer
  public $MinAmt; // decimal
  public $MaxAmt; // decimal
  public $MinPct; // double
  public $MaxPct; // double
  public $MinFactor; // double
  public $MaxFactor; // double
  public $MinDuration; // double
  public $MinDurationQualifier; // OLI_LU_MEASUNITS
  public $MaxDuration; // double
  public $MaxDurationQualifier; // OLI_LU_MEASUNITS
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class NonForProvision_Type {
  public $NonForProvisionKey; // PERSISTKEY
  public $NonForProvisionSysKey; // SYSKEY
  public $BenefitType; // OLI_LU_BENEFITCODE
  public $InitialAmtType; // OLI_LU_AMTCALCMETHOD
  public $LoanAdjType; // OLI_LU_LOANADJCODE
  public $NFOModeMethods; // OLI_LU_NFOMODEMETHODS
  public $ConsecutiveLimit; // integer
  public $MaxMonthsLimit; // integer
  public $MaxConstantLimit; // integer
  public $Limitations; // OLI_LU_NFOLIMITTYPES
  public $NetSinglePremIntRate; // double
  public $NonFortProv; // OLI_LU_NONFORTPROV
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $ValuePerUnit; // decimal
  public $MortalityOrMorbidityTable; // OLI_LU_MORTALITYTBL
  public $AllowedSubstandard; // AllowedSubstandard_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class NumInvestProduct_Type {
  public $NumInvestProductKey; // PERSISTKEY
  public $NumInvestProductSysKey; // SYSKEY
  public $AssetClass; // OLI_LU_ASSETCLASS
  public $MaxNumDestinationInvestProd; // integer
  public $MaxNumSourceInvestProd; // integer
  public $MinAmt; // decimal
  public $MaxAmt; // decimal
  public $MinPct; // double
  public $MaxPct; // double
  public $DestInvestProduct; // DestInvestProduct_Type
  public $SourceInvestProduct; // SourceInvestProduct_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ObjectTypeCC_Type {
  public $ObjectType; // OLI_LU_OBJECTTYPE
}

class ObjectTypeInfo_Type {
  public $ObjectTypeInfoKey; // PERSISTKEY
  public $ObjectTypeInfoSysKey; // SYSKEY
  public $ParentObjectType; // OLI_LU_OBJECTTYPE
  public $ActualObjectType; // OLI_LU_OBJECTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class OccupationGuideline_Type {
  public $OccupationGuidelineKey; // PERSISTKEY
  public $OccupationGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $OccupationInfo; // OccupationInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class OccupationGuidelines_Type {
  public $OccupationGuidelinesKey; // PERSISTKEY
  public $OccupationGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $OccupationGuideline; // OccupationGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class OccupationInfo_Type {
  public $OccupationInfoKey; // PERSISTKEY
  public $OccupationInfoSysKey; // SYSKEY
  public $OccupationType; // OLI_LU_EMPLOYMENTTYPE
  public $OccupationDetails; // string
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class OccupClassOption_Type {
  public $OccupClassOptionKey; // PERSISTKEY
  public $OccupClassOptionSysKey; // SYSKEY
  public $OccupClass; // OLI_LU_OCCUPCLASS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class OccurrenceLimitInfo_Type {
  public $OccurrenceLimitInfoKey; // PERSISTKEY
  public $OccurrenceLimitInfoSysKey; // SYSKEY
  public $OccurrenceTier; // OccurrenceTier_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class OccurrenceTier_Type {
  public $OccurrenceTierKey; // PERSISTKEY
  public $OccurrenceTierSysKey; // SYSKEY
  public $MinNumberOccurrences; // integer
  public $MinNumberOccurrencesQualifier; // OLI_LU_MEASUNITS
  public $MaxNumberOccurrences; // integer
  public $MaxNumberOccurrencesQualifier; // OLI_LU_MEASUNITS
  public $Fee; // Fee_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class OLifEExtension_Type {
  public $any; // <anyXML>
  public $VendorCode; // string
  public $ExtensionCode; // string
  public $DataRep; // DATAREP_TYPES
  public $SystemCode; // string
}

class Organization_Type {
  public $OrganizationKey; // PERSISTKEY
  public $OrganizationSysKey; // SYSKEY
  public $OrgForm; // OLI_LU_ORGFORM
  public $TrustType; // OLI_LU_TRUSTTYPE
  public $TrustTypeDesc; // string
  public $TrustForBeneOfNaturalPersInd; // OLI_LU_BOOLEAN
  public $IrrevokableInd; // OLI_LU_BOOLEAN
  public $AbbrName; // string
  public $NatureCategory; // OLI_LU_NATURECAT
  public $EstabDate; // date
  public $NumOwners; // integer
  public $DBA; // string
  public $OrgCode; // string
  public $OrgCodeName; // string
  public $OrgCodeFunction; // OLI_LU_ORGFUNCT
  public $ProfitObjective; // OLI_LU_PROFITOBJECTIVE
  public $DUNSNumber; // string
  public $DTCCMemberCode; // string
  public $EstTaxBracket; // double
  public $ACORDVendorCode; // string
  public $DissolvedDate; // date
  public $Branch; // string
  public $PubliclyTradedInd; // OLI_LU_BOOLEAN
  public $NatureSubCategory; // OLI_LU_NATURESUBCAT
  public $DTCCAssociatedMemberCode; // string
  public $BusinessDesc; // string
  public $SecondaryBusinessDesc; // string
  public $SICCodeDescription; // string
  public $MinRetirementYearsService; // integer
  public $MinRetirementAge; // integer
  public $NAICSCode; // string
  public $NAICSCodeDescription; // string
  public $SICCode; // string
  public $Duration; // integer
  public $DurQualifier; // OLI_LU_PAYMODE
  public $TaxStatus; // OLI_LU_TAXSTAT
  public $ForeignCorporationInd; // OLI_LU_BOOLEAN
  public $OrganizationFinancialData; // OrganizationFinancialData_Type
  public $SitusInfo; // SitusInfo_Type
  public $UnionInvolvementInfo; // UnionInvolvementInfo_Type
  public $BusinessInsPurposeInfo; // BusinessInsPurposeInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class OrganizationFinancialData_Type {
  public $OrganizationFinancialDataKey; // PERSISTKEY
  public $OrganizationFinancialDataSysKey; // SYSKEY
  public $TaxYrEndDate; // date
  public $CurrentAssetsAmt; // decimal
  public $FixedAssetsAmt; // decimal
  public $CurrentLiabilitiesAmt; // decimal
  public $LongTermLiabilitiesAmt; // decimal
  public $TotalCapitalAmt; // decimal
  public $NumEmployees; // integer
  public $NumBoardMembers; // integer
  public $PrevYrEndGrossSalesAmt; // decimal
  public $PrevYrNetIncomeAmt; // decimal
  public $PrevYrTaxableEarningsAmt; // decimal
  public $AvailFinancialInd; // OLI_LU_BOOLEAN
  public $EstMarketValueAmt; // decimal
  public $YrEndNetProfitAmt; // decimal
  public $YrEndNetWorthAmt; // decimal
  public $InfoSourceTC; // OLI_LU_INFOSRC
  public $NumEmployeeClasses; // integer
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Ownership_Type {
  public $OwnershipKey; // PERSISTKEY
  public $OwnershipSysKey; // SYSKEY
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $MaxNumPrimaryOwners; // integer
  public $MaxNumContingentOwners; // integer
  public $MaxNumPrimaryCoveredPersons; // integer
  public $MaxNumContingentCoveredPersons; // integer
  public $MaxNumPrimaryBeneficiaries; // integer
  public $MaxNumContingentBeneficiaries; // integer
  public $MaxNumCombinedBeneficiaries; // integer
  public $MinIssueAgeOwner; // integer
  public $MaxIssueAgeOwner; // integer
  public $MaxAddOnAgeOwner; // integer
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MaxAddOnAge; // integer
  public $AllowExceptionsToAgeInd; // OLI_LU_BOOLEAN
  public $AllowExceptionsToPremiumInd; // OLI_LU_BOOLEAN
  public $MinPremiumInitialAmt; // decimal
  public $MaxPremiumInitialAmt; // decimal
  public $MinPremiumAddOnAmt; // decimal
  public $MinPremiumAddOnEFTAmt; // decimal
  public $MaxPremiumAddOnAmt; // decimal
  public $IrrevokableInd; // OLI_LU_BOOLEAN
  public $MinIssueAgeJointCoveredPerson; // integer
  public $MaxIssueAgeJointCoveredPerson; // integer
  public $MinIssueAgePrimaryCoveredPerson; // integer
  public $MinIssueAgeContingentCoveredPerson; // integer
  public $MinIssueAgeContingentOwner; // integer
  public $MinIssueAgePrimaryOwner; // integer
  public $MinIssueAgeJointOwner; // integer
  public $MaxIssueAgePrimaryCoveredPerson; // integer
  public $MaxIssueAgeContingentCoveredPerson; // integer
  public $MaxIssueAgeContingentOwner; // integer
  public $MaxIssueAgePrimaryOwner; // integer
  public $MaxIssueAgeJointOwner; // integer
  public $Description; // string
  public $OwnerJointAndContingentAllowed; // OLI_LU_BOOLEAN
  public $CoveredPersonJntAndCntgntAllwd; // OLI_LU_BOOLEAN
  public $MaxCumPremiumAmt; // decimal
  public $MaxNetCumPremiumAmt; // decimal
  public $InheritedContractAllowed; // OLI_LU_BOOLEAN
  public $AllowExceptionsToMaxPremiumInd; // OLI_LU_BOOLEAN
  public $AllowExceptionsToMinPremiumInd; // OLI_LU_BOOLEAN
  public $MinNumPrimaryOwners; // integer
  public $MinNumPrimaryCoveredPersons; // integer
  public $MaxAddOnDuration; // integer
  public $DurQualifier; // OLI_LU_PAYMODE
  public $AllowedRelationship; // AllowedRelationship_Type
  public $FundingSourceMethodsAllowed; // FundingSourceMethodsAllowed_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $CompatiblePaymentFormCC; // CompatiblePaymentFormCC_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ParachutingExp_Type {
  public $ParachutingExpKey; // PERSISTKEY
  public $ParachutingExpSysKey; // SYSKEY
  public $FreeFallMax; // integer
  public $FreeFallAvg; // integer
  public $MaxDurationMinutes; // integer
  public $CraftAssembly; // OLI_LU_ASSEMBLYTYPE
  public $ExperimentalEquipmentInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PartialIdentification_Type {
  public $IdentificationPart; // string
  public $PartialIDType; // OLI_LU_PARTIALID
}

class Participant_Type {
  public $ParticipantKey; // PERSISTKEY
  public $ParticipantSysKey; // SYSKEY
  public $ParticipantName; // string
  public $ParticipantRoleCode; // OLI_LU_PARTICROLE
  public $ParticipationPct; // double
  public $IssueAge; // integer
  public $ClosedAge; // integer
  public $IssueGender; // OLI_LU_GENDER
  public $ResidenceNationAtIssue; // OLI_LU_NATION
  public $ResidenceJurisdictionAtIssue; // OLI_LU_STATE
  public $SmokerStat; // OLI_LU_SMOKERSTAT
  public $TobaccoPremiumBasis; // OLI_LU_TOBPREMBASIS
  public $Occupation; // string
  public $OccupClass; // OLI_LU_OCCUPCLASS
  public $UnderwritingClass; // OLI_LU_UNWRITECLASS
  public $UnderwritingSubClass; // OLI_LU_UNWRITESUBCLASS
  public $FlatExtraPremBasis; // OLI_LU_FLATEXTRAPREMBASISCODE
  public $ModalGrossFlatExtraPremAmt; // decimal
  public $ModalGrossFlatExtraAllowanceAmt; // decimal
  public $BeneficiarySeqNum; // integer
  public $BeneficiaryPercentDistribution; // double
  public $BeneficiaryAmountDistribution; // decimal
  public $IrrevokableInd; // OLI_LU_BOOLEAN
  public $BeneficiaryShareMethod; // OLI_LU_BENEFICIARYSHAREMETHOD
  public $BeneficiaryCommonDisasterPeriod; // integer
  public $DistributionOption; // OLI_LU_DISTOPTION
  public $BeneficiaryDesignation; // OLI_LU_BENEDESIGNATION
  public $BeneficiaryRoleCode; // OLI_LU_REL
  public $BeneficiaryRoleCodeDesc; // OLI_LU_RELDESC
  public $ASCOCode; // string
  public $ClassName; // string
  public $CommissionLink; // string
  public $ModalGrossTempFlatAllowAmt; // decimal
  public $EffDate; // date
  public $ParticipantStatus; // OLI_LU_CLISTAT
  public $UnderwritingStatus; // OLI_LU_UNDSTAT
  public $IssueAgeSource; // OLI_LU_INFOOBTAINTYPE
  public $AgeSetBackQuantity; // integer
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $InsuredSeqNum; // integer
  public $TempFlatExtraDuration; // integer
  public $TempPercentageLoading; // double
  public $PermPercentageLoading; // double
  public $OccupRating; // OLI_LU_OCCUPRATING
  public $PermFlatExtraAmt; // decimal
  public $PermFlatExtraEndDate; // date
  public $PermTableRating; // OLI_LU_RATINGS
  public $PermTableRatingEndDate; // date
  public $RatingCommissionRule; // OLI_LU_RATCOMMRUL
  public $RatingOverriddenInd; // OLI_LU_BOOLEAN
  public $RatingReason; // string
  public $ReconsiderationDate; // date
  public $TempFlatEndDate; // date
  public $TempFlatExtraAmt; // decimal
  public $TempTableRating; // OLI_LU_RATINGS
  public $TempTableRatingStartDate; // date
  public $TempTableRatingEndDate; // date
  public $IssuedAsAppliedInd; // OLI_LU_BOOLEAN
  public $PrivacyLastCommunicationDate; // date
  public $BeneficiaryIncomeOption; // OLI_LU_INCOPTION
  public $TempRatingType; // OLI_LU_RATINGTYPE
  public $ProceedsHoldDuration; // integer
  public $ProceedsHoldDurUnitMeasure; // OLI_LU_MEASUNITS
  public $LastRatingDate; // date
  public $BeneficiaryClaimPeriod; // integer
  public $BeneClaimPeriodMeasureUnit; // OLI_LU_MEASUNITS
  public $EmploymentClass; // OLI_LU_EMPLOYMENTCLASS
  public $PermRatingType; // OLI_LU_RATINGTYPE
  public $FaceAmt; // decimal
  public $ModalGrossPermFlatExtraAllowanceAmt; // decimal
  public $OriginalIssueAge; // integer
  public $PermTableRatingAlphaCode; // string
  public $TempTableRatingCode; // string
  public $TermDate; // date
  public $LivesWithPrimaryInsInd; // OLI_LU_BOOLEAN
  public $DependentOnPrimaryInsInd; // OLI_LU_BOOLEAN
  public $TempFlatStartDate; // date
  public $PermRatingAmtPerThou; // decimal
  public $TempRatingAmtPerThou; // decimal
  public $TempFlatExtraOverrideEndDate; // date
  public $TempFlatExtraOverrideEffDate; // date
  public $TemporaryRoleInd; // OLI_LU_BOOLEAN
  public $PreferredBeneficiaryInd; // OLI_LU_BOOLEAN
  public $ModalPermRatingAmt; // decimal
  public $ModalTempRatingAmt; // decimal
  public $SubstandardRating; // SubstandardRating_Type
  public $AssocParticipantObjectInfo; // AssocParticipantObjectInfo_Type
  public $UnderwritingResult; // UnderwritingResult_Type
  public $DeliveryInfo; // DeliveryInfo_Type
  public $BeneficiaryIncomeOptionInfo; // BeneficiaryIncomeOptionInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $MailingAddressID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ParticipantProduct_Type {
  public $ParticipantProductKey; // PERSISTKEY
  public $ParticipantProductSysKey; // SYSKEY
  public $ParticipantRoleCode; // OLI_LU_PARTICROLE
  public $RelatedParticipantProductInfo; // RelatedParticipantProductInfo_Type
  public $AllowedDesignation; // AllowedDesignation_Type
  public $EntityType; // EntityType_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ParticipantRoleCodeCC_Type {
  public $ParticipantRoleCodeCCKey; // PERSISTKEY
  public $ParticipantRoleCodeCCSysKey; // SYSKEY
  public $ParticipantRoleCode; // OLI_LU_PARTICROLE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Party_Type {
  public $PartyTypeCode; // OLI_LU_PARTY
  public $CarrierAdminSystem; // string
  public $PartyKey; // PERSISTKEY
  public $PartySysKey; // SYSKEY
  public $FullName; // string
  public $GovtID; // string
  public $GovtIDStat; // OLI_LU_GOVTIDSTAT
  public $GovtIDTC; // OLI_LU_GOVTIDTC
  public $GovtIDCertificationDate; // date
  public $ResidenceState; // OLI_LU_STATE
  public $ResidenceCountry; // OLI_LU_NATION
  public $ResidenceCountryDesc; // string
  public $ResidenceCounty; // string
  public $ResidenceZip; // string
  public $EstNetWorth; // decimal
  public $EstTotLiabilitiesAmt; // decimal
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $PrefComm; // OLI_LU_PREFCOMM
  public $BestTimeToCallFrom; // time
  public $BestTimeToCallTo; // time
  public $IDReferenceNo; // string
  public $IDReferenceType; // OLI_LU_IDREFTYPE
  public $TaxOffice; // string
  public $LiquidNetWorthAmt; // decimal
  public $EstTotAssetsAmt; // decimal
  public $BusinessAssetAmt; // decimal
  public $WithholdingRequiredInd; // OLI_LU_BOOLEAN
  public $ResidenceCountyTC; // OLI_LU_COUNTY
  public $Person; // Person_Type
  public $Organization; // Organization_Type
  public $Address; // Address_Type
  public $Phone; // Phone_Type
  public $Attachment; // Attachment_Type
  public $Carrier; // Carrier_Type
  public $Client; // Client_Type
  public $Producer; // Producer_Type
  public $EMailAddress; // EMailAddress_Type
  public $URL; // URL_Type
  public $PriorName; // PriorName_Type
  public $Risk; // Risk_Type
  public $Physician; // Physician_Type
  public $Pharmacy; // Pharmacy_Type
  public $Employment; // Employment_Type
  public $GovtIDInfo; // GovtIDInfo_Type
  public $RatingAgencyInfo; // RatingAgencyInfo_Type
  public $PartialIdentification; // PartialIdentification_Type
  public $ResidenceStateDuration; // integer
  public $DeliveryInfo; // DeliveryInfo_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $KeyedValue; // KeyedValue_Type
  public $PartyXLat; // PartyXLat_Type
  public $DesignationInfo; // DesignationInfo_Type
  public $Availability; // Availability_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PartyXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $DBA; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Pay_Type {
  public $PayKey; // PERSISTKEY
  public $PaySysKey; // SYSKEY
  public $PayType; // OLI_LU_PAYTYPES
  public $SalaryMode; // OLI_LU_PAYMODE
  public $PayAmt; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Payment_Type {
  public $PaymentKey; // PERSISTKEY
  public $PaymentSysKey; // SYSKEY
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $CreateCheckInd; // OLI_LU_BOOLEAN
  public $PayeeRelationRoleCode; // OLI_LU_PARTICROLE
  public $PayeeName; // string
  public $CheckNo; // string
  public $CheckDescription; // string
  public $VendorCode; // string
  public $PaymentAmt; // decimal
  public $SourceOfFundsTC; // OLI_LU_SOURCEOFFUNDS
  public $SourceOfFundsDetails; // string
  public $PaymentPartialInd; // OLI_LU_BOOLEAN
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $RetainedCommissionAmt; // decimal
  public $MoneyTransferType; // OLI_LU_MONEYTRSFR
  public $CheckDate; // date
  public $CheckStubDetails; // string
  public $PaymentStatus; // OLI_LU_PAYMENTSTATUS
  public $PaymentStatusDate; // date
  public $DateReceivedAtBank; // date
  public $DateDepositedByBank; // date
  public $ForeignPaymentInd; // OLI_LU_BOOLEAN
  public $PaymentDraftDay; // integer
  public $PaymentStatusReason; // string
  public $ReferenceNo; // string
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PayeeID; // IDREF
  public $BankHoldingID; // IDREF
  public $HoldingID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class PaymentCardInfo_Type {
  public $PaymentCardInfoKey; // PERSISTKEY
  public $PaymentCardInfoSysKey; // SYSKEY
  public $CreditCardType; // OLI_LU_CREDCARDTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PaymentDeliveryMethInfo_Type {
  public $PaymentDeliveryMethInfoKey; // PERSISTKEY
  public $PaymentDeliveryMethInfoSysKey; // SYSKEY
  public $RqstPaymentDeliveryMethod; // OLI_LU_PAYDELMETHOD
  public $Fee; // Fee_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PaymentFormCC_Type {
  public $PaymentForm; // OLI_LU_PAYMENTFORM
}

class PaymentFormInfo_Type {
  public $PaymentFormInfoKey; // PERSISTKEY
  public $PaymentFormInfoSysKey; // SYSKEY
  public $PaymentForm; // OLI_LU_PAYMENTFORM
  public $ForeignPaymentInd; // OLI_LU_BOOLEAN
  public $Description; // string
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $PaymentCardInfo; // PaymentCardInfo_Type
  public $PaymentDeliveryMethInfo; // PaymentDeliveryMethInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PaymentModeMethProduct_Type {
  public $PaymentModeMethProductKey; // PERSISTKEY
  public $PaymentModeMethProductSysKey; // SYSKEY
  public $PaymentMode; // OLI_LU_PAYMODE
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $PaymentModeMethDesc; // string
  public $MinTerm; // integer
  public $MaxTerm; // integer
  public $TermQualifier; // OLI_LU_PAYMODE
  public $MinPct; // double
  public $MaxPct; // double
  public $MinTransactionAmt; // decimal
  public $MaxTransactionAmt; // decimal
  public $PaymentFormCC; // PaymentFormCC_Type
  public $PaymentFormInfo; // PaymentFormInfo_Type
  public $AllowedDayCC; // AllowedDayCC_Type
  public $Fee; // Fee_Type
  public $CreditCardTypeCC; // CreditCardTypeCC_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $DataRep; // DATAREP_TYPES
  public $id; // ID
}

class PaymentReference_Type {
  public $PaymentReferenceKey; // PERSISTKEY
  public $PaymentReferenceSysKey; // SYSKEY
  public $ReferenceNo; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PaymentID; // IDREF
}

class PaymentSourceCC_Type {
  public $PaymentSource; // OLI_LU_FINACTTYPE
}

class PayoffCondition_Type {
  public $PayoffConditionKey; // PERSISTKEY
  public $PayoffConditionSysKey; // SYSKEY
  public $PayoffConditionType; // OLI_LU_PAYOFFCOND
  public $Description; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Payout_Type {
  public $PayoutKey; // PERSISTKEY
  public $PayoutSysKey; // SYSKEY
  public $CarrierAdminSystem; // string
  public $IncomeOption; // OLI_LU_INCOPTION
  public $PayoutType; // OLI_LU_ANNPAYOUT
  public $NumModalPayouts; // integer
  public $PayoutAmt; // decimal
  public $PayoutPct; // double
  public $PayoutMode; // OLI_LU_PAYMODE
  public $StartDate; // date
  public $PayoutForm; // OLI_LU_PAYMENTFORM
  public $ContingentJoint; // OLI_LU_CONTINGJOINT
  public $AnnualIndex; // double
  public $TaxWithheldInd; // OLI_LU_BOOLEAN
  public $NextIndexDate; // date
  public $FederalTaxWithheld; // decimal
  public $JurisdictionTaxWithheld; // decimal
  public $ExclusionRatio; // double
  public $PrimaryReductionPct; // double
  public $PayoutEndDate; // date
  public $SecondaryReductionPct; // double
  public $ContingencyBenefitChange; // ContingencyBenefitChange_Type
  public $NextPayoutDate; // date
  public $PayoutTaxableAmt; // decimal
  public $BankBranchName; // string
  public $BankName; // string
  public $BankAcctType; // OLI_LU_BANKACCTTYPE
  public $RoutingNumber; // string
  public $AccountNumber; // string
  public $AnnualFlatIncreaseAmt; // decimal
  public $AdjInvestedAmt; // decimal
  public $LevelizationOption; // OLI_LU_LEVELIZEDOPT
  public $LevelizationFrequency; // OLI_LU_PAYMODE
  public $GuarPayoutAmt; // decimal
  public $BeneDesignationWording; // string
  public $ProductCode; // string
  public $AssumedInterestRate; // double
  public $SplitPctIncrement; // double
  public $RMDTaxRule; // OLI_LU_TAXRULE
  public $PayoutAmtYTD; // decimal
  public $PayoutAmtATD; // decimal
  public $AgeBasedOn; // OLI_LU_PARTICROLE
  public $SelectedIncomeOptionInd; // OLI_LU_BOOLEAN
  public $PlanName; // string
  public $PayoutAge; // integer
  public $ExclusionAmount; // decimal
  public $LocalTaxWithheld; // decimal
  public $AnnuityStartingDate; // date
  public $StartMonth; // integer
  public $DayOfMonth; // integer
  public $BusinessDayOfMonth; // OLI_LU_ALLOWEDDAY
  public $LivesType; // OLI_LU_LIVESTYPE
  public $AnnualIndexType; // OLI_LU_ANNIDX
  public $SourceTransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $PeriodCertainMode; // OLI_LU_PAYMODE
  public $PeriodCertainPeriods; // integer
  public $ReturnPremPct; // double
  public $DestTransferAmtType; // OLI_LU_TRNSFRAMTTYPE
  public $PayoutStatus; // OLI_LU_HOLDSTAT
  public $ReinsuranceInfo; // ReinsuranceInfo_Type
  public $Participant; // Participant_Type
  public $TaxWithholding; // TaxWithholding_Type
  public $Fee; // Fee_Type
  public $PayoutChange; // PayoutChange_Type
  public $DateCollection; // DateCollection_Type
  public $PeriodCertainCC; // PeriodCertainCC_Type
  public $ArrSource; // ArrSource_Type
  public $ArrDestination; // ArrDestination_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $BankPartyID; // IDREF
  public $BankingInfoID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class PayoutChange_Type {
  public $PayoutChangeKey; // PERSISTKEY
  public $PayoutChangeSysKey; // SYSKEY
  public $ChangeMode; // OLI_LU_PAYMODE
  public $PayoutChangeAmt; // decimal
  public $AmountQualifier; // OLI_LU_AMOUNTTYPE
  public $PayoutPctType; // OLI_LU_INTCALCTYPE
  public $Description; // string
  public $StartDate; // date
  public $EndDate; // date
  public $NextActivityDate; // date
  public $TimingBasis; // OLI_LU_STMTBASIS
  public $PayoutPct; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PeriodCertainCC_Type {
  public $PeriodCertainMode; // OLI_LU_PAYMODE
  public $PeriodCertainPeriods; // integer
  public $IncomeStartDateMaxMonths; // integer
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MinIssueAgeOwner; // integer
  public $MaxIssueAgeOwner; // integer
  public $FeatureOptConflict; // FeatureOptConflict_Type
  public $QualifiedPlanCC; // QualifiedPlanCC_Type
  public $QualifiedPlanOption; // QualifiedPlanOption_Type
}

class PeriodicBalanceYTDInfo_Type {
  public $PeriodicBalanceYTDInfoKey; // PERSISTKEY
  public $PeriodicBalanceYTDInfoSysKey; // SYSKEY
  public $TaxableInd; // OLI_LU_BOOLEAN
  public $BalancePeriod; // OLI_LU_PAYMODE
  public $BalanceAmt; // decimal
  public $CommissionTransactionType; // OLI_LU_COMMTRNTYPE
  public $CommissionType; // OLI_LU_COMMTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PermTableRatingCC_Type {
  public $PermTableRating; // OLI_LU_RATINGS
  public $OLifEExtension; // OLifEExtension_Type
}

class PermTableRatingInfo_Type {
  public $PermTableRatingInfoKey; // PERSISTKEY
  public $PermTableRatingInfoSysKey; // SYSKEY
  public $PermTableRating; // OLI_LU_RATINGS
  public $PermTableRatingAlphaCode; // string
  public $PermPercentageLoading; // double
  public $PermRatingType; // OLI_LU_RATINGTYPE
  public $RatingSubType; // OLI_LU_OCCUPRATING
  public $Sequence; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Person_Type {
  public $PersonKey; // PERSISTKEY
  public $PersonSysKey; // SYSKEY
  public $FirstName; // string
  public $MiddleName; // string
  public $MiddleName1; // string
  public $MiddleName2; // string
  public $LastName; // string
  public $NickName; // string
  public $Initials; // string
  public $Prefix; // string
  public $Suffix; // string
  public $Title; // string
  public $Occupation; // string
  public $MarStat; // OLI_LU_MARSTAT
  public $Gender; // OLI_LU_GENDER
  public $BirthDate; // date
  public $DOBEstimated; // OLI_LU_BOOLEAN
  public $EducationType; // OLI_LU_EDULEVEL
  public $EyeColor; // OLI_LU_EYECOLOR
  public $HairColor; // OLI_LU_HAIRCOLOR
  public $PassportNo; // string
  public $Age; // integer
  public $Citizenship; // OLI_LU_NATION
  public $OccupClass; // OLI_LU_OCCUPCLASS
  public $OccupationType; // OLI_LU_EMPLOYMENTTYPE
  public $EstRetireDate; // date
  public $EstMortalityDate; // date
  public $EstSalary; // decimal
  public $EstGrossAnnualOtherIncome; // decimal
  public $NetIncomeAmt; // decimal
  public $NetSavingsAmt; // decimal
  public $TobaccoType; // OLI_LU_TOBACCOTYPE
  public $TobaccoFree; // date
  public $SmokerStat; // OLI_LU_SMOKERSTAT
  public $SmokingFrequencyMode; // OLI_LU_PARTFREQ
  public $SmokingFrequencyNumber; // integer
  public $Height; // integer
  public $Height2; // Height2_Type
  public $Weight; // double
  public $Weight2; // Weight2_Type
  public $DriversLicenseNum; // string
  public $NoDriversLicenseInd; // OLI_LU_BOOLEAN
  public $NoDriversLicenseReason; // string
  public $DriversLicenseState; // OLI_LU_STATE
  public $DriversLicenseCountry; // OLI_LU_NATION
  public $DriversLicenseStatus; // OLI_LU_DLSTATUS
  public $IncomeInfoFromPartyInd; // OLI_LU_BOOLEAN
  public $BirthCountry; // OLI_LU_NATION
  public $BirthJurisdiction; // string
  public $BirthJurisdictionTC; // OLI_LU_STATE
  public $BirthCity; // string
  public $GovtImmigrationNo; // string
  public $ImmigrationStatus; // OLI_LU_IMMSTAT
  public $ImmigrationEntryDate; // date
  public $AlternateTaxID; // string
  public $AlternateTaxIDTC; // OLI_LU_GOVTIDTC
  public $VisaClassType; // OLI_LU_VISACLASSTYPE
  public $VisaDetails; // string
  public $VisaExpDate; // date
  public $VisaNationOfOrigin; // OLI_LU_NATION
  public $VisaNationOfOriginDesc; // string
  public $GuestCountry; // OLI_LU_NATION
  public $GuestLengthOfStayYears; // integer
  public $GuestLengthOfStayMonths; // integer
  public $GuestLengthOfStayDays; // integer
  public $RestrictionInd; // OLI_LU_BOOLEAN
  public $RestrictionReason; // OLI_LU_RESTRICTREASON
  public $ASCOCode; // string
  public $WorkExperienceTravel; // double
  public $WorkExperienceManual; // double
  public $WorkExperienceAdmin; // double
  public $WorkExperienceSupervisoryManual; // double
  public $WorkExperienceSupervisoryAdmin; // double
  public $HighestEducationLevel; // OLI_LU_EDULEVEL
  public $ProofOfAgeInd; // OLI_LU_BOOLEAN
  public $MortalityConfirmDate; // date
  public $DeathCountry; // OLI_LU_NATION
  public $DeathJurisdictionTC; // OLI_LU_STATE
  public $EthnicType; // OLI_LU_ETHNIC
  public $DriversLicenseIssueDate; // date
  public $DriversLicenseExpDate; // date
  public $DriversLicenseIssueAgency; // string
  public $DriversLicenseType; // OLI_LU_DRIVERSLICENSETYPE
  public $DriversLicenseClassCode; // string
  public $DriversLicenseClassDesc; // string
  public $NonResidentAlienInd; // OLI_LU_BOOLEAN
  public $Education; // Education_Type
  public $CauseOfDeath; // CauseOfDeath_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PersonalAssistance_Type {
  public $PersonalAssistanceKey; // PERSISTKEY
  public $PersonalAssistanceSysKey; // SYSKEY
  public $Description; // string
  public $Applicability; // OLI_LU_APPLICABILITY
  public $PersonalAssistanceType; // OLI_LU_PASS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Pharmacy_Type {
  public $PharmacyKey; // PERSISTKEY
  public $PharmacySysKey; // SYSKEY
  public $ProviderType; // OLI_LU_PROVIDERTYPE
  public $ProviderNumber; // string
  public $ProviderClass; // OLI_LU_PROVIDERCLASS
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Phone_Type {
  public $PhoneKey; // PERSISTKEY
  public $PhoneSysKey; // SYSKEY
  public $PhoneTypeCode; // OLI_LU_PHONETYPE
  public $CountryCode; // string
  public $AreaCode; // string
  public $DialNumber; // string
  public $AliasDialNumber; // string
  public $Ext; // string
  public $PrefPhone; // OLI_LU_BOOLEAN
  public $BestTimeToCallFrom; // time
  public $BestTimeToCallTo; // time
  public $InvalidInd; // OLI_LU_BOOLEAN
  public $SolicitationInd; // OLI_LU_BOOLEAN
  public $StartDate; // date
  public $EndDate; // date
  public $RecurringEndMoDay; // gMonthDay
  public $RecurringStartMoDay; // gMonthDay
  public $PhoneCountryTC; // OLI_LU_NATION
  public $TTYInd; // OLI_LU_BOOLEAN
  public $Sequence; // integer
  public $BestDayToCallCC; // BestDayToCallCC_Type
  public $SpeedDial; // SpeedDial_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Physician_Type {
  public $PhysicianKey; // PERSISTKEY
  public $PhysicianSysKey; // SYSKEY
  public $PhysicianSpeciality; // OLI_LU_PHYSICIANSPECIALTY
  public $PhysicianInfo; // PhysicianInfo_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PhysicianInfo_Type {
  public $PhysicianInfoKey; // PERSISTKEY
  public $PhysicianInfoSysKey; // SYSKEY
  public $ProviderType; // OLI_LU_PROVIDERTYPE
  public $ProviderNumber; // string
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Policy_Type {
  public $CarrierAdminSystem; // string
  public $PriorCarrierAdminSystem; // string
  public $PolNumber; // string
  public $CertificateNo; // string
  public $LineOfBusiness; // OLI_LU_LINEBUS
  public $ProductType; // OLI_LU_POLPROD
  public $ProductCode; // string
  public $ProductVersionCode; // string
  public $CarrierCode; // string
  public $PlanName; // string
  public $AdministeringCarrierCode; // string
  public $ShortName; // string
  public $MarketingName; // string
  public $PolicyStatus; // OLI_LU_POLSTAT
  public $PolicyStatusDesc; // string
  public $StatusReason; // OLI_LU_STATREASON
  public $IssueNation; // OLI_LU_NATION
  public $IssueNationDesc; // string
  public $IssueType; // OLI_LU_POLISSUE
  public $IssueSubType; // OLI_LU_POLISSUESUB
  public $Jurisdiction; // OLI_LU_STATE
  public $BillNumber; // string
  public $ReinsuranceInd; // OLI_LU_BOOLEAN
  public $PortabilityInd; // OLI_LU_BOOLEAN
  public $ConvertToPrivateInd; // OLI_LU_BOOLEAN
  public $TaxStatus; // OLI_LU_TAXSTAT
  public $CusipNum; // string
  public $ReplacementType; // OLI_LU_REPLACETYPE
  public $CommissionOptionSelected; // OLI_LU_COMMOPTION
  public $CommissionRollOverPct; // double
  public $PolicyValue; // decimal
  public $PolicyValueLastYear; // decimal
  public $PolFee; // decimal
  public $Duration; // integer
  public $DownloadDate; // date
  public $EffDate; // date
  public $EffPartialDate; // PARTIAL_DATE_TYPE
  public $IssueDate; // date
  public $TermDate; // date
  public $ReinstatementDate; // date
  public $StatusChangeDate; // date
  public $PaidToDate; // date
  public $GracePeriodEndDate; // date
  public $FinalPaymentDate; // date
  public $BilledToDate; // date
  public $BillingStopDate; // date
  public $LastCOIAnnivDate; // date
  public $PaymentMode; // OLI_LU_PAYMODE
  public $PaymentAmt; // decimal
  public $AnnualPaymentAmt; // decimal
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $AccountNumber; // string
  public $RoutingNumber; // string
  public $AcctHolderName; // string
  public $CreditCardExpDate; // gYearMonth
  public $CreditCardType; // OLI_LU_CREDCARDTYPE
  public $BankAcctType; // OLI_LU_BANKACCTTYPE
  public $PaymentDraftDay; // integer
  public $BankName; // string
  public $BankBranchName; // string
  public $EFTEndDate; // date
  public $LastBankChangeDate; // date
  public $PaymentDueDate; // date
  public $LastNoticeDate; // date
  public $LastNoticeType; // OLI_LU_NOTICETYPE
  public $StatementBasis; // OLI_LU_STMTBASIS
  public $LastDeductedCOICharges; // decimal
  public $LastDeductedExpenseCharges; // decimal
  public $LastCOIDate; // date
  public $LastNoGoodCheckDate; // date
  public $LastNoGoodCheckReason; // OLI_LU_NGCHECK
  public $GovtAllotmentSuspenseAcctAmt; // decimal
  public $LapseTaxableGain; // decimal
  public $NonStdCommTaken; // OLI_LU_BOOLEAN
  public $CommissionAnnualizedInd; // OLI_LU_BOOLEAN
  public $StampDuty; // decimal
  public $OwnerLegalName; // string
  public $CaseControlNumberAssuming; // string
  public $BeneficiaryInd; // OLI_LU_BOOLEAN
  public $EndorsementInd; // OLI_LU_BOOLEAN
  public $OtherInsuredInd; // OLI_LU_BOOLEAN
  public $RatedInd; // OLI_LU_BOOLEAN
  public $FreeAvailableAmt; // decimal
  public $SurrenderChargeFreeDate; // date
  public $DeductionDate; // date
  public $ContestabilityEndDate; // date
  public $FirstBillSkipMonth; // gMonth
  public $MoneyTransferType; // OLI_LU_MONEYTRSFR
  public $CarrierCommCode; // string
  public $SpecialHandling; // OLI_LU_SPECIALHANDLING
  public $FormNo; // string
  public $FiledFormNumber; // string
  public $IllustratedMaturityHigh; // double
  public $IllustratedMaturityLow; // double
  public $PremiumIndexRate; // double
  public $PriorPolicyStatus; // OLI_LU_POLSTAT
  public $AdvancingRejectedInd; // OLI_LU_BOOLEAN
  public $NettingElectedInd; // OLI_LU_BOOLEAN
  public $IRSTriggerType; // OLI_LU_IRSTRIGGER
  public $IRSTriggerInd; // OLI_LU_BOOLEAN
  public $RenewalDate; // date
  public $MinPremiumInitialAmt; // decimal
  public $InvestRule; // OLI_FREELOOKINVEST
  public $InvestRuleUserElectionInd; // OLI_LU_BOOLEAN
  public $FaceIncreaseEffectiveDt; // date
  public $FaceIncreaseNetAmt; // decimal
  public $ParentCarrierCode; // string
  public $WeightedAvgIntRate; // double
  public $PriorCarrierCode; // string
  public $PriorEffDate; // date
  public $PriorPolNumber; // string
  public $ChargeTotalAmt; // decimal
  public $FinReportingCarrierCode; // string
  public $FinalPaymentAmt; // decimal
  public $TotCommRetained; // decimal
  public $JuvenilePolicyInd; // OLI_LU_BOOLEAN
  public $PriorBillNumber; // string
  public $PriorIssueDate; // date
  public $TaxJurisdiction; // OLI_LU_STATE
  public $TaxNation; // OLI_LU_NATION
  public $ExchangeReasonCode; // OLI_LU_EXCHGREASON
  public $DistributionAgreementCode; // string
  public $AnnualIndexType; // OLI_LU_ANNIDX
  public $CommissionExtension; // string
  public $BillingResumeDate; // date
  public $ReplacedPolicyPhysicalStatus; // OLI_LU_POLICYREPLPHYSTAT
  public $ProductTransRefGUID; // string
  public $SponsoringPlanCode; // string
  public $SponsoringPlanType; // OLI_LU_SPONSORPLAN
  public $SponsoringPlanSeparationDate; // date
  public $Territory; // string
  public $ParticipatingInd; // OLI_LU_BOOLEAN
  public $IssuedAsAppliedInd; // OLI_LU_BOOLEAN
  public $Total1stYearAddlPaymentAmt; // decimal
  public $PremRefundAmt; // decimal
  public $CoverIndexRate; // double
  public $AnnualCoverIndexType; // OLI_LU_ANNIDX
  public $Life; // Life_Type
  public $Annuity; // Annuity_Type
  public $DisabilityHealth; // DisabilityHealth_Type
  public $PropertyandCasualty; // PropertyandCasualty_Type
  public $ApplicationInfo; // ApplicationInfo_Type
  public $RequirementInfo; // RequirementInfo_Type
  public $Endorsement; // Endorsement_Type
  public $FinancialActivity; // FinancialActivity_Type
  public $Claim; // Claim_Type
  public $AltPremMode; // AltPremMode_Type
  public $GroupPolicy; // GroupPolicy_Type
  public $ExchangeReason; // ExchangeReason_Type
  public $AnnualIndexOption; // AnnualIndexOption_Type
  public $PolicyLoanSummary; // PolicyLoanSummary_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ProductID; // IDREF
  public $CarrierPartyID; // IDREF
  public $BankID; // IDREF
  public $BankHoldingID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class PolicyActivityList_Type {
  public $SeqNum; // integer
  public $PolicyActivity; // REINS_SUBTRAN_CODES
  public $PolicyActivityDate; // date
  public $OLifEExtension; // OLifEExtension_Type
}

class PolicyIssueTypeCC_Type {
  public $PolicyIssueType; // OLI_LU_POLISSUE
}

class PolicyLoanSummary_Type {
  public $PolicyLoanSummaryKey; // PERSISTKEY
  public $PolicyLoanSummarySysKey; // SYSKEY
  public $LoanSummaryType; // OLI_LU_LOANSUMMARY
  public $MaxAvailableLoan; // decimal
  public $LoanBalance; // decimal
  public $LoanPrincipal; // decimal
  public $LoanTypeInfo; // LoanTypeInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PolicyOptionInfo_Type {
  public $PolicyOptionInfoKey; // PERSISTKEY
  public $PolicyOptionInfoSysKey; // SYSKEY
  public $PolicyOptionCode; // string
  public $DefaultInd; // OLI_LU_BOOLEAN
  public $ConflictObjectInfo; // ConflictObjectInfo_Type
  public $RequisiteObjectInfo; // RequisiteObjectInfo_Type
  public $QualifiedPlanEntity; // QualifiedPlanEntity_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PolicyProduct_Type {
  public $PolicyProductKey; // PERSISTKEY
  public $PolicyProductSysKey; // SYSKEY
  public $CarrierCode; // string
  public $CarrierName; // string
  public $PlanName; // string
  public $ProductCode; // string
  public $ProductVersionCode; // string
  public $VersionDate; // date
  public $ShortName; // string
  public $MarketingName; // string
  public $Description; // string
  public $PolicyProductTypeCode; // OLI_LU_POLPROD
  public $PolicyProductForm; // OLI_LU_HOLDINGFORM
  public $LineOfBusiness; // OLI_LU_LINEBUS
  public $ParticipatingInd; // OLI_LU_BOOLEAN
  public $ParticipantBasedOn; // OLI_LU_PARTICROLE
  public $PortabilityInd; // OLI_LU_BOOLEAN
  public $ConvertToPrivateInd; // OLI_LU_BOOLEAN
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $CusipNum; // string
  public $DivAccumRate; // double
  public $GuarIntRate; // double
  public $NewMoneyIntRate; // double
  public $IssueNation; // OLI_LU_NATION
  public $IssueNationDesc; // string
  public $Jurisdiction; // OLI_LU_STATE
  public $JurisdictionCC; // JurisdictionCC_Type
  public $LoanIntMethodCC; // LoanIntMethodCC_Type
  public $QualifiedPlanCC; // QualifiedPlanCC_Type
  public $IllustrationScope; // OLI_LU_ILLUSTYPES
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $PayToAge; // integer
  public $PayToYear; // integer
  public $FixedPremiumDesign; // OLI_LU_PREMSCHED
  public $FlexiblePremiumDesign; // OLI_LU_PREMSCHED
  public $PaymentModeMethProduct; // PaymentModeMethProduct_Type
  public $ScheduledPaymentCC; // ScheduledPaymentCC_Type
  public $FiledFormNumber; // string
  public $MaxNumAgents; // integer
  public $MaxNumInvestProducts; // integer
  public $IllustrationRequiredForSaleInd; // OLI_LU_BOOLEAN
  public $NoNewMoneyDate; // date
  public $WeightedAvgFeeRate; // double
  public $WeightedAvgFeeRateDate; // date
  public $LOIPeriodType; // OLI_LU_PAYMODE
  public $LOIPeriodDuration; // integer
  public $MaxAvgFeeRate; // decimal
  public $TaxWithholdingCollect; // OLI_LU_DATAREQ
  public $GuarLifetimeRate; // double
  public $ReinstateAllowedInd; // OLI_LU_BOOLEAN
  public $ReinstatePeriod; // integer
  public $ReinstatePmtType; // OLI_LU_REINSTATEPMNT
  public $ReinstateBackPremIntRate; // double
  public $ReinstateBasedOn; // OLI_LU_REINSTATEBASEDON
  public $ReinstatePremCalcType; // OLI_LU_REINSTATEPREMCALC
  public $ReinstatePremMonths; // integer
  public $ReinstateSkipCovChargesInd; // OLI_LU_BOOLEAN
  public $ReinstateEffectType; // OLI_LU_REINSTATEEFF
  public $DividendEarnRuleType; // OLI_LU_DIVEARNRULE
  public $GuarDivAccumRate; // double
  public $LoanDirectRecognitionType; // OLI_LU_LOANDIREC
  public $PUAExcessInterestInd; // OLI_LU_BOOLEAN
  public $PUAExcessInterestHighAge; // integer
  public $GracePeriodDays; // integer
  public $GracePeriodEarnInterestInd; // OLI_LU_BOOLEAN
  public $GracePeriodAltInterestRate; // double
  public $ReinstatePeriodQualifier; // OLI_LU_MEASUNITS
  public $ValuationClassType; // OLI_LU_VALCLASS
  public $ValuationBaseSeries; // string
  public $ValuationSubSeries; // string
  public $ReserveFunction; // OLI_LU_RESERVEFUNCTION
  public $ReserveIntRate; // double
  public $ReserveMethod; // OLI_LU_RESVMETH
  public $MortalityOrMorbidityTable; // OLI_LU_MORTALITYTBL
  public $ShareClass; // OLI_LU_SHARECLASS
  public $SECRegisteredInd; // OLI_LU_BOOLEAN
  public $BeneficiaryPctPrecision; // integer
  public $BeneficiaryPerStirpes; // OLI_LU_BOOLEAN
  public $CarrierAdminSystem; // string
  public $MaxNumFundingSources; // integer
  public $ParticipatingType; // OLI_LU_PARTYPE
  public $MaxNumConcurrentLoans; // integer
  public $MaxNumNewLoansPolYr; // integer
  public $MaxNumCumNewLoans; // integer
  public $LoanPostingMethod; // OLI_LU_POSTINGMETHOD
  public $UndGuidelineCode; // string
  public $BackDatingAllowedInd; // OLI_LU_BOOLEAN
  public $LifeProduct; // LifeProduct_Type
  public $AnnuityProduct; // AnnuityProduct_Type
  public $DisabilityHealthProduct; // DisabilityHealthProduct_Type
  public $InvestProductInfo; // InvestProductInfo_Type
  public $Ownership; // Ownership_Type
  public $BusinessProcessAllowed; // BusinessProcessAllowed_Type
  public $Authorization; // Authorization_Type
  public $Breakpoint; // Breakpoint_Type
  public $Fee; // Fee_Type
  public $PolicyProductInfo; // PolicyProductInfo_Type
  public $LineOfAuthorityCC; // LineOfAuthorityCC_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $PolicyProductXLat; // PolicyProductXLat_Type
  public $CommissionProduct; // CommissionProduct_Type
  public $FreelookInvestRuleProduct; // FreelookInvestRuleProduct_Type
  public $LoanProvision; // LoanProvision_Type
  public $Dividend; // Dividend_Type
  public $LapseProvision; // LapseProvision_Type
  public $NonForProvision; // NonForProvision_Type
  public $Reward; // Reward_Type
  public $TableRef; // TableRef_Type
  public $AdminTransactionProduct; // AdminTransactionProduct_Type
  public $LineOfAuthority; // LineOfAuthority_Type
  public $DistributionChannelInfo; // DistributionChannelInfo_Type
  public $DeliveryInfo; // DeliveryInfo_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PartyID; // IDREF
  public $UnderwritingGuidelinesID; // IDREF
}

class PolicyProductInfo_Type {
  public $PolicyProductInfoKey; // PERSISTKEY
  public $PolicyProductInfoSysKey; // SYSKEY
  public $ProductCode; // string
  public $CarrierCode; // string
  public $PlanName; // string
  public $NettingAllowedInd; // OLI_LU_BOOLEAN
  public $CommissionScheduleKey; // PERSISTKEY
  public $DefaultCommCode; // string
  public $AdvancingAllowedInd; // OLI_LU_BOOLEAN
  public $InterestRateClass; // string
  public $DateBasedOn; // OLI_LU_DATEBASIS
  public $CommScheduleCode; // string
  public $EffDate; // date
  public $ExpDate; // date
  public $CusipNum; // string
  public $CommOptionAvailable; // CommOptionAvailable_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $AnnuityProductExclude; // AnnuityProductExclude_Type
  public $BusinessProcessAllowed; // BusinessProcessAllowed_Type
  public $AllowedFeatureTransaction; // AllowedFeatureTransaction_Type
  public $QualifiedPlanEntityExclude; // QualifiedPlanEntityExclude_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PolicyProductID; // IDREF
  public $CommScheduleID; // IDREF
}

class PolicyProductXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $PlanName; // string
  public $ShortName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PolicyStatement_Type {
  public $PolicyStatementKey; // PERSISTKEY
  public $PolicyStatementSysKey; // SYSKEY
  public $PolNumber; // string
  public $TotalGrossPremAmt; // decimal
  public $TotalNetPremAmt; // decimal
  public $TotalDeductedCOIChgs; // decimal
  public $TotalAmtWthdrwn; // decimal
  public $CashSurrValue; // decimal
  public $NetSurrValueAmt; // decimal
  public $LoanBalance; // decimal
  public $TotalIntUnloanedFundAmt; // decimal
  public $TotalIntLoanedFundAmt; // decimal
  public $TotalLoanAmt; // decimal
  public $TotalLoanPaymentAmt; // decimal
  public $TotalLoanIntAmt; // decimal
  public $TaxableInterestEarned; // decimal
  public $TaxableInterestDue; // decimal
  public $InternalInterestTransferAmt; // decimal
  public $TotalAdjustmentAmt; // decimal
  public $UnloanedPolicyValue; // decimal
  public $WeightedAvgIntRate; // double
  public $PolicyValueAtStartDate; // decimal
  public $PolicyValueAtEndDate; // decimal
  public $Fee; // Fee_Type
  public $PolicyStatementDetail; // PolicyStatementDetail_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $HoldingID; // IDREF
}

class PolicyStatementDetail_Type {
  public $PolicyStatementDetailKey; // PERSISTKEY
  public $PolicyStatementDetailSysKey; // SYSKEY
  public $PolicyStatementDetailName; // string
  public $StartDate; // date
  public $EndDate; // date
  public $TotalGrossPremAmt; // decimal
  public $TotalNetPremAmt; // decimal
  public $TotalAmtWthdrwn; // decimal
  public $LoanBalance; // decimal
  public $TotalIntUnloanedFundAmt; // decimal
  public $TotalIntLoanedFundAmt; // decimal
  public $TotalLoanAmt; // decimal
  public $TotalLoanPaymentAmt; // decimal
  public $TotalLoanIntAmt; // decimal
  public $TotalAdjustmentAmt; // decimal
  public $PolicyValueAtStartDate; // decimal
  public $PolicyValueAtEndDate; // decimal
  public $ExcessDeathBenefitAmt; // decimal
  public $CumMinLevelPremAmt; // decimal
  public $GuarCashValue; // decimal
  public $TotalTermRiderCharge; // decimal
  public $AvgRateOfReturnITD; // double
  public $FaceAmt; // decimal
  public $DeathBenefitAmt; // decimal
  public $SurrenderChargeAmt; // decimal
  public $CashSurrValue; // decimal
  public $NetSurrValueAmt; // decimal
  public $TermDivAmt; // decimal
  public $CumMinPremAmt; // decimal
  public $TotCumPremAmt; // decimal
  public $Fee; // Fee_Type
  public $FinancialActivity; // FinancialActivity_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PolicyStatusCC_Type {
  public $PolicyStatus; // OLI_LU_POLSTAT
}

class PolicyValues_Type {
  public $PolicyValuesKey; // PERSISTKEY
  public $PolicyValuesSysKey; // SYSKEY
  public $PolicyValuesPurpose; // OLI_LU_POLICYVALUES
  public $IllustrationResult; // IllustrationResult_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PreferredReqFulfiller_Type {
  public $PreferredReqFulfillerKey; // PERSISTKEY
  public $PreferredReqFulfillerSysKey; // SYSKEY
  public $ReqCategory; // OLI_LU_REQCAT
  public $ReqCode; // OLI_LU_REQCODE
  public $ACORDVendorCode; // string
  public $RequirementAcctNum; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $FulfillerPartyID; // IDREF
}

class PremiumRate_Type {
  public $PremiumRateKey; // PERSISTKEY
  public $PremiumRateSysKey; // SYSKEY
  public $MortalityAssumptionType; // TC_MORTASSUMPTION
  public $PremiumRateType; // OLI_LU_PREMIUMRATETYPE
  public $Description; // string
  public $TableRef; // TableRef_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PrescriptionDrug_Type {
  public $PrescriptionDrugKey; // PERSISTKEY
  public $PrescriptionDrugSysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $PrescriptionDrugType; // OLI_LU_DRUGTYPE
  public $PrescriptionCode; // string
  public $PrescriptionLabel; // string
  public $PrescriptionDosageUnit; // OLI_LU_PRESCDOSUNIT
  public $PrescriptionDosageStrength; // integer
  public $PrescriptionDosageForm; // OLI_LU_PRESCDOSEFORM
  public $PrescriptionDirections; // string
  public $TherapeuticClass; // OLI_LU_THERCLASS
  public $AvgWholesaleUnitCostAmt; // decimal
  public $DrugSource; // OLI_LU_DRUGSOURCE
  public $KeyedValue; // KeyedValue_Type
  public $PrescriptionFill; // PrescriptionFill_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PrescriptionDrugInfo_Type {
  public $PrescriptionDrugInfoKey; // PERSISTKEY
  public $PrescriptionDrugInfoSysKey; // SYSKEY
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PrescriptionDrugID; // IDREF
}

class PrescriptionFill_Type {
  public $PrescriptionFillKey; // PERSISTKEY
  public $PrescriptionFillSysKey; // SYSKEY
  public $PrescriptionNumber; // string
  public $PrescriptionFillNumber; // integer
  public $PrescriptionFillDate; // date
  public $PrescriptionFillPartialDate; // PARTIAL_DATE_TYPE
  public $PrescriptionTotalRefillsAllowed; // integer
  public $PrescriptionDaysSupply; // integer
  public $PrescriptionQuantityDispensed; // integer
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PharmacyID; // IDREF
  public $PhysicianID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class PriorLTC_Type {
  public $PriorLTCKey; // PERSISTKEY
  public $PriorLTCSysKey; // SYSKEY
  public $PriorCompanyName; // string
  public $PriorLTCDate; // date
  public $PriorLTCPartialDate; // PARTIAL_DATE_TYPE
  public $MedicaidInd; // OLI_LU_BOOLEAN
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PriorName_Type {
  public $PriorNameKey; // PERSISTKEY
  public $PriorNameSysKey; // SYSKEY
  public $NameType; // OLI_LU_NAMETYPE
  public $FullName; // string
  public $FirstName; // string
  public $MiddleName; // string
  public $MiddleName1; // string
  public $MiddleName2; // string
  public $LastName; // string
  public $Suffix; // string
  public $AbbrName; // string
  public $DBA; // string
  public $Prefix; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ProcessingInstruction_Type {
  public $ProcessingInstructionKey; // PERSISTKEY
  public $ProcessingInstructionSysKey; // SYSKEY
  public $ProcessingInstructionType; // OLI_LU_PROCESSINGINSTRUCTION
  public $ProcessingInstructionDesc; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ProcessVersion_Type {
  public $ProcessVersionKey; // PERSISTKEY
  public $ProcessVersionSysKey; // SYSKEY
  public $ProcessStatus; // OLI_LU_SERVICESTATUS
  public $VersionName; // string
  public $VersionDesc; // string
  public $StartDate; // date
  public $EndDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Producer_Type {
  public $ProducerKey; // PERSISTKEY
  public $ProducerSysKey; // SYSKEY
  public $Certification; // string
  public $NIPRNumber; // string
  public $PrefLanguage; // OLI_LU_CLIENTLANGUAGES
  public $AlternateLanguage; // OLI_LU_CLIENTLANGUAGES
  public $AlternateLanguageProficiency; // OLI_LU_LANGPROF
  public $CRDNumber; // string
  public $License; // License_Type
  public $CarrierAppointment; // CarrierAppointment_Type
  public $Registration; // Registration_Type
  public $ProducerAgreement; // ProducerAgreement_Type
  public $DesignationInfo; // DesignationInfo_Type
  public $NationApproval; // NationApproval_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $EOCoverageID; // IDREF
}

class ProducerAgreement_Type {
  public $ProducerAgreementKey; // PERSISTKEY
  public $ProducerAgreementSysKey; // SYSKEY
  public $ProducerType; // OLI_LU_PROTYPE
  public $ProducerAgreementStatus; // OLI_LU_PROAGRESTAT
  public $AgreementStatusReason; // OLI_LU_PROSTATREAS
  public $AgreementStatusReasonEvent; // OLI_LU_PROSTATEVENT
  public $VestedType; // OLI_LU_VESTINGTYPE
  public $ExpDate; // date
  public $EffDate; // date
  public $DistributionLevel; // DistributionLevel_Type
  public $ProductTypeInfo; // ProductTypeInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PartyID; // IDREF
  public $CarrierAppointmentID; // IDREF
  public $ProducerAgreementID; // IDREF
}

class ProductTypeInfo_Type {
  public $ProductTypeInfoKey; // PERSISTKEY
  public $ProductTypeInfoSysKey; // SYSKEY
  public $PolicyProductTypeCode; // OLI_LU_POLPROD
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class PropertyandCasualty_Type {
  public $PropertyandCasualtyKey; // PERSISTKEY
  public $PropertyandCasualtySysKey; // SYSKEY
  public $CoverageAmt; // decimal
  public $Participant; // Participant_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ProviderClassOption_Type {
  public $ProviderClassOptionKey; // PERSISTKEY
  public $ProviderClassOptionSysKey; // SYSKEY
  public $ProviderClass; // OLI_LU_PROVIDERCLASS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ProxyVendor_Type {
  public $VendorName; // VendorName_Type
  public $AppName; // string
  public $AppVer; // string
  public $SeqNum; // integer
  public $CreationDate; // date
  public $CreationTime; // time
  public $Description; // string
  public $Comments; // string
  public $OLifEExtension; // OLifEExtension_Type
}

class QualifiedPlanCC_Type {
  public $QualifiedPlan; // OLI_LU_QUALPLAN
}

class QualifiedPlanEntity_Type {
  public $QualifiedPlanCC; // QualifiedPlanCC_Type
  public $EntityType; // EntityType_Type
  public $AccountDesignationCC; // AccountDesignationCC_Type
  public $Market; // Market_Type
  public $QualifiedPlanOption; // QualifiedPlanOption_Type
}

class QualifiedPlanEntityExclude_Type {
  public $QualifiedPlanEntityExcludeKey; // PERSISTKEY
  public $QualifiedPlanEntityExcludeSysKey; // SYSKEY
  public $EntityType; // EntityType_Type
  public $AccountDesignationCC; // AccountDesignationCC_Type
  public $QualifiedPlanOption; // QualifiedPlanOption_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class QualifiedPlanOption_Type {
  public $QualifiedPlanOptionKey; // PERSISTKEY
  public $QualifiedPlanOptionSysKey; // SYSKEY
  public $QualifiedPlan; // OLI_LU_QUALPLAN
  public $QualPlanSubType; // OLI_LU_QUALPLANSUBTYPE
  public $InheritedTimingAllowed; // InheritedTimingAllowed_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class QualitativeResult_Type {
  public $QualitativeResultKey; // PERSISTKEY
  public $QualitativeResultSysKey; // SYSKEY
  public $ValueCode; // OLI_LU_QUALVALUE
  public $ValueString; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class QuantitativeResult_Type {
  public $QuantitativeResultKey; // PERSISTKEY
  public $QuantitativeResultSysKey; // SYSKEY
  public $MeasureValue; // double
  public $UnitsOfMeasure; // OLI_LU_MEASUNITS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RaceTrack_Type {
  public $RaceTrackKey; // PERSISTKEY
  public $RaceTrackSysKey; // SYSKEY
  public $RaceTrackType; // OLI_LU_RACETRACKTYPE
  public $RaceTrackTypeDesc; // string
  public $PermanentTrackInd; // OLI_LU_BOOLEAN
  public $SurfaceType; // OLI_LU_SURFACETYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RacingExp_Type {
  public $RacingExpKey; // PERSISTKEY
  public $RacingExpSysKey; // SYSKEY
  public $LastRaceLocation; // string
  public $LastRaceDate; // date
  public $LastRacePartialDate; // PARTIAL_DATE_TYPE
  public $SpeedMax; // integer
  public $SpeedAvg; // integer
  public $DistanceMax; // integer
  public $DistanceAvg; // integer
  public $DistanceLastRace; // integer
  public $RaceTrackType; // OLI_LU_RACETRACKTYPE
  public $SurfaceType; // OLI_LU_SURFACETYPE
  public $CompetitionLicenseInd; // OLI_LU_BOOLEAN
  public $DriverSchoolInd; // OLI_LU_BOOLEAN
  public $DriverSchoolDesc; // string
  public $StuntDrivingInd; // OLI_LU_BOOLEAN
  public $CompetitionLocationInd; // OLI_LU_BOOLEAN
  public $ProfessionalInd; // OLI_LU_BOOLEAN
  public $CompetitionDetail; // CompetitionDetail_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RateInfo_Type {
  public $RateInfoKey; // PERSISTKEY
  public $RateInfoSysKey; // SYSKEY
  public $RatingMethod; // OLI_LU_RATEMETH
  public $RateDetails; // string
  public $EffDate; // date
  public $ExpDate; // date
  public $GuaranteeDuration; // integer
  public $DurQualifier; // OLI_LU_PAYMODE
  public $TobaccoPremiumBasis; // OLI_LU_TOBPREMBASIS
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RateLockInfo_Type {
  public $RateLockInfoKey; // PERSISTKEY
  public $RateLockInfoSysKey; // SYSKEY
  public $LockedInInd; // OLI_LU_BOOLEAN
  public $Duration; // integer
  public $DurQualifier; // OLI_LU_PAYMODE
  public $FinActivityType; // OLI_LU_FINACTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RateOfReturnInfo_Type {
  public $RateOfReturnInfoKey; // PERSISTKEY
  public $RateOfReturnInfoSysKey; // SYSKEY
  public $PeriodMode; // OLI_LU_PERIODMODE
  public $RateOfReturn; // double
  public $CalculationMethod; // OLI_LU_RORCALCMETHOD
  public $PeriodQuantity; // integer
  public $StartDate; // date
  public $EndDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RateVariation_Type {
  public $RateVariationKey; // PERSISTKEY
  public $RateVariationSysKey; // SYSKEY
  public $RateType; // OLI_LU_RATETYPE
  public $InvestRate; // double
  public $GuaranteeDuration; // integer
  public $RateVariationCode; // string
  public $DurQualifier; // OLI_LU_PAYMODE
  public $TableIdentity; // string
  public $InterestUseType; // OLI_LU_INTERESTUSE
  public $MarketProductCode; // string
  public $RateVariationByDuration; // RateVariationByDuration_Type
  public $RateVariationByVolume; // RateVariationByVolume_Type
  public $TableRef; // TableRef_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RateVariationByDuration_Type {
  public $RateVariationByDurationKey; // PERSISTKEY
  public $RateVariationByDurationSysKey; // SYSKEY
  public $DurQualifier; // OLI_LU_PAYMODE
  public $LowDur; // integer
  public $HighDur; // integer
  public $RateDifferential; // double
  public $InvestRate; // double
  public $RateEffectiveDate; // date
  public $RateEndDate; // date
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RateVariationByVolume_Type {
  public $RateVariationByVolumeKey; // PERSISTKEY
  public $RateVariationByVolumeSysKey; // SYSKEY
  public $RateBasedOn; // OLI_LU_RATEBASEDON
  public $LowAmt; // decimal
  public $HighAmt; // decimal
  public $RateDifferential; // double
  public $RateEffectiveDate; // date
  public $RateEndDate; // date
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RatingAgencyInfo_Type {
  public $RatingAgencyInfoKey; // PERSISTKEY
  public $RatingAgencyInfoSysKey; // SYSKEY
  public $RatingSource; // OLI_LU_RATINGSRC
  public $RatingValue; // string
  public $RatingDescription; // string
  public $EffDate; // date
  public $TermDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ReconciliationDetail_Type {
  public $ReconciliationDetailKey; // PERSISTKEY
  public $ReconciliationDetailSysKey; // SYSKEY
  public $Description; // string
  public $ReconciliationTotalAmt; // decimal
  public $ReconciliationTotalQty; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ReconciliationSummary_Type {
  public $ReconciliationSummaryKey; // PERSISTKEY
  public $ReconciliationSummarySysKey; // SYSKEY
  public $ReconciliationSummaryType; // OLI_LU_RECONSUMMTYPE
  public $ReconciliationDetailTypeCode; // OLI_LU_RECONCILDTL
  public $ReconciliationTotalAmtSource; // string
  public $ReconciliationTotalQtySource; // string
  public $ReconciliationDetail; // ReconciliationDetail_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ReductionScheduleInfo_Type {
  public $ReductionScheduleInfoKey; // PERSISTKEY
  public $ReductionScheduleInfoSysKey; // SYSKEY
  public $AgeAmtProduct; // AgeAmtProduct_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ReferenceRange_Type {
  public $ReferenceRangeKey; // PERSISTKEY
  public $ReferenceRangeSysKey; // SYSKEY
  public $MinValue; // string
  public $MaxValue; // string
  public $UnitsOfMeasure; // OLI_LU_MEASUNITS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Registration_Type {
  public $RegistrationKey; // PERSISTKEY
  public $RegistrationSysKey; // SYSKEY
  public $StatusDate; // date
  public $FirmName; // string
  public $FirmRegistrationNum; // string
  public $RegistrationNum; // string
  public $StatusDesc; // string
  public $EffDate; // date
  public $ExpDate; // date
  public $RenewalDate; // date
  public $RegistrationJurisdiction; // RegistrationJurisdiction_Type
  public $Exam; // Exam_Type
  public $RequirementInfo; // RequirementInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $AgencyAffiliationID; // IDREF
}

class RegistrationJurisdiction_Type {
  public $RegistrationJurisdictionKey; // PERSISTKEY
  public $RegistrationJurisdictionSysKey; // SYSKEY
  public $StatusDate; // date
  public $Nation; // OLI_LU_NATION
  public $RegistrationType; // OLI_LU_REGISTRATIONTYPE
  public $RegistrationEntity; // OLI_LU_REGISTRATIONENTITY
  public $DeficiencyReason; // string
  public $StatusDesc; // string
  public $Jurisdiction; // OLI_LU_STATE
  public $ResidentOfState; // OLI_LU_BOOLEAN
  public $EffDate; // date
  public $ExpDate; // date
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RegulatoryDistAgreement_Type {
  public $RegulatoryDistAgreementKey; // PERSISTKEY
  public $RegulatoryDistAgreementSysKey; // SYSKEY
  public $RegDistAgreementStatus; // OLI_LU_REGINFDISTAGSTAT
  public $RegDistAgreementType; // OLI_LU_REGINFDISTAGTYPE
  public $SelectedInd; // OLI_LU_BOOLEAN
  public $RegInfoDistributor; // OLI_LU_REGINFDISTRIBUTOR
  public $PHIDistInd; // OLI_LU_BOOLEAN
  public $RegulationType; // OLI_LU_REGTYPE
  public $SignatureInfo; // SignatureInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ReinsuranceInfo_Type {
  public $ReinsuranceInfoKey; // PERSISTKEY
  public $ReinsuranceInfoSysKey; // SYSKEY
  public $AdminFee; // decimal
  public $CedentsTreatyIdent; // string
  public $ReinsurersTreatyIdent; // string
  public $RetentionPct; // double
  public $ReinsuranceRiskBasis; // OLI_LU_REINRISKBASE
  public $ReinsuranceEffDate; // date
  public $ReinsurancePurchMeth; // OLI_LU_REINSPUR
  public $ReinsurancePayMode; // OLI_LU_PAYMODE
  public $ReinsurancePaidToDate; // date
  public $ReinsurancePaidUpToDate; // date
  public $ReinsuranceIssueAge; // integer
  public $ReinsuredAmt; // decimal
  public $ModalGrossStdPremAmt; // decimal
  public $ModalGrossStdAllowanceAmt; // decimal
  public $ModalGrossSubstAllowanceAmt; // decimal
  public $ModalGrossSubstdPremAmt; // decimal
  public $ModalExpenseAllowanceAmt; // decimal
  public $RetentionLevel; // OLI_LU_RETNLEV
  public $RetentionAmt; // decimal
  public $UltimateCededAmt; // decimal
  public $ReinsurancePremiumTaxAmt; // decimal
  public $ReinsurancePremStatus; // OLI_LU_POLSTAT
  public $ExperienceRefundingInd; // OLI_LU_BOOLEAN
  public $RecaptureFeeAmt; // decimal
  public $PolicyFeeAllowanceAmt; // decimal
  public $LapseChargeBackInd; // OLI_LU_BOOLEAN
  public $ReinsuranceValuationNetPremAmt; // decimal
  public $ReinsuranceWaivedPremiumAmt; // decimal
  public $ReinsuranceRecaptureDate; // date
  public $ReinsurancePremiumTaxReimbursementCode; // OLI_LU_REINSPREMTAXREIMCD
  public $NetAmtAtRisk; // decimal
  public $ReserveMethod; // OLI_LU_RESVMETH
  public $IncreasingRiskInd; // OLI_LU_BOOLEAN
  public $InterestRate; // double
  public $ReserveFunction; // OLI_LU_RESERVEFUNCTION
  public $ReserveValuationType; // OLI_LU_RESVALTYPE
  public $MortalityOrMorbidityTable; // OLI_LU_MORTALITYTBL
  public $SubstdPolicyReserveMethod; // OLI_LU_SUBSTDRESV
  public $ReserveAmt; // decimal
  public $SubstdReserveAmt; // decimal
  public $StatisticalPrem; // decimal
  public $SubstdStatisticalPremAmt; // decimal
  public $DeficiencyReserveAmt; // decimal
  public $DeferredNetPremiumAmt; // decimal
  public $DisabilityWaitingPeriod; // OLI_LU_ELIMPERIOD
  public $PremiumRateTable; // string
  public $CashSurrValue; // decimal
  public $LastDivAmt; // decimal
  public $LoanIntAmtATD; // decimal
  public $PolFee; // decimal
  public $RequestedAmtAllReinsurers; // decimal
  public $UltimateFaceAmt; // decimal
  public $PaidFromDate; // date
  public $PointInDuration; // integer
  public $ReinsuranceSubmissionType; // OLI_LU_REINSURE_SUBMITTYPES
  public $FlatExtraReserveAmt; // decimal
  public $TaxReserveAmt; // decimal
  public $AnnualAllowanceAmt; // decimal
  public $PriorNetRiskAmt; // decimal
  public $DeathBenefitClaimAmt; // decimal
  public $AnnualGrossFlatExtraAllowanceAmt; // decimal
  public $AnnualGrossFlatExtraPremAmt; // decimal
  public $AnnualGrossStdAllowanceAmt; // decimal
  public $AnnualGrossSubstdAllowanceAmt; // decimal
  public $AllowancePointInDuration; // integer
  public $PremiumPointInDuration; // integer
  public $ChangePointInDuration; // integer
  public $RecaptureEligibilityCd; // OLI_LU_RECAPELIG
  public $RetrocessionRiskBasis; // OLI_LU_REINRISKBASE
  public $RetroDirectTypeCd; // OLI_LU_REINSSOURCE
  public $PolicyFeeCommissionInd; // OLI_LU_BOOLEAN
  public $IssueCategory; // OLI_LU_REINSISSUECAT
  public $BillingFrequencyMode; // OLI_LU_PAYMODE
  public $GAAPFactor; // double
  public $GAAPReserveAmt; // decimal
  public $SubstdGAAPFactor; // double
  public $SubstdGAAPReserveAmt; // decimal
  public $GAAPReserveCalculationBasisCd; // OLI_LU_GAAPCALCBASIS
  public $SubstdGAAPReserveCalculationBasisCd; // OLI_LU_GAAPCALCBASIS
  public $SubstdDeficiencyReserveAmt; // decimal
  public $ModalGrossFlatExtraAllowanceAmt; // decimal
  public $ModalGrossFlatExtraPremAmt; // decimal
  public $AsOfDate; // date
  public $CarrierCode; // string
  public $CarrierName; // string
  public $ReinsuredPct; // double
  public $ModalGrossTotalPremAmt; // decimal
  public $ReinsuranceEndDate; // date
  public $CashSurrValuePerUnitEndCurrYr; // decimal
  public $CashSurrValuePerUnitPriorYr; // decimal
  public $PaidInAdvancePremAmt; // decimal
  public $ReserveAmtNextYear; // decimal
  public $StatisticalPremPerUnit; // decimal
  public $TotalAllowanceAmtITD; // decimal
  public $TotalPremAmtITD; // decimal
  public $InterestDuration; // integer
  public $InterestDurationQualifier; // OLI_LU_PAYMODE
  public $EmploymentClass; // OLI_LU_EMPLOYMENTCLASS
  public $ProductCode; // string
  public $ModalPremNetDueAmt; // decimal
  public $ModalNetStdPremAmt; // decimal
  public $ModalNetStdAllowanceAmt; // decimal
  public $ModalNetSubstdPremAmt; // decimal
  public $ModalNetSubstdAllowanceAmt; // decimal
  public $ModalNetFlatExtraPremAmt; // decimal
  public $ModalNetFlatExtraAllowanceAmt; // decimal
  public $BillNumber; // string
  public $SystemMessage; // SystemMessage_Type
  public $AdditionalInterestRateInfo; // AdditionalInterestRateInfo_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $CarrierPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ReinsuranceRequest_Type {
  public $ReinsReportPeriodEndDate; // date
  public $ReinsTranModel; // REINS_TRANMODEL_CODES
  public $ReinsReportPeriodStartDate; // date
  public $PolicyActivityList; // PolicyActivityList_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
}

class Rejection_Type {
  public $RejectionKey; // PERSISTKEY
  public $RejectionSysKey; // SYSKEY
  public $RejectionCompanyName; // string
  public $RejectionLineOfBusiness; // OLI_LU_LINEBUS
  public $RejectionReason; // string
  public $RejectionDate; // date
  public $RejectionPartialDate; // PARTIAL_DATE_TYPE
  public $RejectionType; // OLI_LU_REJECTIONTYPE
  public $RejectedPolicyFaceAmt; // decimal
  public $RejectedPolicyNumber; // string
  public $RejectedPolicyAppDate; // date
  public $RejectedPolicyPartialAppDate; // PARTIAL_DATE_TYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RelatedParticipantProductInfo_Type {
  public $RelatedParticipantProductInfoKey; // PERSISTKEY
  public $RelatedParticipantProductInfoSysKey; // SYSKEY
  public $ProductCode; // string
  public $ObjectType; // OLI_LU_OBJECTTYPE
  public $ParticipantRoleCode; // OLI_LU_PARTICROLE
  public $MinNumRelatedRolePlayers; // integer
  public $MaxNumRelatedRolePlayers; // integer
  public $RelationshipInfo; // RelationshipInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RelatedRoleCC_Type {
  public $RelatedRole; // OLI_LU_REL
}

class RelatedRoleDataCollection_Type {
  public $RelatedRoleDataCollectionKey; // PERSISTKEY
  public $RelatedRoleDataCollectionSysKey; // SYSKEY
  public $DataToCollect; // OLI_LU_DATACOLLECTION
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Relation_Type {
  public $RelationKey; // PERSISTKEY
  public $RelationSysKey; // SYSKEY
  public $OriginatingObjectType; // OLI_LU_OBJECTTYPE
  public $RelatedObjectType; // OLI_LU_OBJECTTYPE
  public $RelationRoleCode; // OLI_LU_REL
  public $RelationDescription; // OLI_LU_RELDESC
  public $TemporaryRoleInd; // OLI_LU_BOOLEAN
  public $NameFromRelatedObject; // string
  public $KeyFromRelatedObject; // PERSISTKEY
  public $StartDate; // date
  public $EndDate; // date
  public $Dependent; // OLI_LU_BOOLEAN
  public $InterestPercent; // double
  public $InterestAmt; // decimal
  public $VolumeSharePct; // double
  public $RelatedRefID; // string
  public $RelatedRefIDType; // OLI_LU_IDREFTYPE
  public $PrimaryAddressID; // IDREF
  public $PrimaryPhoneToCallID; // IDREF
  public $PrimaryEmailID; // IDREF
  public $BeneficiarySeqNum; // integer
  public $BeneficiaryShareMethod; // OLI_LU_BENEFICIARYSHAREMETHOD
  public $BeneficiaryCommonDisasterPeriod; // integer
  public $BeneficiaryDesignation; // OLI_LU_BENEDESIGNATION
  public $IrrevokableInd; // OLI_LU_BOOLEAN
  public $Duration; // integer
  public $Sequence; // integer
  public $CommissionLinkCC; // CommissionLinkCC_Type
  public $AdvancingElectedInd; // OLI_LU_BOOLEAN
  public $CommScheduleCode; // string
  public $DistributionAgreementCode; // string
  public $RenewalInterestPercent; // double
  public $InitialInterestPercent; // double
  public $SignatureReqType; // OLI_LU_SIGNREQTYPE
  public $SignatureReqDesc; // string
  public $DistributionOption; // OLI_LU_DISTOPTION
  public $PreferredBeneficiaryInd; // OLI_LU_BOOLEAN
  public $AssociatedObjectInfo; // AssociatedObjectInfo_Type
  public $DeliveryInfo; // DeliveryInfo_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $OriginatingObjectID; // IDREF
  public $RelatedObjectID; // IDREF
  public $ParticipantID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $SecondaryAddressID; // IDREF
  public $ProducerAgreementID; // IDREF
}

class RelationRoleCodeCC_Type {
  public $RelationRoleCodeCCKey; // PERSISTKEY
  public $RelationRoleCodeCCSysKey; // SYSKEY
  public $RelationRoleCode; // OLI_LU_REL
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RelationshipCC_Type {
  public $Relationship; // OLI_LU_REL
}

class RelationshipInfo_Type {
  public $RelationshipInfoKey; // PERSISTKEY
  public $RelationshipInfoSysKey; // SYSKEY
  public $Relationship; // OLI_LU_REL
  public $BaseAddOnInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RequestBasis_Type {
  public $BasisName; // string
  public $InterestAssumption; // TC_INTASSUMPTION
  public $InterestAssumptionRate; // double
  public $MortalityAssumption; // TC_MORTASSUMPTION
  public $MortalityAssumptionBlend; // double
  public $MortalityReEntryInd; // OLI_LU_BOOLEAN
  public $DividendAssumption; // TC_MORTASSUMPTION
  public $DividendAssumptionBlend; // double
  public $IllustrateNonGuarBonusInd; // OLI_LU_BOOLEAN
  public $LifeExpectancy; // double
  public $JointLifeExpectancy; // double
  public $ExclusionRatio; // double
  public $GtdPayoutAmt; // decimal
  public $InternalRateOfReturn; // double
  public $LastGtdPayoutDate; // date
  public $MaxMortalityAge; // integer
  public $PayoutsCertain; // integer
  public $PayoutAmt; // decimal
  public $SinglePremiumAmt; // decimal
  public $StatePremiumTaxRate; // double
  public $PolFee; // decimal
  public $OverrideStatePremiumTaxInd; // OLI_LU_BOOLEAN
  public $OverrideStatePremiumTaxAmt; // double
  public $RelativeUnderwritingBasis; // OLI_LU_UNWRITESUBCLASS
  public $VectorRequest; // VectorRequest_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
}

class RequirementInfo_Type {
  public $ReqCode; // OLI_LU_REQCODE
  public $RequirementInfoKey; // PERSISTKEY
  public $RequirementInfoSysKey; // SYSKEY
  public $HORequirementRefID; // string
  public $RequirementInfoUniqueID; // string
  public $Sequence; // integer
  public $FormNo; // string
  public $FormVersion; // string
  public $RequirementDetails; // string
  public $RestrictIssueCode; // OLI_LU_REQRESTRICTION
  public $ReqStatus; // OLI_LU_REQSTAT
  public $RequestedDate; // date
  public $RequestedTime; // time
  public $ReRequestedDate; // date
  public $FulfilledDate; // date
  public $FulfilledTime; // time
  public $ReceivedDate; // date
  public $ScheduledDate; // date
  public $ReceivedAtLocationDate; // date
  public $RequestedScheduleDate; // date
  public $RequestedScheduleTimeStart; // time
  public $RequestedScheduleTimeEnd; // time
  public $UserCode; // string
  public $FormRecievedWithAppInd; // OLI_LU_BOOLEAN
  public $ReferredDate; // date
  public $StatusDate; // date
  public $StatusTime; // time
  public $HistoryStartDate; // date
  public $HistoryEndDate; // date
  public $RequirementStatusReason; // string
  public $ResponsiblePartyType; // OLI_LU_RESPARTY
  public $ReceivedPartyOrgCode; // string
  public $ReferredPartyOrgCode; // string
  public $ReleasePartyOrgCode; // string
  public $MIBInquiryReason; // OLI_LU_MIBREASON
  public $AppliesToPartyType; // OLI_LU_PARTICROLE
  public $RequirementAcctNum; // string
  public $ProviderOrderNum; // string
  public $CarrierOrderNum; // string
  public $ReqCategory; // OLI_LU_REQCAT
  public $ProviderServiceCode; // string
  public $ReqSubStatus; // OLI_LU_REQSUBSTAT
  public $DueDate; // date
  public $DueTime; // time
  public $OrderReceivedDate; // date
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $IntendedUseOfInformationType; // OLI_LU_INTENDUSE
  public $SubmissionType; // OLI_LU_APPSUBMITTYPE
  public $ReqSubmissionType; // OLI_LU_APPSUBMITTYPE
  public $Priority; // OLI_LU_PRIORITY
  public $FollowUpCount; // integer
  public $LanguageInterpreterNeeded; // OLI_LU_BOOLEAN
  public $InterpretedLanguage; // OLI_LU_CLIENTLANGUAGES
  public $StatusReceiverParty; // StatusReceiverParty_Type
  public $ResultsReceiverParty; // ResultsReceiverParty_Type
  public $StatusEvent; // StatusEvent_Type
  public $Attachment; // Attachment_Type
  public $PreferredReqFulfiller; // PreferredReqFulfiller_Type
  public $TrackingInfo; // TrackingInfo_Type
  public $EvaluationFaceAmt; // decimal
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $AppliesToPartyID; // IDREF
  public $RequesterPartyID; // IDREF
  public $FulfillerPartyID; // IDREF
  public $ReceivedPartyID; // IDREF
  public $ReferredPartyID; // IDREF
  public $RequestedAddressId; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $RequestorContactPartyID; // IDREF
  public $AppliesToParticipantID; // IDREF
  public $PhysicianPartyID; // IDREF
  public $FacilityPartyID; // IDREF
}

class RequisiteInvestProduct_Type {
  public $RequisiteInvestProductKey; // PERSISTKEY
  public $RequisiteInvestProductSysKey; // SYSKEY
  public $CarrierCode; // string
  public $ProductCode; // string
  public $RequisiteLogic; // CRITERIA_OPERATOR
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RequisiteObjectInfo_Type {
  public $RequisiteObjectInfoKey; // PERSISTKEY
  public $RequisiteObjectInfoSysKey; // SYSKEY
  public $ProductCode; // string
  public $ObjectType; // OLI_LU_OBJECTTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $ObjectIDRef; // IDREF
}

class ResidencyGuideline_Type {
  public $ResidencyGuidelineKey; // PERSISTKEY
  public $ResidencyGuidelineSysKey; // SYSKEY
  public $MaxTravelRiskRating; // OLI_LU_TRAVELRISK
  public $ResidencyStatus; // OLI_LU_IMMSTAT
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $GuidelineDescription; // string
  public $IssueNation; // OLI_LU_NATION
  public $LocationRestrictionInfo; // LocationRestrictionInfo_Type
  public $TravelLocationRatingsInfo; // TravelLocationRatingsInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ResidencyGuidelines_Type {
  public $ResidencyGuidelinesKey; // PERSISTKEY
  public $ResidencyGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $ResidencyGuideline; // ResidencyGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RestrictionInfo_Type {
  public $RestrictionInfoKey; // PERSISTKEY
  public $RestrictionInfoSysKey; // SYSKEY
  public $RestrictionCode; // OLI_LU_RESTRICT
  public $RestrictionReason; // OLI_LU_RESTRICTREASON
  public $RestrictionDetails; // string
  public $StartDate; // date
  public $EndDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RestrictOwnerJurisdiction_Type {
  public $Jurisdiction; // OLI_LU_STATE
}

class ResultBasis_Type {
  public $GDBComplianceEndDate; // date
  public $LapseDate; // date
  public $LapseReason; // LAPSE_REASON
  public $InterestAssumption; // TC_INTASSUMPTION
  public $InterestAssumptionRate; // double
  public $MortalityAssumption; // TC_MORTASSUMPTION
  public $MortalityAssumptionBlend; // double
  public $DividendAssumption; // TC_MORTASSUMPTION
  public $DividendAssumptionBlend; // double
  public $Vector; // Vector_Type
  public $GLPNonComplDate; // date
  public $TAMRANonComlDate; // date
  public $CurrOverloan; // decimal
  public $GuarOverloan; // decimal
  public $PayoutsCertain; // integer
  public $PayoutAmt; // decimal
  public $ExclusionRatio; // double
  public $LifeExpectancy; // double
  public $JointLifeExpectancy; // double
  public $GtdPayoutAmt; // decimal
  public $LastGtdPayoutDate; // date
  public $MaxMortalityAge; // integer
  public $SinglePremiumAmt; // decimal
  public $StatePremiumTaxRate; // double
  public $PolFee; // decimal
  public $UnderwritingClass; // OLI_LU_UNWRITECLASS
  public $UnderwritingSubClass; // OLI_LU_UNWRITESUBCLASS
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $RequestBasisID; // IDREF
}

class ResultInfo_Type {
  public $ResultInfoCode; // RESULT_INFO_CODES
  public $ResultInfoDesc; // string
  public $ResultInfoSysMessageCode; // string
  public $ResultInfoSeverity; // OLI_LU_MSGSEVERITY
  public $ResultInfoSource; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ProblemRef; // string
}

class ResultsReceiverParty_Type {
  public $ResultsReceiverPartyID; // IDREF
}

class ReturnOfPremium_Type {
  public $ReturnOfPremiumKey; // PERSISTKEY
  public $ReturnOfPremiumSysKey; // SYSKEY
  public $ReturnPremPct; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Reward_Type {
  public $RewardKey; // PERSISTKEY
  public $RewardSysKey; // SYSKEY
  public $RewardResultType; // OLI_LU_REWARD
  public $RewardPercent; // double
  public $AnniversaryCredited; // integer
  public $DurationAccruedStart; // integer
  public $MinCashValueAmt; // decimal
  public $DurationAccruedEnd; // integer
  public $Name; // string
  public $SaleEffectiveDate; // date
  public $SaleExpirationDate; // date
  public $TableRef; // TableRef_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Rider_Type {
  public $RiderKey; // PERSISTKEY
  public $RiderSysKey; // SYSKEY
  public $RiderTypeCode; // OLI_LU_RIDERTYPE
  public $RiderSubTypeCode; // OLI_LU_RIDERSUBTYPE
  public $Description; // string
  public $RiderCode; // string
  public $ProductVersionCode; // string
  public $WaiverSignal; // OLI_LU_BOOLEAN
  public $RiderStatus; // OLI_LU_POLSTAT
  public $StatusReason; // OLI_LU_STATREASON
  public $EffDate; // date
  public $IssueDate; // date
  public $TermDate; // date
  public $TotAmt; // decimal
  public $TotAmtLastAnn; // decimal
  public $LivesType; // OLI_LU_LIVESTYPE
  public $DeductAmt; // decimal
  public $PeriodicAmt; // decimal
  public $PeriodicMode; // OLI_LU_PAYMODE
  public $PaymentAmt; // decimal
  public $BenefitPeriod; // OLI_LU_BENEPERIOD
  public $BenefitMode; // OLI_LU_PAYMODE
  public $NumberOfUnits; // double
  public $FormNo; // string
  public $FiledFormNumber; // string
  public $NursingCareDailyBenefitPct; // double
  public $HomeCommunityBasedCarePct; // double
  public $NursingCareDailyBenefitAmt; // decimal
  public $HomeCommunityBasedCareAmt; // decimal
  public $InitialPremAmt; // decimal
  public $BenefitPct; // double
  public $EliminationPeriod; // OLI_LU_ELIMPERIOD
  public $RequiredHospitalPeriod; // integer
  public $AddlHospitalPeriod; // integer
  public $ProductCode; // string
  public $RiderCategory; // OLI_LU_RIDERCAT
  public $CommissionLink; // string
  public $CovNumber; // string
  public $ValuationClassType; // OLI_LU_VALCLASS
  public $ValuationBaseSeries; // string
  public $ValuationSubSeries; // string
  public $PaidUpDate; // date
  public $ReserveFunction; // OLI_LU_RESERVEFUNCTION
  public $ReserveIntRate; // double
  public $ReserveMethod; // OLI_LU_RESVMETH
  public $MortalityOrMorbidityTable; // OLI_LU_MORTALITYTBL
  public $SalaryPct; // double
  public $ShortName; // string
  public $MarketingName; // string
  public $ExpiryDate; // date
  public $CarrierAdminSystem; // string
  public $Purpose; // OLI_LU_HOLDPURPOSE
  public $RenewableInd; // OLI_LU_BOOLEAN
  public $Duration; // integer
  public $LastPaidAmt; // decimal
  public $LastPaidDate; // date
  public $PreExistingConditionInd; // OLI_LU_BOOLEAN
  public $ChildMatureAge; // integer
  public $ChildAgeUse; // OLI_LU_CHILDAGE
  public $BenefitCoordinationInd; // OLI_LU_BOOLEAN
  public $PolicyExhibitStatus; // OLI_LU_POLSTAT
  public $FeatureName; // string
  public $ERContribAmt; // decimal
  public $EEContribAmt; // decimal
  public $ERContribPct; // double
  public $EEContribPct; // double
  public $EventType; // OLI_LU_EVENTTYPE
  public $EventYear; // integer
  public $EstTargetAge; // integer
  public $RiderFreeAmt; // decimal
  public $BenefitLimit; // BenefitLimit_Type
  public $ReinsuranceInfo; // ReinsuranceInfo_Type
  public $Participant; // Participant_Type
  public $CovOption; // CovOption_Type
  public $Fee; // Fee_Type
  public $AmountProduct; // AmountProduct_Type
  public $DeductionOption; // DeductionOption_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $AdditionalRiderClassification; // AdditionalRiderClassification_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RiderProduct_Type {
  public $RiderProductKey; // PERSISTKEY
  public $RiderProductSysKey; // SYSKEY
  public $IssueGenderCC; // IssueGenderCC_Type
  public $CovAmountChanges; // OLI_LU_COVCHGCTLTYPE
  public $CovScope; // OLI_LU_ILLUSTYPES
  public $LivesType; // OLI_LU_LIVESTYPE
  public $MaxMultiLives; // integer
  public $ReqRelToPrimaryIns; // OLI_LU_REL
  public $MaxCovInstances; // integer
  public $CovAmtModulusFactor; // double
  public $MinRatioToBase; // double
  public $MaxRatioToBase; // double
  public $MinAmtAfterDecrease; // decimal
  public $MaturityAge; // integer
  public $MinAmtDecrease; // decimal
  public $MinAmtIncrease; // decimal
  public $MaxPctIncrease; // double
  public $MinPctIncrease; // double
  public $MaxFlatExtra; // decimal
  public $MaxTableRating; // OLI_LU_RATINGS
  public $ValuePerUnit; // decimal
  public $SubstdMaxIssueAge; // integer
  public $SubstdMaxIssueAmt; // decimal
  public $SubstdMaxIssueUnits; // double
  public $SubstdPolicyReservePct; // double
  public $SubstdReserveCeaseType; // OLI_LU_SUBRESVCEASE
  public $SubstdReserveCeaseValue; // integer
  public $SubstdFlatAdjInd; // OLI_LU_BOOLEAN
  public $SubstdFlatAdjFactor; // double
  public $CovEffDateRestriction; // OLI_LU_COVEFFDATERSTCT
  public $MaturityAgeUse; // OLI_LU_AGEDATEUSE
  public $MaturityDuration; // integer
  public $MaturityDurationQualifier; // OLI_LU_PAYMODE
  public $SubstdPolicyReserveMethod; // OLI_LU_SUBSTDRESV
  public $InitialPremRenewYrs; // integer
  public $SubseqPremStartYr; // integer
  public $SubseqPremRenewYrs; // integer
  public $RenewableInd; // OLI_LU_BOOLEAN
  public $SaleExpirationDate; // date
  public $ChildMaxIssueAge; // integer
  public $ChildMatureAge; // integer
  public $ChildAgeUse; // OLI_LU_CHILDAGE
  public $ChildPremRule; // OLI_LU_CHILDPREM
  public $ValuationClassType; // OLI_LU_VALCLASS
  public $HIPAANinetyDayCertRequireInd; // OLI_LU_BOOLEAN
  public $FlatExtraPremBasis; // OLI_LU_FLATEXTRAPREMBASISCODE
  public $CovUnitType; // OLI_LU_COVUNITTYPE
  public $BenefitCoordinationInd; // OLI_LU_BOOLEAN
  public $PreExistingConditionInd; // OLI_LU_BOOLEAN
  public $RiderTypeCode; // OLI_LU_RIDERTYPE
  public $RiderSubTypeCode; // OLI_LU_RIDERSUBTYPE
  public $Description; // string
  public $MarketingName; // string
  public $RiderCode; // string
  public $ProductVersionCode; // string
  public $RiderCategory; // OLI_LU_RIDERCAT
  public $SaleEffectiveDate; // date
  public $UnderwritingClassProduct; // UnderwritingClassProduct_Type
  public $Fee; // Fee_Type
  public $PremiumRate; // PremiumRate_Type
  public $RestrictionInfo; // RestrictionInfo_Type
  public $CovOptionProduct; // CovOptionProduct_Type
  public $DisabilityHealthProvisions; // DisabilityHealthProvisions_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $ConflictObjectInfo; // ConflictObjectInfo_Type
  public $RequisiteObjectInfo; // RequisiteObjectInfo_Type
  public $AdditionalRiderClassification; // AdditionalRiderClassification_Type
  public $ParticipantProduct; // ParticipantProduct_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Risk_Type {
  public $RiskKey; // PERSISTKEY
  public $RiskSysKey; // SYSKEY
  public $DateLastUpdated; // date
  public $AutoViolationPoints; // integer
  public $AutoViolationPointsAsOfDate; // date
  public $AutoLicenseSuspension; // OLI_LU_BOOLEAN
  public $AutoLicenseReinstatementDate; // date
  public $KnownFamilyHistoryInd; // OLI_LU_BOOLEAN
  public $ExistingInsuranceInd; // OLI_LU_BOOLEAN
  public $ReplacementInd; // OLI_LU_BOOLEAN
  public $RejectionInd; // OLI_LU_BOOLEAN
  public $RejectionCompanyName; // string
  public $RejectionLineOfBusiness; // OLI_LU_LINEBUS
  public $RejectionReason; // string
  public $DateLastRejected; // date
  public $LastRejectionPartialDate; // PARTIAL_DATE_TYPE
  public $RejectionType; // OLI_LU_REJECTIONTYPE
  public $RejectedPolicyFaceAmt; // decimal
  public $RejectedPolicyNumber; // string
  public $RejectedPolicyAppDate; // date
  public $RejectedPolicyPartialAppDate; // PARTIAL_DATE_TYPE
  public $SpecialTermsInd; // OLI_LU_BOOLEAN
  public $SpecialTermCompanyName; // string
  public $SpecialTermsReason; // string
  public $DateLastSpecial; // date
  public $BankruptcyInd; // OLI_LU_BOOLEAN
  public $PrematureBirthInd; // OLI_LU_BOOLEAN
  public $BirthWeight; // integer
  public $WeightOneYearPrior; // double
  public $WeightChangeResponseType; // OLI_LU_APPLICABILITY
  public $WeightChangeReason; // string
  public $NumBrothersLiving; // integer
  public $NumBrothersDead; // integer
  public $NumSistersLiving; // integer
  public $NumSistersDead; // integer
  public $DisabilityEffectiveStartDate; // date
  public $DisabilityEffectiveStopDate; // date
  public $ActivelyAtWorkInd; // OLI_LU_BOOLEAN
  public $RecentHospitalizationInd; // OLI_LU_BOOLEAN
  public $SeriousIllnessInd; // OLI_LU_BOOLEAN
  public $ReceivingDisabilityBenefitsInd; // OLI_LU_BOOLEAN
  public $AIDSInd; // OLI_LU_BOOLEAN
  public $AssistanceInd; // OLI_LU_BOOLEAN
  public $CancerInd; // OLI_LU_BOOLEAN
  public $DementiaInd; // OLI_LU_BOOLEAN
  public $DiabetesInd; // OLI_LU_BOOLEAN
  public $NursingHomeInd; // OLI_LU_BOOLEAN
  public $ParkinsonsInd; // OLI_LU_BOOLEAN
  public $RespiratoryInd; // OLI_LU_BOOLEAN
  public $StrokeInd; // OLI_LU_BOOLEAN
  public $TransplantInd; // OLI_LU_BOOLEAN
  public $TreatmentInAbsenceOfCondition; // OLI_LU_BOOLEAN
  public $WheelchairInd; // OLI_LU_BOOLEAN
  public $PrescriptionDataStatus; // OLI_LU_PRESCDATASTAT
  public $TobaccoInd; // OLI_LU_BOOLEAN
  public $TotalInforceAndAppliedIns; // decimal
  public $FundingDisclosureInd; // OLI_LU_BOOLEAN
  public $AnyOtherImpairmentInd; // OLI_LU_BOOLEAN
  public $RecentHealthChangeInd; // OLI_LU_BOOLEAN
  public $ChildExpectedInd; // OLI_LU_BOOLEAN
  public $CriminalConviction; // CriminalConviction_Type
  public $SubstanceUsage; // SubstanceUsage_Type
  public $MedicalCondition; // MedicalCondition_Type
  public $MedicalTreatment; // MedicalTreatment_Type
  public $MedicalPrevention; // MedicalPrevention_Type
  public $MedicalExam; // MedicalExam_Type
  public $PrescriptionDrug; // PrescriptionDrug_Type
  public $LifeStyleActivity; // LifeStyleActivity_Type
  public $Violation; // Violation_Type
  public $FamilyIllness; // FamilyIllness_Type
  public $MilitaryExp; // MilitaryExp_Type
  public $HHFamilyInsurance; // HHFamilyInsurance_Type
  public $FinancialExperience; // FinancialExperience_Type
  public $MedicalEquipment; // MedicalEquipment_Type
  public $PriorLTC; // PriorLTC_Type
  public $LabTesting; // LabTesting_Type
  public $Bankruptcy; // Bankruptcy_Type
  public $WeightHistory; // WeightHistory_Type
  public $TotalInforceIns; // decimal
  public $TotalBusinessInforceIns; // decimal
  public $TotalPersonalInforceIns; // decimal
  public $TotalAppliedForIns; // decimal
  public $TotalPendingReinstatementIns; // decimal
  public $HealthInsuranceInd; // OLI_LU_BOOLEAN
  public $LostCapability; // LostCapability_Type
  public $Rejection; // Rejection_Type
  public $FinancialBenefit; // FinancialBenefit_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $LastPhysicianVisitID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class RiskNotification_Type {
  public $RiskNotificationKey; // PERSISTKEY
  public $RiskNotificationSysKey; // SYSKEY
  public $RiskNotificationStatus; // OLI_LU_RISKNOTIFYSTAT
  public $RiskNotificationOrganization; // OLI_LU_RISKNOTIFYORG
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RMDCalcMethInfo_Type {
  public $RMDCalcMethInfoKey; // PERSISTKEY
  public $RMDCalcMethInfoSysKey; // SYSKEY
  public $RMDCalcMeth; // OLI_LU_RMDCALCMETH
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class RoleRelationRestriction_Type {
  public $Relationship; // OLI_LU_REL
  public $RoleRestriction; // RoleRestriction_Type
  public $RelatedRoleCC; // RelatedRoleCC_Type
  public $OriginatingRole; // OLI_LU_REL
  public $OppositeGenderInd; // OLI_LU_BOOLEAN
  public $MinNumRelatedRolePlayers; // integer
  public $MaxNumRelatedRolePlayers; // integer
  public $RelatedRoleDataCollection; // RelatedRoleDataCollection_Type
}

class RoleRestriction_Type {
  public $RelatedRole; // OLI_LU_REL
  public $OppositeGenderInd; // OLI_LU_BOOLEAN
}

class SafetyEquipment_Type {
  public $SafetyEquipmentKey; // PERSISTKEY
  public $SafetyEquipmentSysKey; // SYSKEY
  public $SafetyEquipmentUsedType; // OLI_LU_SAFETYEQUIP
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Scenario_Type {
  public $ScenarioKey; // PERSISTKEY
  public $ScenarioSysKey; // SYSKEY
  public $RiskType; // integer
  public $ScenarioName; // string
  public $CreationDate; // date
  public $VendorCode; // string
  public $ScenarioParticipant; // ScenarioParticipant_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ScenarioParticipant_Type {
  public $ScenarioParticipantKey; // PERSISTKEY
  public $ScenarioParticipantSysKey; // SYSKEY
  public $EstNetWorth; // decimal
  public $EstMortalityDate; // date
  public $EstSalary; // decimal
  public $EstGrossAnnualOtherIncome; // decimal
  public $EstTaxBracket; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ScheduledBonus_Type {
  public $ScheduledBonusKey; // PERSISTKEY
  public $ScheduledBonusSysKey; // SYSKEY
  public $BonusAmt; // decimal
  public $BonusType; // OLI_LU_BONUSTYPE
  public $NextBonusDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ScheduledChange_Type {
  public $ScheduledChangeKey; // PERSISTKEY
  public $ScheduledChangeSysKey; // SYSKEY
  public $ChangeAmt; // decimal
  public $StartAge; // integer
  public $StartDuration; // integer
  public $SmokerStat; // OLI_LU_SMOKERSTAT
  public $TobaccoPremiumBasis; // OLI_LU_TOBPREMBASIS
  public $UnderwritingClass; // OLI_LU_UNWRITECLASS
  public $UnderwritingSubClass; // OLI_LU_UNWRITESUBCLASS
  public $ReversalInd; // OLI_LU_BOOLEAN
  public $TranContentCode; // TRAN_CONTENT_CODES
  public $ChangeUnits; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ChangeID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class ScheduledPaymentCC_Type {
  public $ScheduledPayment; // OLI_LU_PAYMETHOD
}

class Season_Type {
  public $SeasonKey; // PERSISTKEY
  public $SeasonSysKey; // SYSKEY
  public $SeasonType; // OLI_LU_SEASON
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ServiceModelContact_Type {
  public $PrefCarrierContactInfoType; // OLI_LU_OBJECTTYPE
  public $PrefCarrierContactInfoID; // IDREF
}

class ServiceParameter_Type {
  public $ServiceParameterKey; // PERSISTKEY
  public $ServiceParameterSysKey; // SYSKEY
  public $ServiceParameterType; // OLI_LU_SERVICEPARAMETERS
  public $ServiceParameterInd; // OLI_LU_BOOLEAN
  public $ServiceParameterValue; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ServiceProtocol_Type {
  public $ServiceProtocolKey; // PERSISTKEY
  public $ServiceProtocolSysKey; // SYSKEY
  public $ServiceProtocolType; // OLI_LU_SVCPRT
  public $ServiceProtocolLocation; // string
  public $ServiceProtocolDesc; // string
  public $ServiceStatus; // OLI_LU_SERVICESTATUS
  public $StatusDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ServiceVersion_Type {
  public $ServiceVersionKey; // PERSISTKEY
  public $ServiceVersionSysKey; // SYSKEY
  public $TransVersion; // string
  public $ServiceStatus; // OLI_LU_SERVICESTATUS
  public $StartDate; // date
  public $EndDate; // date
  public $TransType; // OLI_LU_TRANS_TYPE_CODES
  public $TransSubType; // TRANS_SUBTYPE_CODES
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SettlementDetail_Type {
  public $SettlementDetailKey; // PERSISTKEY
  public $SettlementDetailSysKey; // SYSKEY
  public $SettlementAmt; // decimal
  public $AccountDebitCreditType; // OLI_LU_ACCTDBCRTYPE
  public $AccountNumberReceiver; // string
  public $NameReceiver; // string
  public $AccountNumberAssociatedFirm; // string
  public $NameAssociatedFirm; // string
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $ReceiverPartyID; // IDREF
  public $AssociatedFirmPartyId; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class SettlementInfo_Type {
  public $SettlementInfoKey; // PERSISTKEY
  public $SettlementInfoSysKey; // SYSKEY
  public $AccountNumberSubmitter; // string
  public $NameSubmitter; // string
  public $ReferenceNo; // string
  public $Description; // string
  public $RelatedRefIDType; // OLI_LU_IDREFTYPE
  public $SettlementDate; // date
  public $SettlementDetail; // SettlementDetail_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $SubmitterPartyID; // IDREF
  public $RelatedRefID; // IDREF
  public $DataRep; // DATAREP_TYPES
  public $SettlementVendorID; // IDREF
}

class SevenPayTestHistory_Type {
  public $SevenPayTestHistoryKey; // PERSISTKEY
  public $SevenPayTestHistorySysKey; // SYSKEY
  public $SevenPayYear; // integer
  public $CumSevenPayPrem; // decimal
  public $TAMRAPrems; // decimal
  public $TAMRASumPremsITD; // decimal
  public $SevenPayPremWthdrwl; // decimal
  public $CumSevenPayPremWthdrwl; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class ShadowAccount_Type {
  public $ShadowAccountKey; // PERSISTKEY
  public $ShadowAccountSysKey; // SYSKEY
  public $RateLockDate; // date
  public $RateLockExpiryDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SignatureInfo_Type {
  public $SignatureInfoKey; // PERSISTKEY
  public $SignatureCode; // string
  public $SignatureInfoSysKey; // SYSKEY
  public $SignatureRoleCode; // OLI_LU_PARTICROLE
  public $SignatureDate; // date
  public $SignatureTime; // time
  public $SignatureCity; // string
  public $SignatureState; // OLI_LU_STATE
  public $SignatureZip; // string
  public $SignatureCountry; // OLI_LU_NATION
  public $SubmissionType; // OLI_LU_APPSUBMITTYPE
  public $SignaturePurpose; // OLI_LU_SIGNATURETYPE
  public $SignatureText; // string
  public $SignatureRenderType; // OLI_LU_SIGNRENDERTYPE
  public $SignatureOK; // OLI_LU_BOOLEAN
  public $ElectronicAuthenticationType; // OLI_LU_ELECAUTH
  public $IPAddress; // string
  public $SignatureOnFileType; // OLI_LU_SIGONFILE
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $SignaturePartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class SitusInfo_Type {
  public $SitusInfoKey; // PERSISTKEY
  public $SitusInfoSysKey; // SYSKEY
  public $SitusStatus; // OLI_LU_SITUSSTAT
  public $EffDate; // date
  public $EndDate; // date
  public $Jurisdiction; // OLI_LU_STATE
  public $LineOfBusiness; // OLI_LU_LINEBUS
  public $Nation; // OLI_LU_NATION
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SourceInfo_Type {
  public $CreationDate; // date
  public $CreationTime; // time
  public $SourceInfoName = 'trevelRSB '; // string
  public $SourceInfoDescription; // string
  public $SourceInfoComment; // string
  public $FileControlID; // string
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
}

class SourceInvestProduct_Type {
  public $SourceInvestProductKey; // PERSISTKEY
  public $SourceInvestProductSysKey; // SYSKEY
  public $CarrierCode; // string
  public $ProductCode; // string
  public $RateVariationKey; // PERSISTKEY
  public $MinAmt; // decimal
  public $MaxAmt; // decimal
  public $MinPct; // double
  public $MaxPct; // double
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SourceOfFundsCC_Type {
  public $SourceOfFundsTC; // OLI_LU_SOURCEOFFUNDS
}

class SourceOfFundsInfo_Type {
  public $SourceOfFundsInfoKey; // PERSISTKEY
  public $SourceOfFundsInfoSysKey; // SYSKEY
  public $SourceOfFundsTC; // OLI_LU_SOURCEOFFUNDS
  public $SourceOfFundsDetails; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SpecialTestOrdered_Type {
  public $SpecialTestOrderedKey; // PERSISTKEY
  public $SpecialTestOrderedSysKey; // SYSKEY
  public $TestName; // string
  public $TestDesc; // string
  public $TestComment; // string
  public $TestCode; // OLI_LU_REQCODE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SpeedDial_Type {
  public $SpeedDialKey; // PERSISTKEY
  public $SpeedDialSysKey; // SYSKEY
  public $SpeedDialNumber; // string
  public $SpeedDialType; // OLI_LU_SPEEDDIAL
  public $OrgCode; // string
  public $Description; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $OwnerPartyID; // IDREF
  public $OwnerPhoneID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class SplitPctIncrementsCC_Type {
  public $SplitPctIncrement; // double
}

class StatusEvent_Type {
  public $StatusEventKey; // PERSISTKEY
  public $StatusEventSysKey; // SYSKEY
  public $StatusEventCode; // OLI_LU_STATEVENTCODE
  public $ProviderEventCode; // string
  public $StatusEventDate; // date
  public $StatusEventTime; // time
  public $StatusEventDetail; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class StatusReceiverParty_Type {
  public $StatusReceiverPartyID; // IDREF
}

class SubAccount_Type {
  public $SubAccountKey; // PERSISTKEY
  public $SubAccountSysKey; // SYSKEY
  public $SubAcctStatus; // OLI_LU_HOLDSTAT
  public $Purpose; // OLI_LU_HOLDPURPOSE
  public $AssetClass; // OLI_LU_ASSETCLASS
  public $ProductCode; // string
  public $PortfolioCode; // string
  public $CarrierCode; // string
  public $CarrierName; // string
  public $ProductFullName; // string
  public $ShortName; // string
  public $PortfolioFullName; // string
  public $ProductObjective; // OLI_LU_INVESTOBJ
  public $InvestType; // OLI_LU_INVESTPROD
  public $InvestTypeDesc; // string
  public $BeneDesignationWording; // string
  public $SecurityPurchaseType; // OLI_LU_SECPURCHTYPE
  public $ProductSymbol; // string
  public $CusipNum; // string
  public $OldInvAcctNum; // string
  public $CertNo; // string
  public $OpenDate; // date
  public $AsOfDate; // date
  public $SelfDirectedInd; // OLI_LU_BOOLEAN
  public $LockedInInd; // OLI_LU_BOOLEAN
  public $ValuationsAsOfDate; // date
  public $CompoundMode; // OLI_LU_PAYMODE
  public $CurrNumberUnits; // double
  public $CurrRate; // double
  public $MaturityDate; // date
  public $MaturityValue; // decimal
  public $UnitValue; // decimal
  public $UnitValueBuyRate; // decimal
  public $PayoutUnitValue; // double
  public $PricingAsOfDate; // date
  public $TotCost; // decimal
  public $TotValue; // decimal
  public $Liability; // decimal
  public $TaxBasis; // decimal
  public $AllocPercent; // double
  public $AllocationAmt; // decimal
  public $PolicyChargePct; // double
  public $ActualEndDate; // date
  public $TotalIssuedUnits; // double
  public $TotalUnissuedUnits; // double
  public $TotalRedemptionAmtITD; // decimal
  public $FutureExpAllocPercent; // double
  public $AvgUnitCost; // decimal
  public $SurrenderChargeAmt; // decimal
  public $NetSurrValueAmt; // decimal
  public $CapGainOpt; // OLI_LU_CAPGAIN
  public $DividendOpt; // OLI_LU_INVSTDIV
  public $InterestMode; // OLI_LU_PAYMODE
  public $TotalIncomeAmtYTD; // decimal
  public $CompoundAnnRateOfRtn; // double
  public $DivIncomeYTD; // decimal
  public $ShortTermCapGainsYTD; // decimal
  public $LongTermCapGainsYTD; // decimal
  public $ShortTermNonTaxCapGainsYTD; // decimal
  public $LongTermNonTaxCapGainsYTD; // decimal
  public $InitPurchaseAmt; // decimal
  public $InitPurchaseDate; // date
  public $SystematicActivityType; // OLI_LU_SYSTEMATIC
  public $SystematicAmt; // decimal
  public $SystematicMode; // OLI_LU_PAYMODE
  public $SystematicActivityStartDate; // date
  public $PaymentMethod; // OLI_LU_PAYMETHOD
  public $AccountNumber; // string
  public $RoutingNumber; // string
  public $AcctHolderName; // string
  public $CreditCardExpDate; // gYearMonth
  public $CreditCardType; // OLI_LU_CREDCARDTYPE
  public $BankAcctType; // OLI_LU_BANKACCTTYPE
  public $PaymentDraftDay; // integer
  public $BankName; // string
  public $EEContribAmtYTD; // decimal
  public $ERContribAmtYTD; // decimal
  public $PledgeUnits; // integer
  public $CurrencyTypeCode; // OLI_LU_CURRENCYTYPE
  public $AvailableFundsAmt; // decimal
  public $TransferSendAllowedInd; // OLI_LU_BOOLEAN
  public $MuniStateOfIssuance; // OLI_LU_STATE
  public $DebtType; // OLI_LU_DEBTTYPE
  public $UnderlyingCusipNum; // string
  public $OptPutCallType; // OLI_LU_PUTCALL
  public $OptStrikeAmt; // decimal
  public $AllocChargePercent; // double
  public $AllocChargeAmt; // decimal
  public $GuarIntRate; // double
  public $GuarIntEndDate; // date
  public $QuoteNum; // string
  public $WithdrawalsAllowedInd; // OLI_LU_BOOLEAN
  public $PayinWindowStartDate; // date
  public $PayinWindowEndDate; // date
  public $MaturityPaymentType; // OLI_LU_MATPAYTYPE
  public $IntTakedownInd; // OLI_LU_BOOLEAN
  public $WithdrawalOrder; // OLI_LU_WDORDER
  public $BufferAcctInd; // OLI_LU_BOOLEAN
  public $BufferAcctAmt; // decimal
  public $BufferAcctPct; // double
  public $BaseRate; // double
  public $CommissionPct; // double
  public $AmortMktValDiffPct; // double
  public $CapAmt; // decimal
  public $CapType; // OLI_LU_CAPTYPE
  public $FloorAmt; // decimal
  public $CapFloorContribType; // OLI_LU_CAPFLOORCONTRIB
  public $CapExcessPayDate; // date
  public $FloorShortfallPayDate; // date
  public $InterestType; // OLI_LU_RATETYPE
  public $InterestCalcType; // OLI_LU_INTCALCTYPE
  public $InterestRoundType; // OLI_LU_ROUNDMETH
  public $DividendTransLastDate; // date
  public $DurQualifier; // OLI_LU_PAYMODE
  public $GuaranteeDuration; // integer
  public $ERContribAmtITD; // decimal
  public $EEContribAmtITD; // decimal
  public $RoundingPrecision; // integer
  public $ERContValueITD; // decimal
  public $CapRate; // double
  public $CapBailoutRate; // double
  public $ParticipationRate; // double
  public $TransferDestAllowedInd; // OLI_LU_BOOLEAN
  public $SubAccountType; // OLI_LU_SUBACCOUNTTYPE
  public $TaxStatus; // OLI_LU_TAXSTAT
  public $MarketValAdjustInd; // OLI_LU_BOOLEAN
  public $FundRestrictReason; // OLI_LU_FUNDRESTRICT
  public $BonusAccrual; // OLI_LU_BOOLEAN
  public $BonusRate; // double
  public $AccountValueLastAnn; // decimal
  public $TradingExchangeTypeCode; // OLI_LU_REGISTRATIONENTITY
  public $IssueNation; // OLI_LU_NATION
  public $Locality; // string
  public $BondPreRefundDate; // date
  public $BondPreRefundAmt; // decimal
  public $FinancialActivity; // FinancialActivity_Type
  public $Participant; // Participant_Type
  public $ExtendOrCall; // ExtendOrCall_Type
  public $Fee; // Fee_Type
  public $AdditionalInterestRateInfo; // AdditionalInterestRateInfo_Type
  public $ScheduledBonus; // ScheduledBonus_Type
  public $RatingAgencyInfo; // RatingAgencyInfo_Type
  public $Attachment; // Attachment_Type
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PortfolioID; // IDREF
  public $ProductID; // IDREF
  public $BankID; // IDREF
  public $CarrierPartyID; // IDREF
  public $BankingHoldingID; // IDREF
}

class SubAccountInfo_Type {
  public $SubAccountInfoKey; // PERSISTKEY
  public $SubAccountInfoSysKey; // SYSKEY
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $SubAccountID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class SubAccountStatement_Type {
  public $SubAccountStatementKey; // PERSISTKEY
  public $SubAccountStatementSysKey; // SYSKEY
  public $ProductCode; // string
  public $ProductFullName; // string
  public $CusipNum; // string
  public $CurrNumberUnitsAtStartDate; // double
  public $CurrNumberUnitsAtEndDate; // double
  public $TotalIssuedUnits; // double
  public $TotalUnissuedUnits; // double
  public $UnitValue; // decimal
  public $TotalValueAtStartDate; // decimal
  public $TotalValueAtEndDate; // decimal
  public $LongTermCapGainsAmt; // decimal
  public $ShortTermCapGainsAmt; // decimal
  public $ShortName; // string
  public $SubAccountStatementDetail; // SubAccountStatementDetail_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $SubAccountID; // IDREF
  public $HoldingID; // IDREF
  public $InvestProductID; // IDREF
}

class SubAccountStatementDetail_Type {
  public $SubAccountStatementDetailKey; // PERSISTKEY
  public $SubAccountStatementDetailSysKey; // SYSKEY
  public $StartDate; // date
  public $EndDate; // date
  public $CurrNumberUnitsAtStartDate; // double
  public $CurrNumberUnitsAtEndDate; // double
  public $TotalIssuedUnits; // double
  public $TotalUnissuedUnits; // double
  public $UnitValue; // decimal
  public $TotalValueAtStartDate; // decimal
  public $TotalValueAtEndDate; // decimal
  public $LongTermCapGainsAmt; // decimal
  public $ShortTermCapGainsAmt; // decimal
  public $FinancialActivity; // FinancialActivity_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SubstanceUsage_Type {
  public $SubstanceUsageKey; // PERSISTKEY
  public $SubstanceUsageSysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $SubstanceType; // OLI_LU_SUBSTANCETYPE
  public $TobaccoType; // OLI_LU_TOBACCOTYPE
  public $SubstanceDesc; // string
  public $SubstanceComments; // string
  public $SubstanceStartDate; // date
  public $SubstanceStartPartialDate; // PARTIAL_DATE_TYPE
  public $SubstanceEndDate; // date
  public $SubstanceEndPartialDate; // PARTIAL_DATE_TYPE
  public $SubstanceLastUseDate; // date
  public $SubstanceLastUsePartialDate; // PARTIAL_DATE_TYPE
  public $SubstanceMode; // OLI_LU_PARTFREQ
  public $SubstanceAmt; // integer
  public $TreatmentInd; // OLI_LU_BOOLEAN
  public $LastTreatmentDate; // date
  public $LastTreatmentPartialDate; // PARTIAL_DATE_TYPE
  public $MemberOfSupportGroupInd; // OLI_LU_BOOLEAN
  public $SupportGroupStartDate; // date
  public $SupportGroupStartPartialDate; // PARTIAL_DATE_TYPE
  public $SupportGroupEndDate; // date
  public $SupportGroupEndPartialDate; // PARTIAL_DATE_TYPE
  public $SupportGroupName; // string
  public $AdvisedToLimitUseInd; // OLI_LU_BOOLEAN
  public $SubstanceDuration; // integer
  public $DurationUnitMeasure; // OLI_LU_MEASUNITS
  public $RiskNotification; // RiskNotification_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $PhysicianPartyID; // IDREF
  public $FacilityPartyID; // IDREF
}

class SubstanceUsageGuideline_Type {
  public $SubstanceUsageGuidelineKey; // PERSISTKEY
  public $SubstanceUsageGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $SubstanceType; // OLI_LU_SUBSTANCETYPE
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $TreatmentGuidelineType; // OLI_LU_TREATGUIDE
  public $MaxNumberOccurrences; // integer
  public $GuidelineDescription; // string
  public $UsageStatus; // OLI_LU_USAGESTATUS
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SubstanceUsageGuidelines_Type {
  public $SubstanceUsageGuidelinesKey; // PERSISTKEY
  public $SubstanceUsageGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $SubstanceUsageGuideline; // SubstanceUsageGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SubstandardRating_Type {
  public $SubstandardRatingKey; // PERSISTKEY
  public $SubstandardRatingSysKey; // SYSKEY
  public $RatingReason; // string
  public $RatingCommissionRule; // OLI_LU_RATCOMMRUL
  public $PermTableRating; // OLI_LU_RATINGS
  public $PermTableRatingEndDate; // date
  public $TempTableRating; // OLI_LU_RATINGS
  public $TempTableRatingStartDate; // date
  public $TempTableRatingEndDate; // date
  public $TempFlatEndDate; // date
  public $TempFlatExtraAmt; // decimal
  public $FlatExtraPremBasis; // OLI_LU_FLATEXTRAPREMBASISCODE
  public $AmtPerThou; // decimal
  public $ModalGrossPermFlatExtraAllowanceAmt; // decimal
  public $ModalGrossTempFlatExtraAllowanceAmt; // decimal
  public $TempFlatExtraDuration; // integer
  public $TempPercentageLoading; // double
  public $PermPercentageLoading; // double
  public $EndDate; // date
  public $EffDate; // date
  public $PermFlatExtraAmt; // decimal
  public $PermFlatExtraEndDate; // date
  public $PermTableRatingAlphaCode; // string
  public $TempTableRatingCode; // string
  public $LastRatingDate; // date
  public $TempRatingType; // OLI_LU_RATINGTYPE
  public $PermRatingType; // OLI_LU_RATINGTYPE
  public $TempFlatStartDate; // date
  public $Occupation; // string
  public $OccupRating; // OLI_LU_OCCUPRATING
  public $RatingOverriddenInd; // OLI_LU_BOOLEAN
  public $PermRatingAmtPerThou; // decimal
  public $TempRatingAmtPerThou; // decimal
  public $ModalPermRatingAmt; // decimal
  public $ModalTempRatingAmt; // decimal
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Superannuation_Type {
  public $EmpStdDiscContAmt; // decimal
  public $EmpStdDiscContFreq; // OLI_LU_PAYMODE
  public $EmpStdDiscSalPct; // double
  public $EmpAddlDiscContAmt; // decimal
  public $EmpAddlDiscContFreq; // OLI_LU_PAYMODE
  public $EmpAddlDiscSalPct; // double
  public $GuarContAmt; // decimal
  public $GuarFreq; // OLI_LU_PAYMODE
  public $GuarSalPct; // double
  public $MemContAmt; // decimal
  public $MemContFreq; // OLI_LU_PAYMODE
  public $MemSalPct; // double
  public $EarliestStartDate; // date
  public $MemberCoverSalaryAmt; // decimal
  public $CategoryDescription; // string
  public $ClaimTaxDeduction; // OLI_LU_BOOLEAN
  public $UndeductedContValITD; // decimal
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SurrenderChargeSchedule_Type {
  public $SurrenderChargeScheduleKey; // PERSISTKEY
  public $SurrenderChargeScheduleSysKey; // SYSKEY
  public $SurrenderChargeType; // OLI_LU_SURRCHGTYPE
  public $ChargeBasedOn; // OLI_LU_RATEBASEDON
  public $ChargePctSchedule; // ChargePctSchedule_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class SystemMessage_Type {
  public $SystemMessageKey; // PERSISTKEY
  public $SystemMessageSysKey; // SYSKEY
  public $MessageCode; // integer
  public $CarrierAdminSystem; // string
  public $Sequence; // integer
  public $RelatedObjectType; // OLI_LU_OBJECTTYPE
  public $MessageDescription; // string
  public $MessageSeverityCode; // OLI_LU_MSGSEVERITY
  public $MessageStartDate; // date
  public $MessageEndDate; // date
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $RelatedObjectID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class Table_Type {
  public $MetaData; // MetaData_Type
  public $Values; // Values_Type
}

class TableRef_Type {
  public $TableRefKey; // PERSISTKEY
  public $TableRefSysKey; // SYSKEY
  public $TableIdentity; // string
  public $ProviderDomain; // string
  public $ContentType; // CONTENTTYPE_TYPE
  public $TableName; // string
  public $StartDate; // date
  public $EndDate; // date
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $ContentSubType; // CONTENTSUBTYPE_TYPE
  public $ComplexContentCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $XTbMLID; // IDREF
}

class TargetAgeRestriction_Type {
  public $TargetAgeRestrictionKey; // PERSISTKEY
  public $TargetAgeRestrictionSysKey; // SYSKEY
  public $TargetAgeRule; // OLI_LU_TARGETAGERULE
  public $TargetAgeRuleValue; // double
  public $TargetAgeRuleEntity; // OLI_LU_PARTICROLE
  public $AgeCalculationType; // OLI_LU_AGECALCMETH
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TargetURL_Type {
  public $URLAddress; // string
  public $SessionExpirationDate; // date
  public $SessionExpirationTime; // time
  public $OLifEExtension; // OLifEExtension_Type
}

class TaxWithholding_Type {
  public $TaxWithholdingKey; // PERSISTKEY
  public $TaxWithholdingSysKey; // SYSKEY
  public $TaxWithholdingPlace; // OLI_LU_TAXPLACE
  public $TaxNation; // OLI_LU_NATION
  public $TaxLocality; // string
  public $TaxDisbursementType; // OLI_LU_TAXDISBURSETYPE
  public $ReportingTaxYear; // gYear
  public $TaxWithholdingType; // OLI_LU_WITHCALCMTH
  public $TaxWithholdingBackupReason; // OLI_LU_WITHBKUPREAS
  public $TaxWithheldPct; // double
  public $TaxWithheldAmt; // decimal
  public $TaxJurisdiction; // OLI_LU_STATE
  public $WithholdingNumDependents; // integer
  public $WithholdingNumExemptions; // integer
  public $MarStat; // OLI_LU_MARSTAT
  public $TaxDirectiveNumber; // string
  public $DirectiveEffDate; // date
  public $DirectiveExpDate; // date
  public $KeyedValue; // KeyedValue_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $AppliesToPartyID; // IDREF
  public $DataRep; // DATAREP_TYPES
}

class TaxWithholdingProduct_Type {
  public $TaxWithholdingProductKey; // PERSISTKEY
  public $TaxWithholdingProductSysKey; // SYSKEY
  public $WithholdStateIfFederalInd; // OLI_LU_BOOLEAN
  public $TaxWithholdingPlace; // OLI_LU_TAXPLACE
  public $TaxWithholdingCollect; // OLI_LU_DATAREQ
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $AmountProduct; // AmountProduct_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TempTableRatingCC_Type {
  public $TempTableRating; // OLI_LU_RATINGS
  public $OLifEExtension; // OLifEExtension_Type
}

class TempTableRatingInfo_Type {
  public $TempTableRatingInfoKey; // PERSISTKEY
  public $TempTableRatingInfoSysKey; // SYSKEY
  public $TempTableRating; // OLI_LU_RATINGS
  public $TempTableRatingCode; // string
  public $TempPercentageLoading; // double
  public $TempRatingType; // OLI_LU_RATINGTYPE
  public $RatingSubType; // OLI_LU_OCCUPRATING
  public $Sequence; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Terrain_Type {
  public $TerrainKey; // PERSISTKEY
  public $TerrainSysKey; // SYSKEY
  public $TerrainType; // OLI_LU_TERRAIN
  public $TerrainTypeDesc; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TobaccoUsageGuideline_Type {
  public $TobaccoUsageGuidelineKey; // PERSISTKEY
  public $TobaccoUsageGuidelineSysKey; // SYSKEY
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $TobaccoType; // OLI_LU_TOBACCOTYPE
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $MaxNumberOccurrences; // integer
  public $GuidelineDescription; // string
  public $UsageStatus; // OLI_LU_USAGESTATUS
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TobaccoUsageGuidelines_Type {
  public $TobaccoUsageGuidelinesKey; // PERSISTKEY
  public $TobaccoUsageGuidelinesSysKey; // SYSKEY
  public $GuidelineOperator; // CRITERIA_OPERATOR
  public $TobaccoUsageGuideline; // TobaccoUsageGuideline_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TrackingInfo_Type {
  public $TrackingInfoKey; // PERSISTKEY
  public $TrackingInfoSysKey; // SYSKEY
  public $TrackingType; // OLI_LU_TRACKINGTYPE
  public $TrackingNum; // string
  public $TrackingServiceProvider; // string
  public $ACORDVendorCode; // string
  public $RequirementAcctNum; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TransResult_Type {
  public $ResultCode; // RESULT_CODES
  public $ConfirmationID; // string
  public $RecordsFound; // integer
  public $ResultInfo; // ResultInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
}

class TravelEvent_Type {
  public $TravelEventKey; // PERSISTKEY
  public $TravelEventSysKey; // SYSKEY
  public $TimingType; // OLI_LU_TIMINGTYPE
  public $StartDate; // date
  public $EndDate; // date
  public $TravelEventDuration; // double
  public $DurationUnitMeasure; // OLI_LU_MEASUNITS
  public $TravelEventDurationDescription; // string
  public $TravelEventAssociationIdent; // string
  public $TravelPurposeInfo; // TravelPurposeInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TravelLocationRating_Type {
  public $TravelLocationRatingKey; // PERSISTKEY
  public $TravelLocationRatingSysKey; // SYSKEY
  public $TravelCountry; // OLI_LU_NATION
  public $TravelLocation; // string
  public $TravelRiskRating; // OLI_LU_TRAVELRISK
  public $TravelRiskRatingName; // string
  public $Description; // string
  public $LocationRestrictionInfo; // LocationRestrictionInfo_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TravelLocationRatings_Type {
  public $TravelLocationRatingsKey; // PERSISTKEY
  public $TravelLocationRatingsSysKey; // SYSKEY
  public $TravelLocationRatingsName; // string
  public $TravelPurpose; // OLI_LU_TRAVELPURPOSE
  public $TravelLocationRating; // TravelLocationRating_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TravelLocationRatingsInfo_Type {
  public $TravelLocationRatingsInfoKey; // PERSISTKEY
  public $TravelLocationRatingsInfoSysKey; // SYSKEY
  public $TravelLocationRatingsName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $TravelLocationRatingsID; // IDREF
}

class TravelPurposeInfo_Type {
  public $TravelPurposeInfoKey; // PERSISTKEY
  public $TravelPurposeInfoSysKey; // SYSKEY
  public $TravelPurpose; // OLI_LU_TRAVELPURPOSE
  public $Description; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TreatmentPurposeInfo_Type {
  public $TreatmentPurposeInfoKey; // PERSISTKEY
  public $TreatmentPurposeInfoSysKey; // SYSKEY
  public $TreatmentPurposeType; // OLI_LU_MEDCOND
  public $Description; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class TrustTypeCC_Type {
  public $TrustType; // OLI_LU_TRUSTTYPE
}

class TXLifeNotify_Type {
  public $TransRefGUID; // string
  public $TransType; // OLI_LU_TRANS_TYPE_CODES
  public $TransExeDate; // date
  public $TransExeTime; // time
  public $TransMode; // TRANS_MODE_CODES
  public $InquiryLevel; // INQUIRY_LEVEL_CODES
  public $MaxRecords; // integer
  public $StartRecord; // integer
  public $StartDate; // date
  public $EndDate; // date
  public $PendingResponseOK; // OLI_LU_BOOLEAN
  public $NoResponseOK; // OLI_LU_BOOLEAN
  public $TestIndicator; // OLI_LU_BOOLEAN
  public $IllustrationRequest; // IllustrationRequest_Type
  public $MIBRequest; // MIBRequest_Type
  public $TransResult; // TransResult_Type
  public $OLifE; // OLifE_Type
  public $XTbML; // XTbML_Type
  public $OLifEExtension; // OLifEExtension_Type
}

class TXLifeRequest_Type {
  public $TransRefGUID; // string
  public $TransTrackingID; // string
  public $TransType; // OLI_LU_TRANS_TYPE_CODES
  public $TransSubType; // TRANS_SUBTYPE_CODES
  public $BusinessService; // BusinessService_Type
  public $DataTransmittalSubType; // DataTransmittalSubType_Type
  public $ObjectTypeCC; // ObjectTypeCC_Type
  public $TransExeDate; // date
  public $TransExeTime; // time
  public $TransEffDate; // date
  public $TransMode; // TRANS_MODE_CODES
  public $InquiryLevel; // INQUIRY_LEVEL_CODES
  public $InquiryView; // InquiryView_Type
  public $MaxRecords; // integer
  public $NextRecord; // integer
  public $StartRecord; // integer
  public $StartDate; // date
  public $EndDate; // date
  public $PendingResponseOK; // OLI_LU_BOOLEAN
  public $NoResponseOK; // OLI_LU_BOOLEAN
  public $TestIndicator; // OLI_LU_BOOLEAN
  public $URLTargetRequestInd; // OLI_LU_BOOLEAN
  public $SupressNotificationsInd; // OLI_LU_BOOLEAN
  public $CaseStatusOnResponseInd; // OLI_LU_BOOLEAN
  public $BenefitsInquiryType; // BENEFIT_INQUIRY
  public $PrimaryObjectType; // OLI_LU_OBJECTTYPE
  public $TransactionContext; // string
  public $CorrelationGUID; // string
  public $CorrelationGUIDState; // OLU_LU_CORRGUIDSTATE
  public $SupportMultipleResponsesInd; // OLI_LU_BOOLEAN
  public $CriteriaExpression; // CriteriaExpression_Type
  public $IllustrationRequest; // IllustrationRequest_Type
  public $MIBRequest; // MIBRequest_Type
  public $ReinsuranceRequest; // ReinsuranceRequest_Type
  public $ChangeSubType; // ChangeSubType_Type
  public $FormInstanceRequest; // FormInstanceRequest_Type
  public $DistinguishedObject; // DistinguishedObject_Type
  public $ProcessingInstruction; // ProcessingInstruction_Type
  public $OLifE; // OLifE_Type
  public $XTbML; // XTbML_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PrimaryObjectID; // IDREF
}

class TXLifeResponse_Type {
  public $TransRefGUID; // string
  public $TransTrackingID; // string
  public $TransType; // OLI_LU_TRANS_TYPE_CODES
  public $TransSubType; // TRANS_SUBTYPE_CODES
  public $BusinessService; // BusinessService_Type
  public $TransExeDate; // date
  public $TransExeTime; // time
  public $TransMode; // TRANS_MODE_CODES
  public $InquiryLevel; // INQUIRY_LEVEL_CODES
  public $InquiryView; // InquiryView_Type
  public $MaxRecords; // integer
  public $NextRecord; // integer
  public $StartRecord; // integer
  public $StartDate; // date
  public $EndDate; // date
  public $PendingResponseOK; // OLI_LU_BOOLEAN
  public $NoResponseOK; // OLI_LU_BOOLEAN
  public $TestIndicator; // OLI_LU_BOOLEAN
  public $URLTargetRequestInd; // OLI_LU_BOOLEAN
  public $BenefitsInquiryType; // BENEFIT_INQUIRY
  public $PrimaryObjectType; // OLI_LU_OBJECTTYPE
  public $TransactionContext; // string
  public $CorrelationGUID; // string
  public $CorrelationGUIDState; // OLU_LU_CORRGUIDSTATE
  public $ChangeSubType; // ChangeSubType_Type
  public $CriteriaExpression; // CriteriaExpression_Type
  public $IllustrationRequest; // IllustrationRequest_Type
  public $IllustrationResult; // IllustrationResult_Type
  public $MIBRequest; // MIBRequest_Type
  public $TransResult; // TransResult_Type
  public $TargetURL; // TargetURL_Type
  public $TransEffDate; // date
  public $DistinguishedObject; // DistinguishedObject_Type
  public $OLifE; // OLifE_Type
  public $XTbML; // XTbML_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $PrimaryObjectID; // IDREF
}

class UltraliteExp_Type {
  public $UltraliteExpKey; // PERSISTKEY
  public $UltraliteExpSysKey; // SYSKEY
  public $CraftAssembly; // OLI_LU_ASSEMBLYTYPE
  public $RigidWingInd; // OLI_LU_BOOLEAN
  public $MotorizedInd; // OLI_LU_BOOLEAN
  public $LicenseInd; // OLI_LU_BOOLEAN
  public $ExperimentalEquipmentInd; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class UndClassGuidelineInfo_Type {
  public $UndClassGuidelineInfoKey; // PERSISTKEY
  public $UndClassGuidelineInfoSysKey; // SYSKEY
  public $UndClassGuidelineCode; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $UndClassGuidelineID; // IDREF
}

class UnderwaterDivingExp_Type {
  public $UnderwaterDivingExpKey; // PERSISTKEY
  public $UnderwaterDivingExpSysKey; // SYSKEY
  public $MaxDepth; // integer
  public $MaxDepthDesc; // string
  public $AvgDepth; // integer
  public $MaxMinute; // integer
  public $AvgMinute; // integer
  public $LastDiveDate; // date
  public $LastDivePartialDate; // PARTIAL_DATE_TYPE
  public $FutureDivingInd; // OLI_LU_BOOLEAN
  public $DivingType; // OLI_LU_DIVETYPE
  public $CertDiverInd; // OLI_LU_BOOLEAN
  public $CertificationLevel; // OLI_LU_CERTLEVEL
  public $CertificationDesc; // string
  public $CertifiedOrg; // string
  public $DiveAloneInd; // OLI_LU_BOOLEAN
  public $DiveAloneDesc; // string
  public $ExperimentalEquipmentInd; // OLI_LU_BOOLEAN
  public $ExperimentalEquipmentDesc; // string
  public $CraftAssembly; // OLI_LU_ASSEMBLYTYPE
  public $DivingLocationCountryDesc; // string
  public $DivePurpose; // DivePurpose_Type
  public $DiveDetail; // DiveDetail_Type
  public $DiveLocation; // DiveLocation_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class UnderwritingClassGuideline_Type {
  public $UnderwritingClassGuidelineKey; // PERSISTKEY
  public $UnderwritingClassGuidelineSysKey; // SYSKEY
  public $UndClassGuidelineCode; // string
  public $ClassName; // string
  public $UnderwritingClass; // OLI_LU_UNWRITECLASS
  public $UnderwritingSubClass; // OLI_LU_UNWRITESUBCLASS
  public $TobaccoPremiumBasis; // OLI_LU_TOBPREMBASIS
  public $Sequence; // integer
  public $GuidelineFailInstructionType; // OLI_LU_GDLNFAILINST
  public $DrivingHistoryGuidelines; // DrivingHistoryGuidelines_Type
  public $BloodPressureGuidelines; // BloodPressureGuidelines_Type
  public $MedicalConditionGuidelines; // MedicalConditionGuidelines_Type
  public $TobaccoUsageGuidelines; // TobaccoUsageGuidelines_Type
  public $SubstanceUsageGuidelines; // SubstanceUsageGuidelines_Type
  public $CholesterolGuidelines; // CholesterolGuidelines_Type
  public $FamilyHistoryGuidelines; // FamilyHistoryGuidelines_Type
  public $ForeignTravelGuidelines; // ForeignTravelGuidelines_Type
  public $AviationGuidelines; // AviationGuidelines_Type
  public $OccupationGuidelines; // OccupationGuidelines_Type
  public $AvocationGuidelines; // AvocationGuidelines_Type
  public $ResidencyGuidelines; // ResidencyGuidelines_Type
  public $MilitaryGuidelines; // MilitaryGuidelines_Type
  public $MedicalTreatmentGuidelines; // MedicalTreatmentGuidelines_Type
  public $MiscellaneousGuidelines; // MiscellaneousGuidelines_Type
  public $CriminalConvictionGuidelines; // CriminalConvictionGuidelines_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class UnderwritingClassProduct_Type {
  public $UnderwritingClassProductKey; // PERSISTKEY
  public $UnderwritingClassProductSysKey; // SYSKEY
  public $UnderwritingClass; // OLI_LU_UNWRITECLASS
  public $UnderwritingSubClass; // OLI_LU_UNWRITESUBCLASS
  public $Sequence; // integer
  public $Description; // string
  public $SmokerStat; // OLI_LU_SMOKERSTAT
  public $TobaccoPremiumBasis; // OLI_LU_TOBPREMBASIS
  public $IssueGender; // OLI_LU_GENDER
  public $MinIssueAge; // integer
  public $MaxIssueAge; // integer
  public $MinIssueAmt; // decimal
  public $MaxIssueAmt; // decimal
  public $ClassName; // string
  public $AgeAdjustment; // integer
  public $MaxIssueUnits; // double
  public $MinIssueUnits; // double
  public $MaxFlatExtra; // decimal
  public $MaxTableRating; // OLI_LU_RATINGS
  public $MaxPctMonthlyGrossSalary; // decimal
  public $MinPct; // double
  public $MaxPct; // double
  public $MaxIssuePremAmt; // decimal
  public $MinIssuePremAmt; // decimal
  public $MaxPermFlatExtra; // decimal
  public $MaxTempFlatExtra; // decimal
  public $UnderwritingClassProductXLat; // UnderwritingClassProductXLat_Type
  public $AgeAmtProduct; // AgeAmtProduct_Type
  public $TempTableRatingCC; // TempTableRatingCC_Type
  public $PermTableRatingCC; // PermTableRatingCC_Type
  public $JurisdictionApproval; // JurisdictionApproval_Type
  public $TempTableRatingInfo; // TempTableRatingInfo_Type
  public $PermTableRatingInfo; // PermTableRatingInfo_Type
  public $UndClassGuidelineInfo; // UndClassGuidelineInfo_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class UnderwritingClassProductXLat_Type {
  public $Language; // OLI_LU_CLIENTLANGUAGES
  public $ClassName; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class UnderwritingGuidelines_Type {
  public $UnderwritingGuidelinesKey; // PERSISTKEY
  public $UnderwritingGuidelinesSysKey; // SYSKEY
  public $UndGuidelineCode; // string
  public $CarrierCode; // string
  public $CarrierName; // string
  public $TableRef; // TableRef_Type
  public $UnderwritingClassGuideline; // UnderwritingClassGuideline_Type
  public $TravelLocationRatings; // TravelLocationRatings_Type
  public $FinancialGuidelines; // FinancialGuidelines_Type
  public $Attachment; // Attachment_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $CarrierPartyID; // IDREF
}

class UnderwritingResult_Type {
  public $UnderwritingResultKey; // PERSISTKEY
  public $UnderwritingResultSysKey; // SYSKEY
  public $UnderwritingResultReason; // OLI_LU_UWREASONCODE
  public $UnderwritingReasonSource; // OLI_LU_REASONSRCE
  public $CompanyAssignedCode; // string
  public $Description; // string
  public $UnderwritingCategory; // OLI_LU_UWCATEGORY
  public $RelatedObjectType; // OLI_LU_OBJECTTYPE
  public $SupplementalText; // string
  public $SupplementalDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $RelatedObjectID; // IDREF
}

class UnderwritingReview_Type {
  public $UnderwritingReviewKey; // PERSISTKEY
  public $UnderwritingReviewSysKey; // SYSKEY
  public $UnderwritingReviewReason; // OLI_LU_UWREVREASON
  public $UnderwritingReasonSource; // OLI_LU_REASONSRCE
  public $CompanyAssignedCode; // string
  public $UnderwritingCategory; // OLI_LU_UWCATEGORY
  public $Description; // string
  public $SupplementalText; // string
  public $SupplementalDate; // date
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $RequirementInfoID; // IDREF
}

class UnionInvolvementInfo_Type {
  public $UnionInvolvementInfoKey; // PERSISTKEY
  public $UnionInvolvementInfoSysKey; // SYSKEY
  public $LocalNumber; // string
  public $FullName; // string
  public $Description; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class UrineTemperature_Type {
  public $UnitsOfMeasure; // OLI_LU_MEASUNITS
  public $MeasureValue; // double
}

class URL_Type {
  public $URLKey; // PERSISTKEY
  public $URLSysKey; // SYSKEY
  public $ValidatedInd; // OLI_LU_BOOLEAN
  public $EndDate; // date
  public $StartDate; // date
  public $URLAddr; // string
  public $URLType; // OLI_LU_URLTYPE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class UserAuthentication_Type {
  public $UserAuthenticationKey; // PERSISTKEY
  public $UserAuthenticationSysKey; // SYSKEY
  public $AuthenticationQuestion; // string
  public $AuthenticationResponse; // string
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class UserAuthRequest_Type {
  public $UserLoginName; // string
  public $UserPswd; // UserPswd_Type
  public $UserAuthentication; // UserAuthentication_Type
  public $UserSessionKey; // string
  public $UserDomain; // string
  public $UserDate; // date
  public $UserTime; // time
  public $VendorApp; // VendorApp_Type
  public $ProxyVendor; // ProxyVendor_Type
  public $OLifEExtension; // OLifEExtension_Type
}

class UserAuthResponse_Type {
  public $TransResult; // TransResult_Type
  public $SvrDate; // date
  public $SvrTime; // time
  public $UserSessionKey; // string
  public $UserSessionKeyExpDate; // date
  public $UserSessionKeyExpTime; // time
  public $OLifEExtension; // OLifEExtension_Type
}

class UserPswd_Type {
  public $CryptType; // string
  public $Pswd; // string
  public $CryptPswd; // string
  public $OLifEExtension; // OLifEExtension_Type
}

class Values_Type {
  public $Key; // Key_Type
  public $Axis; // Axis_Type
  public $Y; // Y_Type
  public $Extension; // Extension_Type
}

class Vector_Type {
  public $VectorType; // TC_VECTOR
  public $VectorBaseDate; // date
  public $VectorEndDate; // date
  public $VectorMode; // OLI_LU_PAYMODE
  public $InitialValue; // decimal
  public $V; // V_Type
  public $TimingOption; // TC_TIMINGOPTION
  public $Continuous; // OLI_LU_BOOLEAN
  public $OLifEExtension; // OLifEExtension_Type
  public $RelatedObjectID; // IDREF
}

class VectorItem_Type {
  public $VectorType; // TC_VECTOR
  public $VectorBaseDate; // date
  public $TimingOption; // TC_TIMINGOPTION
  public $OLifEExtension; // OLifEExtension_Type
}

class VectorRequest_Type {
  public $VectorSetType; // TC_VECTORSETTYPE
  public $VectorItem; // VectorItem_Type
  public $OLifEExtension; // OLifEExtension_Type
}

class VendorApp_Type {
  public $VendorName; // VendorName_Type
  public $AppName; // string
  public $AppVer; // string
  public $CreationDate; // date
  public $CreationTime; // time
  public $Description; // string
  public $Comments; // string
  public $OLifEExtension; // OLifEExtension_Type
}

class VerificationRequirement_Type {
  public $VerificationRequirementKey; // PERSISTKEY
  public $VerificationRequirementSysKey; // SYSKEY
  public $VerificationType; // OLI_LU_VERIFYTYPE
  public $VerifierRoleCode; // OLI_LU_VERIFIERROLE
  public $ProvideCopyInd; // OLI_LU_BOOLEAN
  public $IdentityVerificationTypeCC; // IdentityVerificationTypeCC_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class VerifierParticipant_Type {
  public $VerifierParticipantKey; // PERSISTKEY
  public $VerifierParticipantSysKey; // SYSKEY
  public $VerifierRoleCode; // OLI_LU_VERIFIERROLE
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
  public $VerifierPartyID; // IDREF
}

class Violation_Type {
  public $ViolationKey; // PERSISTKEY
  public $ViolationSysKey; // SYSKEY
  public $Applicability; // OLI_LU_APPLICABILITY
  public $ViolationType; // OLI_LU_VIOLATIONTYPE
  public $ViolationDescription; // string
  public $ViolationDate; // date
  public $ViolationPartialDate; // PARTIAL_DATE_TYPE
  public $ViolationCountry; // OLI_LU_NATION
  public $ViolationJurisdiction; // OLI_LU_STATE
  public $DriverImprovementSchoolInd; // OLI_LU_BOOLEAN
  public $ChargeCategory; // OLI_LU_CHARGECATEGORY
  public $ProceedingOutcome; // OLI_LU_PROCEEDINGOUTCOME
  public $CriminalSentenceDesc; // string
  public $RiskNotification; // RiskNotification_Type
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class Weight2_Type {
  public $MeasureUnits; // OLI_LU_MEASUREUNITS
  public $MeasureValue; // double
  public $WeightMeasuredInd; // OLI_LU_BOOLEAN
}

class WeightHistory_Type {
  public $WeightHistoryKey; // PERSISTKEY
  public $WeightHistorySysKey; // SYSKEY
  public $Weight2; // Weight2_Type
  public $HistoryDuration; // integer
  public $HistoryDurationQualifier; // OLI_LU_MEASUNITS
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class WorkLocation_Type {
  public $WorkLocationKey; // PERSISTKEY
  public $WorkLocationSysKey; // SYSKEY
  public $WorkLocationType; // OLI_LU_WORKLOCTYPE
  public $HoursWorkedPerWeek; // integer
  public $OLifEExtension; // OLifEExtension_Type
  public $id; // ID
  public $DataRep; // DATAREP_TYPES
}

class EnumeratedValue_Type {
  public $_; // string
  public $T; // string
  public $DT; // date
}

class KeyValue_Type {
  public $_; // string
  public $VendorTC; // nonNegativeInteger
}

class PropertyValue_Type {
  public $_; // string
  public $tc; // ACORD_TYPE_CODE
}

class V_Type {
  public $_; // string
  public $T; // integer
  public $DT; // date
  public $FN; // FOOTNOTE_CODES
}

class VendorName_Type {
  public $_; // string
  public $VendorCode; // string
}

class Y_Type {
  public $_; // string
  public $ComplexContentDescriptorID; // IDREF
}


/**
 * AcordLifeBasic_Service class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class AcordLifeBasic_Service extends SoapClient {

  private static $classmap = array(
                                    'Acknowledgement_Type' => 'Acknowledgement_Type',
                                    'FaultCodeContent_Type' => 'FaultCodeContent_Type',
                                    'FaultReport_Type' => 'FaultReport_Type',
                                    'Ping_Type' => 'Ping_Type',
                                    'RetrievalParameters_Type' => 'RetrievalParameters_Type',
                                    'Retrieve_Type' => 'Retrieve_Type',
                                    'RetrieveRequestCodeContent_Type' => 'RetrieveRequestCodeContent_Type',
                                    'UUIDIdentifier_Type' => 'UUIDIdentifier_Type',
                                    'ACORD_PRIVATE_CODE' => 'ACORD_PRIVATE_CODE',
                                    'ACORD_TYPE_CODE' => 'ACORD_TYPE_CODE',
                                    'BANDINGTYPE_TYPE' => 'BANDINGTYPE_TYPE',
                                    'BANDINGTYPE_TYPE_TC' => 'BANDINGTYPE_TYPE_TC',
                                    'BENEFIT_INQUIRY' => 'BENEFIT_INQUIRY',
                                    'BENEFIT_INQUIRY_TC' => 'BENEFIT_INQUIRY_TC',
                                    'CONTENTSUBTYPE_TYPE' => 'CONTENTSUBTYPE_TYPE',
                                    'CONTENTSUBTYPE_TYPE_TC' => 'CONTENTSUBTYPE_TYPE_TC',
                                    'CONTENTTYPE_TYPE' => 'CONTENTTYPE_TYPE',
                                    'CONTENTTYPE_TYPE_TC' => 'CONTENTTYPE_TYPE_TC',
                                    'CRITERIA_OPERATOR' => 'CRITERIA_OPERATOR',
                                    'CRITERIA_OPERATOR_TC' => 'CRITERIA_OPERATOR_TC',
                                    'DATAREP_TYPES' => 'DATAREP_TYPES',
                                    'ENUMERATEDTYPECODEVALUE_TYPE' => 'ENUMERATEDTYPECODEVALUE_TYPE',
                                    'ENUMERATEDTYPECODEVALUE_TYPE_TC' => 'ENUMERATEDTYPECODEVALUE_TYPE_TC',
                                    'FOOTNOTE_CODES' => 'FOOTNOTE_CODES',
                                    'ILL_VAR_PROJTYPE' => 'ILL_VAR_PROJTYPE',
                                    'ILL_VAR_PROJTYPE_TC' => 'ILL_VAR_PROJTYPE_TC',
                                    'INQUIRY_LEVEL_CODES' => 'INQUIRY_LEVEL_CODES',
                                    'INQUIRY_LEVEL_CODES_TC' => 'INQUIRY_LEVEL_CODES_TC',
                                    'KEYSUBTYPE_TYPE' => 'KEYSUBTYPE_TYPE',
                                    'KEYSUBTYPE_TYPE_TC' => 'KEYSUBTYPE_TYPE_TC',
                                    'KEYTYPE_TYPE' => 'KEYTYPE_TYPE',
                                    'KEYTYPE_TYPE_TC' => 'KEYTYPE_TYPE_TC',
                                    'LAPSE_REASON' => 'LAPSE_REASON',
                                    'LAPSE_REASON_TC' => 'LAPSE_REASON_TC',
                                    'OLI_FREELOOKINVEST' => 'OLI_FREELOOKINVEST',
                                    'OLI_FREELOOKINVEST_TC' => 'OLI_FREELOOKINVEST_TC',
                                    'OLI_LU_ACCTACTTYPE' => 'OLI_LU_ACCTACTTYPE',
                                    'OLI_LU_ACCTACTTYPE_TC' => 'OLI_LU_ACCTACTTYPE_TC',
                                    'OLI_LU_ACCTDBCRTYPE' => 'OLI_LU_ACCTDBCRTYPE',
                                    'OLI_LU_ACCTDBCRTYPE_TC' => 'OLI_LU_ACCTDBCRTYPE_TC',
                                    'OLI_LU_ACCTDES' => 'OLI_LU_ACCTDES',
                                    'OLI_LU_ACCTDES_TC' => 'OLI_LU_ACCTDES_TC',
                                    'OLI_LU_ACTIONTYPE' => 'OLI_LU_ACTIONTYPE',
                                    'OLI_LU_ACTIONTYPE_TC' => 'OLI_LU_ACTIONTYPE_TC',
                                    'OLI_LU_ACTSTAT' => 'OLI_LU_ACTSTAT',
                                    'OLI_LU_ACTSTAT_TC' => 'OLI_LU_ACTSTAT_TC',
                                    'OLI_LU_ACTSTATDESC' => 'OLI_LU_ACTSTATDESC',
                                    'OLI_LU_ACTSTATDESC_TC' => 'OLI_LU_ACTSTATDESC_TC',
                                    'OLI_LU_ACTTYPE' => 'OLI_LU_ACTTYPE',
                                    'OLI_LU_ACTTYPE_TC' => 'OLI_LU_ACTTYPE_TC',
                                    'OLI_LU_ACTTYPEDESC' => 'OLI_LU_ACTTYPEDESC',
                                    'OLI_LU_ACTTYPEDESC_TC' => 'OLI_LU_ACTTYPEDESC_TC',
                                    'OLI_LU_ADDRFORMATTC' => 'OLI_LU_ADDRFORMATTC',
                                    'OLI_LU_ADDRFORMATTC_TC' => 'OLI_LU_ADDRFORMATTC_TC',
                                    'OLI_LU_ADTYPE' => 'OLI_LU_ADTYPE',
                                    'OLI_LU_ADTYPE_TC' => 'OLI_LU_ADTYPE_TC',
                                    'OLI_LU_ADVINTCALCRULE' => 'OLI_LU_ADVINTCALCRULE',
                                    'OLI_LU_ADVINTCALCRULE_TC' => 'OLI_LU_ADVINTCALCRULE_TC',
                                    'OLI_LU_AGEBASIS' => 'OLI_LU_AGEBASIS',
                                    'OLI_LU_AGEBASIS_TC' => 'OLI_LU_AGEBASIS_TC',
                                    'OLI_LU_AGECALCMETH' => 'OLI_LU_AGECALCMETH',
                                    'OLI_LU_AGECALCMETH_TC' => 'OLI_LU_AGECALCMETH_TC',
                                    'OLI_LU_AGEDATEUSE' => 'OLI_LU_AGEDATEUSE',
                                    'OLI_LU_AGEDATEUSE_TC' => 'OLI_LU_AGEDATEUSE_TC',
                                    'OLI_LU_AGGREGATIONMETHOD' => 'OLI_LU_AGGREGATIONMETHOD',
                                    'OLI_LU_AGGREGATIONMETHOD_TC' => 'OLI_LU_AGGREGATIONMETHOD_TC',
                                    'OLI_LU_AIRCRAFTJOB' => 'OLI_LU_AIRCRAFTJOB',
                                    'OLI_LU_AIRCRAFTJOB_TC' => 'OLI_LU_AIRCRAFTJOB_TC',
                                    'OLI_LU_AIRCRAFTTYPE' => 'OLI_LU_AIRCRAFTTYPE',
                                    'OLI_LU_AIRCRAFTTYPE_TC' => 'OLI_LU_AIRCRAFTTYPE_TC',
                                    'OLI_LU_ALLOCATION_RULE' => 'OLI_LU_ALLOCATION_RULE',
                                    'OLI_LU_ALLOCATION_RULE_TC' => 'OLI_LU_ALLOCATION_RULE_TC',
                                    'OLI_LU_ALLOCATIONOPTION' => 'OLI_LU_ALLOCATIONOPTION',
                                    'OLI_LU_ALLOCATIONOPTION_TC' => 'OLI_LU_ALLOCATIONOPTION_TC',
                                    'OLI_LU_ALLOWEDDATE' => 'OLI_LU_ALLOWEDDATE',
                                    'OLI_LU_ALLOWEDDATE_TC' => 'OLI_LU_ALLOWEDDATE_TC',
                                    'OLI_LU_ALLOWEDDAY' => 'OLI_LU_ALLOWEDDAY',
                                    'OLI_LU_ALLOWEDDAY_TC' => 'OLI_LU_ALLOWEDDAY_TC',
                                    'OLI_LU_ALLOWPCTTYPE' => 'OLI_LU_ALLOWPCTTYPE',
                                    'OLI_LU_ALLOWPCTTYPE_TC' => 'OLI_LU_ALLOWPCTTYPE_TC',
                                    'OLI_LU_AMOUNTTYPE' => 'OLI_LU_AMOUNTTYPE',
                                    'OLI_LU_AMOUNTTYPE_TC' => 'OLI_LU_AMOUNTTYPE_TC',
                                    'OLI_LU_AMTCALCMETHOD' => 'OLI_LU_AMTCALCMETHOD',
                                    'OLI_LU_AMTCALCMETHOD_TC' => 'OLI_LU_AMTCALCMETHOD_TC',
                                    'OLI_LU_AMTCONTEXT' => 'OLI_LU_AMTCONTEXT',
                                    'OLI_LU_AMTCONTEXT_TC' => 'OLI_LU_AMTCONTEXT_TC',
                                    'OLI_LU_ANNDATERULE' => 'OLI_LU_ANNDATERULE',
                                    'OLI_LU_ANNDATERULE_TC' => 'OLI_LU_ANNDATERULE_TC',
                                    'OLI_LU_ANNIDX' => 'OLI_LU_ANNIDX',
                                    'OLI_LU_ANNIDX_TC' => 'OLI_LU_ANNIDX_TC',
                                    'OLI_LU_ANNPAYOUT' => 'OLI_LU_ANNPAYOUT',
                                    'OLI_LU_ANNPAYOUT_TC' => 'OLI_LU_ANNPAYOUT_TC',
                                    'OLI_LU_ANNPREM' => 'OLI_LU_ANNPREM',
                                    'OLI_LU_ANNPREM_TC' => 'OLI_LU_ANNPREM_TC',
                                    'OLI_LU_ANSWERCHOICE' => 'OLI_LU_ANSWERCHOICE',
                                    'OLI_LU_ANSWERCHOICE_TC' => 'OLI_LU_ANSWERCHOICE_TC',
                                    'OLI_LU_ANSWERTYPE' => 'OLI_LU_ANSWERTYPE',
                                    'OLI_LU_ANSWERTYPE_TC' => 'OLI_LU_ANSWERTYPE_TC',
                                    'OLI_LU_APPLICABILITY' => 'OLI_LU_APPLICABILITY',
                                    'OLI_LU_APPLICABILITY_TC' => 'OLI_LU_APPLICABILITY_TC',
                                    'OLI_LU_APPORIGIN' => 'OLI_LU_APPORIGIN',
                                    'OLI_LU_APPORIGIN_TC' => 'OLI_LU_APPORIGIN_TC',
                                    'OLI_LU_APPPACKAGE' => 'OLI_LU_APPPACKAGE',
                                    'OLI_LU_APPPACKAGE_TC' => 'OLI_LU_APPPACKAGE_TC',
                                    'OLI_LU_APPSUBMITTYPE' => 'OLI_LU_APPSUBMITTYPE',
                                    'OLI_LU_APPSUBMITTYPE_TC' => 'OLI_LU_APPSUBMITTYPE_TC',
                                    'OLI_LU_APPTYPE' => 'OLI_LU_APPTYPE',
                                    'OLI_LU_APPTYPE_TC' => 'OLI_LU_APPTYPE_TC',
                                    'OLI_LU_ARRSUBTYPE' => 'OLI_LU_ARRSUBTYPE',
                                    'OLI_LU_ARRSUBTYPE_TC' => 'OLI_LU_ARRSUBTYPE_TC',
                                    'OLI_LU_ARRTYPE' => 'OLI_LU_ARRTYPE',
                                    'OLI_LU_ARRTYPE_TC' => 'OLI_LU_ARRTYPE_TC',
                                    'OLI_LU_ASSEMBLYTYPE' => 'OLI_LU_ASSEMBLYTYPE',
                                    'OLI_LU_ASSEMBLYTYPE_TC' => 'OLI_LU_ASSEMBLYTYPE_TC',
                                    'OLI_LU_ASSETCLASS' => 'OLI_LU_ASSETCLASS',
                                    'OLI_LU_ASSETCLASS_TC' => 'OLI_LU_ASSETCLASS_TC',
                                    'OLI_LU_ASSIGNED' => 'OLI_LU_ASSIGNED',
                                    'OLI_LU_ASSIGNED_TC' => 'OLI_LU_ASSIGNED_TC',
                                    'OLI_LU_ATTACHLOCATION' => 'OLI_LU_ATTACHLOCATION',
                                    'OLI_LU_ATTACHLOCATION_TC' => 'OLI_LU_ATTACHLOCATION_TC',
                                    'OLI_LU_ATTACHMENTCATEGORYTC' => 'OLI_LU_ATTACHMENTCATEGORYTC',
                                    'OLI_LU_ATTACHMENTCATEGORYTC_TC' => 'OLI_LU_ATTACHMENTCATEGORYTC_TC',
                                    'OLI_LU_ATTACHMENTTYPE' => 'OLI_LU_ATTACHMENTTYPE',
                                    'OLI_LU_ATTACHMENTTYPE_TC' => 'OLI_LU_ATTACHMENTTYPE_TC',
                                    'OLI_LU_ATTANOMALY' => 'OLI_LU_ATTANOMALY',
                                    'OLI_LU_ATTANOMALY_TC' => 'OLI_LU_ATTANOMALY_TC',
                                    'OLI_LU_AUDTOT' => 'OLI_LU_AUDTOT',
                                    'OLI_LU_AUDTOT_TC' => 'OLI_LU_AUDTOT_TC',
                                    'OLI_LU_AVAILABILITY' => 'OLI_LU_AVAILABILITY',
                                    'OLI_LU_AVAILABILITY_TC' => 'OLI_LU_AVAILABILITY_TC',
                                    'OLI_LU_AVIATIONTYPE' => 'OLI_LU_AVIATIONTYPE',
                                    'OLI_LU_AVIATIONTYPE_TC' => 'OLI_LU_AVIATIONTYPE_TC',
                                    'OLI_LU_BACKDATE' => 'OLI_LU_BACKDATE',
                                    'OLI_LU_BACKDATE_TC' => 'OLI_LU_BACKDATE_TC',
                                    'OLI_LU_BALANCETYPE' => 'OLI_LU_BALANCETYPE',
                                    'OLI_LU_BALANCETYPE_TC' => 'OLI_LU_BALANCETYPE_TC',
                                    'OLI_LU_BALLOONTYPE' => 'OLI_LU_BALLOONTYPE',
                                    'OLI_LU_BALLOONTYPE_TC' => 'OLI_LU_BALLOONTYPE_TC',
                                    'OLI_LU_BANKACCTTYPE' => 'OLI_LU_BANKACCTTYPE',
                                    'OLI_LU_BANKACCTTYPE_TC' => 'OLI_LU_BANKACCTTYPE_TC',
                                    'OLI_LU_BANKRUPTCYCHAPTER' => 'OLI_LU_BANKRUPTCYCHAPTER',
                                    'OLI_LU_BANKRUPTCYCHAPTER_TC' => 'OLI_LU_BANKRUPTCYCHAPTER_TC',
                                    'OLI_LU_BANKRUPTCYSTATUS' => 'OLI_LU_BANKRUPTCYSTATUS',
                                    'OLI_LU_BANKRUPTCYSTATUS_TC' => 'OLI_LU_BANKRUPTCYSTATUS_TC',
                                    'OLI_LU_BASICATTACHMENTTYPE' => 'OLI_LU_BASICATTACHMENTTYPE',
                                    'OLI_LU_BASICATTACHMENTTYPE_TC' => 'OLI_LU_BASICATTACHMENTTYPE_TC',
                                    'OLI_LU_BENCHGTRIG' => 'OLI_LU_BENCHGTRIG',
                                    'OLI_LU_BENCHGTRIG_TC' => 'OLI_LU_BENCHGTRIG_TC',
                                    'OLI_LU_BENCHGTYPE' => 'OLI_LU_BENCHGTYPE',
                                    'OLI_LU_BENCHGTYPE_TC' => 'OLI_LU_BENCHGTYPE_TC',
                                    'OLI_LU_BENEDESIGNATION' => 'OLI_LU_BENEDESIGNATION',
                                    'OLI_LU_BENEDESIGNATION_TC' => 'OLI_LU_BENEDESIGNATION_TC',
                                    'OLI_LU_BENEFICIARYSHAREMETHOD' => 'OLI_LU_BENEFICIARYSHAREMETHOD',
                                    'OLI_LU_BENEFICIARYSHAREMETHOD_TC' => 'OLI_LU_BENEFICIARYSHAREMETHOD_TC',
                                    'OLI_LU_BENEFITCODE' => 'OLI_LU_BENEFITCODE',
                                    'OLI_LU_BENEFITCODE_TC' => 'OLI_LU_BENEFITCODE_TC',
                                    'OLI_LU_BENEFITLIMIT' => 'OLI_LU_BENEFITLIMIT',
                                    'OLI_LU_BENEFITLIMIT_TC' => 'OLI_LU_BENEFITLIMIT_TC',
                                    'OLI_LU_BENEFITSCHEDTYPE' => 'OLI_LU_BENEFITSCHEDTYPE',
                                    'OLI_LU_BENEFITSCHEDTYPE_TC' => 'OLI_LU_BENEFITSCHEDTYPE_TC',
                                    'OLI_LU_BENEPAYMENTTYPE' => 'OLI_LU_BENEPAYMENTTYPE',
                                    'OLI_LU_BENEPAYMENTTYPE_TC' => 'OLI_LU_BENEPAYMENTTYPE_TC',
                                    'OLI_LU_BENEPERIOD' => 'OLI_LU_BENEPERIOD',
                                    'OLI_LU_BENEPERIOD_TC' => 'OLI_LU_BENEPERIOD_TC',
                                    'OLI_LU_BENESTAT' => 'OLI_LU_BENESTAT',
                                    'OLI_LU_BENESTAT_TC' => 'OLI_LU_BENESTAT_TC',
                                    'OLI_LU_BENESTRUCTTYPE' => 'OLI_LU_BENESTRUCTTYPE',
                                    'OLI_LU_BENESTRUCTTYPE_TC' => 'OLI_LU_BENESTRUCTTYPE_TC',
                                    'OLI_LU_BENREDUCEBASEDON' => 'OLI_LU_BENREDUCEBASEDON',
                                    'OLI_LU_BENREDUCEBASEDON_TC' => 'OLI_LU_BENREDUCEBASEDON_TC',
                                    'OLI_LU_BESTRATE' => 'OLI_LU_BESTRATE',
                                    'OLI_LU_BESTRATE_TC' => 'OLI_LU_BESTRATE_TC',
                                    'OLI_LU_BILLAMTTYPE' => 'OLI_LU_BILLAMTTYPE',
                                    'OLI_LU_BILLAMTTYPE_TC' => 'OLI_LU_BILLAMTTYPE_TC',
                                    'OLI_LU_BILLSUBTYPE' => 'OLI_LU_BILLSUBTYPE',
                                    'OLI_LU_BILLSUBTYPE_TC' => 'OLI_LU_BILLSUBTYPE_TC',
                                    'OLI_LU_BONUSREAS' => 'OLI_LU_BONUSREAS',
                                    'OLI_LU_BONUSREAS_TC' => 'OLI_LU_BONUSREAS_TC',
                                    'OLI_LU_BONUSTYPE' => 'OLI_LU_BONUSTYPE',
                                    'OLI_LU_BONUSTYPE_TC' => 'OLI_LU_BONUSTYPE_TC',
                                    'OLI_LU_BOOLEAN' => 'OLI_LU_BOOLEAN',
                                    'OLI_LU_BOOLEAN_TC' => 'OLI_LU_BOOLEAN_TC',
                                    'OLI_LU_BUSPROCESS' => 'OLI_LU_BUSPROCESS',
                                    'OLI_LU_BUSPROCESS_TC' => 'OLI_LU_BUSPROCESS_TC',
                                    'OLI_LU_CAMPAIGNTYPE' => 'OLI_LU_CAMPAIGNTYPE',
                                    'OLI_LU_CAMPAIGNTYPE_TC' => 'OLI_LU_CAMPAIGNTYPE_TC',
                                    'OLI_LU_CAPABILITYLEVEL' => 'OLI_LU_CAPABILITYLEVEL',
                                    'OLI_LU_CAPABILITYLEVEL_TC' => 'OLI_LU_CAPABILITYLEVEL_TC',
                                    'OLI_LU_CAPABILTYPE' => 'OLI_LU_CAPABILTYPE',
                                    'OLI_LU_CAPABILTYPE_TC' => 'OLI_LU_CAPABILTYPE_TC',
                                    'OLI_LU_CAPFLOORCONTRIB' => 'OLI_LU_CAPFLOORCONTRIB',
                                    'OLI_LU_CAPFLOORCONTRIB_TC' => 'OLI_LU_CAPFLOORCONTRIB_TC',
                                    'OLI_LU_CAPGAIN' => 'OLI_LU_CAPGAIN',
                                    'OLI_LU_CAPGAIN_TC' => 'OLI_LU_CAPGAIN_TC',
                                    'OLI_LU_CAPTYPE' => 'OLI_LU_CAPTYPE',
                                    'OLI_LU_CAPTYPE_TC' => 'OLI_LU_CAPTYPE_TC',
                                    'OLI_LU_CARDIACINT' => 'OLI_LU_CARDIACINT',
                                    'OLI_LU_CARDIACINT_TC' => 'OLI_LU_CARDIACINT_TC',
                                    'OLI_LU_CARDIACLOC' => 'OLI_LU_CARDIACLOC',
                                    'OLI_LU_CARDIACLOC_TC' => 'OLI_LU_CARDIACLOC_TC',
                                    'OLI_LU_CARDIACQUAL' => 'OLI_LU_CARDIACQUAL',
                                    'OLI_LU_CARDIACQUAL_TC' => 'OLI_LU_CARDIACQUAL_TC',
                                    'OLI_LU_CARDIACTIM' => 'OLI_LU_CARDIACTIM',
                                    'OLI_LU_CARDIACTIM_TC' => 'OLI_LU_CARDIACTIM_TC',
                                    'OLI_LU_CARRIERFORM' => 'OLI_LU_CARRIERFORM',
                                    'OLI_LU_CARRIERFORM_TC' => 'OLI_LU_CARRIERFORM_TC',
                                    'OLI_LU_CASESTAT' => 'OLI_LU_CASESTAT',
                                    'OLI_LU_CASESTAT_TC' => 'OLI_LU_CASESTAT_TC',
                                    'OLI_LU_CASETYPE' => 'OLI_LU_CASETYPE',
                                    'OLI_LU_CASETYPE_TC' => 'OLI_LU_CASETYPE_TC',
                                    'OLI_LU_CERTLEVEL' => 'OLI_LU_CERTLEVEL',
                                    'OLI_LU_CERTLEVEL_TC' => 'OLI_LU_CERTLEVEL_TC',
                                    'OLI_LU_CERTRATE' => 'OLI_LU_CERTRATE',
                                    'OLI_LU_CERTRATE_TC' => 'OLI_LU_CERTRATE_TC',
                                    'OLI_LU_CHARGECATEGORY' => 'OLI_LU_CHARGECATEGORY',
                                    'OLI_LU_CHARGECATEGORY_TC' => 'OLI_LU_CHARGECATEGORY_TC',
                                    'OLI_LU_CHILDAGE' => 'OLI_LU_CHILDAGE',
                                    'OLI_LU_CHILDAGE_TC' => 'OLI_LU_CHILDAGE_TC',
                                    'OLI_LU_CHILDPREM' => 'OLI_LU_CHILDPREM',
                                    'OLI_LU_CHILDPREM_TC' => 'OLI_LU_CHILDPREM_TC',
                                    'OLI_LU_CHNGBASIS' => 'OLI_LU_CHNGBASIS',
                                    'OLI_LU_CHNGBASIS_TC' => 'OLI_LU_CHNGBASIS_TC',
                                    'OLI_LU_CHNGTYPE' => 'OLI_LU_CHNGTYPE',
                                    'OLI_LU_CHNGTYPE_TC' => 'OLI_LU_CHNGTYPE_TC',
                                    'OLI_LU_CLAIMSTATREASON' => 'OLI_LU_CLAIMSTATREASON',
                                    'OLI_LU_CLAIMSTATREASON_TC' => 'OLI_LU_CLAIMSTATREASON_TC',
                                    'OLI_LU_CLIENTLANGUAGES' => 'OLI_LU_CLIENTLANGUAGES',
                                    'OLI_LU_CLIENTLANGUAGES_TC' => 'OLI_LU_CLIENTLANGUAGES_TC',
                                    'OLI_LU_CLISTAT' => 'OLI_LU_CLISTAT',
                                    'OLI_LU_CLISTAT_TC' => 'OLI_LU_CLISTAT_TC',
                                    'OLI_LU_CLITYPE' => 'OLI_LU_CLITYPE',
                                    'OLI_LU_CLITYPE_TC' => 'OLI_LU_CLITYPE_TC',
                                    'OLI_LU_CLMSTAT' => 'OLI_LU_CLMSTAT',
                                    'OLI_LU_CLMSTAT_TC' => 'OLI_LU_CLMSTAT_TC',
                                    'OLI_LU_CODELIST' => 'OLI_LU_CODELIST',
                                    'OLI_LU_CODELIST_TC' => 'OLI_LU_CODELIST_TC',
                                    'OLI_LU_CODESUPSTAT' => 'OLI_LU_CODESUPSTAT',
                                    'OLI_LU_CODESUPSTAT_TC' => 'OLI_LU_CODESUPSTAT_TC',
                                    'OLI_LU_COLINDEX' => 'OLI_LU_COLINDEX',
                                    'OLI_LU_COLINDEX_TC' => 'OLI_LU_COLINDEX_TC',
                                    'OLI_LU_COMMEVENT' => 'OLI_LU_COMMEVENT',
                                    'OLI_LU_COMMEVENT_TC' => 'OLI_LU_COMMEVENT_TC',
                                    'OLI_LU_COMMOPTION' => 'OLI_LU_COMMOPTION',
                                    'OLI_LU_COMMOPTION_TC' => 'OLI_LU_COMMOPTION_TC',
                                    'OLI_LU_COMMTRNTYPE' => 'OLI_LU_COMMTRNTYPE',
                                    'OLI_LU_COMMTRNTYPE_TC' => 'OLI_LU_COMMTRNTYPE_TC',
                                    'OLI_LU_COMMTYPE' => 'OLI_LU_COMMTYPE',
                                    'OLI_LU_COMMTYPE_TC' => 'OLI_LU_COMMTYPE_TC',
                                    'OLI_LU_COMPCLASS' => 'OLI_LU_COMPCLASS',
                                    'OLI_LU_COMPCLASS_TC' => 'OLI_LU_COMPCLASS_TC',
                                    'OLI_LU_CONDCAUSE' => 'OLI_LU_CONDCAUSE',
                                    'OLI_LU_CONDCAUSE_TC' => 'OLI_LU_CONDCAUSE_TC',
                                    'OLI_LU_CONDSTATUS' => 'OLI_LU_CONDSTATUS',
                                    'OLI_LU_CONDSTATUS_TC' => 'OLI_LU_CONDSTATUS_TC',
                                    'OLI_LU_CONTINGJOINT' => 'OLI_LU_CONTINGJOINT',
                                    'OLI_LU_CONTINGJOINT_TC' => 'OLI_LU_CONTINGJOINT_TC',
                                    'OLI_LU_CONTRIBREASON' => 'OLI_LU_CONTRIBREASON',
                                    'OLI_LU_CONTRIBREASON_TC' => 'OLI_LU_CONTRIBREASON_TC',
                                    'OLI_LU_COUNTY' => 'OLI_LU_COUNTY',
                                    'OLI_LU_COUNTY_TC' => 'OLI_LU_COUNTY_TC',
                                    'OLI_LU_COURSETYPE' => 'OLI_LU_COURSETYPE',
                                    'OLI_LU_COURSETYPE_TC' => 'OLI_LU_COURSETYPE_TC',
                                    'OLI_LU_COVCHGCTLTYPE' => 'OLI_LU_COVCHGCTLTYPE',
                                    'OLI_LU_COVCHGCTLTYPE_TC' => 'OLI_LU_COVCHGCTLTYPE_TC',
                                    'OLI_LU_COVEFFDATERSTCT' => 'OLI_LU_COVEFFDATERSTCT',
                                    'OLI_LU_COVEFFDATERSTCT_TC' => 'OLI_LU_COVEFFDATERSTCT_TC',
                                    'OLI_LU_COVINDCODE' => 'OLI_LU_COVINDCODE',
                                    'OLI_LU_COVINDCODE_TC' => 'OLI_LU_COVINDCODE_TC',
                                    'OLI_LU_COVTYPE' => 'OLI_LU_COVTYPE',
                                    'OLI_LU_COVTYPE_TC' => 'OLI_LU_COVTYPE_TC',
                                    'OLI_LU_COVUNITTYPE' => 'OLI_LU_COVUNITTYPE',
                                    'OLI_LU_COVUNITTYPE_TC' => 'OLI_LU_COVUNITTYPE_TC',
                                    'OLI_LU_CRAFTCERT' => 'OLI_LU_CRAFTCERT',
                                    'OLI_LU_CRAFTCERT_TC' => 'OLI_LU_CRAFTCERT_TC',
                                    'OLI_LU_CREDCARDTYPE' => 'OLI_LU_CREDCARDTYPE',
                                    'OLI_LU_CREDCARDTYPE_TC' => 'OLI_LU_CREDCARDTYPE_TC',
                                    'OLI_LU_CREDITADJ' => 'OLI_LU_CREDITADJ',
                                    'OLI_LU_CREDITADJ_TC' => 'OLI_LU_CREDITADJ_TC',
                                    'OLI_LU_CRIMETYPE' => 'OLI_LU_CRIMETYPE',
                                    'OLI_LU_CRIMETYPE_TC' => 'OLI_LU_CRIMETYPE_TC',
                                    'OLI_LU_CURRENCYTYPE' => 'OLI_LU_CURRENCYTYPE',
                                    'OLI_LU_CURRENCYTYPE_TC' => 'OLI_LU_CURRENCYTYPE_TC',
                                    'OLI_LU_DATACOLLECTION' => 'OLI_LU_DATACOLLECTION',
                                    'OLI_LU_DATACOLLECTION_TC' => 'OLI_LU_DATACOLLECTION_TC',
                                    'OLI_LU_DATAREQ' => 'OLI_LU_DATAREQ',
                                    'OLI_LU_DATAREQ_TC' => 'OLI_LU_DATAREQ_TC',
                                    'OLI_LU_DATATYPE' => 'OLI_LU_DATATYPE',
                                    'OLI_LU_DATATYPE_TC' => 'OLI_LU_DATATYPE_TC',
                                    'OLI_LU_DATEBASIS' => 'OLI_LU_DATEBASIS',
                                    'OLI_LU_DATEBASIS_TC' => 'OLI_LU_DATEBASIS_TC',
                                    'OLI_LU_DATECOLLECT' => 'OLI_LU_DATECOLLECT',
                                    'OLI_LU_DATECOLLECT_TC' => 'OLI_LU_DATECOLLECT_TC',
                                    'OLI_LU_DAY' => 'OLI_LU_DAY',
                                    'OLI_LU_DAY_TC' => 'OLI_LU_DAY_TC',
                                    'OLI_LU_DCATYPE' => 'OLI_LU_DCATYPE',
                                    'OLI_LU_DCATYPE_TC' => 'OLI_LU_DCATYPE_TC',
                                    'OLI_LU_DEBTTYPE' => 'OLI_LU_DEBTTYPE',
                                    'OLI_LU_DEBTTYPE_TC' => 'OLI_LU_DEBTTYPE_TC',
                                    'OLI_LU_DEDUCTTYPE' => 'OLI_LU_DEDUCTTYPE',
                                    'OLI_LU_DEDUCTTYPE_TC' => 'OLI_LU_DEDUCTTYPE_TC',
                                    'OLI_LU_DEGDIFFICULTY' => 'OLI_LU_DEGDIFFICULTY',
                                    'OLI_LU_DEGDIFFICULTY_TC' => 'OLI_LU_DEGDIFFICULTY_TC',
                                    'OLI_LU_DELIVERYLEVEL' => 'OLI_LU_DELIVERYLEVEL',
                                    'OLI_LU_DELIVERYLEVEL_TC' => 'OLI_LU_DELIVERYLEVEL_TC',
                                    'OLI_LU_DENIALMETHOD' => 'OLI_LU_DENIALMETHOD',
                                    'OLI_LU_DENIALMETHOD_TC' => 'OLI_LU_DENIALMETHOD_TC',
                                    'OLI_LU_DENIALTYPE' => 'OLI_LU_DENIALTYPE',
                                    'OLI_LU_DENIALTYPE_TC' => 'OLI_LU_DENIALTYPE_TC',
                                    'OLI_LU_DESIGNATIONTYPE' => 'OLI_LU_DESIGNATIONTYPE',
                                    'OLI_LU_DESIGNATIONTYPE_TC' => 'OLI_LU_DESIGNATIONTYPE_TC',
                                    'OLI_LU_DISPOSITIONRESULTS' => 'OLI_LU_DISPOSITIONRESULTS',
                                    'OLI_LU_DISPOSITIONRESULTS_TC' => 'OLI_LU_DISPOSITIONRESULTS_TC',
                                    'OLI_LU_DISTCHAN' => 'OLI_LU_DISTCHAN',
                                    'OLI_LU_DISTCHAN_TC' => 'OLI_LU_DISTCHAN_TC',
                                    'OLI_LU_DISTOPTION' => 'OLI_LU_DISTOPTION',
                                    'OLI_LU_DISTOPTION_TC' => 'OLI_LU_DISTOPTION_TC',
                                    'OLI_LU_DISTRIBUTION_LEVEL' => 'OLI_LU_DISTRIBUTION_LEVEL',
                                    'OLI_LU_DISTRIBUTION_LEVEL_TC' => 'OLI_LU_DISTRIBUTION_LEVEL_TC',
                                    'OLI_LU_DISTRIBUTIONSUBCHANNEL' => 'OLI_LU_DISTRIBUTIONSUBCHANNEL',
                                    'OLI_LU_DISTRIBUTIONSUBCHANNEL_TC' => 'OLI_LU_DISTRIBUTIONSUBCHANNEL_TC',
                                    'OLI_LU_DIVAMTDISP' => 'OLI_LU_DIVAMTDISP',
                                    'OLI_LU_DIVAMTDISP_TC' => 'OLI_LU_DIVAMTDISP_TC',
                                    'OLI_LU_DIVEARNRULE' => 'OLI_LU_DIVEARNRULE',
                                    'OLI_LU_DIVEARNRULE_TC' => 'OLI_LU_DIVEARNRULE_TC',
                                    'OLI_LU_DIVELOCTYPE' => 'OLI_LU_DIVELOCTYPE',
                                    'OLI_LU_DIVELOCTYPE_TC' => 'OLI_LU_DIVELOCTYPE_TC',
                                    'OLI_LU_DIVEPURPOSE' => 'OLI_LU_DIVEPURPOSE',
                                    'OLI_LU_DIVEPURPOSE_TC' => 'OLI_LU_DIVEPURPOSE_TC',
                                    'OLI_LU_DIVETYPE' => 'OLI_LU_DIVETYPE',
                                    'OLI_LU_DIVETYPE_TC' => 'OLI_LU_DIVETYPE_TC',
                                    'OLI_LU_DIVOYTTYPE' => 'OLI_LU_DIVOYTTYPE',
                                    'OLI_LU_DIVOYTTYPE_TC' => 'OLI_LU_DIVOYTTYPE_TC',
                                    'OLI_LU_DIVRATETYPE' => 'OLI_LU_DIVRATETYPE',
                                    'OLI_LU_DIVRATETYPE_TC' => 'OLI_LU_DIVRATETYPE_TC',
                                    'OLI_LU_DIVTYPE' => 'OLI_LU_DIVTYPE',
                                    'OLI_LU_DIVTYPE_TC' => 'OLI_LU_DIVTYPE_TC',
                                    'OLI_LU_DLSTATUS' => 'OLI_LU_DLSTATUS',
                                    'OLI_LU_DLSTATUS_TC' => 'OLI_LU_DLSTATUS_TC',
                                    'OLI_LU_DOCCATEGORY' => 'OLI_LU_DOCCATEGORY',
                                    'OLI_LU_DOCCATEGORY_TC' => 'OLI_LU_DOCCATEGORY_TC',
                                    'OLI_LU_DOCCTRLTYPE' => 'OLI_LU_DOCCTRLTYPE',
                                    'OLI_LU_DOCCTRLTYPE_TC' => 'OLI_LU_DOCCTRLTYPE_TC',
                                    'OLI_LU_DOCSUBCATEGORY' => 'OLI_LU_DOCSUBCATEGORY',
                                    'OLI_LU_DOCSUBCATEGORY_TC' => 'OLI_LU_DOCSUBCATEGORY_TC',
                                    'OLI_LU_DRIVERSLICENSETYPE' => 'OLI_LU_DRIVERSLICENSETYPE',
                                    'OLI_LU_DRIVERSLICENSETYPE_TC' => 'OLI_LU_DRIVERSLICENSETYPE_TC',
                                    'OLI_LU_DRUGSOURCE' => 'OLI_LU_DRUGSOURCE',
                                    'OLI_LU_DRUGSOURCE_TC' => 'OLI_LU_DRUGSOURCE_TC',
                                    'OLI_LU_DRUGTYPE' => 'OLI_LU_DRUGTYPE',
                                    'OLI_LU_DRUGTYPE_TC' => 'OLI_LU_DRUGTYPE_TC',
                                    'OLI_LU_DRVISITREASON' => 'OLI_LU_DRVISITREASON',
                                    'OLI_LU_DRVISITREASON_TC' => 'OLI_LU_DRVISITREASON_TC',
                                    'OLI_LU_DTHBENEOPTCHGALLOW' => 'OLI_LU_DTHBENEOPTCHGALLOW',
                                    'OLI_LU_DTHBENEOPTCHGALLOW_TC' => 'OLI_LU_DTHBENEOPTCHGALLOW_TC',
                                    'OLI_LU_DTHBENEPAY' => 'OLI_LU_DTHBENEPAY',
                                    'OLI_LU_DTHBENEPAY_TC' => 'OLI_LU_DTHBENEPAY_TC',
                                    'OLI_LU_DTHBENETYPE' => 'OLI_LU_DTHBENETYPE',
                                    'OLI_LU_DTHBENETYPE_TC' => 'OLI_LU_DTHBENETYPE_TC',
                                    'OLI_LU_EDUGRADSTAT_EGS' => 'OLI_LU_EDUGRADSTAT_EGS',
                                    'OLI_LU_EDUGRADSTAT_EGS_TC' => 'OLI_LU_EDUGRADSTAT_EGS_TC',
                                    'OLI_LU_EDULEVEL' => 'OLI_LU_EDULEVEL',
                                    'OLI_LU_EDULEVEL_TC' => 'OLI_LU_EDULEVEL_TC',
                                    'OLI_LU_ELECAUTH' => 'OLI_LU_ELECAUTH',
                                    'OLI_LU_ELECAUTH_TC' => 'OLI_LU_ELECAUTH_TC',
                                    'OLI_LU_ELIMPERIOD' => 'OLI_LU_ELIMPERIOD',
                                    'OLI_LU_ELIMPERIOD_TC' => 'OLI_LU_ELIMPERIOD_TC',
                                    'OLI_LU_EMAILTYPE' => 'OLI_LU_EMAILTYPE',
                                    'OLI_LU_EMAILTYPE_TC' => 'OLI_LU_EMAILTYPE_TC',
                                    'OLI_LU_EMPLOYMENTCLASS' => 'OLI_LU_EMPLOYMENTCLASS',
                                    'OLI_LU_EMPLOYMENTCLASS_TC' => 'OLI_LU_EMPLOYMENTCLASS_TC',
                                    'OLI_LU_EMPLOYMENTTYPE' => 'OLI_LU_EMPLOYMENTTYPE',
                                    'OLI_LU_EMPLOYMENTTYPE_TC' => 'OLI_LU_EMPLOYMENTTYPE_TC',
                                    'OLI_LU_EMPSTATTYPECODES' => 'OLI_LU_EMPSTATTYPECODES',
                                    'OLI_LU_EMPSTATTYPECODES_TC' => 'OLI_LU_EMPSTATTYPECODES_TC',
                                    'OLI_LU_ENCODETYPE' => 'OLI_LU_ENCODETYPE',
                                    'OLI_LU_ENCODETYPE_TC' => 'OLI_LU_ENCODETYPE_TC',
                                    'OLI_LU_ENDDATEBASIS' => 'OLI_LU_ENDDATEBASIS',
                                    'OLI_LU_ENDDATEBASIS_TC' => 'OLI_LU_ENDDATEBASIS_TC',
                                    'OLI_LU_ENDORSEMENT' => 'OLI_LU_ENDORSEMENT',
                                    'OLI_LU_ENDORSEMENT_TC' => 'OLI_LU_ENDORSEMENT_TC',
                                    'OLI_LU_ESTTYPE' => 'OLI_LU_ESTTYPE',
                                    'OLI_LU_ESTTYPE_TC' => 'OLI_LU_ESTTYPE_TC',
                                    'OLI_LU_ETHNIC' => 'OLI_LU_ETHNIC',
                                    'OLI_LU_ETHNIC_TC' => 'OLI_LU_ETHNIC_TC',
                                    'OLI_LU_EVENTTIMING' => 'OLI_LU_EVENTTIMING',
                                    'OLI_LU_EVENTTIMING_TC' => 'OLI_LU_EVENTTIMING_TC',
                                    'OLI_LU_EVENTTYPE' => 'OLI_LU_EVENTTYPE',
                                    'OLI_LU_EVENTTYPE_TC' => 'OLI_LU_EVENTTYPE_TC',
                                    'OLI_LU_EXAMMETHOD' => 'OLI_LU_EXAMMETHOD',
                                    'OLI_LU_EXAMMETHOD_TC' => 'OLI_LU_EXAMMETHOD_TC',
                                    'OLI_LU_EXAMSTATUSTYPE' => 'OLI_LU_EXAMSTATUSTYPE',
                                    'OLI_LU_EXAMSTATUSTYPE_TC' => 'OLI_LU_EXAMSTATUSTYPE_TC',
                                    'OLI_LU_EXCHGREASON' => 'OLI_LU_EXCHGREASON',
                                    'OLI_LU_EXCHGREASON_TC' => 'OLI_LU_EXCHGREASON_TC',
                                    'OLI_LU_EXTCALL' => 'OLI_LU_EXTCALL',
                                    'OLI_LU_EXTCALL_TC' => 'OLI_LU_EXTCALL_TC',
                                    'OLI_LU_EYECOLOR' => 'OLI_LU_EYECOLOR',
                                    'OLI_LU_EYECOLOR_TC' => 'OLI_LU_EYECOLOR_TC',
                                    'OLI_LU_FEEQUAL' => 'OLI_LU_FEEQUAL',
                                    'OLI_LU_FEEQUAL_TC' => 'OLI_LU_FEEQUAL_TC',
                                    'OLI_LU_FEETYPE' => 'OLI_LU_FEETYPE',
                                    'OLI_LU_FEETYPE_TC' => 'OLI_LU_FEETYPE_TC',
                                    'OLI_LU_FEEWAIVERTYPE' => 'OLI_LU_FEEWAIVERTYPE',
                                    'OLI_LU_FEEWAIVERTYPE_TC' => 'OLI_LU_FEEWAIVERTYPE_TC',
                                    'OLI_LU_FINACTSTATUS' => 'OLI_LU_FINACTSTATUS',
                                    'OLI_LU_FINACTSTATUS_TC' => 'OLI_LU_FINACTSTATUS_TC',
                                    'OLI_LU_FINACTSUBTYPE' => 'OLI_LU_FINACTSUBTYPE',
                                    'OLI_LU_FINACTSUBTYPE_TC' => 'OLI_LU_FINACTSUBTYPE_TC',
                                    'OLI_LU_FINACTTYPE' => 'OLI_LU_FINACTTYPE',
                                    'OLI_LU_FINACTTYPE_TC' => 'OLI_LU_FINACTTYPE_TC',
                                    'OLI_LU_FINBENETYPE' => 'OLI_LU_FINBENETYPE',
                                    'OLI_LU_FINBENETYPE_TC' => 'OLI_LU_FINBENETYPE_TC',
                                    'OLI_LU_FLATEXTRAPREMBASISCODE' => 'OLI_LU_FLATEXTRAPREMBASISCODE',
                                    'OLI_LU_FLATEXTRAPREMBASISCODE_TC' => 'OLI_LU_FLATEXTRAPREMBASISCODE_TC',
                                    'OLI_LU_FLYINGPURPOSE' => 'OLI_LU_FLYINGPURPOSE',
                                    'OLI_LU_FLYINGPURPOSE_TC' => 'OLI_LU_FLYINGPURPOSE_TC',
                                    'OLI_LU_FORMINSTDESTTYPE' => 'OLI_LU_FORMINSTDESTTYPE',
                                    'OLI_LU_FORMINSTDESTTYPE_TC' => 'OLI_LU_FORMINSTDESTTYPE_TC',
                                    'OLI_LU_FORMINSTSTATUS' => 'OLI_LU_FORMINSTSTATUS',
                                    'OLI_LU_FORMINSTSTATUS_TC' => 'OLI_LU_FORMINSTSTATUS_TC',
                                    'OLI_LU_FORMINSTUPDTMODE' => 'OLI_LU_FORMINSTUPDTMODE',
                                    'OLI_LU_FORMINSTUPDTMODE_TC' => 'OLI_LU_FORMINSTUPDTMODE_TC',
                                    'OLI_LU_FREQ' => 'OLI_LU_FREQ',
                                    'OLI_LU_FREQ_TC' => 'OLI_LU_FREQ_TC',
                                    'OLI_LU_FUNDRESTRICT' => 'OLI_LU_FUNDRESTRICT',
                                    'OLI_LU_FUNDRESTRICT_TC' => 'OLI_LU_FUNDRESTRICT_TC',
                                    'OLI_LU_GAAPCALCBASIS' => 'OLI_LU_GAAPCALCBASIS',
                                    'OLI_LU_GAAPCALCBASIS_TC' => 'OLI_LU_GAAPCALCBASIS_TC',
                                    'OLI_LU_GDLNFAILINST' => 'OLI_LU_GDLNFAILINST',
                                    'OLI_LU_GDLNFAILINST_TC' => 'OLI_LU_GDLNFAILINST_TC',
                                    'OLI_LU_GENDER' => 'OLI_LU_GENDER',
                                    'OLI_LU_GENDER_TC' => 'OLI_LU_GENDER_TC',
                                    'OLI_LU_GEOREGION' => 'OLI_LU_GEOREGION',
                                    'OLI_LU_GEOREGION_TC' => 'OLI_LU_GEOREGION_TC',
                                    'OLI_LU_GOVISSMED' => 'OLI_LU_GOVISSMED',
                                    'OLI_LU_GOVISSMED_TC' => 'OLI_LU_GOVISSMED_TC',
                                    'OLI_LU_GOVSOCINSPART' => 'OLI_LU_GOVSOCINSPART',
                                    'OLI_LU_GOVSOCINSPART_TC' => 'OLI_LU_GOVSOCINSPART_TC',
                                    'OLI_LU_GOVTIDSTAT' => 'OLI_LU_GOVTIDSTAT',
                                    'OLI_LU_GOVTIDSTAT_TC' => 'OLI_LU_GOVTIDSTAT_TC',
                                    'OLI_LU_GOVTIDTC' => 'OLI_LU_GOVTIDTC',
                                    'OLI_LU_GOVTIDTC_TC' => 'OLI_LU_GOVTIDTC_TC',
                                    'OLI_LU_GPENTRY' => 'OLI_LU_GPENTRY',
                                    'OLI_LU_GPENTRY_TC' => 'OLI_LU_GPENTRY_TC',
                                    'OLI_LU_GRPSUBTYPE' => 'OLI_LU_GRPSUBTYPE',
                                    'OLI_LU_GRPSUBTYPE_TC' => 'OLI_LU_GRPSUBTYPE_TC',
                                    'OLI_LU_GRPTYPE' => 'OLI_LU_GRPTYPE',
                                    'OLI_LU_GRPTYPE_TC' => 'OLI_LU_GRPTYPE_TC',
                                    'OLI_LU_GTDPURCHOPT' => 'OLI_LU_GTDPURCHOPT',
                                    'OLI_LU_GTDPURCHOPT_TC' => 'OLI_LU_GTDPURCHOPT_TC',
                                    'OLI_LU_HAIRCOLOR' => 'OLI_LU_HAIRCOLOR',
                                    'OLI_LU_HAIRCOLOR_TC' => 'OLI_LU_HAIRCOLOR_TC',
                                    'OLI_LU_HASHTYPE' => 'OLI_LU_HASHTYPE',
                                    'OLI_LU_HASHTYPE_TC' => 'OLI_LU_HASHTYPE_TC',
                                    'OLI_LU_HEALTHSERVICE' => 'OLI_LU_HEALTHSERVICE',
                                    'OLI_LU_HEALTHSERVICE_TC' => 'OLI_LU_HEALTHSERVICE_TC',
                                    'OLI_LU_HOLDINGFORM' => 'OLI_LU_HOLDINGFORM',
                                    'OLI_LU_HOLDINGFORM_TC' => 'OLI_LU_HOLDINGFORM_TC',
                                    'OLI_LU_HOLDPURPOSE' => 'OLI_LU_HOLDPURPOSE',
                                    'OLI_LU_HOLDPURPOSE_TC' => 'OLI_LU_HOLDPURPOSE_TC',
                                    'OLI_LU_HOLDSTAT' => 'OLI_LU_HOLDSTAT',
                                    'OLI_LU_HOLDSTAT_TC' => 'OLI_LU_HOLDSTAT_TC',
                                    'OLI_LU_HOLDTYPE' => 'OLI_LU_HOLDTYPE',
                                    'OLI_LU_HOLDTYPE_TC' => 'OLI_LU_HOLDTYPE_TC',
                                    'OLI_LU_IDREFTYPE' => 'OLI_LU_IDREFTYPE',
                                    'OLI_LU_IDREFTYPE_TC' => 'OLI_LU_IDREFTYPE_TC',
                                    'OLI_LU_IDVERIFICATION' => 'OLI_LU_IDVERIFICATION',
                                    'OLI_LU_IDVERIFICATION_TC' => 'OLI_LU_IDVERIFICATION_TC',
                                    'OLI_LU_ILLUSREPORTTYPE' => 'OLI_LU_ILLUSREPORTTYPE',
                                    'OLI_LU_ILLUSREPORTTYPE_TC' => 'OLI_LU_ILLUSREPORTTYPE_TC',
                                    'OLI_LU_ILLUSTYPES' => 'OLI_LU_ILLUSTYPES',
                                    'OLI_LU_ILLUSTYPES_TC' => 'OLI_LU_ILLUSTYPES_TC',
                                    'OLI_LU_IMAGEFORM' => 'OLI_LU_IMAGEFORM',
                                    'OLI_LU_IMAGEFORM_TC' => 'OLI_LU_IMAGEFORM_TC',
                                    'OLI_LU_IMAGEFORMAT' => 'OLI_LU_IMAGEFORMAT',
                                    'OLI_LU_IMAGEFORMAT_TC' => 'OLI_LU_IMAGEFORMAT_TC',
                                    'OLI_LU_IMMSTAT' => 'OLI_LU_IMMSTAT',
                                    'OLI_LU_IMMSTAT_TC' => 'OLI_LU_IMMSTAT_TC',
                                    'OLI_LU_IMPAIRED_TYPE' => 'OLI_LU_IMPAIRED_TYPE',
                                    'OLI_LU_IMPAIRED_TYPE_TC' => 'OLI_LU_IMPAIRED_TYPE_TC',
                                    'OLI_LU_INCLUDEOPTION' => 'OLI_LU_INCLUDEOPTION',
                                    'OLI_LU_INCLUDEOPTION_TC' => 'OLI_LU_INCLUDEOPTION_TC',
                                    'OLI_LU_INCOPTION' => 'OLI_LU_INCOPTION',
                                    'OLI_LU_INCOPTION_TC' => 'OLI_LU_INCOPTION_TC',
                                    'OLI_LU_INCRDECR' => 'OLI_LU_INCRDECR',
                                    'OLI_LU_INCRDECR_TC' => 'OLI_LU_INCRDECR_TC',
                                    'OLI_LU_INFOOBTAINTYPE' => 'OLI_LU_INFOOBTAINTYPE',
                                    'OLI_LU_INFOOBTAINTYPE_TC' => 'OLI_LU_INFOOBTAINTYPE_TC',
                                    'OLI_LU_INFOSRC' => 'OLI_LU_INFOSRC',
                                    'OLI_LU_INFOSRC_TC' => 'OLI_LU_INFOSRC_TC',
                                    'OLI_LU_INFOSRVPROVIDER' => 'OLI_LU_INFOSRVPROVIDER',
                                    'OLI_LU_INFOSRVPROVIDER_TC' => 'OLI_LU_INFOSRVPROVIDER_TC',
                                    'OLI_LU_INHERITEDTIMING' => 'OLI_LU_INHERITEDTIMING',
                                    'OLI_LU_INHERITEDTIMING_TC' => 'OLI_LU_INHERITEDTIMING_TC',
                                    'OLI_LU_INPUTMODE' => 'OLI_LU_INPUTMODE',
                                    'OLI_LU_INPUTMODE_TC' => 'OLI_LU_INPUTMODE_TC',
                                    'OLI_LU_INTCALCTYPE' => 'OLI_LU_INTCALCTYPE',
                                    'OLI_LU_INTCALCTYPE_TC' => 'OLI_LU_INTCALCTYPE_TC',
                                    'OLI_LU_INTEGRATOR' => 'OLI_LU_INTEGRATOR',
                                    'OLI_LU_INTEGRATOR_TC' => 'OLI_LU_INTEGRATOR_TC',
                                    'OLI_LU_INTENDUSE' => 'OLI_LU_INTENDUSE',
                                    'OLI_LU_INTENDUSE_TC' => 'OLI_LU_INTENDUSE_TC',
                                    'OLI_LU_INTENTCATEGORY' => 'OLI_LU_INTENTCATEGORY',
                                    'OLI_LU_INTENTCATEGORY_TC' => 'OLI_LU_INTENTCATEGORY_TC',
                                    'OLI_LU_INTERESTUSE' => 'OLI_LU_INTERESTUSE',
                                    'OLI_LU_INTERESTUSE_TC' => 'OLI_LU_INTERESTUSE_TC',
                                    'OLI_LU_INTERVIEWTYPE' => 'OLI_LU_INTERVIEWTYPE',
                                    'OLI_LU_INTERVIEWTYPE_TC' => 'OLI_LU_INTERVIEWTYPE_TC',
                                    'OLI_LU_INVDETSTAT' => 'OLI_LU_INVDETSTAT',
                                    'OLI_LU_INVDETSTAT_TC' => 'OLI_LU_INVDETSTAT_TC',
                                    'OLI_LU_INVESTOBJ' => 'OLI_LU_INVESTOBJ',
                                    'OLI_LU_INVESTOBJ_TC' => 'OLI_LU_INVESTOBJ_TC',
                                    'OLI_LU_INVESTPROD' => 'OLI_LU_INVESTPROD',
                                    'OLI_LU_INVESTPROD_TC' => 'OLI_LU_INVESTPROD_TC',
                                    'OLI_LU_INVESTPRODSTAT' => 'OLI_LU_INVESTPRODSTAT',
                                    'OLI_LU_INVESTPRODSTAT_TC' => 'OLI_LU_INVESTPRODSTAT_TC',
                                    'OLI_LU_INVESTRATESUBTYPE' => 'OLI_LU_INVESTRATESUBTYPE',
                                    'OLI_LU_INVESTRATESUBTYPE_TC' => 'OLI_LU_INVESTRATESUBTYPE_TC',
                                    'OLI_LU_INVMGR' => 'OLI_LU_INVMGR',
                                    'OLI_LU_INVMGR_TC' => 'OLI_LU_INVMGR_TC',
                                    'OLI_LU_INVSTDIV' => 'OLI_LU_INVSTDIV',
                                    'OLI_LU_INVSTDIV_TC' => 'OLI_LU_INVSTDIV_TC',
                                    'OLI_LU_IRSPREMCALCTYPE' => 'OLI_LU_IRSPREMCALCTYPE',
                                    'OLI_LU_IRSPREMCALCTYPE_TC' => 'OLI_LU_IRSPREMCALCTYPE_TC',
                                    'OLI_LU_IRSTRIGGER' => 'OLI_LU_IRSTRIGGER',
                                    'OLI_LU_IRSTRIGGER_TC' => 'OLI_LU_IRSTRIGGER_TC',
                                    'OLI_LU_JOINTAGETYPE' => 'OLI_LU_JOINTAGETYPE',
                                    'OLI_LU_JOINTAGETYPE_TC' => 'OLI_LU_JOINTAGETYPE_TC',
                                    'OLI_LU_LABKITCODE' => 'OLI_LU_LABKITCODE',
                                    'OLI_LU_LABKITCODE_TC' => 'OLI_LU_LABKITCODE_TC',
                                    'OLI_LU_LANGPROF' => 'OLI_LU_LANGPROF',
                                    'OLI_LU_LANGPROF_TC' => 'OLI_LU_LANGPROF_TC',
                                    'OLI_LU_LEADTYPE' => 'OLI_LU_LEADTYPE',
                                    'OLI_LU_LEADTYPE_TC' => 'OLI_LU_LEADTYPE_TC',
                                    'OLI_LU_LEVELIZEDOPT' => 'OLI_LU_LEVELIZEDOPT',
                                    'OLI_LU_LEVELIZEDOPT_TC' => 'OLI_LU_LEVELIZEDOPT_TC',
                                    'OLI_LU_LICENPROV' => 'OLI_LU_LICENPROV',
                                    'OLI_LU_LICENPROV_TC' => 'OLI_LU_LICENPROV_TC',
                                    'OLI_LU_LICENSECLASSTYPE' => 'OLI_LU_LICENSECLASSTYPE',
                                    'OLI_LU_LICENSECLASSTYPE_TC' => 'OLI_LU_LICENSECLASSTYPE_TC',
                                    'OLI_LU_LICENSESTATUS' => 'OLI_LU_LICENSESTATUS',
                                    'OLI_LU_LICENSESTATUS_TC' => 'OLI_LU_LICENSESTATUS_TC',
                                    'OLI_LU_LICENSETYPE' => 'OLI_LU_LICENSETYPE',
                                    'OLI_LU_LICENSETYPE_TC' => 'OLI_LU_LICENSETYPE_TC',
                                    'OLI_LU_LIFEACTIVITYTYPE' => 'OLI_LU_LIFEACTIVITYTYPE',
                                    'OLI_LU_LIFEACTIVITYTYPE_TC' => 'OLI_LU_LIFEACTIVITYTYPE_TC',
                                    'OLI_LU_LIFESTYLEVIOLATIONS' => 'OLI_LU_LIFESTYLEVIOLATIONS',
                                    'OLI_LU_LIFESTYLEVIOLATIONS_TC' => 'OLI_LU_LIFESTYLEVIOLATIONS_TC',
                                    'OLI_LU_LIFETEST' => 'OLI_LU_LIFETEST',
                                    'OLI_LU_LIFETEST_TC' => 'OLI_LU_LIFETEST_TC',
                                    'OLI_LU_LIKECONSTRAINTTYPE' => 'OLI_LU_LIKECONSTRAINTTYPE',
                                    'OLI_LU_LIKECONSTRAINTTYPE_TC' => 'OLI_LU_LIKECONSTRAINTTYPE_TC',
                                    'OLI_LU_LINEBUS' => 'OLI_LU_LINEBUS',
                                    'OLI_LU_LINEBUS_TC' => 'OLI_LU_LINEBUS_TC',
                                    'OLI_LU_LIQUIDITYFEATURE' => 'OLI_LU_LIQUIDITYFEATURE',
                                    'OLI_LU_LIQUIDITYFEATURE_TC' => 'OLI_LU_LIQUIDITYFEATURE_TC',
                                    'OLI_LU_LIVESTYPE' => 'OLI_LU_LIVESTYPE',
                                    'OLI_LU_LIVESTYPE_TC' => 'OLI_LU_LIVESTYPE_TC',
                                    'OLI_LU_LIVINGSTATUS' => 'OLI_LU_LIVINGSTATUS',
                                    'OLI_LU_LIVINGSTATUS_TC' => 'OLI_LU_LIVINGSTATUS_TC',
                                    'OLI_LU_LNTYPE' => 'OLI_LU_LNTYPE',
                                    'OLI_LU_LNTYPE_TC' => 'OLI_LU_LNTYPE_TC',
                                    'OLI_LU_LOANSUMMARY' => 'OLI_LU_LOANSUMMARY',
                                    'OLI_LU_LOANSUMMARY_TC' => 'OLI_LU_LOANSUMMARY_TC',
                                    'OLI_LU_LOA_TYPE' => 'OLI_LU_LOA_TYPE',
                                    'OLI_LU_LOA_TYPE_TC' => 'OLI_LU_LOA_TYPE_TC',
                                    'OLI_LU_LOADINGTYPE' => 'OLI_LU_LOADINGTYPE',
                                    'OLI_LU_LOADINGTYPE_TC' => 'OLI_LU_LOADINGTYPE_TC',
                                    'OLI_LU_LOANADJCODE' => 'OLI_LU_LOANADJCODE',
                                    'OLI_LU_LOANADJCODE_TC' => 'OLI_LU_LOANADJCODE_TC',
                                    'OLI_LU_LOANDIREC' => 'OLI_LU_LOANDIREC',
                                    'OLI_LU_LOANDIREC_TC' => 'OLI_LU_LOANDIREC_TC',
                                    'OLI_LU_LOANMETHOD' => 'OLI_LU_LOANMETHOD',
                                    'OLI_LU_LOANMETHOD_TC' => 'OLI_LU_LOANMETHOD_TC',
                                    'OLI_LU_LOANREASON' => 'OLI_LU_LOANREASON',
                                    'OLI_LU_LOANREASON_TC' => 'OLI_LU_LOANREASON_TC',
                                    'OLI_LU_LOANRESTRICT' => 'OLI_LU_LOANRESTRICT',
                                    'OLI_LU_LOANRESTRICT_TC' => 'OLI_LU_LOANRESTRICT_TC',
                                    'OLI_LU_LOANSTAT' => 'OLI_LU_LOANSTAT',
                                    'OLI_LU_LOANSTAT_TC' => 'OLI_LU_LOANSTAT_TC',
                                    'OLI_LU_LOANTIMING' => 'OLI_LU_LOANTIMING',
                                    'OLI_LU_LOANTIMING_TC' => 'OLI_LU_LOANTIMING_TC',
                                    'OLI_LU_LOANTYPE' => 'OLI_LU_LOANTYPE',
                                    'OLI_LU_LOANTYPE_TC' => 'OLI_LU_LOANTYPE_TC',
                                    'OLI_LU_LOASTATREAS' => 'OLI_LU_LOASTATREAS',
                                    'OLI_LU_LOASTATREAS_TC' => 'OLI_LU_LOASTATREAS_TC',
                                    'OLI_LU_LOASTATUSTYPE' => 'OLI_LU_LOASTATUSTYPE',
                                    'OLI_LU_LOASTATUSTYPE_TC' => 'OLI_LU_LOASTATUSTYPE_TC',
                                    'OLI_LU_LOCRESTR' => 'OLI_LU_LOCRESTR',
                                    'OLI_LU_LOCRESTR_TC' => 'OLI_LU_LOCRESTR_TC',
                                    'OLI_LU_LOIROA' => 'OLI_LU_LOIROA',
                                    'OLI_LU_LOIROA_TC' => 'OLI_LU_LOIROA_TC',
                                    'OLI_LU_LOIROA_REFIDTYPE' => 'OLI_LU_LOIROA_REFIDTYPE',
                                    'OLI_LU_LOIROA_REFIDTYPE_TC' => 'OLI_LU_LOIROA_REFIDTYPE_TC',
                                    'OLI_LU_LOOKUP' => 'OLI_LU_LOOKUP',
                                    'OLI_LU_LOOKUP_TC' => 'OLI_LU_LOOKUP_TC',
                                    'OLI_LU_LTRINTENT' => 'OLI_LU_LTRINTENT',
                                    'OLI_LU_LTRINTENT_TC' => 'OLI_LU_LTRINTENT_TC',
                                    'OLI_LU_MANAGEDCARECAT' => 'OLI_LU_MANAGEDCARECAT',
                                    'OLI_LU_MANAGEDCARECAT_TC' => 'OLI_LU_MANAGEDCARECAT_TC',
                                    'OLI_LU_MANNERLOSS' => 'OLI_LU_MANNERLOSS',
                                    'OLI_LU_MANNERLOSS_TC' => 'OLI_LU_MANNERLOSS_TC',
                                    'OLI_LU_MARKETTYPE' => 'OLI_LU_MARKETTYPE',
                                    'OLI_LU_MARKETTYPE_TC' => 'OLI_LU_MARKETTYPE_TC',
                                    'OLI_LU_MARSTAT' => 'OLI_LU_MARSTAT',
                                    'OLI_LU_MARSTAT_TC' => 'OLI_LU_MARSTAT_TC',
                                    'OLI_LU_MATPAYTYPE' => 'OLI_LU_MATPAYTYPE',
                                    'OLI_LU_MATPAYTYPE_TC' => 'OLI_LU_MATPAYTYPE_TC',
                                    'OLI_LU_MAXIMUMAMOUNT' => 'OLI_LU_MAXIMUMAMOUNT',
                                    'OLI_LU_MAXIMUMAMOUNT_TC' => 'OLI_LU_MAXIMUMAMOUNT_TC',
                                    'OLI_LU_MEASUNITS' => 'OLI_LU_MEASUNITS',
                                    'OLI_LU_MEASUNITS_TC' => 'OLI_LU_MEASUNITS_TC',
                                    'OLI_LU_MEASUREUNITS' => 'OLI_LU_MEASUREUNITS',
                                    'OLI_LU_MEASUREUNITS_TC' => 'OLI_LU_MEASUREUNITS_TC',
                                    'OLI_LU_MECISSUETYPE' => 'OLI_LU_MECISSUETYPE',
                                    'OLI_LU_MECISSUETYPE_TC' => 'OLI_LU_MECISSUETYPE_TC',
                                    'OLI_LU_MECTYPE' => 'OLI_LU_MECTYPE',
                                    'OLI_LU_MECTYPE_TC' => 'OLI_LU_MECTYPE_TC',
                                    'OLI_LU_MEDCERTTYPE' => 'OLI_LU_MEDCERTTYPE',
                                    'OLI_LU_MEDCERTTYPE_TC' => 'OLI_LU_MEDCERTTYPE_TC',
                                    'OLI_LU_MEDCOND' => 'OLI_LU_MEDCOND',
                                    'OLI_LU_MEDCOND_TC' => 'OLI_LU_MEDCOND_TC',
                                    'OLI_LU_MEDEQUIP' => 'OLI_LU_MEDEQUIP',
                                    'OLI_LU_MEDEQUIP_TC' => 'OLI_LU_MEDEQUIP_TC',
                                    'OLI_LU_MEDEXAM' => 'OLI_LU_MEDEXAM',
                                    'OLI_LU_MEDEXAM_TC' => 'OLI_LU_MEDEXAM_TC',
                                    'OLI_LU_MEDEXTYPE' => 'OLI_LU_MEDEXTYPE',
                                    'OLI_LU_MEDEXTYPE_TC' => 'OLI_LU_MEDEXTYPE_TC',
                                    'OLI_LU_MEDUW' => 'OLI_LU_MEDUW',
                                    'OLI_LU_MEDUW_TC' => 'OLI_LU_MEDUW_TC',
                                    'OLI_LU_MIBREASON' => 'OLI_LU_MIBREASON',
                                    'OLI_LU_MIBREASON_TC' => 'OLI_LU_MIBREASON_TC',
                                    'OLI_LU_MILITARYORGTYPE' => 'OLI_LU_MILITARYORGTYPE',
                                    'OLI_LU_MILITARYORGTYPE_TC' => 'OLI_LU_MILITARYORGTYPE_TC',
                                    'OLI_LU_MILITARYRANK' => 'OLI_LU_MILITARYRANK',
                                    'OLI_LU_MILITARYRANK_TC' => 'OLI_LU_MILITARYRANK_TC',
                                    'OLI_LU_MILITARYSTAT' => 'OLI_LU_MILITARYSTAT',
                                    'OLI_LU_MILITARYSTAT_TC' => 'OLI_LU_MILITARYSTAT_TC',
                                    'OLI_LU_MILPAYGR' => 'OLI_LU_MILPAYGR',
                                    'OLI_LU_MILPAYGR_TC' => 'OLI_LU_MILPAYGR_TC',
                                    'OLI_LU_MIMETYPE' => 'OLI_LU_MIMETYPE',
                                    'OLI_LU_MIMETYPE_TC' => 'OLI_LU_MIMETYPE_TC',
                                    'OLI_LU_MINBALCALCTYPE' => 'OLI_LU_MINBALCALCTYPE',
                                    'OLI_LU_MINBALCALCTYPE_TC' => 'OLI_LU_MINBALCALCTYPE_TC',
                                    'OLI_LU_MISCGUIDELINE' => 'OLI_LU_MISCGUIDELINE',
                                    'OLI_LU_MISCGUIDELINE_TC' => 'OLI_LU_MISCGUIDELINE_TC',
                                    'OLI_LU_MONEY' => 'OLI_LU_MONEY',
                                    'OLI_LU_MONEY_TC' => 'OLI_LU_MONEY_TC',
                                    'OLI_LU_MONEYTRSFR' => 'OLI_LU_MONEYTRSFR',
                                    'OLI_LU_MONEYTRSFR_TC' => 'OLI_LU_MONEYTRSFR_TC',
                                    'OLI_LU_MORTALITYTBL' => 'OLI_LU_MORTALITYTBL',
                                    'OLI_LU_MORTALITYTBL_TC' => 'OLI_LU_MORTALITYTBL_TC',
                                    'OLI_LU_MSGSEVERITY' => 'OLI_LU_MSGSEVERITY',
                                    'OLI_LU_MSGSEVERITY_TC' => 'OLI_LU_MSGSEVERITY_TC',
                                    'OLI_LU_NAMETYPE' => 'OLI_LU_NAMETYPE',
                                    'OLI_LU_NAMETYPE_TC' => 'OLI_LU_NAMETYPE_TC',
                                    'OLI_LU_NATION' => 'OLI_LU_NATION',
                                    'OLI_LU_NATION_TC' => 'OLI_LU_NATION_TC',
                                    'OLI_LU_NATURECAT' => 'OLI_LU_NATURECAT',
                                    'OLI_LU_NATURECAT_TC' => 'OLI_LU_NATURECAT_TC',
                                    'OLI_LU_NATURESUBCAT' => 'OLI_LU_NATURESUBCAT',
                                    'OLI_LU_NATURESUBCAT_TC' => 'OLI_LU_NATURESUBCAT_TC',
                                    'OLI_LU_NEED' => 'OLI_LU_NEED',
                                    'OLI_LU_NEED_TC' => 'OLI_LU_NEED_TC',
                                    'OLI_LU_NEEDAMTBASIS' => 'OLI_LU_NEEDAMTBASIS',
                                    'OLI_LU_NEEDAMTBASIS_TC' => 'OLI_LU_NEEDAMTBASIS_TC',
                                    'OLI_LU_NEEDSRULE' => 'OLI_LU_NEEDSRULE',
                                    'OLI_LU_NEEDSRULE_TC' => 'OLI_LU_NEEDSRULE_TC',
                                    'OLI_LU_NEEDSRULEAMTQUAL' => 'OLI_LU_NEEDSRULEAMTQUAL',
                                    'OLI_LU_NEEDSRULEAMTQUAL_TC' => 'OLI_LU_NEEDSRULEAMTQUAL_TC',
                                    'OLI_LU_NEEDSRULECONTEXTAMT' => 'OLI_LU_NEEDSRULECONTEXTAMT',
                                    'OLI_LU_NEEDSRULECONTEXTAMT_TC' => 'OLI_LU_NEEDSRULECONTEXTAMT_TC',
                                    'OLI_LU_NEGCURRENCYFRMT' => 'OLI_LU_NEGCURRENCYFRMT',
                                    'OLI_LU_NEGCURRENCYFRMT_TC' => 'OLI_LU_NEGCURRENCYFRMT_TC',
                                    'OLI_LU_NFOLIMITTYPES' => 'OLI_LU_NFOLIMITTYPES',
                                    'OLI_LU_NFOLIMITTYPES_TC' => 'OLI_LU_NFOLIMITTYPES_TC',
                                    'OLI_LU_NFOMODEMETHODS' => 'OLI_LU_NFOMODEMETHODS',
                                    'OLI_LU_NFOMODEMETHODS_TC' => 'OLI_LU_NFOMODEMETHODS_TC',
                                    'OLI_LU_NGCHECK' => 'OLI_LU_NGCHECK',
                                    'OLI_LU_NGCHECK_TC' => 'OLI_LU_NGCHECK_TC',
                                    'OLI_LU_NONFORTPROV' => 'OLI_LU_NONFORTPROV',
                                    'OLI_LU_NONFORTPROV_TC' => 'OLI_LU_NONFORTPROV_TC',
                                    'OLI_LU_NOTICETYPE' => 'OLI_LU_NOTICETYPE',
                                    'OLI_LU_NOTICETYPE_TC' => 'OLI_LU_NOTICETYPE_TC',
                                    'OLI_LU_OBJECTTYPE' => 'OLI_LU_OBJECTTYPE',
                                    'OLI_LU_OBJECTTYPE_TC' => 'OLI_LU_OBJECTTYPE_TC',
                                    'OLI_LU_OCCUPCLASS' => 'OLI_LU_OCCUPCLASS',
                                    'OLI_LU_OCCUPCLASS_TC' => 'OLI_LU_OCCUPCLASS_TC',
                                    'OLI_LU_OCCUPRATING' => 'OLI_LU_OCCUPRATING',
                                    'OLI_LU_OCCUPRATING_TC' => 'OLI_LU_OCCUPRATING_TC',
                                    'OLI_LU_OFFSETMETHOD' => 'OLI_LU_OFFSETMETHOD',
                                    'OLI_LU_OFFSETMETHOD_TC' => 'OLI_LU_OFFSETMETHOD_TC',
                                    'OLI_LU_OPERATION' => 'OLI_LU_OPERATION',
                                    'OLI_LU_OPERATION_TC' => 'OLI_LU_OPERATION_TC',
                                    'OLI_LU_OPTTYPE' => 'OLI_LU_OPTTYPE',
                                    'OLI_LU_OPTTYPE_TC' => 'OLI_LU_OPTTYPE_TC',
                                    'OLI_LU_ORGFORM' => 'OLI_LU_ORGFORM',
                                    'OLI_LU_ORGFORM_TC' => 'OLI_LU_ORGFORM_TC',
                                    'OLI_LU_ORGFUNCT' => 'OLI_LU_ORGFUNCT',
                                    'OLI_LU_ORGFUNCT_TC' => 'OLI_LU_ORGFUNCT_TC',
                                    'OLI_LU_ORIGSOURCE' => 'OLI_LU_ORIGSOURCE',
                                    'OLI_LU_ORIGSOURCE_TC' => 'OLI_LU_ORIGSOURCE_TC',
                                    'OLI_LU_OWNERSHIPOFFUNDS' => 'OLI_LU_OWNERSHIPOFFUNDS',
                                    'OLI_LU_OWNERSHIPOFFUNDS_TC' => 'OLI_LU_OWNERSHIPOFFUNDS_TC',
                                    'OLI_LU_PARTFREQ' => 'OLI_LU_PARTFREQ',
                                    'OLI_LU_PARTFREQ_TC' => 'OLI_LU_PARTFREQ_TC',
                                    'OLI_LU_PARTIALID' => 'OLI_LU_PARTIALID',
                                    'OLI_LU_PARTIALID_TC' => 'OLI_LU_PARTIALID_TC',
                                    'OLI_LU_PARTICROLE' => 'OLI_LU_PARTICROLE',
                                    'OLI_LU_PARTICROLE_TC' => 'OLI_LU_PARTICROLE_TC',
                                    'OLI_LU_PARTY' => 'OLI_LU_PARTY',
                                    'OLI_LU_PARTY_TC' => 'OLI_LU_PARTY_TC',
                                    'OLI_LU_PARTYPE' => 'OLI_LU_PARTYPE',
                                    'OLI_LU_PARTYPE_TC' => 'OLI_LU_PARTYPE_TC',
                                    'OLI_LU_PARTYSELECT' => 'OLI_LU_PARTYSELECT',
                                    'OLI_LU_PARTYSELECT_TC' => 'OLI_LU_PARTYSELECT_TC',
                                    'OLI_LU_PASS' => 'OLI_LU_PASS',
                                    'OLI_LU_PASS_TC' => 'OLI_LU_PASS_TC',
                                    'OLI_LU_PAYDELMETHOD' => 'OLI_LU_PAYDELMETHOD',
                                    'OLI_LU_PAYDELMETHOD_TC' => 'OLI_LU_PAYDELMETHOD_TC',
                                    'OLI_LU_PAYMENTBASISREASON' => 'OLI_LU_PAYMENTBASISREASON',
                                    'OLI_LU_PAYMENTBASISREASON_TC' => 'OLI_LU_PAYMENTBASISREASON_TC',
                                    'OLI_LU_PAYMENTFORM' => 'OLI_LU_PAYMENTFORM',
                                    'OLI_LU_PAYMENTFORM_TC' => 'OLI_LU_PAYMENTFORM_TC',
                                    'OLI_LU_PAYMENTSTATUS' => 'OLI_LU_PAYMENTSTATUS',
                                    'OLI_LU_PAYMENTSTATUS_TC' => 'OLI_LU_PAYMENTSTATUS_TC',
                                    'OLI_LU_PAYMENTSTRUCTTYPE' => 'OLI_LU_PAYMENTSTRUCTTYPE',
                                    'OLI_LU_PAYMENTSTRUCTTYPE_TC' => 'OLI_LU_PAYMENTSTRUCTTYPE_TC',
                                    'OLI_LU_PAYMETHOD' => 'OLI_LU_PAYMETHOD',
                                    'OLI_LU_PAYMETHOD_TC' => 'OLI_LU_PAYMETHOD_TC',
                                    'OLI_LU_PAYMODE' => 'OLI_LU_PAYMODE',
                                    'OLI_LU_PAYMODE_TC' => 'OLI_LU_PAYMODE_TC',
                                    'OLI_LU_PAYOFFCOND' => 'OLI_LU_PAYOFFCOND',
                                    'OLI_LU_PAYOFFCOND_TC' => 'OLI_LU_PAYOFFCOND_TC',
                                    'OLI_LU_PAYRATECAT' => 'OLI_LU_PAYRATECAT',
                                    'OLI_LU_PAYRATECAT_TC' => 'OLI_LU_PAYRATECAT_TC',
                                    'OLI_LU_PAYTYPES' => 'OLI_LU_PAYTYPES',
                                    'OLI_LU_PAYTYPES_TC' => 'OLI_LU_PAYTYPES_TC',
                                    'OLI_LU_PERILTYPE' => 'OLI_LU_PERILTYPE',
                                    'OLI_LU_PERILTYPE_TC' => 'OLI_LU_PERILTYPE_TC',
                                    'OLI_LU_PERIODMODE' => 'OLI_LU_PERIODMODE',
                                    'OLI_LU_PERIODMODE_TC' => 'OLI_LU_PERIODMODE_TC',
                                    'OLI_LU_PERSIST' => 'OLI_LU_PERSIST',
                                    'OLI_LU_PERSIST_TC' => 'OLI_LU_PERSIST_TC',
                                    'OLI_LU_PHONETYPE' => 'OLI_LU_PHONETYPE',
                                    'OLI_LU_PHONETYPE_TC' => 'OLI_LU_PHONETYPE_TC',
                                    'OLI_LU_PHYSICIANSPECIALTY' => 'OLI_LU_PHYSICIANSPECIALTY',
                                    'OLI_LU_PHYSICIANSPECIALTY_TC' => 'OLI_LU_PHYSICIANSPECIALTY_TC',
                                    'OLI_LU_POLDELMETHOD' => 'OLI_LU_POLDELMETHOD',
                                    'OLI_LU_POLDELMETHOD_TC' => 'OLI_LU_POLDELMETHOD_TC',
                                    'OLI_LU_POLICYCHARGE' => 'OLI_LU_POLICYCHARGE',
                                    'OLI_LU_POLICYCHARGE_TC' => 'OLI_LU_POLICYCHARGE_TC',
                                    'OLI_LU_POLICYREPLPHYSTAT' => 'OLI_LU_POLICYREPLPHYSTAT',
                                    'OLI_LU_POLICYREPLPHYSTAT_TC' => 'OLI_LU_POLICYREPLPHYSTAT_TC',
                                    'OLI_LU_POLICYVALUES' => 'OLI_LU_POLICYVALUES',
                                    'OLI_LU_POLICYVALUES_TC' => 'OLI_LU_POLICYVALUES_TC',
                                    'OLI_LU_POLISSUE' => 'OLI_LU_POLISSUE',
                                    'OLI_LU_POLISSUE_TC' => 'OLI_LU_POLISSUE_TC',
                                    'OLI_LU_POLISSUESUB' => 'OLI_LU_POLISSUESUB',
                                    'OLI_LU_POLISSUESUB_TC' => 'OLI_LU_POLISSUESUB_TC',
                                    'OLI_LU_POLPROD' => 'OLI_LU_POLPROD',
                                    'OLI_LU_POLPROD_TC' => 'OLI_LU_POLPROD_TC',
                                    'OLI_LU_POLSTAT' => 'OLI_LU_POLSTAT',
                                    'OLI_LU_POLSTAT_TC' => 'OLI_LU_POLSTAT_TC',
                                    'OLI_LU_POSCURRENCYFRMT' => 'OLI_LU_POSCURRENCYFRMT',
                                    'OLI_LU_POSCURRENCYFRMT_TC' => 'OLI_LU_POSCURRENCYFRMT_TC',
                                    'OLI_LU_POSTINGMETHOD' => 'OLI_LU_POSTINGMETHOD',
                                    'OLI_LU_POSTINGMETHOD_TC' => 'OLI_LU_POSTINGMETHOD_TC',
                                    'OLI_LU_PRECEDENCE' => 'OLI_LU_PRECEDENCE',
                                    'OLI_LU_PRECEDENCE_TC' => 'OLI_LU_PRECEDENCE_TC',
                                    'OLI_LU_PREFCOMM' => 'OLI_LU_PREFCOMM',
                                    'OLI_LU_PREFCOMM_TC' => 'OLI_LU_PREFCOMM_TC',
                                    'OLI_LU_PREMIUMRATETYPE' => 'OLI_LU_PREMIUMRATETYPE',
                                    'OLI_LU_PREMIUMRATETYPE_TC' => 'OLI_LU_PREMIUMRATETYPE_TC',
                                    'OLI_LU_PREMOFFSTAT' => 'OLI_LU_PREMOFFSTAT',
                                    'OLI_LU_PREMOFFSTAT_TC' => 'OLI_LU_PREMOFFSTAT_TC',
                                    'OLI_LU_PREMSCHED' => 'OLI_LU_PREMSCHED',
                                    'OLI_LU_PREMSCHED_TC' => 'OLI_LU_PREMSCHED_TC',
                                    'OLI_LU_PREMSOURCE' => 'OLI_LU_PREMSOURCE',
                                    'OLI_LU_PREMSOURCE_TC' => 'OLI_LU_PREMSOURCE_TC',
                                    'OLI_LU_PREMSUSPENSE' => 'OLI_LU_PREMSUSPENSE',
                                    'OLI_LU_PREMSUSPENSE_TC' => 'OLI_LU_PREMSUSPENSE_TC',
                                    'OLI_LU_PREMWHELD' => 'OLI_LU_PREMWHELD',
                                    'OLI_LU_PREMWHELD_TC' => 'OLI_LU_PREMWHELD_TC',
                                    'OLI_LU_PRESCDATASTAT' => 'OLI_LU_PRESCDATASTAT',
                                    'OLI_LU_PRESCDATASTAT_TC' => 'OLI_LU_PRESCDATASTAT_TC',
                                    'OLI_LU_PRESCDOSEFORM' => 'OLI_LU_PRESCDOSEFORM',
                                    'OLI_LU_PRESCDOSEFORM_TC' => 'OLI_LU_PRESCDOSEFORM_TC',
                                    'OLI_LU_PRESCDOSUNIT' => 'OLI_LU_PRESCDOSUNIT',
                                    'OLI_LU_PRESCDOSUNIT_TC' => 'OLI_LU_PRESCDOSUNIT_TC',
                                    'OLI_LU_PRIORITY' => 'OLI_LU_PRIORITY',
                                    'OLI_LU_PRIORITY_TC' => 'OLI_LU_PRIORITY_TC',
                                    'OLI_LU_PROAGRESTAT' => 'OLI_LU_PROAGRESTAT',
                                    'OLI_LU_PROAGRESTAT_TC' => 'OLI_LU_PROAGRESTAT_TC',
                                    'OLI_LU_PROCEEDINGOUTCOME' => 'OLI_LU_PROCEEDINGOUTCOME',
                                    'OLI_LU_PROCEEDINGOUTCOME_TC' => 'OLI_LU_PROCEEDINGOUTCOME_TC',
                                    'OLI_LU_PROCESSINGINSTRUCTION' => 'OLI_LU_PROCESSINGINSTRUCTION',
                                    'OLI_LU_PROCESSINGINSTRUCTION_TC' => 'OLI_LU_PROCESSINGINSTRUCTION_TC',
                                    'OLI_LU_PROCESSTYPES' => 'OLI_LU_PROCESSTYPES',
                                    'OLI_LU_PROCESSTYPES_TC' => 'OLI_LU_PROCESSTYPES_TC',
                                    'OLI_LU_PROCTYPE' => 'OLI_LU_PROCTYPE',
                                    'OLI_LU_PROCTYPE_TC' => 'OLI_LU_PROCTYPE_TC',
                                    'OLI_LU_PRODUCERIDSOURCE' => 'OLI_LU_PRODUCERIDSOURCE',
                                    'OLI_LU_PRODUCERIDSOURCE_TC' => 'OLI_LU_PRODUCERIDSOURCE_TC',
                                    'OLI_LU_PROFITOBJECTIVE' => 'OLI_LU_PROFITOBJECTIVE',
                                    'OLI_LU_PROFITOBJECTIVE_TC' => 'OLI_LU_PROFITOBJECTIVE_TC',
                                    'OLI_LU_PROSTAT' => 'OLI_LU_PROSTAT',
                                    'OLI_LU_PROSTAT_TC' => 'OLI_LU_PROSTAT_TC',
                                    'OLI_LU_PROSTATEVENT' => 'OLI_LU_PROSTATEVENT',
                                    'OLI_LU_PROSTATEVENT_TC' => 'OLI_LU_PROSTATEVENT_TC',
                                    'OLI_LU_PROSTATREAS' => 'OLI_LU_PROSTATREAS',
                                    'OLI_LU_PROSTATREAS_TC' => 'OLI_LU_PROSTATREAS_TC',
                                    'OLI_LU_PROTYPE' => 'OLI_LU_PROTYPE',
                                    'OLI_LU_PROTYPE_TC' => 'OLI_LU_PROTYPE_TC',
                                    'OLI_LU_PROVIDERCLASS' => 'OLI_LU_PROVIDERCLASS',
                                    'OLI_LU_PROVIDERCLASS_TC' => 'OLI_LU_PROVIDERCLASS_TC',
                                    'OLI_LU_PROVIDERTYPE' => 'OLI_LU_PROVIDERTYPE',
                                    'OLI_LU_PROVIDERTYPE_TC' => 'OLI_LU_PROVIDERTYPE_TC',
                                    'OLI_LU_PUTCALL' => 'OLI_LU_PUTCALL',
                                    'OLI_LU_PUTCALL_TC' => 'OLI_LU_PUTCALL_TC',
                                    'OLI_LU_PUTPROVISION' => 'OLI_LU_PUTPROVISION',
                                    'OLI_LU_PUTPROVISION_TC' => 'OLI_LU_PUTPROVISION_TC',
                                    'OLI_LU_QUALIFIED' => 'OLI_LU_QUALIFIED',
                                    'OLI_LU_QUALIFIED_TC' => 'OLI_LU_QUALIFIED_TC',
                                    'OLI_LU_QUALLEVEL' => 'OLI_LU_QUALLEVEL',
                                    'OLI_LU_QUALLEVEL_TC' => 'OLI_LU_QUALLEVEL_TC',
                                    'OLI_LU_QUALOFFOR3WAY' => 'OLI_LU_QUALOFFOR3WAY',
                                    'OLI_LU_QUALOFFOR3WAY_TC' => 'OLI_LU_QUALOFFOR3WAY_TC',
                                    'OLI_LU_QUALPLAN' => 'OLI_LU_QUALPLAN',
                                    'OLI_LU_QUALPLAN_TC' => 'OLI_LU_QUALPLAN_TC',
                                    'OLI_LU_QUALPLANSUBTYPE' => 'OLI_LU_QUALPLANSUBTYPE',
                                    'OLI_LU_QUALPLANSUBTYPE_TC' => 'OLI_LU_QUALPLANSUBTYPE_TC',
                                    'OLI_LU_QUALVALUE' => 'OLI_LU_QUALVALUE',
                                    'OLI_LU_QUALVALUE_TC' => 'OLI_LU_QUALVALUE_TC',
                                    'OLI_LU_QUESTTYPE' => 'OLI_LU_QUESTTYPE',
                                    'OLI_LU_QUESTTYPE_TC' => 'OLI_LU_QUESTTYPE_TC',
                                    'OLI_LU_RACETRACKTYPE' => 'OLI_LU_RACETRACKTYPE',
                                    'OLI_LU_RACETRACKTYPE_TC' => 'OLI_LU_RACETRACKTYPE_TC',
                                    'OLI_LU_RANGERATETYPE' => 'OLI_LU_RANGERATETYPE',
                                    'OLI_LU_RANGERATETYPE_TC' => 'OLI_LU_RANGERATETYPE_TC',
                                    'OLI_LU_RATCOMMRUL' => 'OLI_LU_RATCOMMRUL',
                                    'OLI_LU_RATCOMMRUL_TC' => 'OLI_LU_RATCOMMRUL_TC',
                                    'OLI_LU_RATEBASEDON' => 'OLI_LU_RATEBASEDON',
                                    'OLI_LU_RATEBASEDON_TC' => 'OLI_LU_RATEBASEDON_TC',
                                    'OLI_LU_RATEMETH' => 'OLI_LU_RATEMETH',
                                    'OLI_LU_RATEMETH_TC' => 'OLI_LU_RATEMETH_TC',
                                    'OLI_LU_RATETYPE' => 'OLI_LU_RATETYPE',
                                    'OLI_LU_RATETYPE_TC' => 'OLI_LU_RATETYPE_TC',
                                    'OLI_LU_RATINGS' => 'OLI_LU_RATINGS',
                                    'OLI_LU_RATINGS_TC' => 'OLI_LU_RATINGS_TC',
                                    'OLI_LU_RATINGSRC' => 'OLI_LU_RATINGSRC',
                                    'OLI_LU_RATINGSRC_TC' => 'OLI_LU_RATINGSRC_TC',
                                    'OLI_LU_RATINGTYPE' => 'OLI_LU_RATINGTYPE',
                                    'OLI_LU_RATINGTYPE_TC' => 'OLI_LU_RATINGTYPE_TC',
                                    'OLI_LU_REASFORLEAVING' => 'OLI_LU_REASFORLEAVING',
                                    'OLI_LU_REASFORLEAVING_TC' => 'OLI_LU_REASFORLEAVING_TC',
                                    'OLI_LU_REASONSRCE' => 'OLI_LU_REASONSRCE',
                                    'OLI_LU_REASONSRCE_TC' => 'OLI_LU_REASONSRCE_TC',
                                    'OLI_LU_RECAPELIG' => 'OLI_LU_RECAPELIG',
                                    'OLI_LU_RECAPELIG_TC' => 'OLI_LU_RECAPELIG_TC',
                                    'OLI_LU_RECONCILDTL' => 'OLI_LU_RECONCILDTL',
                                    'OLI_LU_RECONCILDTL_TC' => 'OLI_LU_RECONCILDTL_TC',
                                    'OLI_LU_RECONSUMMTYPE' => 'OLI_LU_RECONSUMMTYPE',
                                    'OLI_LU_RECONSUMMTYPE_TC' => 'OLI_LU_RECONSUMMTYPE_TC',
                                    'OLI_LU_REDEMPTION' => 'OLI_LU_REDEMPTION',
                                    'OLI_LU_REDEMPTION_TC' => 'OLI_LU_REDEMPTION_TC',
                                    'OLI_LU_REGINFDISTAGSTAT' => 'OLI_LU_REGINFDISTAGSTAT',
                                    'OLI_LU_REGINFDISTAGSTAT_TC' => 'OLI_LU_REGINFDISTAGSTAT_TC',
                                    'OLI_LU_REGINFDISTAGTYPE' => 'OLI_LU_REGINFDISTAGTYPE',
                                    'OLI_LU_REGINFDISTAGTYPE_TC' => 'OLI_LU_REGINFDISTAGTYPE_TC',
                                    'OLI_LU_REGINFDISTRIBUTOR' => 'OLI_LU_REGINFDISTRIBUTOR',
                                    'OLI_LU_REGINFDISTRIBUTOR_TC' => 'OLI_LU_REGINFDISTRIBUTOR_TC',
                                    'OLI_LU_REGISTRATION' => 'OLI_LU_REGISTRATION',
                                    'OLI_LU_REGISTRATION_TC' => 'OLI_LU_REGISTRATION_TC',
                                    'OLI_LU_REGISTRATION_EXAMTYPE' => 'OLI_LU_REGISTRATION_EXAMTYPE',
                                    'OLI_LU_REGISTRATION_EXAMTYPE_TC' => 'OLI_LU_REGISTRATION_EXAMTYPE_TC',
                                    'OLI_LU_REGISTRATIONENTITY' => 'OLI_LU_REGISTRATIONENTITY',
                                    'OLI_LU_REGISTRATIONENTITY_TC' => 'OLI_LU_REGISTRATIONENTITY_TC',
                                    'OLI_LU_REGISTRATIONTYPE' => 'OLI_LU_REGISTRATIONTYPE',
                                    'OLI_LU_REGISTRATIONTYPE_TC' => 'OLI_LU_REGISTRATIONTYPE_TC',
                                    'OLI_LU_REGTYPE' => 'OLI_LU_REGTYPE',
                                    'OLI_LU_REGTYPE_TC' => 'OLI_LU_REGTYPE_TC',
                                    'OLI_LU_REINRISKBASE' => 'OLI_LU_REINRISKBASE',
                                    'OLI_LU_REINRISKBASE_TC' => 'OLI_LU_REINRISKBASE_TC',
                                    'OLI_LU_REINSISSUECAT' => 'OLI_LU_REINSISSUECAT',
                                    'OLI_LU_REINSISSUECAT_TC' => 'OLI_LU_REINSISSUECAT_TC',
                                    'OLI_LU_REINSPREMTAXREIMCD' => 'OLI_LU_REINSPREMTAXREIMCD',
                                    'OLI_LU_REINSPREMTAXREIMCD_TC' => 'OLI_LU_REINSPREMTAXREIMCD_TC',
                                    'OLI_LU_REINSPUR' => 'OLI_LU_REINSPUR',
                                    'OLI_LU_REINSPUR_TC' => 'OLI_LU_REINSPUR_TC',
                                    'OLI_LU_REINSSOURCE' => 'OLI_LU_REINSSOURCE',
                                    'OLI_LU_REINSSOURCE_TC' => 'OLI_LU_REINSSOURCE_TC',
                                    'OLI_LU_REINSTATEBASEDON' => 'OLI_LU_REINSTATEBASEDON',
                                    'OLI_LU_REINSTATEBASEDON_TC' => 'OLI_LU_REINSTATEBASEDON_TC',
                                    'OLI_LU_REINSTATEEFF' => 'OLI_LU_REINSTATEEFF',
                                    'OLI_LU_REINSTATEEFF_TC' => 'OLI_LU_REINSTATEEFF_TC',
                                    'OLI_LU_REINSTATEPMNT' => 'OLI_LU_REINSTATEPMNT',
                                    'OLI_LU_REINSTATEPMNT_TC' => 'OLI_LU_REINSTATEPMNT_TC',
                                    'OLI_LU_REINSTATEPREMCALC' => 'OLI_LU_REINSTATEPREMCALC',
                                    'OLI_LU_REINSTATEPREMCALC_TC' => 'OLI_LU_REINSTATEPREMCALC_TC',
                                    'OLI_LU_REINSURE_SUBMITTYPES' => 'OLI_LU_REINSURE_SUBMITTYPES',
                                    'OLI_LU_REINSURE_SUBMITTYPES_TC' => 'OLI_LU_REINSURE_SUBMITTYPES_TC',
                                    'OLI_LU_REJECTIONTYPE' => 'OLI_LU_REJECTIONTYPE',
                                    'OLI_LU_REJECTIONTYPE_TC' => 'OLI_LU_REJECTIONTYPE_TC',
                                    'OLI_LU_REL' => 'OLI_LU_REL',
                                    'OLI_LU_REL_TC' => 'OLI_LU_REL_TC',
                                    'OLI_LU_RELATIVESIDE' => 'OLI_LU_RELATIVESIDE',
                                    'OLI_LU_RELATIVESIDE_TC' => 'OLI_LU_RELATIVESIDE_TC',
                                    'OLI_LU_RELDESC' => 'OLI_LU_RELDESC',
                                    'OLI_LU_RELDESC_TC' => 'OLI_LU_RELDESC_TC',
                                    'OLI_LU_RENEWPROV' => 'OLI_LU_RENEWPROV',
                                    'OLI_LU_RENEWPROV_TC' => 'OLI_LU_RENEWPROV_TC',
                                    'OLI_LU_REPLACETYPE' => 'OLI_LU_REPLACETYPE',
                                    'OLI_LU_REPLACETYPE_TC' => 'OLI_LU_REPLACETYPE_TC',
                                    'OLI_LU_REPLYTYPE' => 'OLI_LU_REPLYTYPE',
                                    'OLI_LU_REPLYTYPE_TC' => 'OLI_LU_REPLYTYPE_TC',
                                    'OLI_LU_REQCAT' => 'OLI_LU_REQCAT',
                                    'OLI_LU_REQCAT_TC' => 'OLI_LU_REQCAT_TC',
                                    'OLI_LU_REQCODE' => 'OLI_LU_REQCODE',
                                    'OLI_LU_REQCODE_TC' => 'OLI_LU_REQCODE_TC',
                                    'OLI_LU_REQRESTRICTION' => 'OLI_LU_REQRESTRICTION',
                                    'OLI_LU_REQRESTRICTION_TC' => 'OLI_LU_REQRESTRICTION_TC',
                                    'OLI_LU_REQSTAT' => 'OLI_LU_REQSTAT',
                                    'OLI_LU_REQSTAT_TC' => 'OLI_LU_REQSTAT_TC',
                                    'OLI_LU_REQSUBSTAT' => 'OLI_LU_REQSUBSTAT',
                                    'OLI_LU_REQSUBSTAT_TC' => 'OLI_LU_REQSUBSTAT_TC',
                                    'OLI_LU_RESERVEFUNCTION' => 'OLI_LU_RESERVEFUNCTION',
                                    'OLI_LU_RESERVEFUNCTION_TC' => 'OLI_LU_RESERVEFUNCTION_TC',
                                    'OLI_LU_RESPARTY' => 'OLI_LU_RESPARTY',
                                    'OLI_LU_RESPARTY_TC' => 'OLI_LU_RESPARTY_TC',
                                    'OLI_LU_RESPONSETYPE' => 'OLI_LU_RESPONSETYPE',
                                    'OLI_LU_RESPONSETYPE_TC' => 'OLI_LU_RESPONSETYPE_TC',
                                    'OLI_LU_RESTRICT' => 'OLI_LU_RESTRICT',
                                    'OLI_LU_RESTRICT_TC' => 'OLI_LU_RESTRICT_TC',
                                    'OLI_LU_RESTRICTREASON' => 'OLI_LU_RESTRICTREASON',
                                    'OLI_LU_RESTRICTREASON_TC' => 'OLI_LU_RESTRICTREASON_TC',
                                    'OLI_LU_RESVALTYPE' => 'OLI_LU_RESVALTYPE',
                                    'OLI_LU_RESVALTYPE_TC' => 'OLI_LU_RESVALTYPE_TC',
                                    'OLI_LU_RESVMETH' => 'OLI_LU_RESVMETH',
                                    'OLI_LU_RESVMETH_TC' => 'OLI_LU_RESVMETH_TC',
                                    'OLI_LU_RETNLEV' => 'OLI_LU_RETNLEV',
                                    'OLI_LU_RETNLEV_TC' => 'OLI_LU_RETNLEV_TC',
                                    'OLI_LU_REWARD' => 'OLI_LU_REWARD',
                                    'OLI_LU_REWARD_TC' => 'OLI_LU_REWARD_TC',
                                    'OLI_LU_RIDERCAT' => 'OLI_LU_RIDERCAT',
                                    'OLI_LU_RIDERCAT_TC' => 'OLI_LU_RIDERCAT_TC',
                                    'OLI_LU_RIDERSELECTRULE' => 'OLI_LU_RIDERSELECTRULE',
                                    'OLI_LU_RIDERSELECTRULE_TC' => 'OLI_LU_RIDERSELECTRULE_TC',
                                    'OLI_LU_RIDERSUBTYPE' => 'OLI_LU_RIDERSUBTYPE',
                                    'OLI_LU_RIDERSUBTYPE_TC' => 'OLI_LU_RIDERSUBTYPE_TC',
                                    'OLI_LU_RIDERTYPE' => 'OLI_LU_RIDERTYPE',
                                    'OLI_LU_RIDERTYPE_TC' => 'OLI_LU_RIDERTYPE_TC',
                                    'OLI_LU_RISK' => 'OLI_LU_RISK',
                                    'OLI_LU_RISK_TC' => 'OLI_LU_RISK_TC',
                                    'OLI_LU_RISKNOTIFYORG' => 'OLI_LU_RISKNOTIFYORG',
                                    'OLI_LU_RISKNOTIFYORG_TC' => 'OLI_LU_RISKNOTIFYORG_TC',
                                    'OLI_LU_RISKNOTIFYSTAT' => 'OLI_LU_RISKNOTIFYSTAT',
                                    'OLI_LU_RISKNOTIFYSTAT_TC' => 'OLI_LU_RISKNOTIFYSTAT_TC',
                                    'OLI_LU_RMDCALCMETH' => 'OLI_LU_RMDCALCMETH',
                                    'OLI_LU_RMDCALCMETH_TC' => 'OLI_LU_RMDCALCMETH_TC',
                                    'OLI_LU_RORCALCMETHOD' => 'OLI_LU_RORCALCMETHOD',
                                    'OLI_LU_RORCALCMETHOD_TC' => 'OLI_LU_RORCALCMETHOD_TC',
                                    'OLI_LU_ROUNDMETH' => 'OLI_LU_ROUNDMETH',
                                    'OLI_LU_ROUNDMETH_TC' => 'OLI_LU_ROUNDMETH_TC',
                                    'OLI_LU_RQSTPOLDTREASON' => 'OLI_LU_RQSTPOLDTREASON',
                                    'OLI_LU_RQSTPOLDTREASON_TC' => 'OLI_LU_RQSTPOLDTREASON_TC',
                                    'OLI_LU_RVWREASON' => 'OLI_LU_RVWREASON',
                                    'OLI_LU_RVWREASON_TC' => 'OLI_LU_RVWREASON_TC',
                                    'OLI_LU_SAFETYEQUIP' => 'OLI_LU_SAFETYEQUIP',
                                    'OLI_LU_SAFETYEQUIP_TC' => 'OLI_LU_SAFETYEQUIP_TC',
                                    'OLI_LU_SEASON' => 'OLI_LU_SEASON',
                                    'OLI_LU_SEASON_TC' => 'OLI_LU_SEASON_TC',
                                    'OLI_LU_SECPURCHTYPE' => 'OLI_LU_SECPURCHTYPE',
                                    'OLI_LU_SECPURCHTYPE_TC' => 'OLI_LU_SECPURCHTYPE_TC',
                                    'OLI_LU_SERVICEPARAMETERS' => 'OLI_LU_SERVICEPARAMETERS',
                                    'OLI_LU_SERVICEPARAMETERS_TC' => 'OLI_LU_SERVICEPARAMETERS_TC',
                                    'OLI_LU_SERVICEROLE' => 'OLI_LU_SERVICEROLE',
                                    'OLI_LU_SERVICEROLE_TC' => 'OLI_LU_SERVICEROLE_TC',
                                    'OLI_LU_SERVICESTATUS' => 'OLI_LU_SERVICESTATUS',
                                    'OLI_LU_SERVICESTATUS_TC' => 'OLI_LU_SERVICESTATUS_TC',
                                    'OLI_LU_SEVERITY' => 'OLI_LU_SEVERITY',
                                    'OLI_LU_SEVERITY_TC' => 'OLI_LU_SEVERITY_TC',
                                    'OLI_LU_SHARECLASS' => 'OLI_LU_SHARECLASS',
                                    'OLI_LU_SHARECLASS_TC' => 'OLI_LU_SHARECLASS_TC',
                                    'OLI_LU_SHAREDATATYPE' => 'OLI_LU_SHAREDATATYPE',
                                    'OLI_LU_SHAREDATATYPE_TC' => 'OLI_LU_SHAREDATATYPE_TC',
                                    'OLI_LU_SIGNATURETYPE' => 'OLI_LU_SIGNATURETYPE',
                                    'OLI_LU_SIGNATURETYPE_TC' => 'OLI_LU_SIGNATURETYPE_TC',
                                    'OLI_LU_SIGNRENDERTYPE' => 'OLI_LU_SIGNRENDERTYPE',
                                    'OLI_LU_SIGNRENDERTYPE_TC' => 'OLI_LU_SIGNRENDERTYPE_TC',
                                    'OLI_LU_SIGNREQTYPE' => 'OLI_LU_SIGNREQTYPE',
                                    'OLI_LU_SIGNREQTYPE_TC' => 'OLI_LU_SIGNREQTYPE_TC',
                                    'OLI_LU_SIGNREQUIRED' => 'OLI_LU_SIGNREQUIRED',
                                    'OLI_LU_SIGNREQUIRED_TC' => 'OLI_LU_SIGNREQUIRED_TC',
                                    'OLI_LU_SIGONFILE' => 'OLI_LU_SIGONFILE',
                                    'OLI_LU_SIGONFILE_TC' => 'OLI_LU_SIGONFILE_TC',
                                    'OLI_LU_SITUSSTAT' => 'OLI_LU_SITUSSTAT',
                                    'OLI_LU_SITUSSTAT_TC' => 'OLI_LU_SITUSSTAT_TC',
                                    'OLI_LU_SMOKERSTAT' => 'OLI_LU_SMOKERSTAT',
                                    'OLI_LU_SMOKERSTAT_TC' => 'OLI_LU_SMOKERSTAT_TC',
                                    'OLI_LU_SOLICITOR' => 'OLI_LU_SOLICITOR',
                                    'OLI_LU_SOLICITOR_TC' => 'OLI_LU_SOLICITOR_TC',
                                    'OLI_LU_SOLUTIONTYPE' => 'OLI_LU_SOLUTIONTYPE',
                                    'OLI_LU_SOLUTIONTYPE_TC' => 'OLI_LU_SOLUTIONTYPE_TC',
                                    'OLI_LU_SOURCEOFFUNDS' => 'OLI_LU_SOURCEOFFUNDS',
                                    'OLI_LU_SOURCEOFFUNDS_TC' => 'OLI_LU_SOURCEOFFUNDS_TC',
                                    'OLI_LU_SPECIALHANDLING' => 'OLI_LU_SPECIALHANDLING',
                                    'OLI_LU_SPECIALHANDLING_TC' => 'OLI_LU_SPECIALHANDLING_TC',
                                    'OLI_LU_SPEEDDIAL' => 'OLI_LU_SPEEDDIAL',
                                    'OLI_LU_SPEEDDIAL_TC' => 'OLI_LU_SPEEDDIAL_TC',
                                    'OLI_LU_SPONSORPLAN' => 'OLI_LU_SPONSORPLAN',
                                    'OLI_LU_SPONSORPLAN_TC' => 'OLI_LU_SPONSORPLAN_TC',
                                    'OLI_LU_STARTDATEBASIS' => 'OLI_LU_STARTDATEBASIS',
                                    'OLI_LU_STARTDATEBASIS_TC' => 'OLI_LU_STARTDATEBASIS_TC',
                                    'OLI_LU_STATE' => 'OLI_LU_STATE',
                                    'OLI_LU_STATE_TC' => 'OLI_LU_STATE_TC',
                                    'OLI_LU_STATEVENTCODE' => 'OLI_LU_STATEVENTCODE',
                                    'OLI_LU_STATEVENTCODE_TC' => 'OLI_LU_STATEVENTCODE_TC',
                                    'OLI_LU_STATREASON' => 'OLI_LU_STATREASON',
                                    'OLI_LU_STATREASON_TC' => 'OLI_LU_STATREASON_TC',
                                    'OLI_LU_STMTBASIS' => 'OLI_LU_STMTBASIS',
                                    'OLI_LU_STMTBASIS_TC' => 'OLI_LU_STMTBASIS_TC',
                                    'OLI_LU_STMTTYPE' => 'OLI_LU_STMTTYPE',
                                    'OLI_LU_STMTTYPE_TC' => 'OLI_LU_STMTTYPE_TC',
                                    'OLI_LU_STOPOPTION' => 'OLI_LU_STOPOPTION',
                                    'OLI_LU_STOPOPTION_TC' => 'OLI_LU_STOPOPTION_TC',
                                    'OLI_LU_STRUCTURETYPE' => 'OLI_LU_STRUCTURETYPE',
                                    'OLI_LU_STRUCTURETYPE_TC' => 'OLI_LU_STRUCTURETYPE_TC',
                                    'OLI_LU_SUBACCOUNTTYPE' => 'OLI_LU_SUBACCOUNTTYPE',
                                    'OLI_LU_SUBACCOUNTTYPE_TC' => 'OLI_LU_SUBACCOUNTTYPE_TC',
                                    'OLI_LU_SUBPAYCOMMAGE' => 'OLI_LU_SUBPAYCOMMAGE',
                                    'OLI_LU_SUBPAYCOMMAGE_TC' => 'OLI_LU_SUBPAYCOMMAGE_TC',
                                    'OLI_LU_SUBRESVCEASE' => 'OLI_LU_SUBRESVCEASE',
                                    'OLI_LU_SUBRESVCEASE_TC' => 'OLI_LU_SUBRESVCEASE_TC',
                                    'OLI_LU_SUBSTANCETYPE' => 'OLI_LU_SUBSTANCETYPE',
                                    'OLI_LU_SUBSTANCETYPE_TC' => 'OLI_LU_SUBSTANCETYPE_TC',
                                    'OLI_LU_SUBSTANDARD' => 'OLI_LU_SUBSTANDARD',
                                    'OLI_LU_SUBSTANDARD_TC' => 'OLI_LU_SUBSTANDARD_TC',
                                    'OLI_LU_SUBSTDRESV' => 'OLI_LU_SUBSTDRESV',
                                    'OLI_LU_SUBSTDRESV_TC' => 'OLI_LU_SUBSTDRESV_TC',
                                    'OLI_LU_SUBSYSTEM' => 'OLI_LU_SUBSYSTEM',
                                    'OLI_LU_SUBSYSTEM_TC' => 'OLI_LU_SUBSYSTEM_TC',
                                    'OLI_LU_SUPPSOLVETYPE' => 'OLI_LU_SUPPSOLVETYPE',
                                    'OLI_LU_SUPPSOLVETYPE_TC' => 'OLI_LU_SUPPSOLVETYPE_TC',
                                    'OLI_LU_SURFACETYPE' => 'OLI_LU_SURFACETYPE',
                                    'OLI_LU_SURFACETYPE_TC' => 'OLI_LU_SURFACETYPE_TC',
                                    'OLI_LU_SURRCHGTYPE' => 'OLI_LU_SURRCHGTYPE',
                                    'OLI_LU_SURRCHGTYPE_TC' => 'OLI_LU_SURRCHGTYPE_TC',
                                    'OLI_LU_SVCPRT' => 'OLI_LU_SVCPRT',
                                    'OLI_LU_SVCPRT_TC' => 'OLI_LU_SVCPRT_TC',
                                    'OLI_LU_SYSTEMATIC' => 'OLI_LU_SYSTEMATIC',
                                    'OLI_LU_SYSTEMATIC_TC' => 'OLI_LU_SYSTEMATIC_TC',
                                    'OLI_LU_TAMRASUBRATERULE' => 'OLI_LU_TAMRASUBRATERULE',
                                    'OLI_LU_TAMRASUBRATERULE_TC' => 'OLI_LU_TAMRASUBRATERULE_TC',
                                    'OLI_LU_TARGETAGERULE' => 'OLI_LU_TARGETAGERULE',
                                    'OLI_LU_TARGETAGERULE_TC' => 'OLI_LU_TARGETAGERULE_TC',
                                    'OLI_LU_TAXABLESTAT' => 'OLI_LU_TAXABLESTAT',
                                    'OLI_LU_TAXABLESTAT_TC' => 'OLI_LU_TAXABLESTAT_TC',
                                    'OLI_LU_TAXCALCBIRTHTYPECODE' => 'OLI_LU_TAXCALCBIRTHTYPECODE',
                                    'OLI_LU_TAXCALCBIRTHTYPECODE_TC' => 'OLI_LU_TAXCALCBIRTHTYPECODE_TC',
                                    'OLI_LU_TAXDISBURSETYPE' => 'OLI_LU_TAXDISBURSETYPE',
                                    'OLI_LU_TAXDISBURSETYPE_TC' => 'OLI_LU_TAXDISBURSETYPE_TC',
                                    'OLI_LU_TAXLOCATION' => 'OLI_LU_TAXLOCATION',
                                    'OLI_LU_TAXLOCATION_TC' => 'OLI_LU_TAXLOCATION_TC',
                                    'OLI_LU_TAXPLACE' => 'OLI_LU_TAXPLACE',
                                    'OLI_LU_TAXPLACE_TC' => 'OLI_LU_TAXPLACE_TC',
                                    'OLI_LU_TAXRULE' => 'OLI_LU_TAXRULE',
                                    'OLI_LU_TAXRULE_TC' => 'OLI_LU_TAXRULE_TC',
                                    'OLI_LU_TAXSTAT' => 'OLI_LU_TAXSTAT',
                                    'OLI_LU_TAXSTAT_TC' => 'OLI_LU_TAXSTAT_TC',
                                    'OLI_LU_TAXTYPE' => 'OLI_LU_TAXTYPE',
                                    'OLI_LU_TAXTYPE_TC' => 'OLI_LU_TAXTYPE_TC',
                                    'OLI_LU_TERRAIN' => 'OLI_LU_TERRAIN',
                                    'OLI_LU_TERRAIN_TC' => 'OLI_LU_TERRAIN_TC',
                                    'OLI_LU_TESTTYPE' => 'OLI_LU_TESTTYPE',
                                    'OLI_LU_TESTTYPE_TC' => 'OLI_LU_TESTTYPE_TC',
                                    'OLI_LU_THERCLASS' => 'OLI_LU_THERCLASS',
                                    'OLI_LU_THERCLASS_TC' => 'OLI_LU_THERCLASS_TC',
                                    'OLI_LU_TIMINGTYPE' => 'OLI_LU_TIMINGTYPE',
                                    'OLI_LU_TIMINGTYPE_TC' => 'OLI_LU_TIMINGTYPE_TC',
                                    'OLI_LU_TOBACCOTYPE' => 'OLI_LU_TOBACCOTYPE',
                                    'OLI_LU_TOBACCOTYPE_TC' => 'OLI_LU_TOBACCOTYPE_TC',
                                    'OLI_LU_TOBPREMBASIS' => 'OLI_LU_TOBPREMBASIS',
                                    'OLI_LU_TOBPREMBASIS_TC' => 'OLI_LU_TOBPREMBASIS_TC',
                                    'OLI_LU_TRACKINGTYPE' => 'OLI_LU_TRACKINGTYPE',
                                    'OLI_LU_TRACKINGTYPE_TC' => 'OLI_LU_TRACKINGTYPE_TC',
                                    'OLI_LU_TRANS_TYPE_CODES' => 'OLI_LU_TRANS_TYPE_CODES',
                                    'OLI_LU_TRANS_TYPE_CODES_TC' => 'OLI_LU_TRANS_TYPE_CODES_TC',
                                    'OLI_LU_TRAVELENV' => 'OLI_LU_TRAVELENV',
                                    'OLI_LU_TRAVELENV_TC' => 'OLI_LU_TRAVELENV_TC',
                                    'OLI_LU_TRAVELPURPOSE' => 'OLI_LU_TRAVELPURPOSE',
                                    'OLI_LU_TRAVELPURPOSE_TC' => 'OLI_LU_TRAVELPURPOSE_TC',
                                    'OLI_LU_TRAVELRISK' => 'OLI_LU_TRAVELRISK',
                                    'OLI_LU_TRAVELRISK_TC' => 'OLI_LU_TRAVELRISK_TC',
                                    'OLI_LU_TRAVELTRANSPORTATION' => 'OLI_LU_TRAVELTRANSPORTATION',
                                    'OLI_LU_TRAVELTRANSPORTATION_TC' => 'OLI_LU_TRAVELTRANSPORTATION_TC',
                                    'OLI_LU_TREATGUIDE' => 'OLI_LU_TREATGUIDE',
                                    'OLI_LU_TREATGUIDE_TC' => 'OLI_LU_TREATGUIDE_TC',
                                    'OLI_LU_TREATMENTSTATUS' => 'OLI_LU_TREATMENTSTATUS',
                                    'OLI_LU_TREATMENTSTATUS_TC' => 'OLI_LU_TREATMENTSTATUS_TC',
                                    'OLI_LU_TREATMENTTYPE' => 'OLI_LU_TREATMENTTYPE',
                                    'OLI_LU_TREATMENTTYPE_TC' => 'OLI_LU_TREATMENTTYPE_TC',
                                    'OLI_LU_TRNSFRAMTTYPE' => 'OLI_LU_TRNSFRAMTTYPE',
                                    'OLI_LU_TRNSFRAMTTYPE_TC' => 'OLI_LU_TRNSFRAMTTYPE_TC',
                                    'OLI_LU_TRUSTTYPE' => 'OLI_LU_TRUSTTYPE',
                                    'OLI_LU_TRUSTTYPE_TC' => 'OLI_LU_TRUSTTYPE_TC',
                                    'OLI_LU_UNDPRIV' => 'OLI_LU_UNDPRIV',
                                    'OLI_LU_UNDPRIV_TC' => 'OLI_LU_UNDPRIV_TC',
                                    'OLI_LU_UNDSTAT' => 'OLI_LU_UNDSTAT',
                                    'OLI_LU_UNDSTAT_TC' => 'OLI_LU_UNDSTAT_TC',
                                    'OLI_LU_UNWRITECLASS' => 'OLI_LU_UNWRITECLASS',
                                    'OLI_LU_UNWRITECLASS_TC' => 'OLI_LU_UNWRITECLASS_TC',
                                    'OLI_LU_UNWRITESUBCLASS' => 'OLI_LU_UNWRITESUBCLASS',
                                    'OLI_LU_UNWRITESUBCLASS_TC' => 'OLI_LU_UNWRITESUBCLASS_TC',
                                    'OLI_LU_URLTYPE' => 'OLI_LU_URLTYPE',
                                    'OLI_LU_URLTYPE_TC' => 'OLI_LU_URLTYPE_TC',
                                    'OLI_LU_USAGESTATUS' => 'OLI_LU_USAGESTATUS',
                                    'OLI_LU_USAGESTATUS_TC' => 'OLI_LU_USAGESTATUS_TC',
                                    'OLI_LU_UWCATEGORY' => 'OLI_LU_UWCATEGORY',
                                    'OLI_LU_UWCATEGORY_TC' => 'OLI_LU_UWCATEGORY_TC',
                                    'OLI_LU_UWREASONCODE' => 'OLI_LU_UWREASONCODE',
                                    'OLI_LU_UWREASONCODE_TC' => 'OLI_LU_UWREASONCODE_TC',
                                    'OLI_LU_UWREVREASON' => 'OLI_LU_UWREVREASON',
                                    'OLI_LU_UWREVREASON_TC' => 'OLI_LU_UWREVREASON_TC',
                                    'OLI_LU_VALCLASS' => 'OLI_LU_VALCLASS',
                                    'OLI_LU_VALCLASS_TC' => 'OLI_LU_VALCLASS_TC',
                                    'OLI_LU_VARIANT' => 'OLI_LU_VARIANT',
                                    'OLI_LU_VARIANT_TC' => 'OLI_LU_VARIANT_TC',
                                    'OLI_LU_VARIANTATT' => 'OLI_LU_VARIANTATT',
                                    'OLI_LU_VEHICLE' => 'OLI_LU_VEHICLE',
                                    'OLI_LU_VEHICLE_TC' => 'OLI_LU_VEHICLE_TC',
                                    'OLI_LU_VERIFICATIONMETHOD' => 'OLI_LU_VERIFICATIONMETHOD',
                                    'OLI_LU_VERIFICATIONMETHOD_TC' => 'OLI_LU_VERIFICATIONMETHOD_TC',
                                    'OLI_LU_VERIFIERROLE' => 'OLI_LU_VERIFIERROLE',
                                    'OLI_LU_VERIFIERROLE_TC' => 'OLI_LU_VERIFIERROLE_TC',
                                    'OLI_LU_VERIFYTYPE' => 'OLI_LU_VERIFYTYPE',
                                    'OLI_LU_VERIFYTYPE_TC' => 'OLI_LU_VERIFYTYPE_TC',
                                    'OLI_LU_VESTINGTYPE' => 'OLI_LU_VESTINGTYPE',
                                    'OLI_LU_VESTINGTYPE_TC' => 'OLI_LU_VESTINGTYPE_TC',
                                    'OLI_LU_VIOLATIONTYPE' => 'OLI_LU_VIOLATIONTYPE',
                                    'OLI_LU_VIOLATIONTYPE_TC' => 'OLI_LU_VIOLATIONTYPE_TC',
                                    'OLI_LU_VISACLASSTYPE' => 'OLI_LU_VISACLASSTYPE',
                                    'OLI_LU_VISACLASSTYPE_TC' => 'OLI_LU_VISACLASSTYPE_TC',
                                    'OLI_LU_WAIVERREASON' => 'OLI_LU_WAIVERREASON',
                                    'OLI_LU_WAIVERREASON_TC' => 'OLI_LU_WAIVERREASON_TC',
                                    'OLI_LU_WDORDER' => 'OLI_LU_WDORDER',
                                    'OLI_LU_WDORDER_TC' => 'OLI_LU_WDORDER_TC',
                                    'OLI_LU_WITHBKUPREAS' => 'OLI_LU_WITHBKUPREAS',
                                    'OLI_LU_WITHBKUPREAS_TC' => 'OLI_LU_WITHBKUPREAS_TC',
                                    'OLI_LU_WITHCALCMTH' => 'OLI_LU_WITHCALCMTH',
                                    'OLI_LU_WITHCALCMTH_TC' => 'OLI_LU_WITHCALCMTH_TC',
                                    'OLI_LU_WORKERSCOMP' => 'OLI_LU_WORKERSCOMP',
                                    'OLI_LU_WORKERSCOMP_TC' => 'OLI_LU_WORKERSCOMP_TC',
                                    'OLI_LU_WORKLOCTYPE' => 'OLI_LU_WORKLOCTYPE',
                                    'OLI_LU_WORKLOCTYPE_TC' => 'OLI_LU_WORKLOCTYPE_TC',
                                    'OLI_LU_WORKSTAT' => 'OLI_LU_WORKSTAT',
                                    'OLI_LU_WORKSTAT_TC' => 'OLI_LU_WORKSTAT_TC',
                                    'OLI_LU_WTHDRWLRULE' => 'OLI_LU_WTHDRWLRULE',
                                    'OLI_LU_WTHDRWLRULE_TC' => 'OLI_LU_WTHDRWLRULE_TC',
                                    'OLI_SITUS_REASONCODE' => 'OLI_SITUS_REASONCODE',
                                    'OLI_SITUS_REASONCODE_TC' => 'OLI_SITUS_REASONCODE_TC',
                                    'OLU_LU_CORRGUIDSTATE' => 'OLU_LU_CORRGUIDSTATE',
                                    'OLU_LU_CORRGUIDSTATE_TC' => 'OLU_LU_CORRGUIDSTATE_TC',
                                    'PARTIAL_DATE_TYPE' => 'PARTIAL_DATE_TYPE',
                                    'anonymous1164' => 'anonymous1164',
                                    'anonymous1165' => 'anonymous1165',
                                    'Persist_Types' => 'Persist_Types',
                                    'PERSISTKEY' => 'PERSISTKEY',
                                    'REINS_SUBTRAN_CODES' => 'REINS_SUBTRAN_CODES',
                                    'REINS_SUBTRAN_CODES_TC' => 'REINS_SUBTRAN_CODES_TC',
                                    'REINS_TRANMODEL_CODES' => 'REINS_TRANMODEL_CODES',
                                    'REINS_TRANMODEL_CODES_TC' => 'REINS_TRANMODEL_CODES_TC',
                                    'RESULT_CODES' => 'RESULT_CODES',
                                    'RESULT_CODES_TC' => 'RESULT_CODES_TC',
                                    'RESULT_INFO_CODES' => 'RESULT_INFO_CODES',
                                    'RESULT_INFO_CODES_TC' => 'RESULT_INFO_CODES_TC',
                                    'SCALESUBTYPE_TYPE' => 'SCALESUBTYPE_TYPE',
                                    'SCALESUBTYPE_TYPE_TC' => 'SCALESUBTYPE_TYPE_TC',
                                    'SCALETYPE_TYPE' => 'SCALETYPE_TYPE',
                                    'SCALETYPE_TYPE_TC' => 'SCALETYPE_TYPE_TC',
                                    'SYSKEY' => 'SYSKEY',
                                    'TC_ILLUSPRIMTYPE' => 'TC_ILLUSPRIMTYPE',
                                    'TC_ILLUSPRIMTYPE_TC' => 'TC_ILLUSPRIMTYPE_TC',
                                    'TC_ILLUSSECTYPE' => 'TC_ILLUSSECTYPE',
                                    'TC_ILLUSSECTYPE_TC' => 'TC_ILLUSSECTYPE_TC',
                                    'TC_ILLUSTERTTYPE' => 'TC_ILLUSTERTTYPE',
                                    'TC_ILLUSTERTTYPE_TC' => 'TC_ILLUSTERTTYPE_TC',
                                    'TC_INTASSUMPTION' => 'TC_INTASSUMPTION',
                                    'TC_INTASSUMPTION_TC' => 'TC_INTASSUMPTION_TC',
                                    'TC_MIB_PRIORITY' => 'TC_MIB_PRIORITY',
                                    'TC_MIB_PRIORITY_TC' => 'TC_MIB_PRIORITY_TC',
                                    'TC_MIB_SEARCHDEPTH' => 'TC_MIB_SEARCHDEPTH',
                                    'TC_MIB_SEARCHDEPTH_TC' => 'TC_MIB_SEARCHDEPTH_TC',
                                    'TC_MIB_SERVICE' => 'TC_MIB_SERVICE',
                                    'TC_MIB_SERVICE_TC' => 'TC_MIB_SERVICE_TC',
                                    'TC_MORTASSUMPTION' => 'TC_MORTASSUMPTION',
                                    'TC_MORTASSUMPTION_TC' => 'TC_MORTASSUMPTION_TC',
                                    'TC_TIMINGOPTION' => 'TC_TIMINGOPTION',
                                    'TC_TIMINGOPTION_TC' => 'TC_TIMINGOPTION_TC',
                                    'TC_VECTOR' => 'TC_VECTOR',
                                    'TC_VECTOR_TC' => 'TC_VECTOR_TC',
                                    'TC_VECTORSETTYPE' => 'TC_VECTORSETTYPE',
                                    'TC_VECTORSETTYPE_TC' => 'TC_VECTORSETTYPE_TC',
                                    'TRAN_CONTENT_CODES' => 'TRAN_CONTENT_CODES',
                                    'TRAN_CONTENT_CODES_TC' => 'TRAN_CONTENT_CODES_TC',
                                    'TRANS_MODE_CODES' => 'TRANS_MODE_CODES',
                                    'TRANS_MODE_CODES_TC' => 'TRANS_MODE_CODES_TC',
                                    'TRANS_SUBTYPE_CODES' => 'TRANS_SUBTYPE_CODES',
                                    'TRANS_SUBTYPE_CODES_TC' => 'TRANS_SUBTYPE_CODES_TC',
                                    'XTbML_DEFAULT_TYPE_CODE' => 'XTbML_DEFAULT_TYPE_CODE',
                                    'anonymous1210' => 'anonymous1210',
                                    'anonymous1211' => 'anonymous1211',
                                    'OLifE_Type' => 'OLifE_Type',
                                    'TXLife_Type' => 'TXLife_Type',
                                    'XTbML_Type' => 'XTbML_Type',
                                    'AbdomenMeasure_Type' => 'AbdomenMeasure_Type',
                                    'AccountDesignationCC_Type' => 'AccountDesignationCC_Type',
                                    'AccountingActivity_Type' => 'AccountingActivity_Type',
                                    'AccountingStatement_Type' => 'AccountingStatement_Type',
                                    'ActionTypeAllowedCC_Type' => 'ActionTypeAllowedCC_Type',
                                    'Activity_Type' => 'Activity_Type',
                                    'AdditionalArrClassification_Type' => 'AdditionalArrClassification_Type',
                                    'AdditionalInterestRateInfo_Type' => 'AdditionalInterestRateInfo_Type',
                                    'AdditionalRiderClassification_Type' => 'AdditionalRiderClassification_Type',
                                    'Address_Type' => 'Address_Type',
                                    'AdminTransactionProduct_Type' => 'AdminTransactionProduct_Type',
                                    'AgeAmtProduct_Type' => 'AgeAmtProduct_Type',
                                    'AgeRestrictionRoleCC_Type' => 'AgeRestrictionRoleCC_Type',
                                    'Aircraft_Type' => 'Aircraft_Type',
                                    'AirSportsExp_Type' => 'AirSportsExp_Type',
                                    'AllocTypeProduct_Type' => 'AllocTypeProduct_Type',
                                    'AllowedChange_Type' => 'AllowedChange_Type',
                                    'AllowedChangeMode_Type' => 'AllowedChangeMode_Type',
                                    'AllowedDayCC_Type' => 'AllowedDayCC_Type',
                                    'AllowedDesignation_Type' => 'AllowedDesignation_Type',
                                    'AllowedDistributionAgreement_Type' => 'AllowedDistributionAgreement_Type',
                                    'AllowedFeatureTransaction_Type' => 'AllowedFeatureTransaction_Type',
                                    'AllowedIndexInfo_Type' => 'AllowedIndexInfo_Type',
                                    'AllowedPercent_Type' => 'AllowedPercent_Type',
                                    'AllowedRelationship_Type' => 'AllowedRelationship_Type',
                                    'AllowedSubstandard_Type' => 'AllowedSubstandard_Type',
                                    'AllowedTimingBasis_Type' => 'AllowedTimingBasis_Type',
                                    'AllowedTransType_Type' => 'AllowedTransType_Type',
                                    'AltPremMode_Type' => 'AltPremMode_Type',
                                    'AmountProduct_Type' => 'AmountProduct_Type',
                                    'AnnualIndexOption_Type' => 'AnnualIndexOption_Type',
                                    'AnnualIndexTypeCC_Type' => 'AnnualIndexTypeCC_Type',
                                    'AnnuitizationDateRestriction_Type' => 'AnnuitizationDateRestriction_Type',
                                    'Annuity_Type' => 'Annuity_Type',
                                    'AnnuityProduct_Type' => 'AnnuityProduct_Type',
                                    'AnnuityProductExclude_Type' => 'AnnuityProductExclude_Type',
                                    'AnnuityUSA_Type' => 'AnnuityUSA_Type',
                                    'AnswerChoice_Type' => 'AnswerChoice_Type',
                                    'ApplicationInfo_Type' => 'ApplicationInfo_Type',
                                    'ApptCounty_Type' => 'ApptCounty_Type',
                                    'Arrangement_Type' => 'Arrangement_Type',
                                    'ArrangementOptProduct_Type' => 'ArrangementOptProduct_Type',
                                    'ArrangementProduct_Type' => 'ArrangementProduct_Type',
                                    'ArrDestination_Type' => 'ArrDestination_Type',
                                    'ArrSource_Type' => 'ArrSource_Type',
                                    'AssociatedObjectInfo_Type' => 'AssociatedObjectInfo_Type',
                                    'AssociatedResponseData_Type' => 'AssociatedResponseData_Type',
                                    'AssocParticipantObjectInfo_Type' => 'AssocParticipantObjectInfo_Type',
                                    'AssumedInterestRateCC_Type' => 'AssumedInterestRateCC_Type',
                                    'Attachment_Type' => 'Attachment_Type',
                                    'AttachmentAnomaly_Type' => 'AttachmentAnomaly_Type',
                                    'AttachmentReference_Type' => 'AttachmentReference_Type',
                                    'AuditElement_Type' => 'AuditElement_Type',
                                    'AuditEntry_Type' => 'AuditEntry_Type',
                                    'AuditTransaction_Type' => 'AuditTransaction_Type',
                                    'AuditTransSummation_Type' => 'AuditTransSummation_Type',
                                    'Authorization_Type' => 'Authorization_Type',
                                    'AuthorizationEntityCC_Type' => 'AuthorizationEntityCC_Type',
                                    'AuthorizationTransaction_Type' => 'AuthorizationTransaction_Type',
                                    'AuthorizedSignatory_Type' => 'AuthorizedSignatory_Type',
                                    'Availability_Type' => 'Availability_Type',
                                    'AvailabilityContactPoint_Type' => 'AvailabilityContactPoint_Type',
                                    'AviationExp_Type' => 'AviationExp_Type',
                                    'AviationGuideline_Type' => 'AviationGuideline_Type',
                                    'AviationGuidelines_Type' => 'AviationGuidelines_Type',
                                    'AvocationGuideline_Type' => 'AvocationGuideline_Type',
                                    'AvocationGuidelines_Type' => 'AvocationGuidelines_Type',
                                    'AvocationInfo_Type' => 'AvocationInfo_Type',
                                    'Axis_Type' => 'Axis_Type',
                                    'AxisDef_Type' => 'AxisDef_Type',
                                    'BallooningExp_Type' => 'BallooningExp_Type',
                                    'Banking_Type' => 'Banking_Type',
                                    'Bankruptcy_Type' => 'Bankruptcy_Type',
                                    'BeneficiaryIncomeOptionInfo_Type' => 'BeneficiaryIncomeOptionInfo_Type',
                                    'BenefitChangeAllowed_Type' => 'BenefitChangeAllowed_Type',
                                    'BenefitLimit_Type' => 'BenefitLimit_Type',
                                    'BenefitLimitOption_Type' => 'BenefitLimitOption_Type',
                                    'BenePayoutTypeAllowed_Type' => 'BenePayoutTypeAllowed_Type',
                                    'BenePeriodAccOption_Type' => 'BenePeriodAccOption_Type',
                                    'BenePeriodSickOption_Type' => 'BenePeriodSickOption_Type',
                                    'BestDayToCallCC_Type' => 'BestDayToCallCC_Type',
                                    'BillingDetail_Type' => 'BillingDetail_Type',
                                    'BillingStatement_Type' => 'BillingStatement_Type',
                                    'BloodPressureGuideline_Type' => 'BloodPressureGuideline_Type',
                                    'BloodPressureGuidelines_Type' => 'BloodPressureGuidelines_Type',
                                    'Breakpoint_Type' => 'Breakpoint_Type',
                                    'BusinessContact_Type' => 'BusinessContact_Type',
                                    'BusinessInsPurposeInfo_Type' => 'BusinessInsPurposeInfo_Type',
                                    'BusinessMethodCC_Type' => 'BusinessMethodCC_Type',
                                    'BusinessProcessAllowed_Type' => 'BusinessProcessAllowed_Type',
                                    'BusinessProcessCC_Type' => 'BusinessProcessCC_Type',
                                    'BusinessProcessDef_Type' => 'BusinessProcessDef_Type',
                                    'BusinessService_Type' => 'BusinessService_Type',
                                    'Campaign_Type' => 'Campaign_Type',
                                    'CardiacMurmur_Type' => 'CardiacMurmur_Type',
                                    'Carrier_Type' => 'Carrier_Type',
                                    'CarrierAppointment_Type' => 'CarrierAppointment_Type',
                                    'Case_Type' => 'Case_Type',
                                    'CashValueRate_Type' => 'CashValueRate_Type',
                                    'CauseOfDeath_Type' => 'CauseOfDeath_Type',
                                    'CertificateCraftType_Type' => 'CertificateCraftType_Type',
                                    'CertificateRatingType_Type' => 'CertificateRatingType_Type',
                                    'ChangeSubType_Type' => 'ChangeSubType_Type',
                                    'ChargePctSchedule_Type' => 'ChargePctSchedule_Type',
                                    'ChestForcedMeasure_Type' => 'ChestForcedMeasure_Type',
                                    'ChestFullMeasure_Type' => 'ChestFullMeasure_Type',
                                    'CholesterolGuideline_Type' => 'CholesterolGuideline_Type',
                                    'CholesterolGuidelines_Type' => 'CholesterolGuidelines_Type',
                                    'Claim_Type' => 'Claim_Type',
                                    'ClaimEstimate_Type' => 'ClaimEstimate_Type',
                                    'ClaimMedConditionInfo_Type' => 'ClaimMedConditionInfo_Type',
                                    'ClaimMedTreatmentInfo_Type' => 'ClaimMedTreatmentInfo_Type',
                                    'ClaimReferenceInfo_Type' => 'ClaimReferenceInfo_Type',
                                    'ClaimReview_Type' => 'ClaimReview_Type',
                                    'Client_Type' => 'Client_Type',
                                    'ClimbingExp_Type' => 'ClimbingExp_Type',
                                    'CodeDefinition_Type' => 'CodeDefinition_Type',
                                    'CodeList_Type' => 'CodeList_Type',
                                    'COIRate_Type' => 'COIRate_Type',
                                    'COLIndexCapCC_Type' => 'COLIndexCapCC_Type',
                                    'COLIndexCC_Type' => 'COLIndexCC_Type',
                                    'ComboRelationship_Type' => 'ComboRelationship_Type',
                                    'CommFormula_Type' => 'CommFormula_Type',
                                    'CommissionCalcActivity_Type' => 'CommissionCalcActivity_Type',
                                    'CommissionCalcDetail_Type' => 'CommissionCalcDetail_Type',
                                    'CommissionCalcInfo_Type' => 'CommissionCalcInfo_Type',
                                    'CommissionDetail_Type' => 'CommissionDetail_Type',
                                    'CommissionLinkCC_Type' => 'CommissionLinkCC_Type',
                                    'CommissionProduct_Type' => 'CommissionProduct_Type',
                                    'CommissionStatement_Type' => 'CommissionStatement_Type',
                                    'CommOptionAvailable_Type' => 'CommOptionAvailable_Type',
                                    'CommRemittance_Type' => 'CommRemittance_Type',
                                    'CommSchedule_Type' => 'CommSchedule_Type',
                                    'CompatiblePaymentFormCC_Type' => 'CompatiblePaymentFormCC_Type',
                                    'CompensationPayment_Type' => 'CompensationPayment_Type',
                                    'CompetitionDetail_Type' => 'CompetitionDetail_Type',
                                    'ComplexContentDescriptor_Type' => 'ComplexContentDescriptor_Type',
                                    'ConditionTypeOption_Type' => 'ConditionTypeOption_Type',
                                    'ConflictObjectInfo_Type' => 'ConflictObjectInfo_Type',
                                    'ContentClassification_Type' => 'ContentClassification_Type',
                                    'ContingencyBenefitChange_Type' => 'ContingencyBenefitChange_Type',
                                    'ContingentJointCC_Type' => 'ContingentJointCC_Type',
                                    'Coverage_Type' => 'Coverage_Type',
                                    'CoverageProduct_Type' => 'CoverageProduct_Type',
                                    'CoverageProductXLat_Type' => 'CoverageProductXLat_Type',
                                    'CoverageXLat_Type' => 'CoverageXLat_Type',
                                    'CovOption_Type' => 'CovOption_Type',
                                    'CovOptionProduct_Type' => 'CovOptionProduct_Type',
                                    'CovOptionProductXLat_Type' => 'CovOptionProductXLat_Type',
                                    'CovOptionXLat_Type' => 'CovOptionXLat_Type',
                                    'CreditCardTypeCC_Type' => 'CreditCardTypeCC_Type',
                                    'CriminalConviction_Type' => 'CriminalConviction_Type',
                                    'CriminalConvictionGuideline_Type' => 'CriminalConvictionGuideline_Type',
                                    'CriminalConvictionGuidelines_Type' => 'CriminalConvictionGuidelines_Type',
                                    'Criteria_Type' => 'Criteria_Type',
                                    'CriteriaExpression_Type' => 'CriteriaExpression_Type',
                                    'Currency_Type' => 'Currency_Type',
                                    'DataTransmittalSubType_Type' => 'DataTransmittalSubType_Type',
                                    'DateCollection_Type' => 'DateCollection_Type',
                                    'DeathBenefitOptCC_Type' => 'DeathBenefitOptCC_Type',
                                    'DeathBenefitOptionInfo_Type' => 'DeathBenefitOptionInfo_Type',
                                    'DeductionOption_Type' => 'DeductionOption_Type',
                                    'DefLifeInsMethodCC_Type' => 'DefLifeInsMethodCC_Type',
                                    'DeliveryDestination_Type' => 'DeliveryDestination_Type',
                                    'DeliveryInfo_Type' => 'DeliveryInfo_Type',
                                    'DenialInfo_Type' => 'DenialInfo_Type',
                                    'Department_Type' => 'Department_Type',
                                    'DesignationInfo_Type' => 'DesignationInfo_Type',
                                    'DestInvestProduct_Type' => 'DestInvestProduct_Type',
                                    'DisabilityHealth_Type' => 'DisabilityHealth_Type',
                                    'DisabilityHealthProduct_Type' => 'DisabilityHealthProduct_Type',
                                    'DisabilityHealthProvisions_Type' => 'DisabilityHealthProvisions_Type',
                                    'DistinguishedObject_Type' => 'DistinguishedObject_Type',
                                    'DistributionAgreement_Type' => 'DistributionAgreement_Type',
                                    'DistributionAgreementInfo_Type' => 'DistributionAgreementInfo_Type',
                                    'DistributionChannelCC_Type' => 'DistributionChannelCC_Type',
                                    'DistributionChannelInfo_Type' => 'DistributionChannelInfo_Type',
                                    'DistributionLevel_Type' => 'DistributionLevel_Type',
                                    'DiveDetail_Type' => 'DiveDetail_Type',
                                    'DiveLocation_Type' => 'DiveLocation_Type',
                                    'DivePurpose_Type' => 'DivePurpose_Type',
                                    'Dividend_Type' => 'Dividend_Type',
                                    'DividendRate_Type' => 'DividendRate_Type',
                                    'DrivingHistoryGuideline_Type' => 'DrivingHistoryGuideline_Type',
                                    'DrivingHistoryGuidelines_Type' => 'DrivingHistoryGuidelines_Type',
                                    'Education_Type' => 'Education_Type',
                                    'EligibleDependents_Type' => 'EligibleDependents_Type',
                                    'ElimPeriodAccOption_Type' => 'ElimPeriodAccOption_Type',
                                    'ElimPeriodSickOption_Type' => 'ElimPeriodSickOption_Type',
                                    'EMailAddress_Type' => 'EMailAddress_Type',
                                    'Employment_Type' => 'Employment_Type',
                                    'EmploymentClassOption_Type' => 'EmploymentClassOption_Type',
                                    'Endorsement_Type' => 'Endorsement_Type',
                                    'EntityType_Type' => 'EntityType_Type',
                                    'Exam_Type' => 'Exam_Type',
                                    'ExamMethodInfo_Type' => 'ExamMethodInfo_Type',
                                    'ExchangeRate_Type' => 'ExchangeRate_Type',
                                    'ExchangeReason_Type' => 'ExchangeReason_Type',
                                    'Exclusion_Type' => 'Exclusion_Type',
                                    'ExclusionInvestProduct_Type' => 'ExclusionInvestProduct_Type',
                                    'ExpenseNeed_Type' => 'ExpenseNeed_Type',
                                    'ExtendOrCall_Type' => 'ExtendOrCall_Type',
                                    'Extension_Type' => 'Extension_Type',
                                    'FamilyHistoryGuideline_Type' => 'FamilyHistoryGuideline_Type',
                                    'FamilyHistoryGuidelines_Type' => 'FamilyHistoryGuidelines_Type',
                                    'FamilyIllness_Type' => 'FamilyIllness_Type',
                                    'FeatureConflict_Type' => 'FeatureConflict_Type',
                                    'FeatureOptConflict_Type' => 'FeatureOptConflict_Type',
                                    'FeatureOptProduct_Type' => 'FeatureOptProduct_Type',
                                    'FeatureOptRequisite_Type' => 'FeatureOptRequisite_Type',
                                    'FeatureProduct_Type' => 'FeatureProduct_Type',
                                    'FeatureProductInfo_Type' => 'FeatureProductInfo_Type',
                                    'FeatureRequisite_Type' => 'FeatureRequisite_Type',
                                    'FeatureTransactionProduct_Type' => 'FeatureTransactionProduct_Type',
                                    'Fee_Type' => 'Fee_Type',
                                    'FinActivityTypeCC_Type' => 'FinActivityTypeCC_Type',
                                    'FinancialActivity_Type' => 'FinancialActivity_Type',
                                    'FinancialActivityInfo_Type' => 'FinancialActivityInfo_Type',
                                    'FinancialBenefit_Type' => 'FinancialBenefit_Type',
                                    'FinancialExperience_Type' => 'FinancialExperience_Type',
                                    'FinancialGuideline_Type' => 'FinancialGuideline_Type',
                                    'FinancialGuidelines_Type' => 'FinancialGuidelines_Type',
                                    'FinancialStatement_Type' => 'FinancialStatement_Type',
                                    'ForeignTravel_Type' => 'ForeignTravel_Type',
                                    'ForeignTravelGuideline_Type' => 'ForeignTravelGuideline_Type',
                                    'ForeignTravelGuidelines_Type' => 'ForeignTravelGuidelines_Type',
                                    'FormInstance_Type' => 'FormInstance_Type',
                                    'FormInstanceDestination_Type' => 'FormInstanceDestination_Type',
                                    'FormInstanceRequest_Type' => 'FormInstanceRequest_Type',
                                    'FormResponse_Type' => 'FormResponse_Type',
                                    'FreelookInvestRuleProduct_Type' => 'FreelookInvestRuleProduct_Type',
                                    'FundingSourceMethodsAllowed_Type' => 'FundingSourceMethodsAllowed_Type',
                                    'GeographicRegion_Type' => 'GeographicRegion_Type',
                                    'GovtIDInfo_Type' => 'GovtIDInfo_Type',
                                    'GroupCoverage_Type' => 'GroupCoverage_Type',
                                    'GroupCovOption_Type' => 'GroupCovOption_Type',
                                    'Grouping_Type' => 'Grouping_Type',
                                    'GroupPolicy_Type' => 'GroupPolicy_Type',
                                    'HangGlidingExp_Type' => 'HangGlidingExp_Type',
                                    'HealthServiceOption_Type' => 'HealthServiceOption_Type',
                                    'Height2_Type' => 'Height2_Type',
                                    'HHFamilyInsurance_Type' => 'HHFamilyInsurance_Type',
                                    'Holding_Type' => 'Holding_Type',
                                    'HoldingXLat_Type' => 'HoldingXLat_Type',
                                    'Household_Type' => 'Household_Type',
                                    'Identification_Type' => 'Identification_Type',
                                    'IdentityVerification_Type' => 'IdentityVerification_Type',
                                    'IdentityVerificationTypeCC_Type' => 'IdentityVerificationTypeCC_Type',
                                    'IllustrationReportRequest_Type' => 'IllustrationReportRequest_Type',
                                    'IllustrationRequest_Type' => 'IllustrationRequest_Type',
                                    'IllustrationResult_Type' => 'IllustrationResult_Type',
                                    'IllustrationTxn_Type' => 'IllustrationTxn_Type',
                                    'ImpairedOptions_Type' => 'ImpairedOptions_Type',
                                    'IncomeOptConflict_Type' => 'IncomeOptConflict_Type',
                                    'IncomeOptionCC_Type' => 'IncomeOptionCC_Type',
                                    'IncomeOptionInfo_Type' => 'IncomeOptionInfo_Type',
                                    'IncomeOptRequisite_Type' => 'IncomeOptRequisite_Type',
                                    'IncomePayoutProductOption_Type' => 'IncomePayoutProductOption_Type',
                                    'InformationService_Type' => 'InformationService_Type',
                                    'InheritedTimingAllowed_Type' => 'InheritedTimingAllowed_Type',
                                    'InquiryView_Type' => 'InquiryView_Type',
                                    'Integrator_Type' => 'Integrator_Type',
                                    'Intent_Type' => 'Intent_Type',
                                    'Interview_Type' => 'Interview_Type',
                                    'Investment_Type' => 'Investment_Type',
                                    'InvestmentStatement_Type' => 'InvestmentStatement_Type',
                                    'InvestmentStatementDetail_Type' => 'InvestmentStatementDetail_Type',
                                    'InvestmentSubTotalInfo_Type' => 'InvestmentSubTotalInfo_Type',
                                    'InvestPortfolio_Type' => 'InvestPortfolio_Type',
                                    'InvestPortfolioXLat_Type' => 'InvestPortfolioXLat_Type',
                                    'InvestProduct_Type' => 'InvestProduct_Type',
                                    'InvestProductInfo_Type' => 'InvestProductInfo_Type',
                                    'InvestProductInfoXLat_Type' => 'InvestProductInfoXLat_Type',
                                    'InvestProductXLat_Type' => 'InvestProductXLat_Type',
                                    'InvestRuleProduct_Type' => 'InvestRuleProduct_Type',
                                    'InvoiceDetail_Type' => 'InvoiceDetail_Type',
                                    'InvoiceRequirementInfo_Type' => 'InvoiceRequirementInfo_Type',
                                    'IRSPremCalcMethod_Type' => 'IRSPremCalcMethod_Type',
                                    'IssueGenderCC_Type' => 'IssueGenderCC_Type',
                                    'JurisdictionApproval_Type' => 'JurisdictionApproval_Type',
                                    'JurisdictionCC_Type' => 'JurisdictionCC_Type',
                                    'Key_Type' => 'Key_Type',
                                    'KeyDef_Type' => 'KeyDef_Type',
                                    'KeyedValue_Type' => 'KeyedValue_Type',
                                    'Kit_Type' => 'Kit_Type',
                                    'LabTesting_Type' => 'LabTesting_Type',
                                    'LabTestRemark_Type' => 'LabTestRemark_Type',
                                    'LabTestResult_Type' => 'LabTestResult_Type',
                                    'LapseProvision_Type' => 'LapseProvision_Type',
                                    'LevelizationOptionCC_Type' => 'LevelizationOptionCC_Type',
                                    'LevelizationProductOption_Type' => 'LevelizationProductOption_Type',
                                    'License_Type' => 'License_Type',
                                    'Life_Type' => 'Life_Type',
                                    'LifeCanada_Type' => 'LifeCanada_Type',
                                    'LifeParticipant_Type' => 'LifeParticipant_Type',
                                    'LifeProduct_Type' => 'LifeProduct_Type',
                                    'LifeStyleActivity_Type' => 'LifeStyleActivity_Type',
                                    'LifeStyleActivityPeril_Type' => 'LifeStyleActivityPeril_Type',
                                    'LifeStyleViolation_Type' => 'LifeStyleViolation_Type',
                                    'LifeUSA_Type' => 'LifeUSA_Type',
                                    'LifeUSAProduct_Type' => 'LifeUSAProduct_Type',
                                    'LimitVariation_Type' => 'LimitVariation_Type',
                                    'LineOfAuthority_Type' => 'LineOfAuthority_Type',
                                    'LineOfAuthorityCC_Type' => 'LineOfAuthorityCC_Type',
                                    'Loan_Type' => 'Loan_Type',
                                    'LoanActivity_Type' => 'LoanActivity_Type',
                                    'LoanIntMethodCC_Type' => 'LoanIntMethodCC_Type',
                                    'LoanProvision_Type' => 'LoanProvision_Type',
                                    'LoanRestriction_Type' => 'LoanRestriction_Type',
                                    'LoanTypeInfo_Type' => 'LoanTypeInfo_Type',
                                    'LocationRestrictionInfo_Type' => 'LocationRestrictionInfo_Type',
                                    'LogicalCriteria_Type' => 'LogicalCriteria_Type',
                                    'LogicalExpression_Type' => 'LogicalExpression_Type',
                                    'LostCapability_Type' => 'LostCapability_Type',
                                    'ManagedCareOption_Type' => 'ManagedCareOption_Type',
                                    'MannerOfLossOption_Type' => 'MannerOfLossOption_Type',
                                    'Market_Type' => 'Market_Type',
                                    'MedicalCertRestriction_Type' => 'MedicalCertRestriction_Type',
                                    'MedicalCondition_Type' => 'MedicalCondition_Type',
                                    'MedicalConditionGuideline_Type' => 'MedicalConditionGuideline_Type',
                                    'MedicalConditionGuidelines_Type' => 'MedicalConditionGuidelines_Type',
                                    'MedicalEquipment_Type' => 'MedicalEquipment_Type',
                                    'MedicalExam_Type' => 'MedicalExam_Type',
                                    'MedicalPrevention_Type' => 'MedicalPrevention_Type',
                                    'MedicalTransport_Type' => 'MedicalTransport_Type',
                                    'MedicalTreatment_Type' => 'MedicalTreatment_Type',
                                    'MedicalTreatmentGuideline_Type' => 'MedicalTreatmentGuideline_Type',
                                    'MedicalTreatmentGuidelines_Type' => 'MedicalTreatmentGuidelines_Type',
                                    'MedProviderOption_Type' => 'MedProviderOption_Type',
                                    'MetaData_Type' => 'MetaData_Type',
                                    'MIBRequest_Type' => 'MIBRequest_Type',
                                    'MIBServiceDescriptor_Type' => 'MIBServiceDescriptor_Type',
                                    'MIBServiceOptions_Type' => 'MIBServiceOptions_Type',
                                    'MilitaryExp_Type' => 'MilitaryExp_Type',
                                    'MilitaryGuideline_Type' => 'MilitaryGuideline_Type',
                                    'MilitaryGuidelines_Type' => 'MilitaryGuidelines_Type',
                                    'MinBalanceCalcRule_Type' => 'MinBalanceCalcRule_Type',
                                    'MiscellaneousGuideline_Type' => 'MiscellaneousGuideline_Type',
                                    'MiscellaneousGuidelines_Type' => 'MiscellaneousGuidelines_Type',
                                    'NationApproval_Type' => 'NationApproval_Type',
                                    'NatureSubCategoryOption_Type' => 'NatureSubCategoryOption_Type',
                                    'NeedsGuideline_Type' => 'NeedsGuideline_Type',
                                    'NeedsGuidelineRule_Type' => 'NeedsGuidelineRule_Type',
                                    'NonForProvision_Type' => 'NonForProvision_Type',
                                    'NumInvestProduct_Type' => 'NumInvestProduct_Type',
                                    'ObjectTypeCC_Type' => 'ObjectTypeCC_Type',
                                    'ObjectTypeInfo_Type' => 'ObjectTypeInfo_Type',
                                    'OccupationGuideline_Type' => 'OccupationGuideline_Type',
                                    'OccupationGuidelines_Type' => 'OccupationGuidelines_Type',
                                    'OccupationInfo_Type' => 'OccupationInfo_Type',
                                    'OccupClassOption_Type' => 'OccupClassOption_Type',
                                    'OccurrenceLimitInfo_Type' => 'OccurrenceLimitInfo_Type',
                                    'OccurrenceTier_Type' => 'OccurrenceTier_Type',
                                    'OLifEExtension_Type' => 'OLifEExtension_Type',
                                    'Organization_Type' => 'Organization_Type',
                                    'OrganizationFinancialData_Type' => 'OrganizationFinancialData_Type',
                                    'Ownership_Type' => 'Ownership_Type',
                                    'ParachutingExp_Type' => 'ParachutingExp_Type',
                                    'PartialIdentification_Type' => 'PartialIdentification_Type',
                                    'Participant_Type' => 'Participant_Type',
                                    'ParticipantProduct_Type' => 'ParticipantProduct_Type',
                                    'ParticipantRoleCodeCC_Type' => 'ParticipantRoleCodeCC_Type',
                                    'Party_Type' => 'Party_Type',
                                    'PartyXLat_Type' => 'PartyXLat_Type',
                                    'Pay_Type' => 'Pay_Type',
                                    'Payment_Type' => 'Payment_Type',
                                    'PaymentCardInfo_Type' => 'PaymentCardInfo_Type',
                                    'PaymentDeliveryMethInfo_Type' => 'PaymentDeliveryMethInfo_Type',
                                    'PaymentFormCC_Type' => 'PaymentFormCC_Type',
                                    'PaymentFormInfo_Type' => 'PaymentFormInfo_Type',
                                    'PaymentModeMethProduct_Type' => 'PaymentModeMethProduct_Type',
                                    'PaymentReference_Type' => 'PaymentReference_Type',
                                    'PaymentSourceCC_Type' => 'PaymentSourceCC_Type',
                                    'PayoffCondition_Type' => 'PayoffCondition_Type',
                                    'Payout_Type' => 'Payout_Type',
                                    'PayoutChange_Type' => 'PayoutChange_Type',
                                    'PeriodCertainCC_Type' => 'PeriodCertainCC_Type',
                                    'PeriodicBalanceYTDInfo_Type' => 'PeriodicBalanceYTDInfo_Type',
                                    'PermTableRatingCC_Type' => 'PermTableRatingCC_Type',
                                    'PermTableRatingInfo_Type' => 'PermTableRatingInfo_Type',
                                    'Person_Type' => 'Person_Type',
                                    'PersonalAssistance_Type' => 'PersonalAssistance_Type',
                                    'Pharmacy_Type' => 'Pharmacy_Type',
                                    'Phone_Type' => 'Phone_Type',
                                    'Physician_Type' => 'Physician_Type',
                                    'PhysicianInfo_Type' => 'PhysicianInfo_Type',
                                    'Policy_Type' => 'Policy_Type',
                                    'PolicyActivityList_Type' => 'PolicyActivityList_Type',
                                    'PolicyIssueTypeCC_Type' => 'PolicyIssueTypeCC_Type',
                                    'PolicyLoanSummary_Type' => 'PolicyLoanSummary_Type',
                                    'PolicyOptionInfo_Type' => 'PolicyOptionInfo_Type',
                                    'PolicyProduct_Type' => 'PolicyProduct_Type',
                                    'PolicyProductInfo_Type' => 'PolicyProductInfo_Type',
                                    'PolicyProductXLat_Type' => 'PolicyProductXLat_Type',
                                    'PolicyStatement_Type' => 'PolicyStatement_Type',
                                    'PolicyStatementDetail_Type' => 'PolicyStatementDetail_Type',
                                    'PolicyStatusCC_Type' => 'PolicyStatusCC_Type',
                                    'PolicyValues_Type' => 'PolicyValues_Type',
                                    'PreferredReqFulfiller_Type' => 'PreferredReqFulfiller_Type',
                                    'PremiumRate_Type' => 'PremiumRate_Type',
                                    'PrescriptionDrug_Type' => 'PrescriptionDrug_Type',
                                    'PrescriptionDrugInfo_Type' => 'PrescriptionDrugInfo_Type',
                                    'PrescriptionFill_Type' => 'PrescriptionFill_Type',
                                    'PriorLTC_Type' => 'PriorLTC_Type',
                                    'PriorName_Type' => 'PriorName_Type',
                                    'ProcessingInstruction_Type' => 'ProcessingInstruction_Type',
                                    'ProcessVersion_Type' => 'ProcessVersion_Type',
                                    'Producer_Type' => 'Producer_Type',
                                    'ProducerAgreement_Type' => 'ProducerAgreement_Type',
                                    'ProductTypeInfo_Type' => 'ProductTypeInfo_Type',
                                    'PropertyandCasualty_Type' => 'PropertyandCasualty_Type',
                                    'ProviderClassOption_Type' => 'ProviderClassOption_Type',
                                    'ProxyVendor_Type' => 'ProxyVendor_Type',
                                    'QualifiedPlanCC_Type' => 'QualifiedPlanCC_Type',
                                    'QualifiedPlanEntity_Type' => 'QualifiedPlanEntity_Type',
                                    'QualifiedPlanEntityExclude_Type' => 'QualifiedPlanEntityExclude_Type',
                                    'QualifiedPlanOption_Type' => 'QualifiedPlanOption_Type',
                                    'QualitativeResult_Type' => 'QualitativeResult_Type',
                                    'QuantitativeResult_Type' => 'QuantitativeResult_Type',
                                    'RaceTrack_Type' => 'RaceTrack_Type',
                                    'RacingExp_Type' => 'RacingExp_Type',
                                    'RateInfo_Type' => 'RateInfo_Type',
                                    'RateLockInfo_Type' => 'RateLockInfo_Type',
                                    'RateOfReturnInfo_Type' => 'RateOfReturnInfo_Type',
                                    'RateVariation_Type' => 'RateVariation_Type',
                                    'RateVariationByDuration_Type' => 'RateVariationByDuration_Type',
                                    'RateVariationByVolume_Type' => 'RateVariationByVolume_Type',
                                    'RatingAgencyInfo_Type' => 'RatingAgencyInfo_Type',
                                    'ReconciliationDetail_Type' => 'ReconciliationDetail_Type',
                                    'ReconciliationSummary_Type' => 'ReconciliationSummary_Type',
                                    'ReductionScheduleInfo_Type' => 'ReductionScheduleInfo_Type',
                                    'ReferenceRange_Type' => 'ReferenceRange_Type',
                                    'Registration_Type' => 'Registration_Type',
                                    'RegistrationJurisdiction_Type' => 'RegistrationJurisdiction_Type',
                                    'RegulatoryDistAgreement_Type' => 'RegulatoryDistAgreement_Type',
                                    'ReinsuranceInfo_Type' => 'ReinsuranceInfo_Type',
                                    'ReinsuranceRequest_Type' => 'ReinsuranceRequest_Type',
                                    'Rejection_Type' => 'Rejection_Type',
                                    'RelatedParticipantProductInfo_Type' => 'RelatedParticipantProductInfo_Type',
                                    'RelatedRoleCC_Type' => 'RelatedRoleCC_Type',
                                    'RelatedRoleDataCollection_Type' => 'RelatedRoleDataCollection_Type',
                                    'Relation_Type' => 'Relation_Type',
                                    'RelationRoleCodeCC_Type' => 'RelationRoleCodeCC_Type',
                                    'RelationshipCC_Type' => 'RelationshipCC_Type',
                                    'RelationshipInfo_Type' => 'RelationshipInfo_Type',
                                    'RequestBasis_Type' => 'RequestBasis_Type',
                                    'RequirementInfo_Type' => 'RequirementInfo_Type',
                                    'RequisiteInvestProduct_Type' => 'RequisiteInvestProduct_Type',
                                    'RequisiteObjectInfo_Type' => 'RequisiteObjectInfo_Type',
                                    'ResidencyGuideline_Type' => 'ResidencyGuideline_Type',
                                    'ResidencyGuidelines_Type' => 'ResidencyGuidelines_Type',
                                    'RestrictionInfo_Type' => 'RestrictionInfo_Type',
                                    'RestrictOwnerJurisdiction_Type' => 'RestrictOwnerJurisdiction_Type',
                                    'ResultBasis_Type' => 'ResultBasis_Type',
                                    'ResultInfo_Type' => 'ResultInfo_Type',
                                    'ResultsReceiverParty_Type' => 'ResultsReceiverParty_Type',
                                    'ReturnOfPremium_Type' => 'ReturnOfPremium_Type',
                                    'Reward_Type' => 'Reward_Type',
                                    'Rider_Type' => 'Rider_Type',
                                    'RiderProduct_Type' => 'RiderProduct_Type',
                                    'Risk_Type' => 'Risk_Type',
                                    'RiskNotification_Type' => 'RiskNotification_Type',
                                    'RMDCalcMethInfo_Type' => 'RMDCalcMethInfo_Type',
                                    'RoleRelationRestriction_Type' => 'RoleRelationRestriction_Type',
                                    'RoleRestriction_Type' => 'RoleRestriction_Type',
                                    'SafetyEquipment_Type' => 'SafetyEquipment_Type',
                                    'Scenario_Type' => 'Scenario_Type',
                                    'ScenarioParticipant_Type' => 'ScenarioParticipant_Type',
                                    'ScheduledBonus_Type' => 'ScheduledBonus_Type',
                                    'ScheduledChange_Type' => 'ScheduledChange_Type',
                                    'ScheduledPaymentCC_Type' => 'ScheduledPaymentCC_Type',
                                    'Season_Type' => 'Season_Type',
                                    'ServiceModelContact_Type' => 'ServiceModelContact_Type',
                                    'ServiceParameter_Type' => 'ServiceParameter_Type',
                                    'ServiceProtocol_Type' => 'ServiceProtocol_Type',
                                    'ServiceVersion_Type' => 'ServiceVersion_Type',
                                    'SettlementDetail_Type' => 'SettlementDetail_Type',
                                    'SettlementInfo_Type' => 'SettlementInfo_Type',
                                    'SevenPayTestHistory_Type' => 'SevenPayTestHistory_Type',
                                    'ShadowAccount_Type' => 'ShadowAccount_Type',
                                    'SignatureInfo_Type' => 'SignatureInfo_Type',
                                    'SitusInfo_Type' => 'SitusInfo_Type',
                                    'SourceInfo_Type' => 'SourceInfo_Type',
                                    'SourceInvestProduct_Type' => 'SourceInvestProduct_Type',
                                    'SourceOfFundsCC_Type' => 'SourceOfFundsCC_Type',
                                    'SourceOfFundsInfo_Type' => 'SourceOfFundsInfo_Type',
                                    'SpecialTestOrdered_Type' => 'SpecialTestOrdered_Type',
                                    'SpeedDial_Type' => 'SpeedDial_Type',
                                    'SplitPctIncrementsCC_Type' => 'SplitPctIncrementsCC_Type',
                                    'StatusEvent_Type' => 'StatusEvent_Type',
                                    'StatusReceiverParty_Type' => 'StatusReceiverParty_Type',
                                    'SubAccount_Type' => 'SubAccount_Type',
                                    'SubAccountInfo_Type' => 'SubAccountInfo_Type',
                                    'SubAccountStatement_Type' => 'SubAccountStatement_Type',
                                    'SubAccountStatementDetail_Type' => 'SubAccountStatementDetail_Type',
                                    'SubstanceUsage_Type' => 'SubstanceUsage_Type',
                                    'SubstanceUsageGuideline_Type' => 'SubstanceUsageGuideline_Type',
                                    'SubstanceUsageGuidelines_Type' => 'SubstanceUsageGuidelines_Type',
                                    'SubstandardRating_Type' => 'SubstandardRating_Type',
                                    'Superannuation_Type' => 'Superannuation_Type',
                                    'SurrenderChargeSchedule_Type' => 'SurrenderChargeSchedule_Type',
                                    'SystemMessage_Type' => 'SystemMessage_Type',
                                    'Table_Type' => 'Table_Type',
                                    'TableRef_Type' => 'TableRef_Type',
                                    'TargetAgeRestriction_Type' => 'TargetAgeRestriction_Type',
                                    'TargetURL_Type' => 'TargetURL_Type',
                                    'TaxWithholding_Type' => 'TaxWithholding_Type',
                                    'TaxWithholdingProduct_Type' => 'TaxWithholdingProduct_Type',
                                    'TempTableRatingCC_Type' => 'TempTableRatingCC_Type',
                                    'TempTableRatingInfo_Type' => 'TempTableRatingInfo_Type',
                                    'Terrain_Type' => 'Terrain_Type',
                                    'TobaccoUsageGuideline_Type' => 'TobaccoUsageGuideline_Type',
                                    'TobaccoUsageGuidelines_Type' => 'TobaccoUsageGuidelines_Type',
                                    'TrackingInfo_Type' => 'TrackingInfo_Type',
                                    'TransResult_Type' => 'TransResult_Type',
                                    'TravelEvent_Type' => 'TravelEvent_Type',
                                    'TravelLocationRating_Type' => 'TravelLocationRating_Type',
                                    'TravelLocationRatings_Type' => 'TravelLocationRatings_Type',
                                    'TravelLocationRatingsInfo_Type' => 'TravelLocationRatingsInfo_Type',
                                    'TravelPurposeInfo_Type' => 'TravelPurposeInfo_Type',
                                    'TreatmentPurposeInfo_Type' => 'TreatmentPurposeInfo_Type',
                                    'TrustTypeCC_Type' => 'TrustTypeCC_Type',
                                    'TXLifeNotify_Type' => 'TXLifeNotify_Type',
                                    'TXLifeRequest_Type' => 'TXLifeRequest_Type',
                                    'TXLifeResponse_Type' => 'TXLifeResponse_Type',
                                    'UltraliteExp_Type' => 'UltraliteExp_Type',
                                    'UndClassGuidelineInfo_Type' => 'UndClassGuidelineInfo_Type',
                                    'UnderwaterDivingExp_Type' => 'UnderwaterDivingExp_Type',
                                    'UnderwritingClassGuideline_Type' => 'UnderwritingClassGuideline_Type',
                                    'UnderwritingClassProduct_Type' => 'UnderwritingClassProduct_Type',
                                    'UnderwritingClassProductXLat_Type' => 'UnderwritingClassProductXLat_Type',
                                    'UnderwritingGuidelines_Type' => 'UnderwritingGuidelines_Type',
                                    'UnderwritingResult_Type' => 'UnderwritingResult_Type',
                                    'UnderwritingReview_Type' => 'UnderwritingReview_Type',
                                    'UnionInvolvementInfo_Type' => 'UnionInvolvementInfo_Type',
                                    'UrineTemperature_Type' => 'UrineTemperature_Type',
                                    'URL_Type' => 'URL_Type',
                                    'UserAuthentication_Type' => 'UserAuthentication_Type',
                                    'UserAuthRequest_Type' => 'UserAuthRequest_Type',
                                    'UserAuthResponse_Type' => 'UserAuthResponse_Type',
                                    'UserPswd_Type' => 'UserPswd_Type',
                                    'Values_Type' => 'Values_Type',
                                    'Vector_Type' => 'Vector_Type',
                                    'VectorItem_Type' => 'VectorItem_Type',
                                    'VectorRequest_Type' => 'VectorRequest_Type',
                                    'VendorApp_Type' => 'VendorApp_Type',
                                    'VerificationRequirement_Type' => 'VerificationRequirement_Type',
                                    'VerifierParticipant_Type' => 'VerifierParticipant_Type',
                                    'Violation_Type' => 'Violation_Type',
                                    'Weight2_Type' => 'Weight2_Type',
                                    'WeightHistory_Type' => 'WeightHistory_Type',
                                    'WorkLocation_Type' => 'WorkLocation_Type',
                                    'EnumeratedValue_Type' => 'EnumeratedValue_Type',
                                    'KeyValue_Type' => 'KeyValue_Type',
                                    'PropertyValue_Type' => 'PropertyValue_Type',
                                    'V_Type' => 'V_Type',
                                    'VendorName_Type' => 'VendorName_Type',
                                    'Y_Type' => 'Y_Type',
                                   );

  public function AcordLifeBasic_Service($wsdl = "http://213.33.168.45:8082/txlife.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param TXLife_Type $TXLifeRequest_Part
   * @return TXLife_Type
   */
  public function TXLife(TXLife_Type $TXLifeRequest_Part) {
    return $this->__soapCall('TXLife', array($TXLifeRequest_Part),       array(
            'uri' => 'http://www.rsins.ru/esb/SOAPGateway/ACORD.org/Standards/Life/2/wsdl/AcordLifeBasic',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Retrieve_Type $Retrieve_Part
   * @return TXLife_Type
   */
  public function TXLifeTransmittal(Retrieve_Type $Retrieve_Part) {
    return $this->__soapCall('TXLifeTransmittal', array($Retrieve_Part),       array(
            'uri' => 'http://www.rsins.ru/esb/SOAPGateway/ACORD.org/Standards/Life/2/wsdl/AcordLifeBasic',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param Ping_Type $Ping_Part
   * @return Acknowledgement_Type
   */
  public function Ping(Ping_Type $Ping_Part) {
    return $this->__soapCall('Ping', array($Ping_Part),       array(
            'uri' => 'http://www.rsins.ru/esb/SOAPGateway/ACORD.org/Standards/Life/2/wsdl/AcordLifeBasic',
            'soapaction' => ''
           )
      );
  }

}

?>
