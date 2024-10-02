<?php

namespace RizwanSarfraz\LaravelBrevo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Brevo\Client\Api\AccountApi accountApi()
 * @method static \Brevo\Client\Api\AttributesApi attributesApi()
 * @method static \Brevo\Client\Api\CompaniesApi companiesApi()
 * @method static \Brevo\Client\Api\ContactsApi contactsApi()
 * @method static \Brevo\Client\Api\ConversationsApi conversationsApi()
 * @method static \Brevo\Client\Api\CouponsApi couponsApi()
 * @method static \Brevo\Client\Api\CRMApi crmApi()
 * @method static \Brevo\Client\Api\DealsApi dealsApi()
 * @method static \Brevo\Client\Api\DomainsApi domainsApi()
 * @method static \Brevo\Client\Api\EcommerceApi ecommerceApi()
 * @method static \Brevo\Client\Api\EmailCampaignsApi emailCampaignsApi()
 * @method static \Brevo\Client\Api\ExternalFeedsApi externalFeedsApi()
 * @method static \Brevo\Client\Api\FilesApi filesApi()
 * @method static \Brevo\Client\Api\FoldersApi foldersApi()
 * @method static \Brevo\Client\Api\InboundParsingApi inboundParsingApi()
 * @method static \Brevo\Client\Api\ListsApi listsApi()
 * @method static \Brevo\Client\Api\MasterAccountApi masterAccountApi()
 * @method static \Brevo\Client\Api\NotesApi notesApi()
 * @method static \Brevo\Client\Api\ProcessApi processApi()
 * @method static \Brevo\Client\Api\ResellerApi resellerApi()
 * @method static \Brevo\Client\Api\SendersApi sendersApi()
 * @method static \Brevo\Client\Api\SMSCampaignsApi smsCampaignsApi()
 * @method static \Brevo\Client\Api\TasksApi tasksApi()
 * @method static \Brevo\Client\Api\TransactionalEmailsApi transactionalEmailsApi()
 * @method static \Brevo\Client\Api\TransactionalSMSApi transactionalSmsApi()
 * @method static \Brevo\Client\Api\TransactionalWhatsAppApi transactionalWhatsAppApi()
 * @method static \Brevo\Client\Api\UserApi userApi()
 * @method static \Brevo\Client\Api\WebhooksApi webhooksApi()
 * @method static \Brevo\Client\Api\WhatsAppCampaignsApi whatsAppCampaignsApi()
 *
 * Facade for accessing Brevo API services.
 */
class Brevo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'brevo';
    }
}
