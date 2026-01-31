# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.1] - 2024

### Added
- Mark Shust's SimpleData module integration for DataPatchCreator tool
- Custom template directory resolution via plugin on `\Qoliber\DataPatchCreator\Helper\Output::getTemplateFile()`
- Support for SimpleData-specific YAML formats in data patch generation
- Template override mechanism checking `_templates` directory in module root
- Fallback to default DataPatchCreator templates when SimpleData templates not found

### Changed
- Extended template resolution to prioritize `Qoliber_DataPatchCreatorSimpleData` module templates
- Template file path construction: `{module_dir}/_templates/{template_file}`

### Technical Details
- Plugin `Output` using `aroundGetTemplateFile()` interception point
- File existence check via `file_exists()` before returning custom template path
- Returns custom template path if exists, otherwise proceeds to original method
- Requires dependencies: `qoliber/m2-datapatchcreator` and `markshust/magento2-module-simpledata`
- PHP 8.1.0+ requirement
- Uses `\Magento\Framework\Module\Dir` for module directory resolution
- Global DI configuration in `etc/di.xml`
