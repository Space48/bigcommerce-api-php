<?php

namespace Space48\Bigcommerce\Requests\BlogPosts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getBlogPosts
 *
 * Returns all *Blog Posts*. Default sorting is by published_date, beginning with the most recent post.
 */
class GetBlogPosts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/blog/posts";
	}


	/**
	 * @param null|string $isPublished Filter param.
	 * @param null|string $url Filter param. Value must be URL encoded.
	 * @param null|string $tag Filter param.
	 * @param null|string $publishedDate Filter param.
	 */
	public function __construct(
		protected ?string $isPublished = null,
		protected ?string $url = null,
		protected ?string $tag = null,
		protected ?string $publishedDate = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'is_published' => $this->isPublished,
			'url' => $this->url,
			'tag' => $this->tag,
			'published_date' => $this->publishedDate,
		]);
	}
}
