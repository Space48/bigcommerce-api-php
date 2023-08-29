<?php

namespace Space48\Bigcommerce\Requests\Categories;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCategories
 *
 * Creates new categories.
 *
 * Creating a category requires:
 *  - `name`
 *  - `url`
 *  - `tree_id` or
 * `parent_id`
 */
class CreateCategories extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees/categories";
	}


	public function __construct()
	{
	}
}
