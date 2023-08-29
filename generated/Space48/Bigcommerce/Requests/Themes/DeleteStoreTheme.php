<?php

namespace Space48\Bigcommerce\Requests\Themes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteStoreTheme
 *
 * Deletes a store *Theme*.
 * Theme variations can not be deleted using this endpoint. This will delete
 * the theme and all variations.
 */
class DeleteStoreTheme extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/themes/{$this->uuid}";
	}


	/**
	 * @param string $uuid The theme identifier.
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
