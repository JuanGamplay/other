<?php

class MongoTest {
		
		private $con;
		private $db;
		private static $_instance;
		
		private  function __construct(){
			$this->connect();
		}
		
//		private function config(){
//			return $config = array(''=>'');
//		}
		
		private function connect(){
				$this->con = new Mongo("172.19.5.161:27017");
				$this->db = $this->con->test;
		}
		
		public static  function getInstance(){
			if(!(self::$_instance instanceof self)){
				self::$_instance = new MongoTest();
			}
				return self::$_instance;
		}
		
		public function insert($collection,$data){
				$res = $this->db->{$collection}->insert($data);
				var_dump($res);
		}
		
		public function createCollection($collection){
				$res = $this->db->createCollection($collection);
				print_r($res);
		}
		
		public function getCount($collection){
				$res = $this->db->$collection->count();
				var_dump($res);
		}
		
		public function find($collection,$data=array()){
				$res = $this->db->$collection->find();
				foreach ($res as $key =>$val){
					echo "id:".var_dump($val); echo "<br>";
				}
		}
		
		public function update($collection, $data, $update_date){
				$res = $this->db->$collection->update($data,array('$set'=>$update_date),array('multiple'=>TRUE));
				var_dump($res);
		}
		
		public function delete($collection, $data){
				$res = $this->db->$collection->remove($data);
				var_dump($res);
		}
}
$data = array('column_exp'=>'taotao','column_exp2'=>'taotao');
$mon = MongoTest::getInstance();
$mon->insert('good', $data);
$mon->insert('wangtao', $data);
//$mon->createCollection('wangtao');
$mon->getCount("wangtao");
$mon->find("wangtao");
//$mon->delete("wangtao", array('column_exp'=>'taotao'));
//$mon->update('wangtao', array('column_exp'=>'taotao'), array('column_exp'=>'taotao','column_exp2'=>'taotao22'));
