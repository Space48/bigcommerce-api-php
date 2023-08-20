<?php

namespace Space48\BigcommerceApi\Requests\BlogTags;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllBlogTags
 *
 * Returns a list of *Blog Tags*.
 */
class GetAllBlogTags extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/blog/tags";
	}


	public function __construct()
	{
	}
}
