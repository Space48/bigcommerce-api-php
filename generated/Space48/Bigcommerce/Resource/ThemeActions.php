<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ThemeActions\ActivateStoreTheme;
use Space48\Bigcommerce\Requests\ThemeActions\DownloadStoreTheme;
use Space48\Bigcommerce\Resource;

class ThemeActions extends Resource
{
	/**
	 * @param string $uuid The theme identifier.
	 */
	public function downloadStoreTheme(string $uuid): Response
	{
		return $this->connector->send(new DownloadStoreTheme($uuid));
	}


	public function activateStoreTheme(): Response
	{
		return $this->connector->send(new ActivateStoreTheme());
	}
}
