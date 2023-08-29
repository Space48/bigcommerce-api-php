<?php

namespace Space48\Bigcommerce\Requests\Themes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getStoreTheme
 *
 * Returns a store *Theme*. The theme variation is not available at this endpoint.
 */
class GetStoreTheme extends Request
{
	protected Method $method = Method::GET;


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
