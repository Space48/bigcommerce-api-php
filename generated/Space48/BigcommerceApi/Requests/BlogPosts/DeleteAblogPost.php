<?php

namespace Space48\BigcommerceApi\Requests\BlogPosts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteABlogPost
 *
 * Deletes a *Blog Post*.
 */
class DeleteAblogPost extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/blog/posts/{$this->id}";
	}


	/**
	 * @param int $id ID of the blog post.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
