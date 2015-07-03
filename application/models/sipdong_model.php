<?php
class Sipdong_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
		date_default_timezone_set('Asia/Jakarta');
		setlocale(LC_TIME, "id_ID");
	}
	public function cetak($xml, $template, $output) {
		$this->load->helper('file');
		if (!write_file('./../../sipdong/application/views/docx/' . $template . '.xml', $xml))
		{
			echo 'Gagal membuat file';
		}
		else
		{
			//Declare variables for file names.
			$xmlDataFile = 'c:/sipdong/application/views/docx/' . $template . '.xml';
			$xsltFile = 'c:/sipdong/application/views/docx/' . $template . '.xslt';
			$sourceTemplate = 'c:/sipdong/application/views/docx/' . $template . '.docx';
			$outputDocument = 'c:/sipdong/application/views/docx/' . $output . '.docx';

			//Load the xml data and xslt and perform the transformation.
			$xmlDocument = new DOMDocument();
			$xmlDocument->load($xmlDataFile);
			$xsltDocument = new DOMDocument();
			$xsltDocument->load($xsltFile);
			$xsltProcessor = new XSLTProcessor();
			$xsltProcessor->importStylesheet($xsltDocument);

			//After the transformation, $newContentNew contains
			//the XML data in the Open XML Wordprocessing format.
			$newContent = $xsltProcessor->transformToXML($xmlDocument);

			//Copy the Word 2007 template document to the output file.
			if (copy($sourceTemplate, $outputDocument)) {
				//Open XML files are packaged following the Open Packaging
				//Conventions and can be treated as zip files when
				//accessing their content.
				$zipArchive = new ZipArchive();
				$zipArchive->open($outputDocument);
				//Replace the content with the new content created above.
				//In the Open XML Wordprocessing format content is stored
				//in the document.xml file located in the word directory.
				$zipArchive->addFromString("word/document.xml", $newContent);
				$zipArchive->close();
			}
			$this->load->helper('download');
			$data = file_get_contents('c:/sipdong/application/views/docx/' . $output . '.docx'); // Read the file's contents
			$name = $output . '.docx';
			force_download($name, $data); 
		}
	}
	public function formatTanggal($tglMySQL)
	{
		if (strlen($tglMySQL) != 10) {
			return $tglMySQL;
		}
		return strftime('%d/%m/%Y', strtotime($tglMySQL));
	}
	public function formatNPWP($npwp)
	{
		if (strlen($npwp) != 15) {
			return $npwp;
		}
		return substr($npwp, 0, 2) . '.' . substr($npwp, 2, 3) . '.' . substr($npwp, 5, 3) . '.' . substr($npwp, 8, 1) . '-' . substr($npwp, 9, 3) . '.' . substr($npwp, 12, 3);
	}
	public function formatNama($nama) {
		/*$nama = explode(' ', $nama);
		if(count($nama) > 2) {
			for ($i=2; $i<=count($nama)-1 ; $i++) { 
				$nama[$i] = substr($nama[$i], 0, 1) . '.';
			}
		}
		return ucwords(strtolower(implode(' ', $nama)));*/
		return ucwords(strtolower($nama));
	}
	public function toYmd($dmy) {
		return substr($dmy, 6, 4) . '-' . substr($dmy, 3, 2) . '-' . substr($dmy, 0, 2);
	}
	public function namaPegawai($ip) {
		$query = $this->db->query("SELECT peg_nama FROM sip_peg WHERE peg_ip = " . $ip . ";");
		$nama = $query->row();
		if (!$nama) {
			return $ip;
		}
		return $this->formatNama($nama->peg_nama);
	}
	public function nipPegawai($ip) {
		$query = $this->db->query("SELECT peg_nip FROM sip_peg WHERE peg_ip = " . $ip . ";");
		$nip = $query->row();
		if (!$nip) {
			return $ip;
		}
		return $nip->peg_nip;
	}
}