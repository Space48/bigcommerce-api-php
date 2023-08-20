<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\BlogTags\GetAllBlogTags;
use Space48\BigcommerceApi\Resource;

class BlogTags extends Resource
{
	public function getAllBlogTags(): Response
	{
		return $this->connector->send(new GetAllBlogTags());
	}
}
