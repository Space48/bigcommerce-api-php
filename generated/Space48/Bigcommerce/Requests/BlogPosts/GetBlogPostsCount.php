<?php

namespace Space48\Bigcommerce\Requests\BlogPosts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBlogPostsCount
 *
 * Returns a count of all *Blog Posts*.
 */
class GetBlogPostsCount extends Request
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
