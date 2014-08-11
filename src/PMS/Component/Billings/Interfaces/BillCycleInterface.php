<?php
namespace PMS\Component\Billings\Interfaces;

interface BillCycleInterface
{
    /**
     * Get name
     * 
     * @return string
     */
    public function getName();
    
    /**
     * Set name
     * 
     * @param string $name
     * @return \PMS\Component\Billings\Interfaces\BillCycleInterface
     */
    public function setName($name);
    
    /**
     * Get value
     * 
     * @return mixed
     */
    public function getValue();
    
    /**
     * Set value
     * 
     * @param mixed $value
     * @return \PMS\Component\Billings\Interfaces\BillCycleInterface
     */
    public function setValue($value);
}
