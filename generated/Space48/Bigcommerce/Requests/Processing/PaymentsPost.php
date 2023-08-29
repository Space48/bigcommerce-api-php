<?php

namespace Space48\Bigcommerce\Requests\Processing;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PaymentsPost
 *
 * Process payments for an order. See [Payment
 * Processing](/api-docs/store-management/payments-api-overview) for more information.
 */
class PaymentsPost extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/payments";
	}


	public function __construct()
	{
	}
}
