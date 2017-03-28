<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 28/3/17
 * Time: 2:59 PM
 */

namespace Sandipan\CronScheduler\Model\System\Config;

/**
 * Class JobCode
 * @package Sandipan\CronScheduler\Model\System\Config
 */
class JobCode implements \Magento\Framework\Option\ArrayInterface
{
    /** @var \Sandipan\CronScheduler\Model\JobListInterface  */
    private $_jobList;

    /**
     * @param \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList
     */
    public function __construct(
        \Sandipan\CronScheduler\Model\JobListInterface $jobList
    ) {
        $this->_jobList = $jobList;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $scheduledJobs = $this->_jobList->getConfiguredJobs();
        usort($scheduledJobs, array($this, "cmp"));

        foreach ($scheduledJobs as $job) {
            $options[$job['name']] = $job['name'];
        }

        return $options;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    private function cmp($a, $b)
    {
        return strcmp($a['name'], $b['name']);
    }
}