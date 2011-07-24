<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Passenger
 *
 * @author ibrahim
 */
class Model_EventDriven_Passenger {
   protected $_passengerStationArray;
   protected $_passengerName;
   protected $_passengerBusArray;
   public function __construct() {
      
     
   }
   public function setPassengerStation($stationAray){
       foreach($stationAray as $passengerStation){
           $this->_passengerStationArray = $passengerStation;      
       }
   }
   public function getPassengerStation(){
       return $this->_passengerStationArray;
   }
   
}

?>
