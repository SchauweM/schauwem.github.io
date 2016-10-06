<?php

  header('Content-type: application/json');

  $arr = array (
    "version" => "1.0.0",
    "longversion" => 10000,
    "released" => 1475779055,
    "updateurl" => ""
  );

  echo json_encode($arr);
?>
