<?php

/**
 * @file
 * Ten plik jest częścią biblioteki ePF_API.
 */

/**
 * Klasa obiektu ep_BDL_Kategoria.
 *
 * Alias: bdl_wskazniki_kategorie
 *
 * @category   System
 * @package    ePF_API
 * @subpackage Objects
 * @version    0.x.x-dev
 * @since      version 0.1.0
 */
class ep_BDL_Kategoria extends ep_Object{

	/**
	 * @see ep_Object::getDataStruct()
	 */
	public function getDataStruct() {
		$result = parent::getDataStruct();
		$result = array_merge($result, array (
			'liczba_grup' => ep_Object::TYPE_STRING,
			'okres' => ep_Object::TYPE_STRING,
			'slug' => ep_Object::TYPE_STRING,
			'tytul' => ep_Object::TYPE_STRING,
		));
		return $result;
	}

	public $_aliases = array('bdl_wskazniki_kategorie');

	/**
	 * @return string
	 */
	public function __toString(){
		return $this->get_nazwa();
	}
}