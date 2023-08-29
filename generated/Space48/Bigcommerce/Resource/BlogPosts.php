<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\BlogPosts\CreateAblogPosts;
use Space48\Bigcommerce\Requests\BlogPosts\DeleteAblogPost;
use Space48\Bigcommerce\Requests\BlogPosts\DeleteAllBlogPosts;
use Space48\Bigcommerce\Requests\BlogPosts\GetAblogPost;
use Space48\Bigcommerce\Requests\BlogPosts\GetAcountOfAllBlogPosts;
use Space48\Bigcommerce\Requests\BlogPosts\GetAllBlogPosts;
use Space48\Bigcommerce\Requests\BlogPosts\UpdateAblogPost;
use Space48\Bigcommerce\Resource;

class BlogPosts extends Resource
{
	/**
	 * @param string $isPublished Filter param.
	 * @param string $url Filter param. Value must be URL encoded.
	 * @param string $tag Filter param.
	 * @param string $publishedDate Filter param.
	 */
	public function getAllBlogPosts(string $isPublished, string $url, string $tag, string $publishedDate): Response
	{
		return $this->connector->send(new GetAllBlogPosts($isPublished, $url, $tag, $publishedDate));
	}


	public function createAblogPosts(): Response
	{
		return $this->connector->send(new CreateAblogPosts());
	}


	public function deleteAllBlogPosts(): Response
	{
		return $this->connector->send(new DeleteAllBlogPosts());
	}


	/**
	 * @param int $id ID of the blog post.
	 */
	public function getAblogPost(int $id): Response
	{
		return $this->connector->send(new GetAblogPost($id));
	}


	/**
	 * @param int $id ID of the blog post.
	 */
	public function updateAblogPost(int $id): Response
	{
		return $this->connector->send(new UpdateAblogPost($id));
	}


	/**
	 * @param int $id ID of the blog post.
	 */
	public function deleteAblogPost(int $id): Response
	{
		return $this->connector->send(new DeleteAblogPost($id));
	}


	public function getAcountOfAllBlogPosts(): Response
	{
		return $this->connector->send(new GetAcountOfAllBlogPosts());
	}
}
