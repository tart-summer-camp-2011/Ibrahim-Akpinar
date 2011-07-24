<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    public function eventAction()
    {
        $state =new Model_EventDriven_Station('TTNET');
        $bus =  new Model_EventDriven_Bus("41AT");
        
        $state->subscriber();
        $stations = array('BalMumcu','TTNET','Barabaros','Iskele');
        
        $bus->setBusRoute($stations);
        $bus->busPublisher();
        $buss = $state->_stationName;
        
        
        $this->view->assign('buss',$buss);
    }


}

