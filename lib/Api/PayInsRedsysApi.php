<?php
/**
 * PayInsRedsysApi
 * PHP version 5
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MarketPay API
 *
 * API for Smart Contracts and Payments
 *
 * OpenAPI spec version: v2.01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MarketPay\Api;

use \MarketPay\ApiClient;
use \MarketPay\ApiException;
use \MarketPay\Configuration;
use \MarketPay\ObjectSerializer;

/**
 * PayInsRedsysApi Class Doc Comment
 *
 * @category Class
 * @package  MarketPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayInsRedsysApi
{
    /**
     * API Client
     *
     * @var \MarketPay\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \MarketPay\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\MarketPay\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \MarketPay\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \MarketPay\ApiClient $apiClient set the API client
     *
     * @return PayInsRedsysApi
     */
    public function setApiClient(\MarketPay\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation payInsRedsysRedsysGetPayment
     *
     * View a Redsys payment
     *
     * @param int $pay_in_id The Id of a payment (required)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\RedsysPayInsResponse
     */
    public function payInsRedsysRedsysGetPayment($pay_in_id)
    {
        list($response) = $this->payInsRedsysRedsysGetPaymentWithHttpInfo($pay_in_id);
        return $response;
    }

    /**
     * Operation payInsRedsysRedsysGetPaymentWithHttpInfo
     *
     * View a Redsys payment
     *
     * @param int $pay_in_id The Id of a payment (required)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\RedsysPayInsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsRedsysRedsysGetPaymentWithHttpInfo($pay_in_id)
    {
        // verify the required parameter 'pay_in_id' is set
        if ($pay_in_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pay_in_id when calling payInsRedsysRedsysGetPayment');
        }
        // parse inputs
        $resourcePath = "/v2.01/PayInsRedsys/payments/{PayInId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($pay_in_id !== null) {
            $resourcePath = str_replace(
                "{" . "PayInId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pay_in_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\RedsysPayInsResponse',
                '/v2.01/PayInsRedsys/payments/{PayInId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\RedsysPayInsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\RedsysPayInsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\CustomApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation payInsRedsysRedsysGetPreauthorization
     *
     * View a Redsys Preauthorization
     *
     * @param int $preauthorization_id The Id of a Redsys Preauthorization (required)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\RedsysPreauthorizeResponse
     */
    public function payInsRedsysRedsysGetPreauthorization($preauthorization_id)
    {
        list($response) = $this->payInsRedsysRedsysGetPreauthorizationWithHttpInfo($preauthorization_id);
        return $response;
    }

    /**
     * Operation payInsRedsysRedsysGetPreauthorizationWithHttpInfo
     *
     * View a Redsys Preauthorization
     *
     * @param int $preauthorization_id The Id of a Redsys Preauthorization (required)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\RedsysPreauthorizeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsRedsysRedsysGetPreauthorizationWithHttpInfo($preauthorization_id)
    {
        // verify the required parameter 'preauthorization_id' is set
        if ($preauthorization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $preauthorization_id when calling payInsRedsysRedsysGetPreauthorization');
        }
        // parse inputs
        $resourcePath = "/v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($preauthorization_id !== null) {
            $resourcePath = str_replace(
                "{" . "PreauthorizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($preauthorization_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\RedsysPreauthorizeResponse',
                '/v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\RedsysPreauthorizeResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\RedsysPreauthorizeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\CustomApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation payInsRedsysRedsysPostPaymentByWeb
     *
     * Create a Redsys PayIn Request
     *
     * @param string $x_webhook  (optional)
     * @param \MarketPay\Model\RedsysPayByWebPost $redsys_pay_in Redsys PayIn Request Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\RedsysPayByWebResponse
     */
    public function payInsRedsysRedsysPostPaymentByWeb($x_webhook = null, $redsys_pay_in = null)
    {
        list($response) = $this->payInsRedsysRedsysPostPaymentByWebWithHttpInfo($x_webhook, $redsys_pay_in);
        return $response;
    }

    /**
     * Operation payInsRedsysRedsysPostPaymentByWebWithHttpInfo
     *
     * Create a Redsys PayIn Request
     *
     * @param string $x_webhook  (optional)
     * @param \MarketPay\Model\RedsysPayByWebPost $redsys_pay_in Redsys PayIn Request Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\RedsysPayByWebResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsRedsysRedsysPostPaymentByWebWithHttpInfo($x_webhook = null, $redsys_pay_in = null)
    {
        // parse inputs
        $resourcePath = "/v2.01/PayInsRedsys/payments/web";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        // header params
        if ($x_webhook !== null) {
            $headerParams['X-Webhook'] = $this->apiClient->getSerializer()->toHeaderValue($x_webhook);
        }
        // body params
        $_tempBody = null;
        if (isset($redsys_pay_in)) {
            $_tempBody = $redsys_pay_in;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\RedsysPayByWebResponse',
                '/v2.01/PayInsRedsys/payments/web'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\RedsysPayByWebResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\RedsysPayByWebResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\CustomApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation payInsRedsysRedsysPostPreauthorizationByWeb
     *
     * Create a Redsys Preauthorization Request
     *
     * @param \MarketPay\Model\RedsysPreauthorizeByWebPost $redsys_preauthorization RedsysPreauthorization Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\RedsysPreauthorizeByWebResponse
     */
    public function payInsRedsysRedsysPostPreauthorizationByWeb($redsys_preauthorization = null)
    {
        list($response) = $this->payInsRedsysRedsysPostPreauthorizationByWebWithHttpInfo($redsys_preauthorization);
        return $response;
    }

    /**
     * Operation payInsRedsysRedsysPostPreauthorizationByWebWithHttpInfo
     *
     * Create a Redsys Preauthorization Request
     *
     * @param \MarketPay\Model\RedsysPreauthorizeByWebPost $redsys_preauthorization RedsysPreauthorization Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\RedsysPreauthorizeByWebResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsRedsysRedsysPostPreauthorizationByWebWithHttpInfo($redsys_preauthorization = null)
    {
        // parse inputs
        $resourcePath = "/v2.01/PayInsRedsys/preauthorizations/web";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        // body params
        $_tempBody = null;
        if (isset($redsys_preauthorization)) {
            $_tempBody = $redsys_preauthorization;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\RedsysPreauthorizeByWebResponse',
                '/v2.01/PayInsRedsys/preauthorizations/web'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\RedsysPreauthorizeByWebResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\RedsysPreauthorizeByWebResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\CustomApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation payInsRedsysRedsysPostPreauthorizationCancellation
     *
     * Cancels a Preauthorization
     *
     * @param int $preauthorization_id The Id of a Redsys Preauthorization (required)
     * @param \MarketPay\Model\RedsysPreauthorizationCancellationPost $redsys_preauthorization_cancellation PreauthorizationCancellation Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\RedsysPreauthorizationCancellationResponse
     */
    public function payInsRedsysRedsysPostPreauthorizationCancellation($preauthorization_id, $redsys_preauthorization_cancellation = null)
    {
        list($response) = $this->payInsRedsysRedsysPostPreauthorizationCancellationWithHttpInfo($preauthorization_id, $redsys_preauthorization_cancellation);
        return $response;
    }

    /**
     * Operation payInsRedsysRedsysPostPreauthorizationCancellationWithHttpInfo
     *
     * Cancels a Preauthorization
     *
     * @param int $preauthorization_id The Id of a Redsys Preauthorization (required)
     * @param \MarketPay\Model\RedsysPreauthorizationCancellationPost $redsys_preauthorization_cancellation PreauthorizationCancellation Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\RedsysPreauthorizationCancellationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsRedsysRedsysPostPreauthorizationCancellationWithHttpInfo($preauthorization_id, $redsys_preauthorization_cancellation = null)
    {
        // verify the required parameter 'preauthorization_id' is set
        if ($preauthorization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $preauthorization_id when calling payInsRedsysRedsysPostPreauthorizationCancellation');
        }
        // parse inputs
        $resourcePath = "/v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}/cancellation";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        // path params
        if ($preauthorization_id !== null) {
            $resourcePath = str_replace(
                "{" . "PreauthorizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($preauthorization_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($redsys_preauthorization_cancellation)) {
            $_tempBody = $redsys_preauthorization_cancellation;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\RedsysPreauthorizationCancellationResponse',
                '/v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}/cancellation'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\RedsysPreauthorizationCancellationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\RedsysPreauthorizationCancellationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\CustomApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation payInsRedsysRedsysPostPreauthorizationConfirmation
     *
     * Confirms a Preauthorization
     *
     * @param int $preauthorization_id The Id of a Redsys Preauthorization (required)
     * @param \MarketPay\Model\RedsysPreauthorizationConfirmationPost $redsys_preauthorization_confirmation PreauthorizationConfirmation Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\RedsysPreauthorizationConfirmationResponse
     */
    public function payInsRedsysRedsysPostPreauthorizationConfirmation($preauthorization_id, $redsys_preauthorization_confirmation = null)
    {
        list($response) = $this->payInsRedsysRedsysPostPreauthorizationConfirmationWithHttpInfo($preauthorization_id, $redsys_preauthorization_confirmation);
        return $response;
    }

    /**
     * Operation payInsRedsysRedsysPostPreauthorizationConfirmationWithHttpInfo
     *
     * Confirms a Preauthorization
     *
     * @param int $preauthorization_id The Id of a Redsys Preauthorization (required)
     * @param \MarketPay\Model\RedsysPreauthorizationConfirmationPost $redsys_preauthorization_confirmation PreauthorizationConfirmation Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\RedsysPreauthorizationConfirmationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsRedsysRedsysPostPreauthorizationConfirmationWithHttpInfo($preauthorization_id, $redsys_preauthorization_confirmation = null)
    {
        // verify the required parameter 'preauthorization_id' is set
        if ($preauthorization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $preauthorization_id when calling payInsRedsysRedsysPostPreauthorizationConfirmation');
        }
        // parse inputs
        $resourcePath = "/v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}/confirmation";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        // path params
        if ($preauthorization_id !== null) {
            $resourcePath = str_replace(
                "{" . "PreauthorizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($preauthorization_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($redsys_preauthorization_confirmation)) {
            $_tempBody = $redsys_preauthorization_confirmation;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\RedsysPreauthorizationConfirmationResponse',
                '/v2.01/PayInsRedsys/preauthorizations/{PreauthorizationId}/confirmation'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\RedsysPreauthorizationConfirmationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\RedsysPreauthorizationConfirmationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\CustomApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation payInsRedsysRedsysPostRefund
     *
     * Create a Redsys Payment Refund
     *
     * @param int $pay_in_id The Id of a PayIn (required)
     * @param \MarketPay\Model\RedsysRefundPost $redsys_refund Refund Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return \MarketPay\Model\RedsysRefundResponse
     */
    public function payInsRedsysRedsysPostRefund($pay_in_id, $redsys_refund = null)
    {
        list($response) = $this->payInsRedsysRedsysPostRefundWithHttpInfo($pay_in_id, $redsys_refund);
        return $response;
    }

    /**
     * Operation payInsRedsysRedsysPostRefundWithHttpInfo
     *
     * Create a Redsys Payment Refund
     *
     * @param int $pay_in_id The Id of a PayIn (required)
     * @param \MarketPay\Model\RedsysRefundPost $redsys_refund Refund Object params (optional)
     * @throws \MarketPay\ApiException on non-2xx response
     * @return array of \MarketPay\Model\RedsysRefundResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function payInsRedsysRedsysPostRefundWithHttpInfo($pay_in_id, $redsys_refund = null)
    {
        // verify the required parameter 'pay_in_id' is set
        if ($pay_in_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pay_in_id when calling payInsRedsysRedsysPostRefund');
        }
        // parse inputs
        $resourcePath = "/v2.01/PayInsRedsys/payments/{PayInId}/refunds";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['text/plain', 'application/json', 'text/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']);

        // path params
        if ($pay_in_id !== null) {
            $resourcePath = str_replace(
                "{" . "PayInId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pay_in_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($redsys_refund)) {
            $_tempBody = $redsys_refund;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\MarketPay\Model\RedsysRefundResponse',
                '/v2.01/PayInsRedsys/payments/{PayInId}/refunds'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\MarketPay\Model\RedsysRefundResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\RedsysRefundResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\MarketPay\Model\CustomApiErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
