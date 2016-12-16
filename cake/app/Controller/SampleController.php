<?php
App::uses('AppController', 'Controller');

class SampleController extends AppController {

	public function index(){
		$arr = array();
		for($i = 0;$i <= 10;$i++){
			$arr[$i] = $i;
		}
		$this->set('arr',$arr);		
	}
}
