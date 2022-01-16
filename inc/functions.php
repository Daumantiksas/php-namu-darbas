<?php function saveMessage($data){
        
        $file = 'data/messages.txt';
        $content = file_get_contents($file);
        $formData = implode(', ', $data); //konvertuojam masyva i stringa
        $content .=$formData. "\n";
        file_put_contents($file, $content);
        echo "informacija issaugota";
    }
    function getData(){
        $messages = file_get_contents('data/messages.txt');
        $messages = explode("\n", $messages);   //konvertuojam i masyva is stringo
        return $messages;
    }

?>
