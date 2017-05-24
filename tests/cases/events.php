<?php
namespace MangoPay\Tests;
require_once 'base.php';

/**
 * Tests methods for events
 */
class Events extends Base {
    
    function test_GetEventList_PayinNormalCreated() {
        $payIn = $this->getJohnsPayInCardWeb();
        $filter = new \MangoPay\FilterEvents();
        $filter->BeforeDate = $payIn->CreationDate;
        $filter->AfterDate = $payIn->CreationDate;
        $filter->EventType = \MangoPay\EventType::PayinNormalCreated;
        $pagination = new \MangoPay\Pagination();

        $result = $this->_api->Events->GetAll($pagination, $filter);

        $this->assertTrue(count($result) > 0);
        $this->assertTrue($this->ExistEventById($result, $payIn->Id));        
    }
    
    function test_GetEventList_PayinNormalSucceeded() {
        $payIn = $this->getNewPayInCardDirect();
        $filter = new \MangoPay\FilterEvents();
        $filter->BeforeDate = $payIn->ExecutionDate + 10;
        $filter->AfterDate = $payIn->CreationDate - 10;
        $filter->EventType = \MangoPay\EventType::PayinNormalSucceeded;
        $pagination = new \MangoPay\Pagination();

        $result = $this->_api->Events->GetAll($pagination, $filter);

        $this->assertTrue(count($result) > 0);
        $this->assertTrue($this->ExistEventById($result, $payIn->Id));        
    }
    
    function test_GetEventList_PayoutNormalCreated() {
        $payOut = $this->getJohnsPayOutBankWire();
        $filter = new \MangoPay\FilterEvents();
        $filter->BeforeDate = $payOut->CreationDate + 10;
        $filter->AfterDate = $payOut->CreationDate - 10;
        $filter->EventType = \MangoPay\EventType::PayoutNormalCreated;
        $pagination = new \MangoPay\Pagination();

        $result = $this->_api->Events->GetAll($pagination, $filter);

        $this->assertTrue(count($result) > 0);
        $this->assertTrue($this->ExistEventById($result, $payOut->Id));        
    }
    
    function test_GetKycDocumentsList_KycCreated(){
        $user = $this->getJohn();
        $kycDocumentInit = new \MangoPay\KycDocument();
        $kycDocumentInit->Status = \MangoPay\KycDocumentStatus::Created;
        $kycDocumentInit->Type = \MangoPay\KycDocumentType::IdentityProof;
        $kycDocument = $this->_api->Users->CreateKycDocument($user->Id, $kycDocumentInit);
        $filter = new \MangoPay\FilterEvents();
        $filter->BeforeDate = $kycDocument->CreationDate + 10;
        $filter->AfterDate = $kycDocument->CreationDate - 10;
        $filter->EventType = \MangoPay\EventType::KycCreated;
        $pagination = new \MangoPay\Pagination();

        $result = $this->_api->Events->GetAll($pagination, $filter);

        $this->assertTrue(count($result) > 0);
        $this->assertTrue($this->ExistEventById($result, $kycDocument->Id)); 
    }
    
    function test_Events_GetAll_SortByCreationDate() {
        self::$JohnsPayInCardWeb = null;
        $payIn1 = $this->getJohnsPayInCardWeb();
        self::$JohnsPayInCardWeb = null;
        $payIn2 = $this->getJohnsPayInCardWeb();
        
        $filter = new \MangoPay\FilterEvents();
        $filter->BeforeDate = $payIn2->CreationDate + 10;
        $filter->AfterDate = $payIn1->CreationDate - 10;
        $filter->EventType = \MangoPay\EventType::PayinNormalCreated;
        $sorting = new \MangoPay\Sorting();
        $sorting->AddField("Date", \MangoPay\SortDirection::DESC);
        $pagination = new \MangoPay\Pagination();

        $result = $this->_api->Events->GetAll($pagination, $filter, $sorting);
 
        $this->assertTrue($result[0]->Date > $result[1]->Date);
    }
    
    private function ExistEventById($eventList, $eventId) {
        
        foreach ($eventList as $event) {
            if ($event->ResourceId == $eventId) {
                return true;
            }
        }
        
        return false;
    }
}