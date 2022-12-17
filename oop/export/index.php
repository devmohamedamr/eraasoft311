<?php

include "export/export.php";
include "export/contracts/type.php";
include "export/types/pdf.php";
include "export/types/word.php";
include "export/types/excel.php";


$e = new export("mohamed","excel");
$e->handle();