<?php
class AppKernel extends \PMS\Bundle\CoreBundle\Kernel\Kernel
{
    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        $bundles = array(
            // Put your own bundles here.
        );

        return array_merge($bundles, parent::registerBundles());
    }
}
