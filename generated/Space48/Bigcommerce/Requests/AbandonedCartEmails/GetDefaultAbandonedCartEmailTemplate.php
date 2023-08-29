<?php

namespace Space48\Bigcommerce\Requests\AbandonedCartEmails;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetDefaultAbandonedCartEmailTemplate
 *
 * Return default Abandoned Cart Email template.
 */
class GetDefaultAbandonedCartEmailTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/marketing/abandoned-cart-emails/default";
	}


	public function __construct()
	{
	}
}
