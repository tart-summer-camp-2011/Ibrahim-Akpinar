<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Station
 *
 * @author ibrahim
 */
class Model_EventDriven_Station {
   public $_stationName;
   private $_stationBusArray =array();
   public  $_busOnTheStation = null;
   public  $_busNearTheStation = null;
   public $busInfo;
   
   public function __construct($stationName) {
       $this->_stationName = $stationName;
   }
 
   public function subscriber(){
       $eventManager =  new Model_EventDriven_EventManager();
       $eventManager->subscribe('BusOnTheStation', $this->onBusStationChange());
       
   }
   public function onBusStationChange(){
     
   return 'Bus on the station';
   }
   public function whereIsTheBus($EventName){
   
       
   }
  
}

?>
