<?php


namespace Office365\Runtime;


/**
 * Represents a Service Operation result value.
 */
class ClientResult
{

    function __construct($returnValue=null)
    {
        $this->value = $returnValue;
    }

    public function setProperty($key, $value){
        if($this->value instanceof ClientObject || $this->value instanceof ClientValueObject) {
            $this->value->setProperty($key,$value,False);
        }
        else {
            $this->value = $value;
        }
    }

    public function getValue(){
        return $this->value;
    }

    /**
     * @var $value
     */
    protected $value;

}
