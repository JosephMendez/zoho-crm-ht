<?php
namespace JosephMendez\ZohoCRMClient\Request;

use JosephMendez\ZohoCRMClient\Transport\TransportRequest;

/**
 * All public API requests implement this interface
 */
interface RequestInterface
{
    /**
     * @param TransportRequest $request
     */
    public function __construct(TransportRequest $request);

    /**
     * @return array
     */
    public function request();
}
