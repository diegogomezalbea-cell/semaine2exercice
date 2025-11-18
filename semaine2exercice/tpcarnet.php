<?php
$contact = ["Alice Dupont", "John Doe", "Jean Martin", "Marie Curie"];
 
$existants = file("contact.txt", FILE_IGNORE_NEW_LINES);
 
foreach ($contact as $c) {
    if (!in_array($c, $existants)) {
        $existants[] = $c;
    }
}
 
file_put_contents("contact.txt", implode("\n", $existants));
 
echo "Contacts mis à jour avec succès. <br>";
$contact_fini = file_get_contents("contact.txt");
echo "\nContenu du fichier contact.txt :\n" . $contact_fini;
?>