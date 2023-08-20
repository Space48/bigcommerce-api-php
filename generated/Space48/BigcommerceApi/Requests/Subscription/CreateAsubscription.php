<?php

namespace Space48\BigcommerceApi\Requests\Subscription;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createASubscription
 *
 * Creates or updates an email subscription.
 *
 * By default, customers receive abandoned cart emails as
 * soon as they provide their email address in the checkout flow. They can opt out using this
 * endpoint.
 *
 * However, if **Store Settings > Miscellaneous > Require Consent** is enabled, Abandoned
 * Cart Emails are not sent by default, and the customer should opt-in.
 *
 * > #### Note
 * > * Substitute
 * your storefront domain for `yourstore.example.com`.
 * > * The Send a Test Request feature is not
 * currently supported for this endpoint.
 */
class CreateAsubscription extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/subscriptions";
	}


	public function __construct()
	{
	}
}
