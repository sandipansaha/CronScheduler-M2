<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 23/3/17
 * Time: 5:26 PM
 */

namespace Sandipan\CronScheduler\Model\Job\ResourceModel\Grid;

/**
 * Class Collection
 * @package Sandipan\CronScheduler\Model\Job\ResourceModel\Grid
 */
class Collection extends \Magento\Framework\Data\Collection
{
    private $_jobList;

    /**
     * @param \Magento\Framework\Data\Collection\EntityFactory $entityFactory
     * @param \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList
     */
    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactory $entityFactory,
        \Sandipan\CronScheduler\Model\JobListInterface $jobList
    ) {
        $this->_jobList = $jobList;
        parent::__construct($entityFactory);
    }

    /**
     * Load data
     *
     * @param bool $printQuery
     * @param bool $logQuery
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function loadData($printQuery = false, $logQuery = false)
    {
        if (!$this->isLoaded()) {
            foreach ($this->_jobList->getConfiguredJobs() as $job) {
                $this->addItem($job);
            }
            $this->_setIsLoaded(true);
        }
        return $this;
    }
}