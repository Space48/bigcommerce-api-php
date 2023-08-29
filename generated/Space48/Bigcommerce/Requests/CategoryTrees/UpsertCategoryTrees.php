<?php

namespace Space48\Bigcommerce\Requests\CategoryTrees;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpsertCategoryTrees
 *
 * Upserts *Category Trees*.
 *
 * This single endpoint updates and creates category trees. If a tree
 * object contains an ID, it is processed as an update operation using that ID. If you do not provide
 * an ID, a new tree is created. The category tree `name` field is required to create trees, but is not
 * required on the update.
 *
 * **Usage Notes**
 * * `channel_id` is required to create a *Category Tree*. You
 * can assign one `channel_id` to one category tree.
 */
class UpsertCategoryTrees extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees";
	}


	public function __construct()
	{
	}
}
