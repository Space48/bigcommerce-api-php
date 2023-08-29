<?php

namespace Space48\Bigcommerce\Requests\PriceListsAssignments;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreatePriceListAssignments
 *
 * Creates a batch of `Price List Assignments`.
 * **Note:** The batch limit for `Price List Assignments`
 * is 25.
 */
class CreatePriceListAssignments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/pricelists/assignments";
	}


	public function __construct()
	{
	}
}
