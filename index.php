<?php

$tags = explode(', ', "AI:EXAMP849U:5196476, Ready to Pick., rerun-order, Updated by VL OMNI.");
$tag = 'rerun-order';
if (in_array($tag, $tags)) {
  echo("found tag");
else {
  echo("not found");
}
var_dump( explode( ', ', $tags ) );
?>
