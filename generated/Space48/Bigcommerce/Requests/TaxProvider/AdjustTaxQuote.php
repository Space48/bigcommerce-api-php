<?php

namespace Space48\Bigcommerce\Requests\TaxProvider;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * adjustTaxQuote
 *
 * Replace the persisted tax quote (identified by the given unique ID) with the provided quote request
 * (represented by the **AdjustRequest**).
 *
 * Relevant for partial refunds, full refunds, returns, and
 * other Order modifications where there have been changes to the tax liabilities.
 *
 * The returned **Tax
 * Quote** response is expected to be the same to a response returned by an equivalent response to
 * **estimate** or **commit** methods.
 *
 * > Server URL
 * > - For supporting tax providers, the server URL
 * contains the tax provider's profile field; for example, `your_profile.example.com`.
 * > - The Try it
 * feature is not currently supported for this endpoint.
 */
class AdjustTaxQuote extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/adjust";
	}


	/**
	 * @param string $id Unique ID identifying the existing, persisted Tax Quote that will be adjusted.
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
