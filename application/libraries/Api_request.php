<?php
class Api_request
{
	// API Request
	private function http_request($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);

		return $result;
	}

	public function pegawai()
	{
		$pegawai = self::http_request('http://localhost:8080/folarium-irsyad/folarium-technical-test-api/rest/pegawai');
		$pegawai = json_decode($pegawai, true);
		return $pegawai;
	}
	public function jabatan()
	{
		$jabatan = self::http_request('http://localhost:8080/folarium-irsyad/folarium-technical-test-api/rest/jabatan');
		$jabatan = json_decode($jabatan, true);
		return $jabatan;
	}
	// END API Request
}
