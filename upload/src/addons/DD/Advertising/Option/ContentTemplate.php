<?php

namespace DD\Advertising\Option;

use XF\Option\AbstractOption;

class ContentTemplate extends AbstractOption
{
    public static function verifyOption(&$value)
    {
        $template = \XF::em()->findOne('XF:Template', ['title' => 'dd_advertising']);
        $template->template = $value;
        $template->saveIfChanged($saved, false);

        return true;
    }
}