<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BusCometoStationEvent
 *
 * @author ibrahim
 */
class Model_EventDriven_BusCometoStationEvent {
    private $_eventName= "Bus is comming to the station";
    
    public function getEventName(){
        return $this->_eventName;
    }
}

?>
