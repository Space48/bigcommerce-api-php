<?php

namespace Space48\BigcommerceApi\Requests\CustomsInformation;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * putCustomsInformation
 *
 * Creates and updates product customs information.
 *
 * This is a batch operation where the creation of
 * multiple customs information objects can be done with one `PUT` request.
 *
 * **Limits**
 * * Limit of 50
 * customs information objects per `PUT` request.
 */
class PutCustomsInformation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/shipping/products/customs-information";
	}


	public function __construct()
	{
	}
}
