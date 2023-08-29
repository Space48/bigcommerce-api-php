<?php

namespace Space48\Bigcommerce\Requests\WidgetTemplate;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createWidgetTemplate
 *
 * Creates a **Widget Template**.
 *
 * ***Note:*** *There is a limit of 1000 custom widget templates per
 * store.*
 *
 * **Required Fields**
 * * name
 * * template
 */
class CreateWidgetTemplate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/content/widget-templates";
	}


	public function __construct()
	{
	}
}
