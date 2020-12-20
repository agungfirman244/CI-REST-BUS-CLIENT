<?php 
use GuzzleHttp\Client;
class Keberangkatan_model extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/CI-REST-BUS/api/',
           
         ]);
    }


    public function getAllKeberangkatan()
    {
       
        $response = $this->_client->request('GET', 'keberangkatan', [
            'query' => [
                'X-API-KEY' => 'agung'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
        //return $this->db->get('bus')->result_array();
    }

    public function getKeberangkatanById($id_keberangkatan)
    {
        $response = $this->_client->request('GET', 'keberangkatan', [
            'query' => [
                'X-API-KEY' => 'agung',
                'id_keberangkatan' => $id_keberangkatan
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
        
    }


    public function tambahDataKeberangkatan()
    {
   
        $data = [
            'id_keberangkatan' =>$this->input->post('id_keberangkatan', true),
            'id_bus' =>$this->input->post('id_bus', true),
            'tujuan' =>$this->input->post('tujuan', true),
            'tanggal_keberangkatan' =>$this->input->post('tanggal_keberangkatan', true),
            'jam_keberangkatan' =>$this->input->post('jam_keberangkatan', true),
            'rute_awal' =>$this->input->post('rute_awal', true),
            'rute_tujuan' =>$this->input->post('rute_tujuan', true),
            'harga' =>$this->input->post('harga', true),
            'X-API-KEY' => 'agung'
        ];
        $response = $this->_client->request('POST', 'keberangkatan', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

        // $this->db->insert('bus', $data);
    }

    public function hapusDataKeberangkatan($id_keberangkatan)
    {
        $response = $this->_client->request('DELETE', 'keberangkatan', [
            'form_params' => [
                'id_keberangkatan' => $id_keberangkatan,
                'X-API-KEY' => 'agung'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
        
        
        // $this->db->where('id', $id);
        //$this->db->delete('bus', ['id_bus' => $id_bus]);
    }

    

    public function ubahDataKeberangkatan()
    {
        $data = [
            'id_keberangkatan' =>$this->input->post('id_keberangkatan', true),
            'id_bus' =>$this->input->post('id_bus', true),
            'tujuan' =>$this->input->post('tujuan', true),
            'tanggal_keberangkatan' =>$this->input->post('tanggal_keberangkatan', true),
            'jam_keberangkatan' =>$this->input->post('jam_keberangkatan', true),
            'rute_awal' =>$this->input->post('rute_awal', true),
            'rute_tujuan' =>$this->input->post('rute_tujuan', true),
            'harga' =>$this->input->post('harga', true),
            'X-API-KEY' => 'agung'
        ];

        $response = $this->_client->request('PUT', 'keberangkatan', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

        // $this->db->where('id_bus', $this->input->post('id_bus'));
        // $this->db->update('bus', $data);
    }

  
}