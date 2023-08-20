<?php

namespace Space48\BigcommerceApi\Requests\TaxProvider;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * estimate
 *
 * Submit the quote request to retrieve an estimate from the enabled third-party tax provider.
 * Estimates are not expected to be persisted by the tax provider.
 *
 * > Server URL
 * > - For supporting tax
 * providers, the server URL contains the tax provider's profile field; for example,
 * `your_profile.example.com`.
 * > - The Try it feature is not currently supported for this
 * endpoint.
 *
 * The following actions can trigger tax estimate requests multiple times during a standard
 * checkout on a BigCommerce storefront, depending on the BigCommerce merchant’s settings.
 *
 * - After
 * selecting a Shipping Method during the “Estimate Shipping & Tax” facility on the Cart page.
 * -
 * After specifying a Shipping Address during a Checkout.
 * - After selecting a Shipping Method during a
 * Checkout.
 * - After specifying a Billing Address during a Checkout.
 *
 * The following actions are not
 * expected to trigger estimate requests.
 *
 * - While anonymously browsing a store’s product catalog.
 * -
 * On the Cart page prior to a Shopper selecting a Shipping Method via “Estimate Shipping & Tax”.
 * -
 * On the Checkout page prior to specifying a Shipping Address.
 * - On the Checkout page, when toggling
 * any option related to using the shopper’s Shipping Address as their Billing Address.
 *
 * The
 * following control panel actions can also trigger tax estimate requests.
 *
 * - Order refund.
 * - Edit
 * order.
 * - Test connection feature in Tax Settings.
 */
class Estimate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/estimate";
	}


	public function __construct()
	{
	}
}
