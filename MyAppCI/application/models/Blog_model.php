<?php

Class Blog_model extends CI_Model
{
    public function getBlog()
    {
        return $this->db->get("blog");

    }

    public function searchBlog($filter)
	{
		$this->db->like('title', $filter);
        return $this->db->get("blog")->result_array();
    }

    public function getBlogID($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get("blog");
        return $query->row_array(); 
    }

    public function insertBlog($data)
    {
        $this->db->insert('blog', $data);
        return $this->db->insert_id();
    }

    public function getSingleBlog($field,$value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get('blog');
        return $query->row_array();
    }

    public function updateBlog($id,$post)
    {
        $this->db->where('id',$id);
        $this->db->update('blog',$post);
        return $this->db->affected_rows();
    }

    public function deleteBlog($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('blog');
        return $this->db->affected_rows();
    }

    public function getBlogPaginated($limit, $offset)
    {
        return $this->db->get("blog", $limit, $offset)->result_array();
    }

    public function countAllBlog() {
        $count = $this->db->count_all('blog'); // selalu integer
        return $count;
    }


}

?>