<?php
namespace MangoPay;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * MangoPay API main entry point.
 * Provides managers to connect, send and read data from MangoPay API
 * as well as holds configuration/authorization data.
 */
class MangoPayApi
{
    /////////////////////////////////////////////////
    // Config/authorization related props
    /////////////////////////////////////////////////

    /**
     * Authorization token methods
     * @var \MangoPay\Libraries\AuthorizationTokenManager
     */
    public $OAuthTokenManager;

    /**
     * Configuration instance
     * @var \MangoPay\Libraries\Configuration
     */
    public $Config;
    
    /////////////////////////////////////////////////
    // API managers props
    /////////////////////////////////////////////////

    /**
     * OAuth methods
     * @var \MangoPay\Libraries\ApiOAuth
     */
    public $AuthenticationManager;
    
    /**
     * Provides responses methods
     * @var ApiResponses 
     */
    public $Responses;

    /**
     * Clients methods
     * @var ApiClients
     */
    public $Clients;
    
    /**
     * Users methods
     * @var ApiUsers
     */
    public $Users;
    
    /**
     * Wallets methods
     * @var ApiWallets
     */
    public $Wallets;
        
    /**
     * Transfers methods
     * @var ApiTransfers
     */
    public $Transfers;
    
    /**
     * Pay-in methods
     * @var ApiPayIns
     */
    public $PayIns;
    
    /**
     * Pay-out methods
     * @var ApiPayOuts
     */
    public $PayOuts;
        
    /**
     * Refund methods
     * @var ApiRefunds
     */
    public $Refunds;
        
    /**
     * Card registration methods
     * @var ApiCardRegistrations
     */
    public $CardRegistrations;
        
    /**
     * Pre-authorization methods
     * @var ApiCardPreAuthorizations
     */
    public $CardPreAuthorizations;
        
    /**
     * Card methods
     * @var ApiCards
     */
    public $Cards;
    
    /**
     * Events methods
     * @var ApiEvents
     */
    public $Events;
    
    /**
     * Hooks methods
     * @var ApiHooks
     */
    public $Hooks;
    
    /**
     * Kyc documents list
     * @var ApiKycDocuments
     */
    public $KycDocuments;
    
    /**
     * Provides disputes methods
     * @var ApiDisputes 
     */
    public $Disputes;
    
    /**
     * Provides dispute documents methods
     * @var ApiDisputeDocuments 
     */
    public $DisputeDocuments;
    
    /**
     * Provides dispute documents methods
     * @var ApiMandates 
     */
    public $Mandates;
    /**
     * Provides reports request methods
     * @var ApiReports 
     */
    public $Reports;

    /**
     * @var LoggerInterface
     */
    public $logger;

    /**
     * Constructor
     */
    public function __construct()
    {

        // default config setup
        $this->Config = new Libraries\Configuration();
        $this->OAuthTokenManager = new Libraries\AuthorizationTokenManager($this);
        
        // API managers
        $this->AuthenticationManager = new Libraries\ApiOAuth($this);
        $this->Responses = new ApiResponses($this);
        $this->Clients = new ApiClients($this);
        $this->Users = new ApiUsers($this);
        $this->Wallets = new ApiWallets($this);
        $this->Transfers = new ApiTransfers($this);
        $this->PayIns = new ApiPayIns($this);
        $this->PayOuts = new ApiPayOuts($this);
        $this->Refunds = new ApiRefunds($this);
        $this->CardRegistrations = new ApiCardRegistrations($this);
        $this->Cards = new ApiCards($this);
        $this->Events = new ApiEvents($this);
        $this->Hooks = new ApiHooks($this);
        $this->CardPreAuthorizations = new ApiCardPreAuthorizations($this);
        $this->KycDocuments = new ApiKycDocuments($this);
        $this->Disputes = new ApiDisputes($this);
        $this->DisputeDocuments = new ApiDisputeDocuments($this);
        $this->Mandates = new ApiMandates($this);
        $this->Reports = new ApiReports($this);

        // Setting default NullLogger
        $this->logger = new NullLogger();
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        return $this->logger;
    }
}