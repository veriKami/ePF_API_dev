<?php

/**
 * @file
 * Ten plik jest częścią biblioteki ePF_API.
 */

/**
 * Klasa obiektu ep_ISAP_Plik.
 *
 * Alias: isap_pliki
 *
 * @category   System
 * @package    ePF_API
 * @subpackage Objects
 * @version    0.x.x-dev
 * @since      version 0.1.0
 */
class ep_ISAP_Plik extends ep_Object{

	/**
	 * @see ep_Object::getDataStruct()
	 */
	public function getDataStruct() {
		$result = parent::getDataStruct();
		$result = array_merge($result, array (
			'dokument_id' => ep_Object::TYPE_STRING,
		));
		return $result;
	}

	public $_aliases = array('isap_pliki');

	/**
	 * @return string
	 */
	public function __toString(){
		return $this->get_nazwa();
	}
}