<?php

namespace Space48\Bigcommerce\Requests\WidgetTemplate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWidgetTemplate
 *
 * Returns a single **Widget Template**.
 */
class GetWidgetTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/widget-templates/{$this->uuid}";
	}


	/**
	 * @param string $uuid The identifier for a specific template.
	 * @param null|string $versionUuid This is an optional query parameter used to attempt to fetch a specific Widget Template version.
	 */
	public function __construct(
		protected string $uuid,
		protected ?string $versionUuid = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['version_uuid' => $this->versionUuid]);
	}
}
