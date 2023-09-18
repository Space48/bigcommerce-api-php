<?php

namespace Space48\Bigcommerce\Requests\TaxProvider;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * voidTaxQuote
 *
 * Invalidate the persisted tax quote as identified by the given unique ID. Relevant to order
 * cancellations or when moving an order from a paid status to an unpaid status.
 *
 * > Server URL
 * > - For
 * supporting tax providers, the server URL contains the tax provider's profile field; for example,
 * `your_profile.example.com`.
 * > - The Try it feature is not currently supported for this endpoint.
 */
class VoidTaxQuote extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/void";
	}


	/**
	 * @param string $id Unique ID identifying the existing, persisted Tax Quote that will be voided.
	 */
	public function __construct(
		protected string $id,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id' => $this->id]);
	}
}
