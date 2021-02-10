<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Email\Block\Adminhtml\Template\Grid\Renderer;

use Magento\Email\Model\AbstractTemplate;

/**
 * Adminhtml system templates grid block type item renderer
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Type extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    /**
     * Email template types
     *
     * @var array
     */
    protected static $_types = [
        AbstractTemplate::TYPE_HTML => 'HTML',
        AbstractTemplate::TYPE_TEXT => 'Text',
    ];

    /**
     * Render grid column
     *
     * @param \Magento\Framework\DataObject $row
     * @return \Magento\Framework\Phrase
     */
    public function render(\Magento\Framework\DataObject $row)
    {
        $str = __('Unknown');

        if (isset(self::$_types[$row->getTemplateType()])) {
            $str = self::$_types[$row->getTemplateType()];
        }

        return __($str);
    }
}
