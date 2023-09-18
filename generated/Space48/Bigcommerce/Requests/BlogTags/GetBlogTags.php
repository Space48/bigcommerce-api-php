<?php

namespace Space48\Bigcommerce\Requests\BlogTags;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBlogTags
 *
 * Returns a list of *Blog Tags*.
 */
class GetBlogTags extends Request
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
