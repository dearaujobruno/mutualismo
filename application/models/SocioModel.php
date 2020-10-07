<?php

class SocioModel extends CI_Model
{
    
    public function adicionar_socio($nome,$sexo, $profissao, $imigrante, $elite, $data_entrada, $data_saida)
    {
        $data = array(
        'nome_socio' => $nome,
        'sexo_socio' => $sexo,
        'profissao_socio' => $profissao,
        'imigrante_socio' => $imigrante,
        'elite_socio' => $elite,
        'data_entrada' => $data_entrada,
        'data_saida' => $data_saida

        );

        $this->db->insert('socios', $data);
        unset($data);
    }

    public function listar_socio() {
        $query = $this->db->query('SELECT id_socio, nome_socio FROM socios');
        return $query;
    }


}