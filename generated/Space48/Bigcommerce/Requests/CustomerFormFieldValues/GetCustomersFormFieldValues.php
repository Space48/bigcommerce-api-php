<?php

namespace Space48\Bigcommerce\Requests\CustomerFormFieldValues;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomersFormFieldValues
 *
 * Returns a list of form field values for the Customer or Customer Address object.
 *
 * To learn about
 * adding and managing form fields, see [Adding and Editing Fields in the Account Signup
 * Form](https://support.bigcommerce.com/s/article/Editing-Form-Fields).
 */
class GetCustomersFormFieldValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/form-field-values";
	}


	/**
	 * @param null|int $customerId Filter by the customer ID.
	 * @param null|int $addressId Filter by the ID of the customer address.
	 * @param null|string $fieldName Filter by the field name.
	 * @param null|string $fieldType Filter by the field type.
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
		protected ?int $customerId = null,
		protected ?int $addressId = null,
		protected ?string $fieldName = null,
		protected ?string $fieldType = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'customer_id' => $this->customerId,
			'address_id' => $this->addressId,
			'field_name' => $this->fieldName,
			'field_type' => $this->fieldType,
		]);
	}
}
