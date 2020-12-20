<?php 
use GuzzleHttp\Client;
class Kursi_model extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/CI-REST-BUS/api/',
           
         ]);
    }


    public function getAllKursi()
    {
       
        $response = $this->_client->request('GET', 'kursi', [
            'query' => [
                'X-API-KEY' => 'agung'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
        //return $this->db->get('bus')->result_array();
    }

    public function getKursiById($id_kursi)
    {
        $response = $this->_client->request('GET', 'kursi', [
            'query' => [
                'X-API-KEY' => 'agung',
                'id_kursi' => $id_kursi
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
        // return $this->db->get_where('bus', ['id_bus' => $id_bus])->row_array();
    }


    public function tambahDataKursi()
    {
   
        $data = [
            'id_kursi' =>$this->input->post('id_kursi', true),
            'kode_kursi' =>$this->input->post('kode_kursi', true),
            'urutan' =>$this->input->post('urutan', true),
            'X-API-KEY' => 'agung'
        ];
        $response = $this->_client->request('POST', 'kursi', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

        // $this->db->insert('bus', $data);
    }

    public function hapusDataKursi($id_kursi)
    {
        $response = $this->_client->request('DELETE', 'kursi', [
            'form_params' => [
                'id_kursi' => $id_kursi,
                'X-API-KEY' => 'agung'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
        
        
        // $this->db->where('id', $id);
        //$this->db->delete('bus', ['id_bus' => $id_bus]);
    }

    

    public function ubahDataKursi()
    {
        $data = [
            'id_kursi' =>$this->input->post('id_kursi', true),
            'kode_kursi' =>$this->input->post('kode_kursi', true),
            'urutan' =>$this->input->post('urutan', true),
            'X-API-KEY' => 'agung'
        ];

        $response = $this->_client->request('PUT', 'kursi', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

        // $this->db->where('id_bus', $this->input->post('id_bus'));
        // $this->db->update('bus', $data);
    }

    
}