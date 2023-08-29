<?php

namespace Space48\Bigcommerce\Requests\Sites;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-site
 *
 * Create a site that links a [headless storefront](/api-docs/storefronts/developers-guide-headless) to
 * a sales [channel](/docs/rest-management/channels).
 */
class PostSite extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/sites";
	}


	public function __construct()
	{
	}
}
