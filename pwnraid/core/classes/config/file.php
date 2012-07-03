<?php
abstract class Config_File extends \Fuel\Core\Config_File
{

	public function save($identifier, $contents)
	{
		// get the formatted output
		$output = $this->export_format($contents);

		if ( ! $output)
		{
			return false;
		}

		if ( ! $path = \Finder::search('config', $identifier))
		{
			if ($pos = strripos($identifier, '::'))
			{
				// get the namespace path
				if ($path = \Autoloader::namespace_path('\\'.ucfirst(substr($identifier, 0, $pos))))
				{
					// strip the namespace from the filename
					$identifier = substr($identifier, $pos+2);

					// strip the classes directory as we need the module root
					$path = substr($path,0, -8).'config'.DS.$identifier;
				}
				else
				{
					// invalid namespace requested
					return false;
				}
			}
		}

		// absolute path requested?
		if ($identifier[0] === '/' or (isset($identifier[1]) and $identifier[1] === ':'))
		{
			$path = $identifier;
		}

		// make sure we have a fallback
		$path or $path = USRPATH.'config'.DS.$identifier;

		$path = pathinfo($path);
		if ( ! is_dir($path['dirname']))
		{
			mkdir($path['dirname'], 0777, true);
		}

		return \File::update($path['dirname'], $path['basename'], $output);
	}

}