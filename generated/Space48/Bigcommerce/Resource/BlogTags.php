<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\BlogTags\GetBlogTags;
use Space48\Bigcommerce\Resource;

class BlogTags extends Resource
{
	public function getBlogTags(): Response
	{
		return $this->connector->send(new GetBlogTags());
	}
}
