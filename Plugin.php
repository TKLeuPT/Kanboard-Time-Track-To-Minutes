<?php

namespace Kanboard\Plugin\TimeTrackToMinutes;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->helper->register('TimeHelper', '\Kanboard\Plugin\TimeTrackToMinutes\Helper\TimeHelper');

        $this->template->setTemplateOverride('subtask/timer', 'TimeTrackToMinutes:subtask/timer');

        $this->template->setTemplateOverride('task/changes', 'TimeTrackToMinutes:task/changes');
        $this->template->setTemplateOverride('task/details', 'TimeTrackToMinutes:task/details');
        $this->template->setTemplateOverride('task/time_tracking_details', 'TimeTrackToMinutes:task/time_tracking_details');
        $this->template->setTemplateOverride('task/time_tracking_summary', 'TimeTrackToMinutes:task/time_tracking_summary');
        $this->template->setTemplateOverride('task/transitions', 'TimeTrackToMinutes:task/transitions');

       
    }

    public function getPluginName()
    {
        return 'Time Track to minutes';
    }

    public function getPluginDescription()
    {
        return t('This plugin allows you to see the time tracking in minutes instead the normal decimal hours.');
    }

    public function getPluginAuthor()
    {
        return 'Leonardo Pinheiro';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/TKLeuPT/Kanboard-Time-Track-To-Minutes';
    }
}

