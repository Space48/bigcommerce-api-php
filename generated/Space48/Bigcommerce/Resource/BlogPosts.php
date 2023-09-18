<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\BlogPosts\CreateBlogPosts;
use Space48\Bigcommerce\Requests\BlogPosts\DeleteBlogPost;
use Space48\Bigcommerce\Requests\BlogPosts\DeleteBlogPosts;
use Space48\Bigcommerce\Requests\BlogPosts\GetBlogPost;
use Space48\Bigcommerce\Requests\BlogPosts\GetBlogPosts;
use Space48\Bigcommerce\Requests\BlogPosts\GetBlogPostsCount;
use Space48\Bigcommerce\Requests\BlogPosts\UpdateBlogPost;
use Space48\Bigcommerce\Resource;

class BlogPosts extends Resource
{
	/**
	 * @param string $isPublished Filter param.
	 * @param string $url Filter param. Value must be URL encoded.
	 * @param string $tag Filter param.
	 * @param string $publishedDate Filter param.
	 */
	public function getBlogPosts(?string $isPublished, ?string $url, ?string $tag, ?string $publishedDate): Response
	{
		return $this->connector->send(new GetBlogPosts($isPublished, $url, $tag, $publishedDate));
	}


	public function createBlogPosts(): Response
	{
		return $this->connector->send(new CreateBlogPosts());
	}


	public function deleteBlogPosts(): Response
	{
		return $this->connector->send(new DeleteBlogPosts());
	}


	/**
	 * @param int $id ID of the blog post.
	 */
	public function getBlogPost(int $id): Response
	{
		return $this->connector->send(new GetBlogPost($id));
	}


	/**
	 * @param int $id ID of the blog post.
	 */
	public function updateBlogPost(int $id): Response
	{
		return $this->connector->send(new UpdateBlogPost($id));
	}


	/**
	 * @param int $id ID of the blog post.
	 */
	public function deleteBlogPost(int $id): Response
	{
		return $this->connector->send(new DeleteBlogPost($id));
	}


	public function getBlogPostsCount(): Response
	{
		return $this->connector->send(new GetBlogPostsCount());
	}
}
