<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Themes\DeleteStoreTheme;
use Space48\Bigcommerce\Requests\Themes\GetStoreTheme;
use Space48\Bigcommerce\Requests\Themes\GetStoreThemes;
use Space48\Bigcommerce\Requests\Themes\UploadTheme;
use Space48\Bigcommerce\Resource;

class Themes extends Resource
{
	public function getStoreThemes(): Response
	{
		return $this->connector->send(new GetStoreThemes());
	}


	public function uploadTheme(): Response
	{
		return $this->connector->send(new UploadTheme());
	}


	/**
	 * @param string $uuid The theme identifier.
	 */
	public function getStoreTheme(string $uuid): Response
	{
		return $this->connector->send(new GetStoreTheme($uuid));
	}


	/**
	 * @param string $uuid The theme identifier.
	 */
	public function deleteStoreTheme(string $uuid): Response
	{
		return $this->connector->send(new DeleteStoreTheme($uuid));
	}
}
