<?php

namespace Space48\Bigcommerce\Requests\BlogPosts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllBlogPosts
 *
 * Deletes a page of `Blog Posts`.
 */
class DeleteAllBlogPosts extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/blog/posts";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
