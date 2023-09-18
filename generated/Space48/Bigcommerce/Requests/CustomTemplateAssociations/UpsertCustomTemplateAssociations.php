<?php

namespace Space48\Bigcommerce\Requests\CustomTemplateAssociations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * upsertCustomTemplateAssociations
 *
 * Upsert new custom template associations data across all storefronts. If an existing record is found
 * for the combination of channel ID, entity ID, and type, the existing record will be overwritten with
 * the new template.
 */
class UpsertCustomTemplateAssociations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/storefront/custom-template-associations";
	}


	public function __construct()
	{
	}
}
