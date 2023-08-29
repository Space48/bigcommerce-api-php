<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ThemeActions\ActivateStoreTheme;
use Space48\Bigcommerce\Requests\ThemeActions\DownloadTheme;
use Space48\Bigcommerce\Resource;

class ThemeActions extends Resource
{
	/**
	 * @param string $uuid The theme identifier.
	 */
	public function downloadTheme(string $uuid): Response
	{
		return $this->connector->send(new DownloadTheme($uuid));
	}


	public function activateStoreTheme(): Response
	{
		return $this->connector->send(new ActivateStoreTheme());
	}
}
