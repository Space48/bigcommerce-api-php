<?php

namespace Space48\BigcommerceApi\Requests\BlogPosts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACountOfAllBlogPosts
 *
 * Returns a count of all *Blog Posts*.
 */
class GetAcountOfAllBlogPosts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/blog/posts/count";
	}


	public function __construct()
	{
	}
}
