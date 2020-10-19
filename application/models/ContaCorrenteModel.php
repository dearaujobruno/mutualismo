<?php

class ContaCorrenteModel extends CI_Model
{
    
    public function adicionar_contacorrente($deve, $haver, $data_pagamento, $total_servicos, $todos_servicos, $complemento, $id_socio)
    {
        $data = array(
        'deve' => $deve,
        'haver' => $haver,
        'data_pagamento' => $data_pagamento,
        'total_servicos' => $total_servicos,
        'todos_servicos' => $todos_servicos,
        'complemento' => $complemento,
        'id_socio' => $id_socio

        );

        $this->db->insert('conta_corrente', $data);
        unset($data);
    }

    public function listar_contacorrente() {
        $query = $this->db->query("SELECT socios.nome_socio, conta_corrente.deve, conta_corrente.haver, DATE_FORMAT(conta_corrente.data_pagamento, '%d/%m/%Y') as data_pagamento, conta_corrente.total_servicos, conta_corrente.todos_servicos, conta_corrente.complemento FROM socios INNER JOIN conta_corrente ON socios.id_socio = conta_corrente.id_socio;");
        return $query;
    }


}