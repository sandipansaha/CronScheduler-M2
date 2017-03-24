<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 24/3/17
 * Time: 12:05 PM
 */

namespace Sandipan\CronScheduler\Block\Adminhtml\Job;

/**
 * Class Container
 * @package Sandipan\CronScheduler\Block\Adminhtml\Job
 */
class Container extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Initialize object state with incoming parameters
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'job';
        $this->_blockGroup = 'Sandipan_CronScheduler';
        $this->_headerText = __('Configured Jobs');
        parent::_construct();
        $this->buttonList->remove('add');
    }
}