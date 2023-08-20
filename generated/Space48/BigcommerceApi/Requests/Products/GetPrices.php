<?php

namespace Space48\BigcommerceApi\Requests\Products;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * get-prices
 *
 * Calculate batch pricing for products for a specific channel, currency, and customer
 * group.
 *
 * **Limits**
 * * Limit of 50 concurrent requests.
 */
class GetPrices extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/pricing/products";
	}


	public function __construct()
	{
	}
}
