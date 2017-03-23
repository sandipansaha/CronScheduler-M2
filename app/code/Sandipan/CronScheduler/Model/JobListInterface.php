<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 23/3/17
 * Time: 5:29 PM
 */

namespace Sandipan\CronScheduler\Model;

/**
 * Interface JobListInterface
 * @package Sandipan\CronScheduler\Model
 */
interface JobListInterface
{
    /**
     * Get information about all configured cron jobs
     *
     * @return array
     */
    public function getConfiguredJobs();
}