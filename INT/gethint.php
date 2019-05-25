<?php
// Vargu me emrat e brendeve
$a[] = "Swarowski";
$a[] = "Pandora";
$a[] = "Oliver Weber";
$a[] = "Diamond";
$a[] = "Rose";
$a[] = "Chopard";
$a[] = "Mikimoto";
$a[] = "Bvlgari";
$a[] = "Inga";
$a[] = "Piaget";
$a[] = "Graff";
$a[] = "Tiffany&Co.";
$a[] = "Buccellati";
$a[] = "Van Cleef";
$a[] = "Cartier";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Harry Winston";
$a[] = "Moon Shine Pearl";
$a[] = "Adina Reyter";
$a[] = "Evita";
$a[] = "Brinker & Eliza";
$a[] = "NordStrom";
$a[] = "Stoneandstrand";
$a[] = "Violet";
$a[] = "Modaoperandi";
$a[] = "Elizabeth";
$a[] = "Mejuri";
$a[] = "Maison Miru";
$a[] = "Baublebar";

// merret parametri q nga URL
$q = $_REQUEST["q"];

$hint = "";


//Kontrollon te gjitha hintat e vargut ne qofte se $q eshte e ndryshme prej ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}


//Printimi "nuk ka sugjerime" ne qofte se nuk eshte gjetur asnje hint 
echo $hint === "" ? "no suggestion" : $hint;
?>