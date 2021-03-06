<?php defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *  Esse modelo possui uma serie de funções sob a relação de disciplinas.
   *  @author Caio de Freitas
   *  @since 2017/03/17
   */
  class Disciplina_model extends CI_Model {

    /**
      * Busca todas as disciplinas cadastradas na base de dados.
      * @author Caio de Freitas
      * @since 2017/03/17
      * @return Retorna um array com todas as disciplinas
      */
    public function getDisciplinas () {
        $result = $this->db->get('Disciplina');

        return $result->result_array(); // converte o objeto em um array
      }

    /**
      * Busca a disciplina a partir do ID
      * @author Caio de Freitas
      * @since 2017/03/17
      * @param INT $idDisciplina
      * @return Retorna um array que representa a tupla.
      */
    public function getDisciplinasById ($idDisciplina) {
      $this->db->where('idDisciplina', $idDisciplina);
      $result = $this->db->get('Disciplina');

      return $result->result_array();
    }

    /**
      * Insere uma nova disciplina na base de dados.
      * @author Caio de Freitas
      * @since 2017/03/17
      * @param Array $disciplina - array com os dados da disciplina
      * @return Retorna um boolean TRUE caso a inserção seja realizada com sucesso
      */
    public function insertDisciplina ($disciplina) {
      return $this->db->insert('Disciplina', $disciplina);
    }

    /**
      * Atualiza os dados de uma disciplina
      * @author Caio de Freitas
      * @since 2017/03/17
      * @param INT $idDisciplina - ID da disciplina
      * @return Retorna um boolean TRUE caso os dados sejam atualizados com sucesso
      */
    public function updateDisciplina ($idDisciplina, $disciplina) {
      $this->db->where('idDisciplina', $idDisciplina);
      $result = $this->db->update('Disciplina', $disciplina);

      return $result;
    }

    /**
      * Deleta uma disciplina.
      * @author Caio de Freitas
      * @since 2017/03/17
      * @param INT $idDisciplina - ID da disciplina
      * @return Retorna um boolean TRUE caso a disciplina seja deletada com sucesso
      */
    public function deleteDisciplina ($idDisciplina) {
      $this->db->where('idDisciplina', $idDisciplina);
      $result = $this->db->delete('Disciplina');

      return $result;
    }

  }


?>
