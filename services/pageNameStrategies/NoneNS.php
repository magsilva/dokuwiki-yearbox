<?php

namespace dokuwiki\plugin\yearbox\services\pageNameStrategies;

class NoneNS extends PageNameStrategy
{

    public function getPageId($baseNS, $year, $month, $day, $name)
    {
        $pagename = ($name ? "$name-" : '') . "$year-$month-$day";
        return "$baseNS:$pagename";
    }

    public function getMonthId($baseNS, $year, $month, $name)
    {
        $pagename = ($name ? "$name-" : '') . "$year-$month";
        return "$baseNS:$pagename";
    }

    public function getYearId($baseNS, $year, $name)
    {
        $pagename = ($name ? "$name-" : '') . "$year";
        return "$baseNS:$pagename";
    }

}
