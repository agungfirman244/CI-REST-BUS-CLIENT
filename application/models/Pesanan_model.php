<?php 
use GuzzleHttp\Client;
class Pesanan_model extends CI_model {
    
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/CI-REST-BUS/api/',
           
         ]);
    }


    public function getAllPesanan()
    {
       
        $response = $this->_client->request('GET', 'pesanan', [
            'query' => [
                'X-API-KEY' => 'agung'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'];
        //return $this->db->get('bus')->result_array();
    }

    public function getPesananById($id_pesan)
    {
        $response = $this->_client->request('GET', 'pesanan', [
            'query' => [
                'X-API-KEY' => 'agung',
                'id_pesan' => $id_pesan
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
        // return $this->db->get_where('bus', ['id_bus' => $id_bus])->row_array();
    }


    public function tambahDataPesanan()
    {
   
        $data = [
            'id_pesan' =>$this->input->post('id_pesan', true),
            'id_keberangkatan' =>$this->input->post('id_keberangkatan', true),
            'id_kursi' =>$this->input->post('id_kursi', true),
            'nama' =>$this->input->post('nama', true),
            'alamat' =>$this->input->post('alamat', true),
            'no_hp' =>$this->input->post('no_hp', true),
            'tanggal_pesan' =>$this->input->post('tanggal_pesan', true),
            'X-API-KEY' => 'agung'
        ];
        $response = $this->_client->request('POST', 'pesanan', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

        // $this->db->insert('bus', $data);
    }

    public function hapusDataPesanan($id_pesan)
    {
        $response = $this->_client->request('DELETE', 'pesanan', [
            'form_params' => [
                'id_pesan' => $id_pesan,
                'X-API-KEY' => 'agung'
                
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
        
        
        // $this->db->where('id', $id);
        //$this->db->delete('bus', ['id_bus' => $id_bus]);
    }

    

    public function ubahDataPesanan()
    {
        $data = [
            'id_pesan' =>$this->input->post('id_pesan', true),
            'id_keberangkatan' =>$this->input->post('id_keberangkatan', true),
            'id_kursi' =>$this->input->post('id_kursi', true),
            'nama' =>$this->input->post('nama', true),
            'alamat' =>$this->input->post('alamat', true),
            'no_hp' =>$this->input->post('no_hp', true),
            'tanggal_pesan' =>$this->input->post('tanggal_pesan', true),
            'X-API-KEY' => 'agung'
        ];

        $response = $this->_client->request('PUT', 'pesanan', [
            'form_params' => $data]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result; 

        // $this->db->where('id_bus', $this->input->post('id_bus'));
        // $this->db->update('bus', $data);
    }

  
}