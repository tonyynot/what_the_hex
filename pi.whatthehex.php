<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
    'pi_name' => 'What the Hex?',
    'pi_version' => '1.0',
    'pi_author' => 'Anthony Ramella',
    'pi_author_url' => 'https://github.com/tonyynot',
    'pi_description' => 'Convert hex color to RGB.',
    'pi_usage' => '',

);

class Whatthehex
{
    /**
     * @var string the plugin result
     */
    public $return_data = '';

    /**
     * constructor and plugin renderer
     *
     * @return string
     */
    public function Whatthehex()
    {

        $hex_code = ee()->TMPL->tagdata;

        $r = hexdec(substr($hex_code, 1, 2));

        $g = hexdec(substr($hex_code, 3, 2));

        $b = hexdec(substr($hex_code, 5, 6));

        return $this->return_data = $r . ', ' . $g . ', ' . $b;
    }

}

/* End of file pi.whatthehex.php */