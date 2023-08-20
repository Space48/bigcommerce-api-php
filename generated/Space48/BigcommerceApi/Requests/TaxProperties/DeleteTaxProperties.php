<?php

namespace Space48\BigcommerceApi\Requests\TaxProperties;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-tax-properties
 *
 * Delete one or multiple tax properties. A tax property must have zero usages within product tax
 * properties before you can delete it.
 */
class DeleteTaxProperties extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/tax/properties";
	}


	/**
	 * @param string $idIn ID of tax property. To target multiple tax properties, provide a comma-separated list of IDs such as `12,34,56`
	 */
	public function __construct(
		protected string $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id:in' => $this->idIn];
	}
}
