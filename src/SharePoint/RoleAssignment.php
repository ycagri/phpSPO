<?php

/**
 * Updated By PHP Office365 Generator 2019-11-16T16:48:41+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\DeleteEntityQuery;
use Office365\Runtime\UpdateEntityQuery;
use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * Specifies 
 * the role 
 * assignments for a user or group on a securable 
 * object. 
 */
class RoleAssignment extends ClientObject
{
    /**
     * Updates Role Assignment
     */
    public function update()
    {
        $qry = new UpdateEntityQuery($this);
        $this->getContext()->addQueryAndResultObject($qry, $this);
    }
    /**
     * Deletes Role Assignment
     */
    public function deleteObject()
    {
        $qry = new DeleteEntityQuery($this);
        $this->getContext()->addQuery($qry);
    }
    /**
     * @return Principal
     */
    public function getMember()
    {
        if (!$this->isPropertyAvailable("Member")) {
            $this->setProperty("Member", new Principal($this->getContext(),
                new ResourcePath("Member", $this->getResourcePath())));
        }
        return $this->getProperty("Member");
    }


    /**
     * Gets
     * the identifier of the user or group corresponding
     * to the role assignment.<79>
     * @return integer
     */
    public function getPrincipalId()
    {
        return $this->getProperty("PrincipalId");
    }
    /**
     * Sets
     * the identifier of the user or group corresponding 
     * to the role assignment.<79>
     * @var integer
     */
    public function setPrincipalId($value)
    {
        $this->setProperty("PrincipalId", $value, true);
    }
    /**
     * Specifies 
     * a collection of role definitions for 
     * this role 
     * assignment.It MUST 
     * NOT be NULL. 
     * @return RoleDefinitionCollection
     */
    public function getRoleDefinitionBindings()
    {
        if (!$this->isPropertyAvailable("RoleDefinitionBindings")) {
            $this->setProperty("RoleDefinitionBindings", new RoleDefinitionCollection($this->getContext(),
                new ResourcePath("RoleDefinitionBindings", $this->getResourcePath())));
        }
        return $this->getProperty("RoleDefinitionBindings");
    }
}