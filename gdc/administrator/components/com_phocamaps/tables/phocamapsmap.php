<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
class TablePhocaMapsMap extends JTable
{
	function __construct( &$db ) {
		parent::__construct( '#__phocamaps_map', 'id', $db );
	}
	
	function check(){
		
		if (trim( $this->title ) == '') {
			$this->setError( JText::_( 'COM_PHOCAMAPS_ERROR_TITLE_NOT_SET') );
			return false;
		}

		if(empty($this->alias) && !empty($this->title)) {
			$this->alias = $this->title;
		}
		$this->alias = PhocaMapsHelper::getAliasName($this->alias);

		return true;
	}
	
}
?>