<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\BlogTags\GetAllBlogTags;
use Space48\Bigcommerce\Resource;

class BlogTags extends Resource
{
	public function getAllBlogTags(): Response
	{
		return $this->connector->send(new GetAllBlogTags());
	}
}
