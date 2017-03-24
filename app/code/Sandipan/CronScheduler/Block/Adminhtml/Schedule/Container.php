<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 24/3/17
 * Time: 2:58 PM
 */

namespace Sandipan\CronScheduler\Block\Adminhtml\Schedule;

/**
 * Class Container
 * @package Sandipan\CronScheduler\Block\Adminhtml\Schedule
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
        $this->_controller = 'schedule';
        $this->_blockGroup = 'Sandipan_CronScheduler';
        $this->_headerText = __('Scheduled Jobs');
        parent::_construct();
        $this->buttonList->remove('add');
    }
}