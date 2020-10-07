<?php

class ContaCorrenteModel extends CI_Model
{
    
    public function adicionar_contacorrente($deve, $haver, $data_pagamento, $id_socio)
    {
        $data = array(
        'deve' => $deve,
        'haver' => $haver,
        'data_pagamento' => $data_pagamento,
        'id_socio' => $id_socio

        );

        $this->db->insert('conta_corrente', $data);
        unset($data);
    }

    public function listar_contacorrente() {
        $query = $this->db->query('SELECT deve, haver, data_pagamento FROM conta_corrente');
        return $query;
    }


}