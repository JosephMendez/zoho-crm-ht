<?php
namespace JosephMendez\ZohoCRMClient\Request;

use JosephMendez\ZohoCRMClient\Exception\NoDataException;
use JosephMendez\ZohoCRMClient\Exception\UnexpectedValueException;
use JosephMendez\ZohoCRMClient\Response\Record;
use JosephMendez\ZohoCRMClient\Transport\TransportRequest;

abstract class AbstractRequest implements RequestInterface
{
    /** @var TransportRequest */
    protected $request;

    public function __construct(TransportRequest $request)
    {
        $this->request = $request;
        $this->configureRequest();
    }

    /**
     * @throws UnexpectedValueException
     * @return Record[]|Field[]
     */
    public function request()
    {
        try {
            return $this->request->request();
        } catch (NoDataException $e) {
            return array();
        }
    }

    abstract protected function configureRequest();
}
