<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ThemeConfigurations\GetThemeConfiguration;
use Space48\Bigcommerce\Requests\ThemeConfigurations\ValidateThemeConfiguration;
use Space48\Bigcommerce\Resource;

class ThemeConfigurations extends Resource
{
	/**
	 * @param string $uuid
	 * @param string $uuid The theme identifier.
	 * @param array $uuidIn Filter configurations by a list of configuration UUIDs.
	 * @param array $channelIdIn Filter configurations by a list of channel_ids.
	 * @param string $variationUuid Filter configurations by a variation_uuid.
	 */
	public function getThemeConfiguration(
		string $uuid,
		array $uuidIn,
		array $channelIdIn,
		string $variationUuid,
	): Response
	{
		return $this->connector->send(new GetThemeConfiguration($uuid, $uuid, $uuidIn, $channelIdIn, $variationUuid));
	}


	/**
	 * @param string $uuid The theme identifier.
	 */
	public function validateThemeConfiguration(string $uuid): Response
	{
		return $this->connector->send(new ValidateThemeConfiguration($uuid));
	}
}
