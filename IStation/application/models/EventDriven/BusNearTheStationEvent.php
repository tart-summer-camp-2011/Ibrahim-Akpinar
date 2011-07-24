<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BusNearTheStation
 *
 * @author ibrahim
 */
class Model_EventDriven_BusNearTheStation {
    private $_eventName = "Bus near the station";
    
    public function getEventName(){
        return $this->_eventName;
    }
}
?>
