<?php

use SilverStripe\ORM\DataObject;

/**
 * 
 *
 * @author <marcus@silverstripe.com.au>
 * @license BSD License http://www.silverstripe.org/bsd-license
 */
class DataObjectXmlConverter {
	public function convert(DataObject $object) {
		if ($object->hasMethod('toFilteredMap')) {
			$data = $object->toFilteredMap();
		} else {
			$data = $object->toMap();
		}
		
		$converter = new ArrayToXml('item');
		return $converter->convertArray($data);
	}
}

