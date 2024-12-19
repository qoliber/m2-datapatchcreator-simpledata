<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DataPatchCreatorSimpleData
 * @author      Jakub Winkler <jwinkler@qoliber.com
 */

namespace Qoliber\DataPatchCreatorSimpleData\Plugin;

use Magento\Framework\Module\Dir as ModuleDir;

class Output
{
    /** @var string  */
    public const MODULE = 'Qoliber_DataPatchCreatorSimpleData';

    /** @var ModuleDir  */
    protected ModuleDir $moduleDir;

    /**
     * @param ModuleDir $moduleDir
     */
    public function __construct(
        ModuleDir $moduleDir
    ) {
        $this->moduleDir = $moduleDir;
    }

    /**
     * @param \Qoliber\DataPatchCreator\Helper\Output $subject
     * @param callable $proceed
     * @param string $templateFile
     * @return string
     */
    public function aroundGetTemplateFile(
        \Qoliber\DataPatchCreator\Helper\Output $subject,
        callable $proceed,
        string $templateFile
    ): string
    {
        $file = $this->moduleDir->getDir(self::MODULE) .
            DIRECTORY_SEPARATOR . '_templates' . DIRECTORY_SEPARATOR . $templateFile;

        if (file_exists($file)) {
            return $file;
        }

        return $proceed($templateFile);
    }
}
