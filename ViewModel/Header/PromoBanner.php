<?php

declare(strict_types=1);

namespace Magelearn\PromoBanner\ViewModel\Header;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class PromoBanner extends DataObject implements ArgumentInterface
{
    /**
     * System XML config path for Magelearn_PromoBanner
     */
    protected const PROMO_BANNER_XML_CONFIG_PATH = 'header/promo_banner/';

    /** @var ScopeConfigInterface */
    protected $scopeConfig;

    /**
     * PromoBanner constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct();
    }

    /**
     * Returns true if promotional banner is enabled
     * @return bool
     */
    public function isEnabled(): bool
    {
        return (bool)$this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'enable');
    }

    /**
     * Returns promotional banner text
     * @return string
     */
    public function getPromoText(): string
    {
        return $this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'message');
    }
	
	 public function getExpiredDate()
    {
        return $this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'expired_date');
    }
    /**
     * Returns promotional banner link
     * @return string
     */
    public function getPromoLink(): ?string
    {
        return $this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'link');
    }

    /**
     * Returns true if promotional banner is configured to use custom CSS styles
     * @return bool
     */
    public function isUseCustomStyles(): bool
    {
        return (bool)$this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'custom_styles');
    }

    /**
     * Returns array of CSS styles
     * @return array
     */
    public function getCustomStyles(): array
    {
        $customStyles = [
            'background' => false,
            'font_size' => false,
            'font_weight' => false,
            'font_color' => false
        ];
		
		$background = $customStyles['background'];
		$color = $customStyles['font_color'];
		$fontSize = $customStyles['font_size'];
		$fontWeight = $customStyles['font_weight'];
		
        if ($background = $this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'background')) {
            $customStyles['background'] = $background;
        }

        if ($color = $this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'font_color')) {
            $customStyles['font_color'] = $color;
        }

        if ($fontSize = $this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'font_size')) {
            $customStyles['font_size'] = $fontSize;
        }

        if ($fontWeight = $this->scopeConfig->getValue(self::PROMO_BANNER_XML_CONFIG_PATH . 'font_weight')) {
            $customStyles['font_weight'] = $fontWeight;
        }
		
        return $customStyles;
    }
}
