<?php

namespace Space48\BigcommerceApi\Requests\BlogPosts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllBlogPosts
 *
 * Returns all *Blog Posts*. Default sorting is by published_date, beginning with the most recent post.
 */
class GetAllBlogPosts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/blog/posts";
	}


	/**
	 * @param string $isPublished Filter param.
	 * @param string $url Filter param. Value must be URL encoded.
	 * @param string $tag Filter param.
	 * @param string $publishedDate Filter param.
	 */
	public function __construct(
		protected string $isPublished,
		protected string $url,
		protected string $tag,
		protected string $publishedDate,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'is_published' => $this->isPublished,
			'url' => $this->url,
			'tag' => $this->tag,
			'published_date' => $this->publishedDate,
		];
	}
}
