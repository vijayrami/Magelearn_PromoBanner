# Magelearn_PromoBanner
Display a simple promotional banner throughout your website. It also includes the ability to customize the styles of the promotional banner based on expired date selected from datepicker configuration.

# Magento 2 Promo Banner

## Description
![Promo Banner](https://i.postimg.cc/wBZ4ZcBH/Home-page.png)

This Magento 2 module Display a simple promotional banner throughout your website. It also includes the ability to customize the styles of the promotional banner. It provides better idea about to add color picker and date time configuration in magento admin system configuration option.

### Screenshots

#### System Configuration
[![Configuration-Settings-Stores-Magento-Admin-1.png](https://i.postimg.cc/k5vDhwsR/Configuration-Settings-Stores-Magento-Admin-1.png)](https://postimg.cc/bGdzZxKq)

#### System Configuration Colorpicker
[![Configuration-Settings-Stores-Magento-Admin-2.png](https://i.postimg.cc/c4fKns3c/Configuration-Settings-Stores-Magento-Admin-2.png)](https://postimg.cc/Ln66dFNq)

#### System Configuration datepicker
[![Configuration-Settings-Stores-Magento-Admin-4.png](https://i.postimg.cc/tT7ZZWd1/Configuration-Settings-Stores-Magento-Admin-4.png)](https://postimg.cc/62J5F7mw)

## Installation

### Using Composer (Recommended)
 - Install the module composer by running `composer require magelearn/module-promobanner`
 - Enable the module by running `php bin/magento module:enable Magelearn_PromoBanner`
 - apply database updates by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`

### Manual File Transfer
- Clone or unzip this repository to `app/code/Magelearn/PromoBanner`
- Enable the module by running `php bin/magento module:enable Magelearn_PromoBanner`
- Apply database updates by running `php bin/magento setup:upgrade`
- Flush the cache by running `php bin/magento cache:flush`

## Configuration
This module adds new fields to the Sales > General > Header option in your stores configuration.

### How to Configure
To access this module's configuration, navigate to `Stores > Settings > Configuration > Sales > General` then expand the `Header` group.

### Settings Explanation

#### Enable Promo Banner
If set to yes, a promo banner will be shown on the header part of your website.

## Compatibility
This module has been tested and validated to work on Magento versions 2.3 to 2.4.2.

This module uses a ViewModel and should be compatible with versions 2.2 and higher.

## Bugs & Issues
If you find a bug or issue please create a new issue [here](https://github.com/vijayrami/Magelearn_PromoBanner/issues) and include as much detail and context as possible including screenshots.

## License
This module is licensed under the Open Software License V3.0 which you can refer to [here](LICENSE.txt).
