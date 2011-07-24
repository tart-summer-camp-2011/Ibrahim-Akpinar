<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventManager
 *
 * @author ibrahim
 */
class Model_EventDriven_EventManager {
    public $_subscribes ;
    public function __construct() {
        ;
    }
    

    
    public function publish(Model_EventDriven_Event $event){
        $callbacks = $this->_subscribes[$event->getEventName()];
     
    }
    public function subscribe($eventName,$callBack){
      $this->_subscribes[$eventName][] = $callBack;
    }
    
    
}

?>
