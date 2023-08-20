<?php

namespace Space48\BigcommerceApi\Requests\ThemeActions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * downloadTheme
 *
 * Downloads a stores *Theme*.
 */
class DownloadTheme extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/themes/{$this->uuid}/actions/download";
	}


	/**
	 * @param string $uuid The theme identifier.
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
