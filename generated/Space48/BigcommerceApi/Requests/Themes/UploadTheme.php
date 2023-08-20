<?php

namespace Space48\BigcommerceApi\Requests\Themes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * uploadTheme
 *
 * Uploads a new *Theme* to your BigCommerce store.
 *
 * **Required Fields**
 * * file
 */
class UploadTheme extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/themes";
	}


	public function __construct()
	{
	}
}
