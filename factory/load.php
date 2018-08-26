<?php

foreach (glob("Misc/*.php") as $file)  {
    include $file;
}

foreach (glob("Factories/Text/*.php") as $file)  {
    include $file;
}

foreach (glob("Factories/Text/Adapters/*.php") as $file)  {
    include $file;
}