<?php

namespace akill\rajaongkirlaravel;

use akill\rajaongkirlaravel\app\Provinsi;
use akill\rajaongkirlaravel\app\Kota;
use akill\rajaongkirlaravel\app\Cost;

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