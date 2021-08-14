<?php
namespace Models;

use \Core\Model;

class Frente extends Model {

	public function getAll()
	{
		$array = array();

		$sql = "SELECT * FROM fronts WHERE status = 0";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $array;
    }

    public function getAllFrontInativas()
	{
		$array = array();

		$sql = "SELECT * FROM fronts WHERE status = 1";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

    public function saveFrente($front, $status)
	{
		$sql ="INSERT INTO fronts SET front = :f, status = :s";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':f', $front);	
		$sql->bindValue(':s', $status);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
			set_flash('success','Frente Cadastrada Com Sucesso.');
		} else {
			set_flash('error','Erro ao Cadastrar Frente.');
		}
    }

    public function editFront($front, $status, $id)
	{
		$sql ="UPDATE fronts SET front = :f, status = :s WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':f', $front);		
		$sql->bindValue(':s', $status);	
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			set_flash('success','Frente Editada Com Sucesso.');
		} else {
			set_flash('error','Erro ao Editar Frente.');
		}
	}

    public function getFrontId($id)
	{
		$array = array();

		$sql ="SELECT * FROM fronts WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();
		
		if($sql->rowCount() > 0) {
		   $array = $sql->fetch(\PDO::FETCH_ASSOC);	
		}

		return $array;
	}
    
    public function toggleStatus($front)
	{
		$sql ="UPDATE fronts SET status = 1 - status WHERE front = '$front'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			set_flash('success','Frente Inativada Com Sucesso.');
		} else {
			set_flash('error','Erro ao Inativar Frente.');
		}
    }
    
    public function toggleStatusActive($front)
	{
		$sql ="UPDATE fronts SET status = 0 WHERE front = '$front'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			set_flash('success','Frente Ativada Com Sucesso.');
		} else {
			set_flash('error','Erro ao Ativar Frente.');
		}
	}
}    