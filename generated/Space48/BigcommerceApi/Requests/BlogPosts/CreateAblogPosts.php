<?php

namespace Space48\BigcommerceApi\Requests\BlogPosts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createABlogPosts
 *
 * Creates a *Blog Post*.
 *
 * **Required Fields**
 * *   `title`
 * *   `body`
 *
 * **Notes**
 *
 * * When including
 * `published_date` in a request, supply it as a flat date string (not an object) in valid <a
 * href="http://tools.ietf.org/html/rfc2822#section-3.3" target="_blank">RFC 2822</a>. The&#160;example
 * request below includes a `published_date` in RFC 2822 format.
 * * Blog posts default to draft status.
 * To publish blog posts to the storefront, set the `is_published` property to `true`.
 * * If a custom
 * URL is not provided, the post’s URL will be generated based on the value of `title`.
 */
class CreateAblogPosts extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/blog/posts";
	}


	public function __construct()
	{
	}
}
