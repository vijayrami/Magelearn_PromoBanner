<?php

namespace Magelearn\PromoBanner\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class ColorPicker extends Field
{

    /**
     * Add script to html element
     *
     * @param  AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element): string {
        $html = $element->getElementHtml();
        $value = $element->getData('value');

        $html .= '<script type="text/javascript">
            require(["jquery"], function ($) {
                $(document).ready(function (e) {
                    $("#' . $element->getHtmlId() . '").css("background-color","#' . $value . '");
                    $("#' . $element->getHtmlId() . '").colpick({
                        submit:0,
                        color: "#' . $value . '",
                        onChange:function(hsb,hex,rgb,el,bySetColor) {
                        $(el).css("background-color","#"+hex);
                        if(!bySetColor) $(el).val("#" + hex);
                    }
                    }).keyup(function(){
                        $(this).colpickSetColor(this.value);
                    });
                });
            });
            </script>';

        return $html;
    }
}