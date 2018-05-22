<?php
/**
* 
*/
class PalitanxAPI
{
	var $apiurl;
	var $curl;
	function __construct()
	{
		$this->apiurl = 'https://api.palitanx.com/v1/';
		$this->curl = curl_init();
		curl_setopt($this->curl, CURLOPT_HTTPHEADER, ['User-Agent: The Botfathers PHP Module (https://github.com/SloRunner/php-palitanx-api)']);
	}
	function get_Markets(){
		curl_setopt($this->curl, CURLOPT_URL, $this->apiurl."public/getmarkets");
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($this->curl);
		if(curl_errno($this->curl)){
			return array('error' => true, 'result' => curl_error($this->curl));
		}
		return array('error' => false, 'result' => $result);
	}
	
	function get_Currencies(){
		curl_setopt($this->curl, CURLOPT_URL, $this->apiurl."public/getcurrencies");
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($this->curl);
		if(curl_errno($this->curl)){
			return array('error' => true, 'result' => curl_error($this->curl));
		}
		return array('error' => false, 'result' => $result);
	}
	
	function get_Ticker($market){
		curl_setopt($this->curl, CURLOPT_URL, $this->apiurl."public/getticker/".$market);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($this->curl);
		if(curl_errno($this->curl)){
			return array('error' => true, 'result' => curl_error($this->curl));
		}
		return array('error' => false, 'result' => $result);
	}
	
	function get_MarketSummaries(){
		curl_setopt($this->curl, CURLOPT_URL, $this->apiurl."public/getmarketsummaries");
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($this->curl);
		if(curl_errno($this->curl)){
			return array('error' => true, 'result' => curl_error($this->curl));
		}
		return array('error' => false, 'result' => $result);
	}

	function get_MarketSummary($market){
		curl_setopt($this->curl, CURLOPT_URL, $this->apiurl."public/getmarketsummary/".$market);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($this->curl);
		if(curl_errno($this->curl)){
			return array('error' => true, 'result' => curl_error($this->curl));
		}
		return array('error' => false, 'result' => $result);
	}
}
?>