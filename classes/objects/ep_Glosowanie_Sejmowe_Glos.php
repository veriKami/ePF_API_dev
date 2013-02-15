<?php

/**
 * @file
 * Ten plik jest częścią biblioteki ePF_API.
 */

/**
 * Klasa obiektu ep_Glosowanie_Sejmowe_Glos.
 *
 * Alias: sejm_glosowania_glosy_wyniki
 *
 * @category   System
 * @package    ePF_API
 * @subpackage Objects
 * @version    0.x.x-dev
 * @since      version 0.1.0
 */
class ep_Glosowanie_Sejmowe_Glos extends ep_Object{

	/**
	 * @see ep_Object::getDataStruct()
	 */
	public function getDataStruct() {
		$result = parent::getDataStruct();
		$result = array_merge($result, array (
			'bunt' => ep_Object::TYPE_STRING,
			'glosowanie_id' => ep_Object::TYPE_STRING,
			'glos_id' => ep_Object::TYPE_STRING,
			'klub_id' => ep_Object::TYPE_STRING,
			'posel_id' => ep_Object::TYPE_STRING,
		));
		return $result;
	}

	public $_aliases = array('sejm_glosowania_glosy_wyniki');
	private $_posel = false;

	public function set_ep_poslowie($data){
		$this->_posel = new ep_Posel($data);
	}

	public function posel(){
		return $this->_posel;
	}

	/**
	 * @return string
	 */
	public function __toString(){
		return $this->get_nazwa();
	}
}