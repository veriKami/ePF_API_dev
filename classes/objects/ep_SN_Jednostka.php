<?php

/**
 * @file
 * Ten plik jest częścią biblioteki ePF_API.
 */

/**
 * Klasa obiektu ep_SN_Jednostka.
 *
 * Alias: sn_jednostki
 *
 * @category   System
 * @package    ePF_API
 * @subpackage Objects
 * @version    0.x.x-dev
 * @since      version 0.1.0
 */
class ep_SN_Jednostka extends ep_Object{

	/**
	 * @see ep_Object::getDataStruct()
	 */
	public function getDataStruct() {
		$result = parent::getDataStruct();
		$result = array_merge($result, array (
			'nazwa' => ep_Object::TYPE_STRING,
		));
		return $result;
	}

	public $_aliases = array( 'sn_jednostki' );

	public $_field_init_lookup = 'nazwa';

	/**
	 * @var ep_Dataset
	 */
	protected $_orzeczenia_sn = null;

	/**
	 * @return string
	 */
	public function __toString(){
		return (string) $this->get_nazwa();
	}

	/**
	 * @return ep_Dataset
	 */
	public function orzeczenia_sn(){
		if( !$this->_orzeczenia_sn ) {
			$this->_orzeczenia_sn = new ep_Dataset( 'sn_orzeczenia' );
			$this->_orzeczenia_sn->init_where( 'orzeczenie_sn_jednostka_id', '=', $this->id );
		}
		return $this->_orzeczenia_sn;
	}
}