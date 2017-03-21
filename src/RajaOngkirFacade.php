<?php

namespace akill\rajaongkirlaravel;

use Illuminate\Support\Facades\Facade;

class RajaOngkirFacade extends Facade{
	protected static function getFacadeAccessor() { return 'RajaOngkir'; }
}