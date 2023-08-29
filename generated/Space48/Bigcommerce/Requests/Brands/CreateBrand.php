<?php

namespace Space48\Bigcommerce\Requests\Brands;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBrand
 *
 * Creates a *Brand*.
 *
 * **Required Fields**
 * - name
 *
 * **Read-Only Fields**
 * - id
 *
 * **Limits**
 * - 30,000
 * brands per store limit
 */
class CreateBrand extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands";
	}


	public function __construct()
	{
	}
}
