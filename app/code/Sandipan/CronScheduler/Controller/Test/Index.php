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

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Cron\Model\ConfigInterface $cronConfig
    )
    {
        parent::__construct($context);
        $this->_cronConfig = $cronConfig;
    }

    public function execute()
    {
        echo 'TEST';

        $jobs = $this->_cronConfig->getJobs();
        echo '<pre>'; print_r($jobs); echo '</pre>';
    }
}