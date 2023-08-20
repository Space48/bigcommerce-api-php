<?php

namespace Space48\BigcommerceApi\Requests\Placement;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createPlacement
 *
 * Creates a **Placement**.
 *
 * **Template Files**
 *
 * To view the list of values accepted by the
 * `template_file` property, including **custom** templates, see
 * [Placements](/api-docs/store-management/widgets/overview#placements).
 */
class CreatePlacement extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/content/placements";
	}


	public function __construct()
	{
	}
}
