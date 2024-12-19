<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DataPatchCreatorSimpleData
 * @author      Jakub Winkler <jwinkler@qoliber.com
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Qoliber_DataPatchCreatorSimpleData',
    __DIR__
);
