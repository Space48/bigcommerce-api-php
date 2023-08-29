<?php

namespace Space48\Bigcommerce\Requests\Banners;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createABanner
 *
 * Creates a *Banner*.
 *
 * **Required Fields**
 * * name
 * * content
 * * page
 * * location
 * * date_type
 *
 * **Read Only
 * Fields**
 * * date_created
 * * id
 */
class CreateAbanner extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/banners";
	}


	public function __construct()
	{
	}
}
