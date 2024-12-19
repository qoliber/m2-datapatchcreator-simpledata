![Open Source Love](https://img.shields.io/badge/open-source-lightgrey?style=for-the-badge&logo=github)
![](https://img.shields.io/badge/Magento-2.4.x-orange?style=for-the-badge&logo=magento)
![](https://img.shields.io/badge/Magento-2.3.x-orange?style=for-the-badge&logo=magento)
![](https://img.shields.io/badge/Maintained-yes-gren?style=for-the-badge&logo=magento)
# Magento 2 DataPatchCreator - Compatibility for MarkShust SimpleData

**DataPatch Creator** Compatibility for **MarkShust_SimpleData**  

### Installation

Installation is via `composer`
```
composer require qoliber/m2-datapatchcreator-simpledata
```

After installing the packages, enable all modules with:

```
php bin/magento module:enable Qoliber_DataPatchCreatorSimpleData Qoliber_DataPatchCreator MarkShust_SimpleData
```

Then run:
```
php bin/magento setup:upgrade
```

### Requirements:
* Main Package: https://packagist.org/packages/qoliber/datapatchcreator (installed with the module)
* SimpleData module: https://packagist.org/packages/markshust/magento2-module-simpledata (installed with the module)
* `PHP 7.3` or higher
* `Magento 2.3.x` or higher

### Tested on:
* `Magento 2.3.x` OpenSource
* `Magento 2.4.x` OpenSource

### Suggested Packages:
* PageBuilder Compatibility: https://github.com/qoliber/datapatchcreator-pagebuilder-compatibility
