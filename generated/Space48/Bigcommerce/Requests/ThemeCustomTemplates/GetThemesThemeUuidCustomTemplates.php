<?php

namespace Space48\Bigcommerce\Requests\ThemeCustomTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-themes-theme_uuid-custom-templates
 *
 * Enumerate available custom templates for in the theme files in a specific theme version for each
 * supported entity type.
 */
class GetThemesThemeUuidCustomTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/themes/custom-templates/{$this->versionUuid}";
	}


	/**
	 * @param string $versionUuid
	 */
	public function __construct(
		protected string $versionUuid,
	) {
	}
}
