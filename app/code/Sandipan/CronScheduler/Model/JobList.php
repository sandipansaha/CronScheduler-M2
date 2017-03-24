<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 23/3/17
 * Time: 5:32 PM
 */

namespace Sandipan\CronScheduler\Model;

/**
 * Class JobList
 * @package Sandipan\CronScheduler\Model
 */
class JobList implements JobListInterface
{
    /** @var \Magento\Cron\Model\ConfigInterface  */
    private $_cronConfig;

    /**
     * JobList constructor.
     * @param \Magento\Cron\Model\ConfigInterface $cronConfig
     */
    public function __construct(
        \Magento\Cron\Model\ConfigInterface $cronConfig
    )
    {
        $this->_cronConfig = $cronConfig;
    }

    /**
     * Get information about all configured cron jobs
     *
     * @return array
     */
    public function getConfiguredJobs()
    {
        $jobList = [];

        $jobTypes = $this->_cronConfig->getJobs();
        foreach ($jobTypes as $_type) {
            foreach ($_type as $_job) {
                $jobList[] = new \Magento\Framework\DataObject($_job);
            }
        }

        return $jobList;
    }
}