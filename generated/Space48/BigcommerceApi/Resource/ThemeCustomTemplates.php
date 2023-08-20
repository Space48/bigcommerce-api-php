<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ThemeCustomTemplates\GetThemesThemeUuidCustomTemplates;
use Space48\BigcommerceApi\Resource;

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
