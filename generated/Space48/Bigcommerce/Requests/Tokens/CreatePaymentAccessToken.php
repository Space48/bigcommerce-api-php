<?php

namespace Space48\Bigcommerce\Requests\Tokens;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createPaymentAccessToken
 *
 * Use this endpoint to create a payment access token. A payment access token is required to process
 * payments with the BigCommerce API.
 *
 * You can also generate a payment access token during checkout by
 * using the `completeCheckout` mutation in the [GraphQL Storefront
 * API](/api-docs/storefront/graphql/carts-and-checkout#handling-payments).
 *
 * After the token is
 * created, use the token to [Process a
 * payment](/docs/rest-payments/processing#process-payment).
 *
 * **Required Fields**
 * * order_id
 */
class CreatePaymentAccessToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/payments/access_tokens";
	}


	public function __construct()
	{
	}
}
