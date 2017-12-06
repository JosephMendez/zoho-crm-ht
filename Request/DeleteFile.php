<?php
namespace JosephMendez\ZohoCRMClient\Request;

use JosephMendez\ZohoCRMClient\Response\MutationResult;

/**
 * DeleteFile API Call
 *
 * You can use this method to delete files attached to records
 *
 * @see https://www.zoho.com/crm/help/api/deletefile.html
 */

class DeleteFile extends AbstractRequest
{
    protected function configureRequest()
    {
        $this->request
            ->setMethod('deleteFile');
    }

    /**
     * Set the file id to delete
     *
     * @param $id
     * @return DeleteFile
     */
    public function id($id){
        $this->request->setParam('id', $id);
        return $this;
    }

    /**
     * @return MutationResult
     */
    public function request()
    {
        return $this->request
            ->request();
    }
}
