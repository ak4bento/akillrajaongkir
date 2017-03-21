<?php

namespace akill\akillrajaongkir;

use akill\akillrajaongkir\app\Provinsi;
use akill\akillrajaongkir\app\Kota;
use akill\akillrajaongkir\app\Cost;

class RajaOngkir {
	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

	public function Cost($attributes){
		return new Cost($attributes);
	}
}