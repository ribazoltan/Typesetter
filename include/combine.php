<?php
defined('is_running') or die('Not an entry point...');


class gp_combine{


	static $scripts = array(

				//gpeasy
				'gp-main'	=> array(
									'file' => 'js/main.js',
									'requires' => array('jquery') //'ui-core'
									),

				'gp-admin'	=> array(
									'file' => 'js/admin.js',
									'requires' => array('jquery','gp-main')
									),

				'gp-admin-css'=> array(
									'file' => 'css/admin.css',
									'type' => 'css',
									'requires' => 'ui-theme'
									),



				'gp-additional'=> array(
									'file' => 'css/additional.css',
									'type' => 'css'
									),


				//colorbox
				'colorbox'	=> array(
									'file' => 'thirdparty/colorbox139/colorbox/jquery.colorbox.js',
									'requires' => array('gp-main','colorbox-css')
									),


				'colorbox-css' => array(
									'file' => 'thirdparty/colorbox139/$config[colorbox_style]/colorbox.css',
									'type' => 'css'
									),


				//jquery
				'jquery'	=> array(
									'file' => 'thirdparty/js/jquery.js',
									'package' => 'jquery'
									),


				//jquery ui core
				'ui-theme'	=> array(
									'file' => 'thirdparty/jquery_ui/jquery-ui.custom.css',
									'type' => 'css',
									'package' => 'jquery_ui'
									),

				'ui-core'	=> array(
									'file' => 'thirdparty/jquery_ui/jquery.ui.core.min.js',
									'requires' => array('jquery'),
									'package' => 'jquery_ui'
									),

				'mouse'		=> array(
									'file' => 'thirdparty/jquery_ui/jquery.ui.mouse.min.js',
									'requires' => array('ui-core','widget'),
									'package' => 'jquery_ui'
									),

				'position'	=> array(
									'file' => 'thirdparty/jquery_ui/jquery.ui.position.min.js',
									'package' => 'jquery_ui'
									),

				'widget'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.widget.min.js',
									'package' => 'jquery_ui'),



				//jquery ui interactions
				'draggable'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.draggable.min.js'
										,'requires' => array('jquery', 'ui-core', 'widget', 'mouse')
										,'package' => 'jquery_ui'),

				'droppable'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.droppable.min.js'
										,'requires' => array('jquery', 'ui-core', 'widget', 'mouse', 'draggable')
										,'package' => 'jquery_ui'),

				'resizable'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.resizable.min.js'
										,'requires' => array('jquery', 'ui-core', 'widget', 'mouse', 'ui-theme')
										,'package' => 'jquery_ui'),

				'selectable'=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.selectable.min.js'
										,'requires' => array('jquery', 'ui-core', 'widget', 'mouse', 'ui-theme')
										,'package' => 'jquery_ui'),

				'sortable'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.sortable.min.js'
										,'requires' => array('jquery', 'ui-core', 'widget', 'mouse')
										,'package' => 'jquery_ui'),

				//jquery ui widgets
				'accordion'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.accordion.min.js'
										,'requires' => array('jquery', 'ui-core', 'widget', 'ui-theme')
										,'package' => 'jquery_ui'),

				'autocomplete'=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.autocomplete.min.js'
											,'requires' => array('jquery', 'ui-core', 'widget', 'position', 'menu', 'ui-theme')
											,'package' => 'jquery_ui'),

				'button'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.button.min.js'
									,'requires' => array('jquery', 'ui-core', 'widget', 'ui-theme')
									,'package' => 'jquery_ui'),

				'datepicker'=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.datepicker.min.js'
										,'requires' => array('jquery', 'ui-core', 'ui-theme')
										,'package' => 'jquery_ui'),

				'dialog'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.dialog.min.js'
									,'requires' => array('jquery', 'ui-core', 'widget', 'button', 'position', 'ui-theme')
									,'package' => 'jquery_ui'),


				'menu'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.menu.min.js'
									,'requires' => array('jquery', 'ui-core', 'widget', 'position', 'ui-theme')
									,'package' => 'jquery_ui'),


				'progressbar'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.progressbar.min.js'
											,'requires' => array('jquery', 'ui-core', 'widget', 'ui-theme')
											,'package' => 'jquery_ui'),

				'slider'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.slider.min.js'
									,'requires' => array('jquery', 'ui-core', 'widget', 'mouse', 'ui-theme')
									,'package' => 'jquery_ui'),

				'tabs'	=> array(	'file' => 'thirdparty/jquery_ui/jquery.ui.tabs.min.js'
									,'requires' => array('jquery', 'ui-core', 'widget', 'ui-theme')
									,'package' => 'jquery_ui'),



				//jquery ui effects
				'effects-core'	=> array(	'file'=>'thirdparty/jquery_ui/jquery.ui.effect.min.js'
											,'requires' => array('jquery')
											,'package' => 'jquery_ui'),

				'blind'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-blind.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'
									),

				'bounce'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-bounce.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'),

				'clip'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-clip.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'),

				'drop'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-drop.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'),

				'explode'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-explode.min.js'
										,'requires' => array('jquery', 'effects-core')
										,'package' => 'jquery_ui'),

				'fade'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-fade.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'),

				'fold'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-fold.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'),

				'highlight'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-highlight.min.js'
										,'requires' => array('jquery', 'effects-core')
										,'package' => 'jquery_ui'),

				'pulsate'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-pulsate.min.js'
										,'requires' => array('jquery', 'effects-core')
										,'package' => 'jquery_ui'),

				'scale'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-scale.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'),

				'shake'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-shake.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'),

				'slide'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-slide.min.js'
									,'requires' => array('jquery', 'effects-core')
									,'package' => 'jquery_ui'),

				'transfer'	=> array(	'file'=> 'thirdparty/jquery_ui/jquery.ui.effect-transfer.min.js'
										,'requires' => array('jquery', 'effects-core')
										,'package' => 'jquery_ui'),


				//html5shiv
				'html5shiv' => array(	'file'=>'thirdparty/js/shiv/html5shiv.js' ),
				'printshiv' => array(	'file'=>'thirdparty/js/shiv/html5shiv-printshiv.js' ),



				//bootstrap
				'bootstrap-css'				=>	array(
												'file'=> 'thirdparty/Bootstrap/css/bootstrap.min.css'),

				'bootstrap-responsive-css'	=>	array(
												'file'=> 'thirdparty/Bootstrap/css/bootstrap-responsive.min.css',
												'requires'=> array('bootstrap-css') ),

				'bootstrap-alert'			=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-alert.js',
												'package' => 'bootstrap' ),

				'bootstrap-button'			=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-button.js',
												'package' => 'bootstrap' ),

				'bootstrap-carousel'		=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-carousel.js',
												'package' => 'bootstrap' ),

				'bootstrap-collapse'		=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-collapse.js',
												'package' => 'bootstrap' ),

				'bootstrap-dropdown'		=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-dropdown.js',
												'package' => 'bootstrap' ),

				'bootstrap-modal'			=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-modal.js',
												'package' => 'bootstrap' ),

				'bootstrap-popover'			=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-popover.js',
												'package' => 'bootstrap' ),

				'bootstrap-scrollspy'		=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-scrollspy.js',
												'package' => 'bootstrap' ),

				'bootstrap-tab'				=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-tab.js',
												'package' => 'bootstrap' ),

				'bootstrap-tooltip'			=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-tooltip.js',
												'package' => 'bootstrap' ),

				'bootstrap-transition'		=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-transition.js',
												'package' => 'bootstrap' ),

				'bootstrap-typeahead'		=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap-typeahead.js',
												'package' => 'bootstrap' ),

				'bootstrap-js'				=> array(
												'file' => 'thirdparty/Bootstrap/js/bootstrap.min.js',
												'package' => 'bootstrap' ),

				'bootstrap-all'				=> array(
												'requires'=> array('bootstrap-responsive-css','bootstrap-js'),
												'package' => 'bootstrap' ),

		);



	/**
	 * Generate a file with all of the combined content
	 *
	 */
	static function GenerateFile($files,$type){
		global $dataDir;

		//get etag
		$modified = $content_length = 0;
		$full_paths = array();
		foreach($files as $file){
			$full_path = gp_combine::CheckFile($file);
			if( $full_path === false ){
				continue;
			}
			gp_combine::FileStat_Static($full_path,$modified,$content_length);
			$full_paths[$file] = $full_path;
		}


		//check css imports
		if( $type == 'css' ){
			$had_imported = false;
			$import_data = array();
			$imported_file = $dataDir.'/data/_cache/import_info.php';
			if( file_exists($imported_file) ){
				include_once($imported_file);
			}
			foreach($full_paths as $file => $full_path){
				if( !isset($import_data[$full_path]) ){
					continue;
				}
				$had_imported = true;
				foreach($import_data[$full_path] as $imported_full){
					gp_combine::FileStat_Static($imported_full,$modified,$content_length);
				}
				unset($import_data[$full_path]);
			}
		}

		//check to see if file exists
		$dir_hash = crc32( md5( sha1( $dataDir) ) );
		$dir_hash = base_convert( sprintf("%u\n", $dir_hash ), 10, 36);
		$etag = count($files).'.'.$dir_hash.'.'.common::GenEtag( $modified, $content_length );
		$cache_relative = '/data/_cache/combined_'.$etag.'.'.$type;
		$cache_file = $dataDir.$cache_relative;
		if( file_exists($cache_file) ){

			// change modified time to extend cache
			$diff = time() - filemtime($cache_file);
			if( $diff < 304800 ){
				touch($cache_file);
			}

			return $cache_relative;
		}

		//create file
		if( $type == 'js' ){
			ob_start();
			common::jsStart();

			foreach($full_paths as $full_path){
				readfile($full_path);
				echo ";\n";
			}
			$combined_content = ob_get_clean();

		}else{

			$combined_content = '';
			$new_imported = array();
			foreach($full_paths as $file => $full_path){
				$temp = new gp_combine_css($file);
				$combined_content .= $temp->content;
				if( count($temp->imported) ){
					$new_imported[$full_path] = $temp->imported;
				}
			}
			//save imported data
			if( count($new_imported) || $had_imported ){
				if( count($new_imported) ){
					$import_data = $new_imported + $import_data;
				}
				gpFiles::SaveArray($imported_file,'import_data',$import_data);
			}
		}

		if( !gpFiles::Save($cache_file,$combined_content) ){
			return false;
		}


		self::CleanCacheNew();
		return $cache_relative;
	}


	static function GetTokens($file,$full_path){
		$content = file_get_contents($full_path);
		$filters = array(
			'UrlPrefix' => array( 'BaseUrl' => common::GetDir($file), 'BasePath' => common::DirName($full_path) )
			);
		$minifier = new CssMinifier(null, $filters);
		return $minifier->minifyTokens($content);
	}


	static function CleanCacheNew(){
		global $dataDir;
		$dir = $dataDir.'/data/_cache';
		$files = scandir($dir);
		$times = array();
		$count = 0;
		foreach($files as $file){
			if( $file == '.' || $file == '..' || strpos($file,'.php') !== false ){
				continue;
			}
			$full_path = $dir.'/'.$file;
			$time = filemtime($full_path);
			$diff = time() - $time;
			//if relatively new, don't delete it
			if( $diff < 604800 ){
				$count++;
				continue;
			}
			//if old, delete it
			if( $diff > 2592000 ){
				unlink($full_path);
				continue;
			}
			$times[$file] = $time;
		}

		//reduce further if needed till we have less than 100 files
		asort($times);
		foreach($times as $file => $time){
			if( $count < 100 ){
				return;
			}
			$full_path = $dir.'/'.$file;
			unlink($full_path);
			$count--;
		}
	}

	/**
	 * Make sure the file is a css or js file and that it exists
	 * @static
	 */
	static function CheckFile(&$file){
		global $dataDir;
		$comment_start = '<!--';
		$comment_end = '-->';

		$file = gp_combine::TrimQuery($file);

		if( empty($file) ){
			return false;
		}

		//translate addon paths
		$pos = strpos($file,'/data/_addoncode/');
		if( $pos !== false ){
			$file_parts = substr($file,$pos+17);
			$file_parts = explode('/',$file_parts);
			$addon_key = array_shift($file_parts);
			$addon_config = gpPlugin::GetAddonConfig($addon_key);
			if( $addon_config ){
				$file = $addon_config['code_folder_rel'].'/'.implode('/',$file_parts);
			}
		}


		//remove null charachters
		$file = gpFiles::NoNull($file);

		//require .js or .css
		$test = strtolower($file);
		if( substr($test, -3) != '.js' && substr($test, -4) != '.css' ){
			echo  "\n{$comment_start} File Not CSS or JS {$file} {$comment_end}\n";
			return false;
		}

		//paths that have been urlencoded
		if( strpos($file,'%') !== false ){
			$decoded_file = rawurldecode($file);
			if( $full_path = gp_combine::CheckFileSub($decoded_file) ){
				$file = $decoded_file;
				return $full_path;
			}
		}

		//paths that have not been encoded
		if( $full_path = gp_combine::CheckFileSub($file) ){
			return $full_path;
		}


		echo  "\n{$comment_start} File Not Found {$dataDir}{$file} {$comment_end}\n";
		return false;
	}

	static function CheckFileSub(&$file){
		global $dataDir, $dirPrefix;

		//realpath returns false if file does not exist
		$full_path = $dataDir.$file;
		if( file_exists($full_path) ){
			return realpath($full_path);
		}

		//check for paths that have already included $dirPrefix
		if( empty($dirPrefix) ){
			return false;
		}

		if( strpos($file,$dirPrefix) === 0 ){
			$fixed = substr($file,strlen($dirPrefix));
			$full_path = $dataDir.$fixed;
			if( file_exists($full_path) ){
				$file = $fixed;
				return realpath($full_path);
			}
		}

		return false;
	}


	static function FileStat_Static( $file_path, &$modified, &$content_length ){
		$content_length += @filesize($file_path);
		$modified = max( $modified, @filemtime($file_path) );
		return $modified;
	}

	/*
	 *
	 * @static
	 */
	static function TrimQuery($file){
		$pos = mb_strpos($file,'?');
		if( $pos > 0 ){
			$file = mb_substr($file,0,$pos);
		}
		return trim($file);
	}

	static function ScriptInfo( $components, $dependencies = true){
		global $config;
		static $root_call = true;
		if( is_string($components) ){
			$components = explode(',',strtolower($components));
			$components = array_unique($components);
		}

		self::$scripts['colorbox-css']['file'] = 'thirdparty/colorbox139/'.$config['colorbox_style'].'/colorbox.css';


		$all_scripts = array();
		foreach($components as $component){
			if( !array_key_exists($component,self::$scripts) ){
				$all_scripts[$component] = false;
				continue;
			}
			$script_info = self::$scripts[$component];
			if( $dependencies && isset($script_info['requires']) ){
				$is_root_call = $root_call;
				$root_call = false;
				$all_scripts += gp_combine::ScriptInfo($script_info['requires']);
				$root_call = $is_root_call;
			}
			$all_scripts[$component] = self::$scripts[$component];
		}

		if( !$root_call ){
			return $all_scripts;

		}

		$all_scripts = array_filter($all_scripts);

		//return an organized array for the root call
		$return = array('js'=>array(),'css'=>array() );
		foreach($all_scripts as $key => $script){
			if( empty($script['file']) ){
				continue;
			}
			if( empty($script['type']) ){
				$script['type'] = pathinfo($script['file'], PATHINFO_EXTENSION);
			}
			$return[$script['type']][$key] = '/include/'.$script['file'];
		}

		return $return;
	}

}


/*
 * Get the contents of $file and fix paths:
 * 	- url(..)
 *	- @import
 * 	- @import url(..)
 */
class gp_combine_css{

	var $content;
	var $file;
	var $full_path;
	var $imported = array();

	function gp_combine_css($file){
		global $dataDir;

		includeFile('thirdparty/cssmin_v.1.0.php');

		$this->file = $file;
		$this->full_path = $dataDir.$file;


		$this->content = file_get_contents($this->full_path);
		$this->content = cssmin::minify($this->content);

		$this->CSS_Import();
		$this->CSS_FixUrls();

	}


	//@import "../styles.css";
	//@import url("../styles.css");
	function CSS_Import($offset=0){
		global $dataDir;

		$pos = strpos($this->content,'@import ',$offset);
		if( !is_numeric($pos) ){
			return;
		}
		$replace_start = $pos;
		$pos += 8;

		$pos2 = strpos($this->content,';',$pos);
		if( !is_numeric($pos2) ){
			return;
		}

		$import = substr($this->content,$pos,$pos2-$pos);
		$import = trim($import);


		//trim url(..)
		if( substr($import,0,4) == 'url(' ){
			$import = substr($import,4);
			$import = substr($import,0,-1);
			$import = trim($import);
		}

		$import = trim($import,'"\'');


		//how to handle @import when the file is on a remote server?
		if( strpos($import,'://') > 0 ){
			$this->CSS_Import($pos2);
			return;
		}

		$full_path = false;
		if( $import[0] != '/' ){
			$import = dirname($this->file).'/'.$import;
			$import = $this->ReduceUrl($import);
		}
		$full_path = $dataDir.$import;

		if( file_exists($full_path) ){
			$temp = new gp_combine_css($import);
			$this->content = substr_replace($this->content,$temp->content,$replace_start,$pos2-$replace_start+1);
			$this->imported[] = $full_path;
			$this->imported = array_merge($this->imported,$temp->imported);
		}

		$this->CSS_Import($pos);
	}

	//http://www.weirdlover.com/2010/05/28/css-url/
	function CSS_FixUrls($offset=0){
		$pos = strpos($this->content,'url(',$offset);
		if( !is_numeric($pos) ){
			return;
		}
		$pos += 4;

		$pos2 = strpos($this->content,')',$pos);
		if( !is_numeric($pos2) ){
			return;
		}
		$url = substr($this->content,$pos,$pos2-$pos);

		$this->CSS_FixUrl($url,$pos,$pos2);

		return $this->CSS_FixUrls($pos2);
	}

	function CSS_FixUrl($url,$pos,$pos2){
		global $dataDir;

		$url = trim($url);
		$url = trim($url,'"\'');

		//relative url
		if( $url{0} == '/' ){
			return;
		}elseif( strpos($url,'://') > 0 ){
			return;
		}elseif( preg_match('/^data:/i', $url) ){
			return;
		}


		//use a relative path so sub.domain.com and domain.com/sub both work
		$replacement = common::GetDir(dirname($this->file).'/'.$url);
		$replacement = $this->ReduceUrl($replacement);


		$replacement = '"'.$replacement.'"';
		$this->content = substr_replace($this->content,$replacement,$pos,$pos2-$pos);
	}

	/**
	 * Canonicalize a path by resolving references to '/./', '/../'
	 * Does not remove leading "../"
	 * @param string path or url
	 * @return string Canonicalized path
	 *
	 */
	function ReduceUrl($url){

		$temp = explode('/',$url);
		$result = array();
		foreach($temp as $i => $path){
			if( $path == '.' ){
				continue;
			}
			if( $path == '..' ){
				for($j=$i-1;$j>0;$j--){
					if( isset($result[$j]) ){
						unset($result[$j]);
						continue 2;
					}
				}
			}
			$result[$i] = $path;
		}

		return implode('/',$result);
	}


}

