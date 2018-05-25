<?php
class eventulex_model extends CI_Model 
{
	public function muestraEventos() // Mostrar noticias
    {
    	//SELECT e.id, e.nombre, e.lugar, e.maps, e.fecha_ini, e.fecha_fin, e.aforo, e.descripcion, e.logo, c.nombre FROM evento e, categoria c WHERE e.categoria=c.id AND e.fecha_fin > CURRENT_DATE;

    	$this->db->select('e.id, e.nombre, e.lugar, e.maps, e.fecha_ini, e.fecha_fin, e.aforo, e.descripcion, e.logo, c.nombre as cat');
		$this->db->from('evento e, categoria c');
		$this->db->where('e.categoria=c.id');
		$this->db->where('e.fecha_fin > ' . date(time()));
		$this->db->order_by("e.fecha_ini ASC");
		
		return $this->db->get()->result();
    }

    public function fichaEvento($evento) // Mostrar datos evento seleccionado
    {
    	$this->db->select('e.id, e.nombre, e.lugar, e.maps, e.fecha_ini, e.fecha_fin, e.aforo, e.descripcion, e.logo, c.nombre as cat');
		$this->db->from('evento e, categoria c');
		$this->db->where('e.categoria=c.id');
		$this->db->where('e.id = ' . $evento);
		
		return $this->db->get()->result();
    }

    public function fichaEntradas($evento) // Mostrar entradas relacionadas al evento seleccionado
    {
    	//SELECT e.id, e.id_evento, e.precio, e.fecha_ini, e.fecha_fin, e.hora_ini, e.hora_fin, e.descripcion FROM entrada e WHERE e.id_evento=1 
    	$this->db->select('e.id, e.id_evento, e.precio, e.fecha_ini, e.fecha_fin, e.hora_ini, e.hora_fin, e.descripcion');
		$this->db->from('entrada e');
		$this->db->where('e.id_evento=' . $evento);
		
		return $this->db->get()->result();
    }
}