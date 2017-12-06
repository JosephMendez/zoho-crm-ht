<?php
namespace JosephMendez\ZohoCRMClient\Exception;

use JosephMendez\ZohoCRMClient\ZohoError;

/**
 * Exception to thrown ZohoError objects
 */
class ZohoErrorException extends Exception
{
    private $error;

    public function __construct(ZohoError $error)
    {
        $this->error = $error;
        parent::__construct($error->getDescription());
    }

    /**
     * @return ZohoError
     */
    public function getError()
    {
        return $this->error;
    }
}
