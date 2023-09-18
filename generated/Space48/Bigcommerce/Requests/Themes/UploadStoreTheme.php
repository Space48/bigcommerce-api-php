<?php

namespace Space48\Bigcommerce\Requests\Themes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * uploadStoreTheme
 *
 * Uploads a new *Theme* to your BigCommerce store.
 *
 * **Required Fields**
 * * file
 */
class UploadStoreTheme extends Request implements HasBody
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
