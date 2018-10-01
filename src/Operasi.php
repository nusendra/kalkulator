<?php

namespace Rulzi\Kalkulator;

class Operasi
{
	public function tambah(int $a, int $b)
	{
		$hasil = $a + $b;

		return $hasil;
	}

	public function kurang(int $a, int $b)
	{
		$hasil = $a - $b;

		return $hasil;
	}

	public function kali(int $a, int $b)
	{
		$hasil = $a * $b;

		return $hasil;
	}

	public function bagi(int $a, int $b)
	{
		$hasil = $a / $b;

		return $hasil;
	}

	public function kuadrat(int $a)
	{
		$hasil = $a * $a;

		return $hasil;
	}

	public function kubik(int $a)
	{
		$hasil = $a * $a * $a;

	 	return $hasil;
	}

	public function phi(int $a)
	{
		$hasil = (22 * $a) / 7;

		return $hasil;
	}

	public function diameterLingkaran(int $kelilingLingkaran)
	{
		$hasil = $kelilingLingkaran / 3.14;

		return $hasil;
	}
}