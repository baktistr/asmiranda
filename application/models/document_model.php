<?php
class Document_model extends CI_Model {

	private $table_unit = "unit";
	private $table_staff = "staff";
	private $table_document = "document";
	private $table_doc_class ="document_class";

	function __construct() {
		parent::__construct();
	
	}

	function get_all_doc_class() {
		return $this->db->get($this->table_doc_class)->result();
	}

	function add_doc_class() {
		$doc_class = array(	
                'name'=>$this->input->post('doc_class'),
                );
        $this->db->insert($this->table_doc_class,$doc_class);
	}

	function get_doc_class($id) {
		$this->db->where('id', $id);
		return $this->db->get($this->table_doc_class)->row();
	}

	function edit_doc_class($id) {
		$this->db->where('id', $this->input->post('id'));
		$updated_doc_class = array(	
                'name'=>$this->input->post('doc_class'),
                );
        $this->db->update($this->table_doc_class,$updated_doc_class);
	}

	function delete_doc_class($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table_doc_class);
    }

	function add_document() {
		$document = array(



			);
		$this->db->insert($this->$table_document, $document);
	}
}