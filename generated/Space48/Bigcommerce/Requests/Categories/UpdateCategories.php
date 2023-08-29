<?php

namespace Space48\Bigcommerce\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCategories
 *
 * Updates existing categories.
 *
 *  To update a specific category in a tree, provide a category id.
 */
class UpdateCategories extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees/categories";
	}


	public function __construct()
	{
	}
}
