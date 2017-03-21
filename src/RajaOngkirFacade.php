<?php

namespace akill\akillrajaongkir;

use Illuminate\Support\Facades\Facade;

class RajaOngkirFacade extends Facade{
	protected static function getFacadeAccessor() { return 'RajaOngkir'; }
}