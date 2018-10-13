<?php
class Helper extends CI_Model {

	public function getWorksheets(){
	  $query = $this->db->get('worksheet');
		$result = array();
		foreach ($query->result() as $row){
				$data = array(
					"id" => $row->id,
					"title" => $row->title,
					"description" => $row->description,
					"num_questions" => $this->getCountOfQuestionsForWorksheet($row->id)
				);
				$result[] = $data;
		}
	  return $result;
  }

	public function getCountOfQuestionsForWorksheet($worksheet_id){
			$this->db->select('*')->from('WorksheetToQuestion')
                ->where('worksheetId', $worksheet_id);
			return $this->db->count_all_results();
	}
}
