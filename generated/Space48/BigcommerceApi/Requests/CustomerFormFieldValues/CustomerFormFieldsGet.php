<?php

namespace Space48\BigcommerceApi\Requests\CustomerFormFieldValues;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomerFormFieldsGet
 *
 * Returns a list of form field values for the Customer or Customer Address object.
 *
 * To learn about
 * adding and managing form fields, see [Adding and Editing Fields in the Account Signup
 * Form](https://support.bigcommerce.com/s/article/Editing-Form-Fields).
 */
class CustomerFormFieldsGet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/form-field-values";
	}


	/**
	 * @param int $customerId Filter by the customer ID.
	 * @param int $addressId Filter by the ID of the customer address.
	 * @param string $fieldName Filter by the field name.
	 * @param string $fieldType Filter by the field type.
	 *  * `checkboxes` - checkboxes field
	 *  * `date` - date field
	 *  * `multiline` - multiline text field
	 *  * `numbers` - numbers only field
	 *  * `password` - password field
	 *  * `radiobuttons` - radio buttons field
	 *  * `text` - text field
	 *  * `picklist` - pick list field
	 */
	public function __construct(
		protected int $customerId,
		protected int $addressId,
		protected string $fieldName,
		protected string $fieldType,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'customer_id' => $this->customerId,
			'address_id' => $this->addressId,
			'field_name' => $this->fieldName,
			'field_type' => $this->fieldType,
		];
	}
}
