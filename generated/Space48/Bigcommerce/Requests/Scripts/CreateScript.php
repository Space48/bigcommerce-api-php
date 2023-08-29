<?php

namespace Space48\Bigcommerce\Requests\Scripts;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createScript
 *
 * Creates a *Script*.
 *
 * **Required Fields**
 * * name
 *
 * **Read Only Fields**
 * * uuid
 *
 * **Notes**
 * * If the
 * `kind` is `src`:
 *   * Specify the `src` property.
 *   * Optionally, you can supply a `load_method`.
 *
 * * Do not specify the `html` field.
 * * If the `kind` is `script_tag`:
 *   * Specify the `html`
 * property.
 *   * Do not specify the `src` field.
 * * Each app can have 10 scripts installed.
 * * Multiple
 * scripts can be created [per call](/api-docs/store-management/scripts#notes).
 */
class CreateScript extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/content/scripts";
	}


	public function __construct()
	{
	}
}
