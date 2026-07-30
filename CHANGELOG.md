# Changelog

All notable changes to this package will be documented in this file.

## [Unreleased]

### Changed
- **BREAKING**: Minimum PHP version is now 8.1 (previously 7.4)
- **BREAKING**: Minimum Laravel version is now 10.x (previously 8.x)
- Added support for Laravel 10.x, 11.x, and 12.x
- Added typed properties and return types throughout codebase
- Fixed `TransactionalSMSApi` method name case to match SDK class name

### Added
- LICENSE file (MIT)
- CHANGELOG.md
- larastan dev dependency for static analysis

### Fixed
- PHPStan configuration now correctly scans `src/` directory
- Moved tests autoload namespace to `autoload-dev` section
- Removed unused `DeferrableProvider` import

### Removed
- Support for PHP 7.4 and 8.0
- Support for Laravel 8.x and 9.x
