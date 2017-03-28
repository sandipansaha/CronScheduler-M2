<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 28/3/17
 * Time: 12:32 PM
 */

namespace Sandipan\CronScheduler\Controller\Adminhtml\Schedule;

/**
 * Class massDelete
 * @package Sandipan\CronScheduler\Controller\Adminhtml\Schedule
 */
class massDelete extends \Magento\Backend\App\Action
{
    /** @var \Magento\Cron\Model\ScheduleFactory  */
    private $schedule;

    /**
     * massDelete constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Cron\Model\ScheduleFactory $schedule
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Cron\Model\ScheduleFactory $schedule
    ) {
        parent::__construct($context);
        $this->schedule = $schedule;
    }

    /**
     * Delete the given scheduled cron items
     *
     * @return void
     */
    public function execute()
    {
        $scheduleIds = $this->getRequest()->getParam('schedule_ids');
        if (!is_array($scheduleIds)) {
            $this->messageManager->addError(__('Please select item(s).'));
        } else {
            try {
                foreach ($scheduleIds as $scheduleId) {
                    /** @var  \Magento\Cron\Model\Schedule */
                    $model = $this->schedule->create();
                    $model->load($scheduleId);
                    $model->delete();
                }
                $this->messageManager->addSuccess(
                    __('%1 item(s) are deleted.', count($scheduleIds))
                );
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException(
                    $e,
                    __("We couldn't delete item(s)' mode because of an error.")
                );
            }
        }
        $this->_redirect('*/*/index');
    }

    /**
     * Check ACL permissions
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Sandipan_CronScheduler::cronscheduler_schuledjobs_deleteItem');
    }
}