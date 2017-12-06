<?php
namespace JosephMendez\JZohoCRMClient\Request;

use JosephMendez\JZohoCRMClient\Exception\NoDataException;
use JosephMendez\JZohoCRMClient\Exception\UnexpectedValueException;
use JosephMendez\JZohoCRMClient\Response\Record;
use JosephMendez\JZohoCRMClient\Transport\TransportRequest;

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
