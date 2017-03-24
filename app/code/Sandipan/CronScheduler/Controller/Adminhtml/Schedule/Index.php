<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 24/3/17
 * Time: 2:54 PM
 */

namespace Sandipan\CronScheduler\Controller\Adminhtml\Schedule;

/**
 * Class Index
 * @package Sandipan\CronScheduler\Controller\Adminhtml\Schedule
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * Display scheduled cron list grid action
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Sandipan_CronScheduler::cronscheduler_schuledjobs');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Scheduled Jobs'));
        $this->_view->renderLayout();
    }

    /**
     * Check ACL permissions
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Sandipan_CronScheduler::cronscheduler_schuledjobs');
    }
}