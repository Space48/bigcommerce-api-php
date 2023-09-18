<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\TaxProvider\AdjustTaxQuote;
use Space48\Bigcommerce\Requests\TaxProvider\CommitTaxQuote;
use Space48\Bigcommerce\Requests\TaxProvider\EstimateTaxes;
use Space48\Bigcommerce\Requests\TaxProvider\VoidTaxQuote;
use Space48\Bigcommerce\Resource;

class TaxProvider extends Resource
{
	public function estimateTaxes(): Response
	{
		return $this->connector->send(new EstimateTaxes());
	}


	/**
	 * @param string $id Unique ID identifying the existing, persisted Tax Quote that will be voided.
	 */
	public function voidTaxQuote(string $id): Response
	{
		return $this->connector->send(new VoidTaxQuote($id));
	}


	public function commitTaxQuote(): Response
	{
		return $this->connector->send(new CommitTaxQuote());
	}


	/**
	 * @param string $id Unique ID identifying the existing, persisted Tax Quote that will be adjusted.
	 */
	public function adjustTaxQuote(string $id): Response
	{
		return $this->connector->send(new AdjustTaxQuote($id));
	}
}
