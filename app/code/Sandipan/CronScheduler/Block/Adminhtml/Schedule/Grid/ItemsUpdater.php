<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 28/3/17
 * Time: 12:05 PM
 */

namespace Sandipan\CronScheduler\Block\Adminhtml\Schedule\Grid;

/**
 * Class ItemsUpdater
 * @package Sandipan\CronScheduler\Block\Adminhtml\Schedule\Grid
 */
class ItemsUpdater implements \Magento\Framework\View\Layout\Argument\UpdaterInterface
{
    /**
     * @var \Magento\Framework\AuthorizationInterface
     */
    protected $authorization;

    /**
     * @param \Magento\Framework\AuthorizationInterface $authorization
     */
    public function __construct(\Magento\Framework\AuthorizationInterface $authorization)
    {
        $this->authorization = $authorization;
    }

    /**
     * Remove massaction items in case they disallowed for user
     * @param mixed $argument
     * @return mixed
     */
    public function update($argument)
    {
        if (false === $this->authorization->isAllowed('Sandipan_CronScheduler::cronscheduler_schuledjobs_deleteItem')) {
            unset($argument['mass_delete_items']);
        }
        return $argument;
    }
}