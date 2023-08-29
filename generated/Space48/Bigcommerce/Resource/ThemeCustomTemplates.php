<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ThemeCustomTemplates\GetThemesThemeUuidCustomTemplates;
use Space48\Bigcommerce\Resource;

class ThemeCustomTemplates extends Resource
{
	/**
	 * @param string $versionUuid
	 */
	public function getThemesThemeUuidCustomTemplates(string $versionUuid): Response
	{
		return $this->connector->send(new GetThemesThemeUuidCustomTemplates($versionUuid));
	}
}
