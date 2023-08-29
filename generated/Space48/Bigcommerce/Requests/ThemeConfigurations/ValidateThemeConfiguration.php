<?php

namespace Space48\Bigcommerce\Requests\ThemeConfigurations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Validate Theme Configuration
 *
 * Validates a theme configuration against the theme's schema without creating it. Useful for testing
 * schemas before creation.
 */
class ValidateThemeConfiguration extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/themes/{$this->uuid}/configurations/validate";
	}


	/**
	 * @param string $uuid The theme identifier.
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
