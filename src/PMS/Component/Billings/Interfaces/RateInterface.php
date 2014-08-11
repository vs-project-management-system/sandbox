<?php
namespace PMS\Component\Billings\Interfaces;

interface RateInterface
{
    /**
     * Get rate type
     * 
     * @return \PMS\Component\Billings\Interfaces\RateTypeInterface
     */
    public function getRateType();
    
    /**
     * Set rate type
     * 
     * @param string $rate_type
     * @return \PMS\Component\Billings\Interfaces\RateInterface
     */
    public function setRateType($rate_type);
    
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
     * @return \PMS\Component\Billings\Interfaces\RateInterface
     */
    public function setValue($value);
}
