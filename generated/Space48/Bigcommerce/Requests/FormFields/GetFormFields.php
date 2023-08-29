<?php

namespace Space48\Bigcommerce\Requests\FormFields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getFormFields
 *
 * Gets form fields.
 *
 * > #### Note
 * > * Substitute your storefront domain for `yourstore.example.com`.
 * >
 * * The Send a Test Request feature is not currently supported for this endpoint.
 */
class GetFormFields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/form-fields";
	}


	/**
	 * @param string $filter
	 */
	public function __construct(
		protected string $filter,
	) {
	}


	public function defaultQuery(): array
	{
		return ['filter' => $this->filter];
	}
}
