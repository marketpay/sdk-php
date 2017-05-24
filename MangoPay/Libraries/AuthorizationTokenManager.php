<?php
namespace MangoPay\Libraries;

/**
* Authorization token manager
*/
class AuthorizationTokenManager extends ApiBase
{
    /**
     * Storage object
     * @var \MangoPay\Libraries\IStorageStrategy
     */
    private $_storageStrategy;
    
    public function __construct($root)
    {
        $this->_root = $root;

        $this->RegisterCustomStorageStrategy(new DefaultStorageStrategy($this->_root->Config));
    }
    
    /**
     * Gets the current authorization token.
     * In the very first call, this method creates a new token before returning.
     * If currently stored token is expired, this method creates a new one.
     * @return \MangoPay\Libraries\OAuthToken Valid OAuthToken instance.
     */
    public function GetToken($autenticationKey)
    {
        $token = $this->_storageStrategy->Get();
        
        if (is_null($token) || false === $token || $token->IsExpired() || $token->GetAutenticationKey() != $autenticationKey) {
            $this->StoreToken($this->_root->AuthenticationManager->CreateToken());
        }
    
        return $this->_storageStrategy->Get();
    }
    
    /**
     * Stores authorization token passed as an argument in the underlying
     * storage strategy implementation.
     * @param \MangoPay\Libraries\OAuthToken $token Token instance to be stored.
     */
    public function StoreToken($token)
    {
        $this->_storageStrategy->Store($token);
    }
    
    /**
     * Registers custom storage strategy implementation.
     * By default, the DefaultStorageStrategy instance is used.
     * There is no need to explicitly call this method until some more complex
     * storage implementation is needed.
     * @param \MangoPay\Libraries\IStorageStrategy $customStorageStrategy IStorageStrategy interface implementation.
     */
    public function RegisterCustomStorageStrategy($customStorageStrategy)
    {
        $this->_storageStrategy = $customStorageStrategy;
    }
}
