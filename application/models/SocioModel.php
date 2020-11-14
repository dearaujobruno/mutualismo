<?php

class SocioModel extends CI_Model
{
    
    public function adicionar_socio($nome, $sexo, $profissao, $tipo, $imigrante, $elite, $data_entrada, $data_saida, $observacao)
    {
        $data = array(
        'nome_socio' => $nome,
        'sexo_socio' => $sexo,
        'profissao_socio' => $profissao,
        'tipo_profissao_socio' => $tipo,
        'imigrante_socio' => $imigrante,
        'elite_socio' => $elite,
        'data_entrada' => $data_entrada,
        'data_saida' => $data_saida,
        'observacao' => $observacao

        );

        $this->db->insert('socios', $data);
        unset($data);
    }

    public function listar_socio() {
        $query = $this->db->query("SELECT id_socio, nome_socio, sexo_socio, profissao_socio, tipo_profissao_socio, imigrante_socio, elite_socio, DATE_FORMAT(data_entrada, '%d/%m/%Y') as data_entrada, DATE_FORMAT(data_saida, '%d/%m/%Y') as data_saida, observacao FROM socios ORDER BY nome_socio, data_entrada ASC");
        return $query;
    }

    public function deletar_socio($id_socio) {
        $this->db->delete('conta_corrente', array('id_socio' => $id_socio));
        $this->db->delete('socios', array('id_socio' => $id_socio));

    }


}