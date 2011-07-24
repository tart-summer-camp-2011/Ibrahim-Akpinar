<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bus
 *
 * @author ibrahim
 */

class Model_EventDriven_Bus {
    private $_busRouteArray= array();
    public $_busName;
    public $_busOnTheStation = null;
    public  $_busNearTheStation = null;
    public $_busStationName;
    
    public function __construct($busName) {
        
     $this->_busName = $busName;
    ;    }
    public function busPublisher(){
        
       
        $em = new Model_EventDriven_EventManager();
        $event = new Model_EventDriven_Event();
        $event->setEventName('BusOnTheStation');
        $em->publish($event);
      
    }
    
    public function  setBusRoute($busRouteArray){
        foreach($busRouteArray as $busRoute){
            $this->_busRouteArray[] = $busRoute;
        }
    }
   
    public function getBusRoute(){
        return $this->_busRouteArray;
    }
 
    
  
    
}

?>
