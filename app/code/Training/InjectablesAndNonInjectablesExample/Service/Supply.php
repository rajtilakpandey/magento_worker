<?php
namespace Training\InjectablesAndNonInjectablesExample\Service;

use Training\InjectablesAndNonInjectablesExample\Model\Supplier;

class Supply
{   
    protected Supplier $supplier;
    public function __construct(Supplier $supplier) 
    {   
        $this->supplier = $supplier;        
    }

    public function getSupplier() : Supplier {
        $this->supplier->setCode('123AB');
    }
}
