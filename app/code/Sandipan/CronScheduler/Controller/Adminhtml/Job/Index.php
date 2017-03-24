<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 24/3/17
 * Time: 11:54 AM
 */

namespace Sandipan\CronScheduler\Controller\Adminhtml\Job;

/**
 * Class Index
 * @package Sandipan\CronScheduler\Controller\Adminhtml\Job
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * Display cron list grid action
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Sandipan_CronScheduler::cronscheduler_configuredjobs');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Configured Jobs'));
        $this->_view->renderLayout();
    }

    /**
     * Check ACL permissions
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Sandipan_CronScheduler::cronscheduler_configuredjobs');
    }
}