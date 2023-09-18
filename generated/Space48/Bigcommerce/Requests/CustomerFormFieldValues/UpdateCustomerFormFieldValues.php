<?php

namespace Space48\Bigcommerce\Requests\CustomerFormFieldValues;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCustomerFormFieldValues
 *
 * Updates form field values on the Customer or Customer Address objects. Multiple form field values
 * can be updated in one call.
 *
 * Upsert checks for an existing record, if there is none it creates the
 * record, if there is a matching record it updates that record.
 *
 * To learn more about editing form
 * fields, see [Adding and Editing Fields in the Account Signup
 * Form](https://support.bigcommerce.com/s/article/Editing-Form-Fields).
 *
 * **Limits**
 * * Limit of 10
 * concurrent requests.
 */
class UpdateCustomerFormFieldValues extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customers/form-field-values";
	}


	public function __construct()
	{
	}
}
