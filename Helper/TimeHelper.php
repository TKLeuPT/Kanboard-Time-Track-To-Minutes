<?php

namespace Kanboard\Plugin\TimeTrackToMinutes\Helper;

use Kanboard\Core\Base;

class TimeHelper extends Base
{
   
    public function convertToHoursMins($time, $format = '%02d:%02d') {
        $time = $time*60;
        if ($time < 1) {
            return;
        }
        $hours = floor($time / 60);
        $minutes = (intval($time) % 60);
        return sprintf($format, $hours, $minutes);
    }
    
}