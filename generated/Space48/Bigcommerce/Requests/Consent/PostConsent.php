<?php

namespace Space48\Bigcommerce\Requests\Consent;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * postConsent
 *
 * Sets the status of a customer's consent to allow data collection by cookies and scripts according to
 * the following consent categories:
 *
 *
 *   2. Analytics — These cookies provide statistical information
 * on site usage so the store owner can improve the website over time.
 *   3. Functional — These
 * cookies enable enhanced functionality, such as videos and live chat. If a shopper does not allow
 * these, then some or all of these functions may not work properly.
 *   4. Targeting; Advertising —
 * These cookies allow merchants to create profiles or personalize content to enhance users' shopping
 * experience.
 *
 *
 * This endpoint only works if the cookie consent feature is enabled. It is assumed
 * the shopper has not consented to anything until a value is explicitly set. The request body must be
 * populated with a complete set of allowed and denied categories.
 *
 * Once set, consent preferences will
 * be saved as a cookie for guest shoppers. Consent preferences will be persisted to a shopper's
 * account to be used for future sessions once they have logged in. Consent preferences can also be
 * managed using the [Update customer
 * consent](/docs/rest-management/customers/customer-consent#update-customer-consent) endpoint.
 *
 * >
 * #### Note
 * > * Substitute your storefront domain for `yourstore.example.com`.
 */
class PostConsent extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/consent";
	}


	public function __construct()
	{
	}
}
