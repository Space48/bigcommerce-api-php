<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerFormFieldValues\GetCustomersFormFieldValues;
use Space48\Bigcommerce\Requests\CustomerFormFieldValues\UpdateCustomerFormFieldValues;
use Space48\Bigcommerce\Resource;

class CustomerFormFieldValues extends Resource
{
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
	public function getCustomersFormFieldValues(
		?int $customerId,
		?int $addressId,
		?string $fieldName,
		?string $fieldType,
	): Response
	{
		return $this->connector->send(new GetCustomersFormFieldValues($customerId, $addressId, $fieldName, $fieldType));
	}


	public function updateCustomerFormFieldValues(): Response
	{
		return $this->connector->send(new UpdateCustomerFormFieldValues());
	}
}
