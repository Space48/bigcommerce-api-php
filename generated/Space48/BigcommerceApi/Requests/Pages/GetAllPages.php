<?php

namespace Space48\BigcommerceApi\Requests\Pages;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllPages
 *
 * Returns a list of *Pages*. Default sorting is by auto-generated ID from oldest to newest.
 *
 * > ####
 * Warning
 * > **Deprecated**
 * > * This API operation is deprecated. Avoid using this API operation if
 * possible. It will be removed in a future version.
 * > * To get one or more pages, use Pages V3ʼs [Get
 * pages](/docs/rest-content/pages#get-pages) endpoint. To get a single page, use Pages V3ʼs [Get a
 * page](/docs/rest-content/pages#get-a-page) endpoint.
 */
class GetAllPages extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/pages";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
