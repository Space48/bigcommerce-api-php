<?php

namespace Space48\Bigcommerce\Requests\CategoryAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CreateProductsCategoryAssignments
 *
 * Creates products category assignments.
 */
class CreateProductsCategoryAssignments extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/category-assignments";
	}


	public function __construct()
	{
	}
}
