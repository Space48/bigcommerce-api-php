<?php

namespace Space48\Bigcommerce\Requests\BlogPosts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateABlogPost
 *
 * Updates a *Blog Post*.
 *
 * **Notes**
 *
 * * When including `published_date` in a request, supply it as a
 * flat date string (not an object) in valid <a href="http://tools.ietf.org/html/rfc2822#section-3.3"
 * target="_blank">RFC 2822</a>. The&#160;example request below includes a `published_date` in RFC 2822
 * format.
 *
 * * Blog posts default to draft status. To publish blog posts to the storefront, set the
 * `is_published` property to `true`.
 */
class UpdateAblogPost extends Request
{
	protected Method $method = Method::PUT;


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
