<?php
namespace PMS\Component\Billings\Interfaces;

interface InvoiceInterface
{
    /**
     * Get project
     * 
     * @return \PMS\Component\Project\Interfaces\ProjectInterface
     */
    public function getProject();
    
    /**
     * Set project
     * 
     * @param \PMS\Component\Project\Interfaces\Project $project
     * @return \PMS\Component\Billings\Interfaces\InvoiceInterface
     */
    public function setProject(\PMS\Component\Project\Interfaces\Project $project);
    
    /**
     * Get total
     * 
     * @return mixed
     */
    public function getTotal();
    
    /**
     * Set total
     * 
     * @param mixed $total
     * @return \PMS\Component\Billings\Interfaces\InvoiceInterface
     */
    public function setTotal($total);
    
    /**
     * Get start
     * 
     * @return \Datetime
     */
    public function getStart();
    
    /**
     * Set start
     * 
     * @param \Datetime $start
     * @return \PMS\Component\Billings\Interfaces\InvoiceInterface
     */
    public function setStart(\Datetime $start);
    
    /**
     * Get end
     * 
     * @return \Datetime
     */
    public function getEnd();
    
    /**
     * Set end
     * 
     * @param \Datetime $end
     * @return \PMS\Component\Billings\Interfaces\InvoiceInterface
     */
    public function setEnd(\Datetime $end);
    
    /**
     * Is public
     * 
     * @param null|boolean $paid
     * @return boolean|\PMS\Component\Billings\Interfaces\InvoiceInterface
     */
    public function isPaid($paid = null);
}
