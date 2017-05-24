<?php
namespace MangoPay;

/**
 * Class to management MangoPay API for hooks and notifications
 */
class ApiHooks extends Libraries\ApiBase
{
    /**
     * Create new hook
     * @param Hook $hook
     * @return \MangoPay\Hook Hook object returned from API
     */
    public function Create($hook, $idempotencyKey = null)
    {
        return $this->CreateObject('hooks_create', $hook, '\MangoPay\Hook', null, null, $idempotencyKey);
    }
    
    /**
     * Get hook
     * @param string $hookId Hook identifier
     * @return \MangoPay\Hook Wallet object returned from API
     */
    public function Get($hookId)
    {
        return $this->GetObject('hooks_get', $hookId, '\MangoPay\Hook');
    }
    
    /**
     * Save hook
     * @param \MangoPay\Hook $hook Hook object to save
     * @return \MangoPay\Hook Hook object returned from API
     */
    public function Update($hook)
    {
        return $this->SaveObject('hooks_save', $hook, '\MangoPay\Hook');
    }
    
    /**
     * Get all hooks
     * @param \MangoPay\Pagination $pagination Pagination object
     * @return \MangoPay\Hook[] Array with objects returned from API
     */
    public function GetAll(& $pagination = null)
    {
        return $this->GetList('hooks_all', $pagination, '\MangoPay\Hook');
    }
}
