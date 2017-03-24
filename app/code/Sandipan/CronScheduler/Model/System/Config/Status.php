<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 24/3/17
 * Time: 3:26 PM
 */

namespace Sandipan\CronScheduler\Model\System\Config;

use Magento\Cron\Model\Schedule;

/**
 * Class Status
 * @package Sandipan\CronScheduler\Model\System\Config
 */
class Status implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            Schedule::STATUS_PENDING => Schedule::STATUS_PENDING,
            Schedule::STATUS_RUNNING => Schedule::STATUS_RUNNING,
            Schedule::STATUS_SUCCESS => Schedule::STATUS_SUCCESS,
            Schedule::STATUS_MISSED => Schedule::STATUS_MISSED,
            Schedule::STATUS_ERROR => Schedule::STATUS_ERROR
        ];

        return $options;
    }
}