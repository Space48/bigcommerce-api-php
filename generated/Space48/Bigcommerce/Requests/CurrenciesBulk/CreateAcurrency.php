<?php

namespace Space48\Bigcommerce\Requests\CurrenciesBulk;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createACurrency
 *
 * Creates *Currency*.
 *
 * **Required Fields**
 *
 * * name
 * * currency_code
 * * currency_exchange_rate
 * *
 * token_location
 * * token
 * * decimal_token
 * * thousands_token
 * * decimal_places
 *
 * **Read-Only Fields**
 * *
 * id
 * * date_created
 * * date_modified
 *
 *
 * The `is_default` property can only be set to true. The value of
 * `is_default` cannot be unset, only overridden. To change the storeʼs default currency in the
 * BigCommerce control panel, please see [Managing
 * Currencies](https://support.bigcommerce.com/articles/Public/Managing-Currencies/?q=currency&l=en_US&fs=Search&pn=1#default).
 */
class CreateAcurrency extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/currencies";
	}


	public function __construct()
	{
	}
}
