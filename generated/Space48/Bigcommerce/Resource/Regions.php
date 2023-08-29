<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Regions\GetContentRegions;
use Space48\Bigcommerce\Resource;

class Regions extends Resource
{
	/**
	 * @param string $templateFile The template file, for example: `templateFile=pages/home`.
	 */
	public function getContentRegions(string $templateFile): Response
	{
		return $this->connector->send(new GetContentRegions($templateFile));
	}
}
