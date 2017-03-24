<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 23/3/17
 * Time: 3:57 PM
 */

namespace Sandipan\CronScheduler\Controller\Test;

/**
 * Class Index
 * @package Sandipan\CronScheduler\Controller\Test
 */
class Index extends \Magento\Framework\App\Action\Action
{
    private $_cronConfig;
    private $_jobCollection;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Cron\Model\ConfigInterface $cronConfig,
        \Sandipan\CronScheduler\Model\Job\ResourceModel\Grid\Collection $jobCollection
    )
    {
        parent::__construct($context);
        $this->_cronConfig = $cronConfig;
        $this->_jobCollection = $jobCollection;
    }

    public function execute()
    {
        echo 'TEST';

        //$jobs = $this->_cronConfig->getJobs();
        //echo '<pre>'; print_r($jobs); echo '</pre>';

        $jobs = $this->_jobCollection->getItems();
        echo '<pre>'; print_r($jobs); echo '</pre>';
    }
}