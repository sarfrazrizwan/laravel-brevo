# Laravel Brevo Package

[![Latest Version](https://img.shields.io/github/v/release/sarfrazrizwan/laravel-brevo.svg)](https://github.com/sarfrazrizwan/laravel-brevo/releases)
[![License](https://img.shields.io/github/license/sarfrazrizwan/laravel-brevo.svg)](https://github.com/sarfrazrizwan/laravel-brevo/blob/main/LICENSE)

A Laravel package for seamless integration with the [Brevo PHP SDK](https://github.com/getbrevo/brevo-php), enabling access to Brevo's powerful email, SMS, and marketing automation services within your Laravel applications. This package simplifies the use of Brevo's API by providing a clean and easy-to-use interface.

## Features

- **Easy Brevo API Integration**: Access Brevo's email marketing, SMS, transactional emails, and marketing automation APIs.
- **Comprehensive API Support**: Includes support for various Brevo APIs like Contacts, Campaigns, Email, SMS, Webhooks, and more.
- **Laravel Facade**: Use the `Brevo` facade to interact with Brevo APIs effortlessly.
- **Custom Configuration**: Customize the API key and other settings via the configuration file.

## Installation

### Step 1: Install via Composer

You can install the package via Composer:

```bash
composer require sarfrazrizwan/laravel-brevo
```

### Step 2: Publish the Configuration

Publish the package configuration file to your application:

```bash
php artisan vendor:publish --provider="RizwanSarfraz\LaravelBrevo\BrevoServiceProvider" --tag="config"
```

This will create a `config/brevo.php` file where you can set your Brevo API key.

### Step 3: Set the API Key

Add your Brevo API key in your `.env` file:

```env
BREVO_API_KEY=your-brevo-api-key
```

## Usage

### Facade

The `Brevo` facade allows you to access Brevo APIs like this:

```php
use RizwanSarfraz\LaravelBrevo\Facades\Brevo;

// Access Account API
$accountApi = Brevo::accountApi();
$account = $accountApi->getAccount();

// Access Contacts API
$contactsApi = Brevo::contactsApi();
$contacts = $contactsApi->getContacts();
```

### Available APIs

Here are some of the APIs you can access via this package:

- `accountApi()`
- `attributesApi()`
- `companiesApi()`
- `contactsApi()`
- `conversationsApi()`
- `couponsApi()`
- `crmApi()`
- `dealsApi()`
- `domainsApi()`
- `ecommerceApi()`
- `emailCampaignsApi()`
- `externalFeedsApi()`
- `filesApi()`
- `foldersApi()`
- `inboundParsingApi()`
- `listsApi()`
- `masterAccountApi()`
- `notesApi()`
- `processApi()`
- `resellerApi()`
- `sendersApi()`
- `smsCampaignsApi()`
- `tasksApi()`
- `transactionalEmailsApi()`
- `transactionalSmsApi()`
- `transactionalWhatsAppApi()`
- `userApi()`
- `webhooksApi()`
- `whatsAppCampaignsApi()`

## Exception Handling

If the API key is missing or invalid, the package will throw an `ApiKeyIsMissing` exception. Make sure your `.env` file contains the correct `BREVO_API_KEY`.

## Testing

To run the package tests:

```bash
vendor/bin/phpunit
```

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss any changes or improvements.

## License

This package is open-source software licensed under the [MIT license](https://github.com/sarfrazrizwan/laravel-brevo/blob/main/LICENSE).

---

### Keywords

- Laravel Brevo integration
- Brevo PHP SDK
- Laravel marketing automation
- Email marketing API for Laravel
- SMS marketing Laravel
- Transactional email Laravel
- Brevo API integration
- Laravel package Brevo
