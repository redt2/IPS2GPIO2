<?
    // Klassendefinition
    class IPS2GPIO_BT2 extends IPSModule 
    {
	// Überschreibt die interne IPS_Create($id) Funktion
        public function Create() 
        {
            // Diese Zeile nicht löschen.
            parent::Create();
	    $this->RegisterPropertyBoolean("Open", false);
	    $this->ConnectParent("{ED89906D-5B78-4D47-AB62-0BDCEB9AD330}");
	    $this->RegisterPropertyInteger("Messzyklus", 60);
	    $this->RegisterPropertyString("MAC0", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC0", false);
	    $this->RegisterPropertyString("MAC1", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC1", false);
	    $this->RegisterPropertyString("MAC2", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC2", false);
	    $this->RegisterPropertyString("MAC3", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC3", false);
	    $this->RegisterPropertyString("MAC4", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC4", false);
   	    $this->RegisterPropertyString("MAC5", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC5", false);
	    $this->RegisterPropertyString("MAC6", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC6", false);
	    $this->RegisterPropertyString("MAC7", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC7", false);
	    $this->RegisterPropertyString("MAC8", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC8", false);
	    $this->RegisterPropertyString("MAC9", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC9", false);
 	    $this->RegisterPropertyString("MAC10", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC10", false);
	    $this->RegisterPropertyString("MAC11", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC11", false);
	    $this->RegisterPropertyString("MAC12", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC12", false);
	    $this->RegisterPropertyString("MAC13", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC13", false);
	    $this->RegisterPropertyString("MAC14", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC14", false);
   	    $this->RegisterPropertyString("MAC15", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC15", false);
	    $this->RegisterPropertyString("MAC16", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC16", false);
	    $this->RegisterPropertyString("MAC17", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC17", false);
	    $this->RegisterPropertyString("MAC18", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC18", false);
	    $this->RegisterPropertyString("MAC19", " ");
	    $this->RegisterPropertyBoolean("LoggingMAC19", false);

	    $this->RegisterTimer("Messzyklus", 0, 'I2GBT_Measurement($_IPS["TARGET"]);');
      }

	// Überschreibt die intere IPS_ApplyChanges($id) Funktion
        public function ApplyChanges()
        {
                 // Diese Zeile nicht löschen
                 parent::ApplyChanges();
                 //Connect to available splitter or create a new one
	         $this->ConnectParent("{ED89906D-5B78-4D47-AB62-0BDCEB9AD330}");
	   
	         //Status-Variablen anlegen
	         $this->RegisterVariableBoolean("MAC0Connect", "MAC 1", "~Switch", 10);
		 $this->DisableAction("MAC0Connect");
		 $this->RegisterVariableString("MAC0Name", "MAC 1 Name", "", 20);
                 $this->DisableAction("MAC0Name");
                 $this->RegisterVariableBoolean("MAC1Connect", "MAC 2", "~Switch", 30);
		 $this->DisableAction("MAC1Connect");
		 $this->RegisterVariableString("MAC1Name", "MAC 2 Name", "", 40);
                 $this->DisableAction("MAC1Name");
		 $this->RegisterVariableBoolean("MAC2Connect", "MAC 3", "~Switch", 50);
		 $this->DisableAction("MAC2Connect");
		 $this->RegisterVariableString("MAC2Name", "MAC 3 Name", "", 60);
                 $this->DisableAction("MAC2Name");
		 $this->RegisterVariableBoolean("MAC3Connect", "MAC 4", "~Switch", 70);
		 $this->DisableAction("MAC3Connect");
		 $this->RegisterVariableString("MAC3Name", "MAC 4 Name", "", 80);
                 $this->DisableAction("MAC3Name");
		 $this->RegisterVariableBoolean("MAC4Connect", "MAC 5", "~Switch", 90);
		 $this->DisableAction("MAC4Connect");
		 $this->RegisterVariableString("MAC4Name", "MAC 5 Name", "", 100);
                 $this->DisableAction("MAC4Name");
                 $this->RegisterVariableBoolean("MAC5Connect", "MAC 6", "~Switch", 110);
		 $this->DisableAction("MAC5Connect");
		 $this->RegisterVariableString("MAC5Name", "MAC 6 Name", "", 120);
                 $this->DisableAction("MAC5Name");
                 $this->RegisterVariableBoolean("MAC6Connect", "MAC 7", "~Switch", 130);
		 $this->DisableAction("MAC6Connect");
		 $this->RegisterVariableString("MAC6Name", "MAC 7 Name", "", 140);
                 $this->DisableAction("MAC6Name");
                 $this->RegisterVariableBoolean("MAC7Connect", "MAC 8", "~Switch", 150);
		 $this->DisableAction("MAC7Connect");
		 $this->RegisterVariableString("MAC7Name", "MAC 8 Name", "", 160);
                 $this->DisableAction("MAC7Name");
                 $this->RegisterVariableBoolean("MAC8Connect", "MAC 9", "~Switch", 170);
		 $this->DisableAction("MAC8Connect");
		 $this->RegisterVariableString("MAC8Name", "MAC 9 Name", "", 180);
                 $this->DisableAction("MAC8Name");
                 $this->RegisterVariableBoolean("MAC9Connect", "MAC 10", "~Switch", 190);
		 $this->DisableAction("MAC9Connect");
		 $this->RegisterVariableString("MAC9Name", "MAC 10 Name", "", 200);
                 $this->DisableAction("MAC9Name");
 	         $this->RegisterVariableBoolean("MAC10Connect", "MAC 11", "~Switch", 210);
		 $this->DisableAction("MAC10Connect");
		 $this->RegisterVariableString("MAC10Name", "MAC 11 Name", "", 220);
                 $this->DisableAction("MAC10Name");
                 $this->RegisterVariableBoolean("MAC11Connect", "MAC 12", "~Switch", 230);
		 $this->DisableAction("MAC11Connect");
		 $this->RegisterVariableString("MAC11Name", "MAC 12 Name", "", 240);
                 $this->DisableAction("MAC11Name");
		 $this->RegisterVariableBoolean("MAC12Connect", "MAC 13", "~Switch", 250);
		 $this->DisableAction("MAC12Connect");
		 $this->RegisterVariableString("MAC12Name", "MAC 13 Name", "", 260);
                 $this->DisableAction("MAC12Name");
		 $this->RegisterVariableBoolean("MAC13Connect", "MAC 14", "~Switch", 270);
		 $this->DisableAction("MAC13Connect");
		 $this->RegisterVariableString("MAC13Name", "MAC 14 Name", "", 280);
                 $this->DisableAction("MAC13Name");
		 $this->RegisterVariableBoolean("MAC14Connect", "MAC 15", "~Switch", 290);
		 $this->DisableAction("MAC14Connect");
		 $this->RegisterVariableString("MAC14Name", "MAC 15 Name", "", 300);
                 $this->DisableAction("MAC14Name");
                 $this->RegisterVariableBoolean("MAC15Connect", "MAC 16", "~Switch", 310);
		 $this->DisableAction("MAC15Connect");
		 $this->RegisterVariableString("MAC15Name", "MAC 16 Name", "", 320);
                 $this->DisableAction("MAC15Name");
                 $this->RegisterVariableBoolean("MAC16Connect", "MAC 17", "~Switch", 330);
		 $this->DisableAction("MAC16Connect");
		 $this->RegisterVariableString("MAC16Name", "MAC 17 Name", "", 340);
                 $this->DisableAction("MAC16Name");
                 $this->RegisterVariableBoolean("MAC17Connect", "MAC 18", "~Switch", 350);
		 $this->DisableAction("MAC17Connect");
		 $this->RegisterVariableString("MAC17Name", "MAC 18 Name", "", 360);
                 $this->DisableAction("MAC17Name");
                 $this->RegisterVariableBoolean("MAC18Connect", "MAC 19", "~Switch", 370);
		 $this->DisableAction("MAC18Connect");
		 $this->RegisterVariableString("MAC18Name", "MAC 19 Name", "", 380);
                 $this->DisableAction("MAC18Name");
                 $this->RegisterVariableBoolean("MAC19Connect", "MAC 20", "~Switch", 390);
		 $this->DisableAction("MAC19Connect");
		 $this->RegisterVariableString("MAC19Name", "MAC 20 Name", "", 400);
                 $this->DisableAction("MAC19Name");
                 $this->RegisterVariableBoolean("Summary", "Summary", "~Switch", 410);
		 $this->DisableAction("Summary");
		 $this->SetBuffer("Summary", false);
		
		If (IPS_GetKernelRunlevel() == 10103) {
			// Logging setzen
			for ($i = 0; $i <= 19; $i++) {
				AC_SetLoggingStatus(IPS_GetInstanceListByModuleID("{43192F0B-135B-4CE7-A0A7-1475603F3060}")[0], $this->GetIDForIdent("MAC".$i."Connect"),  $this->ReadPropertyBoolean("LoggingMAC".$i)); 
				SetValueString($this->GetIDForIdent("MAC".$i."Name"), "");
				SetValueBoolean($this->GetIDForIdent("MAC".$i."Connect"), false);
			} 
			IPS_ApplyChanges(IPS_GetInstanceListByModuleID("{43192F0B-135B-4CE7-A0A7-1475603F3060}")[0]);


			//ReceiveData-Filter setzen
			$Filter = '(.*"Function":"get_start_trigger".*|.*"InstanceID":'.$this->InstanceID.'.*)';
			$this->SetReceiveDataFilter($Filter);
			
			$this->SetTimerInterval("Messzyklus", ($this->ReadPropertyInteger("Messzyklus") * 1000));
			If ($this->ReadPropertyBoolean("Open") == true) {
				$this->Measurement();
				$this->SetStatus(102);
			}
			else {
				$this->SetTimerInterval("Messzyklus", 0);
				$this->SetStatus(104);
			}
		}
		else {
			$this->SetTimerInterval("Messzyklus", 0);
		}
        }
	
	public function RequestAction($Ident, $Value) 
	{
  		switch($Ident) {
	       
	        default:
	            throw new Exception("Invalid Ident");
	    	}
	}
	
	public function ReceiveData($JSONString) 
	{
	    	// Empfangene Daten vom Gateway/Splitter
	    	$data = json_decode($JSONString);
	 	switch ($data->Function) {
			   case "set_RPi_connect":
				//IPS_LogMessage("IPS2GPIO SSH-Connect","Ergebnis: ".utf8_decode($data->Result));
				$ResultArray = unserialize(utf8_decode($data->Result));
				$this->SetBuffer("Summary", false);
				for ($i = 0; $i < Count($ResultArray); $i++) {
					SetValueString($this->GetIDForIdent("MAC".key($ResultArray)."Name"), $ResultArray[key($ResultArray)]);
					if (strlen($ResultArray[key($ResultArray)]) > 0) {
						SetValueBoolean($this->GetIDForIdent("MAC".key($ResultArray)."Connect"), true);
						$this->SetBuffer("Summary", true);
					}
					else {
						SetValueBoolean($this->GetIDForIdent("MAC".key($ResultArray)."Connect"), false);
					}
					Next($ResultArray);
				}
				If (GetValueBoolean($this->GetIDForIdent("Summary")) <> $this->GetBuffer("Summary")) {
					SetValueBoolean($this->GetIDForIdent("Summary"), $this->GetBuffer("Summary"));
				}
					
			   	break;
			  case "get_start_trigger":
			   	$this->ApplyChanges();
				break;
	 	}
 	}
	// Beginn der Funktionen

	// Führt eine Messung aus
	public function Measurement()
	{	
		If ($this->ReadPropertyBoolean("Open") == true) {
			$CommandArray = Array();
			for ($i = 0; $i <= 1 9; $i++) {
				If (filter_var(trim($this->ReadPropertyString("MAC".$i)), FILTER_VALIDATE_MAC)) {
					//IPS_LogMessage("IPS2GPIO SSH-Connect", "Sende MAC ".$i+1 );
					$CommandArray[$i] = "hcitool name ".$this->ReadPropertyString("MAC".$i);
				}
			}	
			$this->SendDataToParent(json_encode(Array("DataID"=> "{A0DAAF26-4A2D-4350-963E-CC02E74BD414}", "Function" => "get_RPi_connect", "InstanceID" => $this->InstanceID,  "Command" => serialize($CommandArray), "CommandNumber" => 0, "IsArray" => true )));
		}
	}
	
}
?>
