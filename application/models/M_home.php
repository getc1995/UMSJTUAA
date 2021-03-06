<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_site_name()
	{
		/*
		$query = $this->db->get('aa_site_info'); // get all data from table aa_site_info
		foreach ($query->result() as $row)
		{
			echo $row->item.'<br> ';
		    echo $row->value.'<br> ';
		}
		$test = $query->result()[1]->value;
		return $test;
		*/
		// get data from aa_site_info where item == "site_name"
		$query = $this->db->get_where('aa_site_info', array('item' => 'site_name'));

		return $query->result()[0]->value;
	}

	/*
	** @ $news_num default as 10
	** Return $news_num newly posted news. including title, author, post date and ID.
	** If $news_num is not given, set it default as 10.
	*/
	public function get_news_info($news_num = 10)
	{
		//TODO//
		$sql = 'SELECT `title`, `id` FROM `aa_news` ORDER BY `id` DESC';
		$query = $this->db->query($sql);
		return $query->result();
	}

	/*
	** @ $ID default as 0
	** Return all the data of a news with id = $ID.
	*/
	public function get_news($ID)
	{
		//TODO//
	}


}
