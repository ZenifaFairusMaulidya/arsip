<?php if (! defined('BASEPASTH')) exit('hiyaaaaa kok erorrr');

	if (! function_exists('bln'))
	{
		function bln()
		{
			$bln = Date('m');
			switch ($bln) {
				case 1:
					$bln = "Januari";
					break;
				case 2:
					$bln = "Februari";
					break;
				case 3:
					$bln = "Maret";
					break;
				case 4:
					$bln = "April";
					break;
				case 5:
					$bln = "Mei";
					break;
				case 6:
					$bln = "Juni";
					break;
				case 7:
					$bln = "Juli";
					break;
				case 8:
					$bln = "Agustus";
					break;
				case 9:
					$bln = "September";
					break;
				case 10:
					$bln = "Oktober";
					break;
				case 11:
					$bln = "November";
					break;
				case 12:
					$bln = "Desember";
					break;

				default:
					$bln = Date('F');
					break;
			}
			return $bln;
		}
	}

	if (!function_exists('tanggal')) {
    function tanggal() {
        $tanggal = Date('d') . " " .bln(). " ".Date('Y');
        return $tanggal;
		}
	}