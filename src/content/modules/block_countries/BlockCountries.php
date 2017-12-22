<?php
class BlockCountries extends Controller {
	private $moduleName = "block_countries";
	public function beforeInit() {
		$cfg = new config ();
		if (isset ( $cfg->blocked_countries ) and is_array ( $cfg->blocked_countries )) {
			$geoIp = ModuleHelper::getMainController ( "geoPlugin" );
			$location = $geoIp->getGeoLocation ();
			$country = $location ["geoplugin_countryName"];
			if (! empty ( $country ) and in_array ( $country, $cfg->blocked_countries )) {
				HTMLResult ( "Access from your country (" . htmlspecialchars ( $country ) . ") is blocked.", 403 );
			}
		}
	}
	public function getSettingsHeadline(){
		return get_translation("block_countries");		
	}
	public function settings() {
		return Template::executeModuleTemplate ( $this->moduleName, "info.php" );
	}
}