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
 
interface BL_CustomGrid_Block_Widget_Grid_Column_Renderer_Sales_Items_Sub_Interface
{
    /**
     * Return whether this renderer can be used to render the given value
     * 
     * @param Varien_Object $value Renderable value
     * @return bool
     */
    public function canRender(Varien_Object $value);
    
    /**
     * Render the given value
     * 
     * @param Varien_Object $value Renderable value
     * @return string
     */
    public function render(Varien_Object $value);
}
