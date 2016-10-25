<?php
namespace Tribo;

class Tribonacci{

	const NOMBRE_ELEMENT_OBLIGATOIRE = 3;
	const NOMBRE_TERME_A_CALCULER = 3;

	/**
	 * Calcule une suite de Tribonacci
	 * @param  array $tab les termes de depart
	 * @param  int $n   nombre de termes final
	 * @return array      les termes
	 */
	public static function tribonacci($tab, $n)
	{
		$aRetourner = [];
		if( $n >= 1 && count($tab) == Tribonacci::NOMBRE_ELEMENT_OBLIGATOIRE )
		{
			$aRetourner = $tab;

			if($n > Tribonacci::NOMBRE_ELEMENT_OBLIGATOIRE )
			{
				// --- Dans le cas ou on doit ajouté des éléments dans le tableau ---
	
				$n = $n - Tribonacci::NOMBRE_ELEMENT_OBLIGATOIRE; // Pour calculer que les termes manquant

				for ($i=0; $i < $n; $i++) {
					$terme = 0;
					$tailleTab = count($aRetourner) - 1;

					// on parcourt les 3 (NOMBRE_TERME_A_CALCULER) derniers termes pour calculer le prochain terme
					for ($indice = $tailleTab; $indice > $tailleTab - Tribonacci::NOMBRE_TERME_A_CALCULER  ; $indice--) { 
						$terme += $aRetourner[$indice];
					}
					array_push($aRetourner, $terme);
				}
			}
			elseif($n < Tribonacci::NOMBRE_ELEMENT_OBLIGATOIRE)
			{
				// --- Dans le cas où y a pas besoin de faire du calcule ---
				array_splice($aRetourner, $n);
			}
		}
		return $aRetourner;
	}
}