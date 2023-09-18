<?php

namespace Space48\Bigcommerce\Requests\PriceListsRecords;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * upsertPriceListRecords
 *
 * Creates a batch of `Price Lists Records`; may include price list records from more than one price
 * list.  Concurrency limit of 1.
 */
class UpsertPriceListRecords extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/pricelists/records";
	}


	public function __construct()
	{
	}
}
