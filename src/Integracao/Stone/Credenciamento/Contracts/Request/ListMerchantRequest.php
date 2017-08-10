<?php

namespace Integracao\Stone\Credenciamento\Contracts\Request;

use Integracao\Stone\Credenciamento\Contracts\Credential;

/**
 * Class ListMerchantRequest
 * @package Integracao\Stone\Credenciamento\Contracts\Request
 */
class ListMerchantRequest implements \JsonSerializable
{
    /**
     * @var Credential
     */
    private $credential;

    /**
     * @var bool
     */
    private $bypassCreditAnalysis = false;

    /**
     * @var string
     */
    private $language;

    /**
     * @var array
     */
    private $queryExpression;

    /**
     * @var array
     */
    private $orderBy;

    /**
     * @var integer
     */
    private $pageNumber;

    /**
     * @var integer
     */
    private $rowsPerPage;

    /**
     * @return Credential
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * @param Credential $credential
     * @return ListMerchantRequest
     */
    public function setCredential($credential)
    {
        $this->credential = $credential;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBypassCreditAnalysis()
    {
        return $this->bypassCreditAnalysis;
    }

    /**
     * @param bool $bypassCreditAnalysis
     * @return ListMerchantRequest
     */
    public function setBypassCreditAnalysis($bypassCreditAnalysis)
    {
        $this->bypassCreditAnalysis = $bypassCreditAnalysis;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return ListMerchantRequest
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return array
     */
    public function getQueryExpression()
    {
        return $this->queryExpression;
    }

    /**
     * @param array $queryExpression
     * @return ListMerchantRequest
     */
    public function setQueryExpression($queryExpression)
    {
        $this->queryExpression = $queryExpression;
        return $this;
    }

    /**
     * @return array
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @param array $orderBy
     * @return ListMerchantRequest
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return ListMerchantRequest
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getRowsPerPage()
    {
        return $this->rowsPerPage;
    }

    /**
     * @param int $rowsPerPage
     * @return ListMerchantRequest
     */
    public function setRowsPerPage($rowsPerPage)
    {
        $this->rowsPerPage = $rowsPerPage;
        return $this;
    }

    function jsonSerialize()
    {
        return [
            'Credential' => $this->credential,
            'BypassCreditAnalysis' => $this->bypassCreditAnalysis,
            'Language' => $this->language,
            'QueryExpression' => $this->queryExpression,
            'OrderBy' => $this->orderBy,
            'PageNumber' => $this->pageNumber,
            'RowsPerPage' => $this->rowsPerPage
        ];
    }

}