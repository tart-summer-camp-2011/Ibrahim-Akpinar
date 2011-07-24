<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OnBusTheStation
 *
 * @author ibrahim
 */
class Model_EventDriven_BusOnTheStation {
private $_eventName = "Bus on the station";

    public function getEventName(){
        return $this->_eventName;
    }
    
    public function setEventName($eventName){
        $this->_eventName = $eventName;
    }

}

?>
