<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ThemeCustomTemplates\GetThemeCustomTemplates;
use Space48\Bigcommerce\Resource;

class ThemeCustomTemplates extends Resource
{
	/**
	 * @param string $versionUuid
	 */
	public function getThemeCustomTemplates(string $versionUuid): Response
	{
		return $this->connector->send(new GetThemeCustomTemplates($versionUuid));
	}
}
