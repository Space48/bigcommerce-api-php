<?php

namespace Space48\Bigcommerce\Requests\BlogPosts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBlogPost
 *
 * Returns a single *Blog Post*.
 */
class GetBlogPost extends Request
{
	protected Method $method = Method::GET;


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
