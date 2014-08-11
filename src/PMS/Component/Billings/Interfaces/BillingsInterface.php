<?php
namespace PMS\Component\Billings\Interfaces;

interface BillingsInterface
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
     * @param \PMS\Component\Project\Interfaces\ProjectInterface $project
     * @return \PMS\Component\Billings\Interfaces\BillingsInterface
     */
    public function setProject(\PMS\Component\Project\Interfaces\ProjectInterface $project);
    
    /**
     * Get rate
     * 
     * @return \PMS\Component\Billings\Interfaces\RateInterface
     */
    public function getRate();
    
    /**
     * Set rate
     * 
     * @param \PMS\Component\Billings\Interfaces\RateInterface $rate
     * @return \PMS\Component\Billings\Interfaces\BillingsInterface
     */
    public function setRate(\PMS\Component\Billings\Interfaces\RateInterface $rate);
    
    /**
     * Get bill cycle
     * 
     * @return \PMS\Component\Billings\Interfaces\BillCycleInterface
     */
    public function getBillCycle();
    
    /**
     * Set bill cycle
     * 
     * @param \PMS\Component\Billings\Interfaces\BillCycleInterface $bill_cycle
     * @return \PMS\Component\Billings\Interfaces\BillingsInterface
     */
    public function setBillCycle(\PMS\Component\Billings\Interfaces\BillCycleInterface $bill_cycle);
    
    /**
     * Get invoices
     * 
     * @return array
     */
    public function getInvoices();
    
    /**
     * Set invoices
     * 
     * @param array $invoices
     * @return \PMS\Component\Billings\Interfaces\BillingsInterface
     */
    public function setInvoices(array $invoices);
}
