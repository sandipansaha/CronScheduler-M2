<?php
/**
 * Created by PhpStorm.
 * User: sandipan
 * Date: 24/3/17
 * Time: 12:48 PM
 */

namespace Sandipan\CronScheduler\Block\Adminhtml\Job\Grid\Column\Renderer;

/**
 * Class Method
 * @package Sandipan\CronScheduler\Block\Adminhtml\Grid\Column\Renderer
 */
class Method extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    /**
     * Renders grid column
     *
     * @param   Object $row
     * @return  string
     */
    public function render(\Magento\Framework\DataObject $row)
    {
        return $row->getData('instance') .'::'. $row->getData('method');
    }
}