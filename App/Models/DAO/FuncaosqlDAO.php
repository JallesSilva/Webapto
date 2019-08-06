<?php 

use App\Models\DAO\BaseDAO;

class FuncaosqlDAO extends BaseDAO{

public function INSERT($objeto){
		$sql = "INSERT INTO ".$objeto->tabela." (";
		for ($i=0; $i<count($objeto->campos_valores); $i++) { 
			$sql .= key($objeto->campos_valores);
			if ($i < (count($objeto->campos_valores)-1)) {
				$sql .=", ";
			}else{
				$sql .= ") ";
			}
			next ($objeto->campos_valores);
		}
		reset($objeto->campos_valores);
		$sql .= "VALUES (";
		for ($i=0; $i<count($objeto->campos_valores); $i++) {
		    $sql .= is_numeric($objeto->campos_valores[key($objeto->campos_valores)]) ?
		      $objeto->campos_valores[key($objeto->campos_valores)] :
		      "'".$objeto->campos_valores[key($objeto->campos_valores)]."'";
		    if ($i < (count($objeto->campos_valores)-1)) {
		        $sql .=", ";
		    }else{
		        $sql .= ") ";
		    }
		    next ($objeto->campos_valores);
		}		
		echo $sql;	
	}
	
	public function executaSQL($sql=NULL){
	    
	}
}	
?>