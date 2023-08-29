<?php

namespace Space48\Bigcommerce\Requests\Widget;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createWidget
 *
 * Creates a **Widget**.
 *
 * **Note:** There is a limit of 100,000 widgets per store and 150 widgets per
 * page. For more information, see [Store
 * Limits](https://support.bigcommerce.com/s/article/Platform-Limits#storelimits).
 */
class CreateWidget extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/content/widgets";
	}


	public function __construct()
	{
	}
}
