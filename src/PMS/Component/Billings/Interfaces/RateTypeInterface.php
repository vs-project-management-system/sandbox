<?php
namespace PMS\Component\Billings\Interfaces;

interface RateTypeInterface
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
     * @return \PMS\Component\Billings\Interfaces\RateTypeInterface
     */
    public function setName($name);
    
    /**
     * Get description
     * 
     * @return mixed
     */
    public function getDescription();
    
    /**
     * Set description
     * 
     * @param mixed $description
     * @return \PMS\Component\Billings\Interfaces\RateTypeInterface
     */
    public function setDescription($description);
}
