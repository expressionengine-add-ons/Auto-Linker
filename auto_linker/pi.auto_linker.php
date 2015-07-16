<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
Copyright (C) 2004 - 2015 EllisLab, Inc.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
ELLISLAB, INC. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Except as contained in this notice, the name of EllisLab, Inc. shall not be
used in advertising or otherwise to promote the sale, use or other dealings
in this Software without prior written authorization from EllisLab, Inc.
*/


/**
 * Auto_linker Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			EllisLab
 * @copyright		Copyright (c) 2004 - 2015, EllisLab, Inc.
 * @link			https://github.com/EllisLab/Auto-Linker
 */

class Auto_linker {

    public $return_data;

	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */

    function __construct($str = '')
    {
		ee()->load->helper('url');

		$str = ($str == '') ? ee()->TMPL->tagdata : $str;

        // Parameter to determine whether to convert only
        // URLs, email addresses, or both.
    	$convert = (ee()->TMPL->fetch_param('convert') == 'url' OR ee()->TMPL->fetch_param('convert') == 'email') ? ee()->TMPL->fetch_param('convert') : 'both';

    	// Parameter to determine whether link opens in a new window.
    	$pop = (ee()->TMPL->fetch_param('target') == 'blank') ? TRUE : FALSE;

        $str = auto_link($str, $convert, $pop);

 		$this->return_data = $str;
	}
}
