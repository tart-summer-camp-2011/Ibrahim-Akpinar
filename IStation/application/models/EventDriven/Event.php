<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Evet
 *
 * @author ibrahim
 */
class Model_EventDriven_Event {
   
    private $_eventName;
    public function getEventName(){
        return $this->_eventName;
    }
    
    public function setEventName($eventName){
        $this->_eventName = $eventName;
    }
}

?>
