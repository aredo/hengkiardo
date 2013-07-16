<?php
/* Copyright (C) 2009 Winfred Peereboom  <wpeereboom@developmentit.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * or see http://www.gnu.org/
 */

class LinkedIn_Connection
{
	protected $firstname;
	protected $id;
	protected $lastname;
	protected $headline;
	protected $location;
	protected $industry;
	protected $api;
	protected $siteUrl;
	protected $pictureurl;
	
	
	public function __construct ()
	{
		
	}
	
	public function __set($key, $val)
	{
    	$this->$key = $val;
	}
	
	public function __get($key)
	{
		return $this->$key;
	}
}