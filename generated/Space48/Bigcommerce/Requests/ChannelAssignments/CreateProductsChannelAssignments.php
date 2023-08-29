<?php

namespace Space48\Bigcommerce\Requests\ChannelAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CreateProductsChannelAssignments
 *
 * Creates products channel assignments.
 */
class CreateProductsChannelAssignments extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/channel-assignments";
	}


	public function __construct()
	{
	}
}
