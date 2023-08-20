<?php

namespace Space48\BigcommerceApi\Requests\Categories;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCategory
 *
 * Creates a *Category*.
 *
 * Use this endpoint when an API only works with categories of a default
 * BigCommerce storefront (`channel_id=1`).
 *
 * Use the [Create
 * Categories](/docs/rest-catalog/category-trees/categories#create-categories) endpoint when an API
 * works with categories across different category trees that belong to different storefront
 * channels.
 *
 * **Required Fields**:
 * - `parent_id`:
 * 	- To create a child category, set the `parent_id`
 * to the parent category.
 * 	- To create a top level category, set the `parent_id` to `0`.
 * -
 * `name`
 *
 * **Read-Only Fields**:
 * - `id`
 *
 * **Limits**:
 * - 16,000 categories per store limit.
 * - 1,000
 * categories per product limit.
 * - 50 characters category name length.
 * - 8 levels of category depth
 * limit.
 * - 65,642 characters category description length limit.
 */
class CreateCategory extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories";
	}


	public function __construct()
	{
	}
}
