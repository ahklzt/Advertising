<?php

namespace DD\Advertising\Pub\Controller;

use XF\Pub\Controller\AbstractController;
use XF\Mvc\ParameterBag;

class Advertising extends AbstractController
{
    public function actionIndex()
    {
        $page = $this->filterPage();
        
        $viewParams = [
            'page' => $page,
        ];

        return $this->view('DD\Advertising:Advertising', 'dd_advertising', $viewParams);
    }
}