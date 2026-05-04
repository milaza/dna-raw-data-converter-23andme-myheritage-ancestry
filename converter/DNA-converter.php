<?php

class DNAconverter {
  // Properties
  public $filepath;
  public $userid;
  public $dna_array = array();
  private $con;
  private $addpage;
  private $space;

    // Create instance with connection
    public function __construct( $con )  {
        // Store connection in instance for later use
        $this->con = $con;
        $this->addpage = 1;
	$this->space = 0;
    }

  // Methods
  function set_filepath($filepath) {
    $this->filepath = $filepath;
  }

  function get_filepath() {
    return $this->filepath;
  }

  function read_file_to_array() {
        $arr = array();
	$handle = fopen($this->filepath, "r");
	if ($handle) {
	    $matches = array();
	    while (($line = fgets($handle)) !== false) {
		if(preg_match("/^chr([0-9]|1[0-9]|2[0-6])\s+(\d+)\s+rs(\d+)\s+([GATC])\s+([GATC]).*?([01])[\|\/]([01])/i", $line, $matches) == 1) {
  	           $arr[$matches[3]] = ($matches[6] > 0 ? $matches[5] : $matches[4]) . ($matches[7] > 0 ? $matches[5] : $matches[4]);
                }
		else if(preg_match("/.*rs(\d+).*?([GATC])\s*([GATC])/i", $line, $matches) == 1) {
		if ($matches[1] > 0)  	           
		$arr[$matches[1]] = $matches[2] . ($matches[3] != '' ? $matches[3] : $matches[2]);
                }
	    }
       fclose($handle);
       $this->dna_array = $arr;
       return true;
       }
       else return false;
  }

  function read_file_to_convert_array() {
        $arr = array();
	$handle = fopen($this->filepath, "r");
	if ($handle) {
	    $matches = array();
	    while (($line = fgets($handle)) !== false) {
		if(preg_match("/.*rs(\d+)[^\d]+?([0-9]|1[0-9]|2[0-6])[^\d]+(\d+).+?([GATC-])(?:\s+)?([GATC-])?/i", $line, $matches) == 1) {
  	           $arr[] = array($matches[1], $matches[2], $matches[3], $matches[4], $matches[5]);
                }
		else if(preg_match("/.*rs(\d+)[^\d]+?([XY]{1,2})[^\d]+(\d+).+?([GATC-])(?:\s+)?([GATC-])?/i", $line, $matches) == 1) {
  	           $arr[] = array($matches[1], $matches[2], $matches[3], $matches[4], $matches[5]);
                }
		else if(preg_match("/^chr([0-9]|1[0-9]|2[0-6])\s+(\d+)\s+rs(\d+)\s+([GATC])\s+([GATC]).*?([01])[\|\/]([01])/i", $line, $matches) == 1) {
  	           $arr[] = array($matches[3], $matches[1], $matches[2], ($matches[6] > 0 ? $matches[5] : $matches[4]), ($matches[7] > 0 ? $matches[5] : $matches[4]), $matches[6], $matches[7]);
                }
	    }
        fclose($handle);
	if (count($arr) > 0 ) {       
	$this->dna_array = $arr;	
	return true;
	}
	else return false;
       }
       else return false;
  }

  function get_dna_array() {
    return $this->dna_array;
  }

  function get_converter_file($to) {
    
    $header = file_get_contents("./inc/files/" . $to . ".h");

    $file = fopen("./download/cnvrt" . $this->userid,"w+");
    fwrite($file, $header);

	switch ($to) {

	    case '23andme':
		    foreach($this->dna_array as $data){                    
			fwrite($file,'rs' . $data[0]. "\t" . $data[1] . "\t" . $data[2]. "\t" . $data[3] . $data[4] . PHP_EOL);
		    }
            break;
	    
	    case 'ancestry':
		    foreach($this->dna_array as $data){                    
			fwrite($file,'rs' . $data[0]. "\t" . $data[1] . "\t" . $data[2]. "\t" . $data[3] . "\t" . $data[4] . PHP_EOL);
		    }
	    break;

	    case 'family':
		    foreach($this->dna_array as $data){                    
			fwrite($file,'rs' . $data[0]. "," . $data[1] . "," . $data[2]. "," . $data[3] . ($data[4] == '' ? $data[3] : $data[4]) . PHP_EOL);
		    }
	    break;

	    case 'heritage':
		    foreach($this->dna_array as $data){                    
			fwrite($file,'"rs' . $data[0]. '","' . $data[1] . '","' . $data[2]. '","' . $data[3] . ($data[4] == '' ? $data[3] : $data[4]) . '"' . PHP_EOL);
		    }
	    break;

	}
        fclose($file);
        return true;
  }

       }

}
?>
