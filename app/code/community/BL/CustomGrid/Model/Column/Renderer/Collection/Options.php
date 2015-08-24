<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   BL
 * @package    BL_CustomGrid
 * @copyright  Copyright (c) 2015 Benoît Leulliette <benoit.leulliette@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class BL_CustomGrid_Model_Column_Renderer_Collection_Options extends BL_CustomGrid_Model_Column_Renderer_Collection_Abstract
{
    protected $_backwardsMap = array('options_separator' => 'sub_values_separator');
    
    public function getColumnBlockValues(
        $columnIndex,
        Mage_Core_Model_Store $store,
        BL_CustomGrid_Model_Grid $gridModel
    ) {
        if (($sourceId = $this->getData('values/source_id'))
            /** @var $source BL_CustomGrid_Model_Options_Source */
            && ($source = Mage::getModel('customgrid/options_source')->load($sourceId))
            && $source->getId()) {
            $options = $source->getOptionArray();
        } else {
            $options = array();
        }
        
        $implodedSeparator = $this->getData('values/imploded_separator');
        
        if (empty($implodedSeparator) && ($implodedSeparator != '0')) {
            $implodedSeparator = ',';
        }
        
        return $this->_getRendererHelper()
            ->getOptionsValues($this, $options, (bool) $this->getData('values/imploded_values'), $implodedSeparator);
    }
}
