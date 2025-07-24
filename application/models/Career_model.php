<?php
public function count_all()
{
return $this->db->count_all('lowongan');
}

public function get_paginated($limit, $start)
{
return $this->db
->limit($limit, $start)
->order_by('id', 'DESC')
->get('lowongan')
->result_array();
}

?>