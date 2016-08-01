<?php

$subject="<tag>Hello\nWorld</tag>"; 
echo preg_match("/<tag>.*<\\/tag>/s", $subject);
