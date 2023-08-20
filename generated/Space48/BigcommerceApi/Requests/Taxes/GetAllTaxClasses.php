<?php

namespace Space48\BigcommerceApi\Requests\Taxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllTaxClasses
 *
 * Returns a list of all *Tax Classes* in a store.
 *
 * Default sorting is by tax-class id, from lowest to
 * highest.
 */
class GetAllTaxClasses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tax_classes";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
