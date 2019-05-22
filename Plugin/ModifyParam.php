<?php
/**
 * HAUNV88
 *
 * @author HAUNV88
 * @package     HAUNV88_Base
 * @copyright   Copyright (c) HAUNV88
 */

namespace HAUNV88\Base\Plugin;

use Magento\Backend\Model\Menu\Builder\AbstractCommand;

/**
 *
 * Class ModifyParam
 */
class ModifyParam { 


	const HAUNV88_CORE = 'HAUNV88_Base::menu';

	/**
	 *
	 * @param AbstractCommand $subject
	 * @param $itemParams
	 *
	 * @return mixed
	 */
	public function afterExecute(AbstractCommand $subject, $itemParams) {
		if ( strpos($itemParams['id'], 'HAUNV88_') !== false && isset($itemParams['parent']) && strpos($itemParams['parent'], 'HAUNV88_') === false ) {
			$itemParams['parent'] = self::HAUNV88_CORE;
		}

		return $itemParams;
	}

}